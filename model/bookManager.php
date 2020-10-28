<?php
require_once "model/Manager.php";

class BookManager extends Manager {

  // Récupère tous les livres
  public function getBooks():?Array {
    $query = $this->db->query("SELECT * FROM Book");

    $books = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($books as $key => $book) {
      $books[$key] = new Book($book);
    }
    return $books;
  }

  // Récupère un livre
  public function getBook(int $id):?Book {
    $query = $this->db->prepare("SELECT * FROM Book WHERE id = :id");
    $query->execute([
      "id" => $id
    ]);

    // $book = new Book($query->fetch(PDO::FETCH_ASSOC));
    // return $book;

    $query->setFetchMode(PDO::FETCH_CLASS, 'Book');
    return $query->fetch();
  }

  // Ajoute un nouveau livre
  public function addBook(Book $book):?int {
    $query = $this->db->prepare(
      "INSERT INTO Book VALUE (null, :title, :author, :summary, :release_date, :category, 'disponible', null)"
      );
  
      $result = $query->execute([
        "title" => $book->getTitle(),
        "author" => $book->getAuthor(),
        "summary" => $book->getSummary(),
        "release_date" => $book->getRelease_date(),
        "category" => $book->getCategory()
      ]);  
      return $result;
  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus(int $id, string $status):?int {

  }

}


// try {
  //     $book = new Book($_POST);
  //     $book->;
  //   } catch (\Exception $e) {
  //     // Will store the different error messages
  //     $error = $e->getMessage();
  //   }
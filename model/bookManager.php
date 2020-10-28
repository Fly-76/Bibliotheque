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

  }

  // Met à jour le statut d'un livre emprunté
  public function updateBookStatus(int $id, string $status):?int {

  }

}
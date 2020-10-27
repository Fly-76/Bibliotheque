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
    $query = $this->db->prepare("SELECT * FROM User WHERE id = :id");
    $query->execute([
      "id" => $id
    ]);
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

/* from E:\Bibliotheque\Bibliotheque\banquephp\model

  public function getUserByMail(User $user):?User {
    $query = $this->db->prepare("SELECT * FROM User WHERE email = :email");
    $query->execute([
      "email" => $user->getEmail()
    ]);
    $query->setFetchMode(PDO::FETCH_CLASS, 'User');
    return $query->fetch();
  }

public function getAccounts(PDO $db, User $user):?Array {
  $query = $db->prepare(
    "SELECT a.id, a.amount, a.opening_date, a.account_type, o.amount AS operation_amount, o.registered, o.label
    FROM Account AS a
    LEFT JOIN Operation AS o
    ON a.id = o.account_id
    WHERE a.user_id = :user_id && (o.id = (
        SELECT MAX(o2.id)
        FROM Operation AS o2
        WHERE o2.account_id = a.id
      )OR o.id IS NULL)"
  );
  $query->execute([
    "user_id" => $user->getId()
  ]);
  $accounts = $query->fetchAll(PDO::FETCH_ASSOC);
  foreach ($accounts as $key => $account) {
    $accounts[$key] = new Account($account);
    if(!empty($account["operation_amount"]))
    $accounts[$key]->setLast_operation(new Operation($account));
  }
  return $accounts;
}
*/
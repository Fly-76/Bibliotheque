<?php
require_once "model/Manager.php";

class UserManager extends Manager {

  // Récupère tous les utilisateurs
  public function getUsers():?Array {
    $query = $this->db->query("SELECT * FROM User");

    $users = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach ($users as $key => $user) {
      $users[$key] = new User($user);
    }
    return $users;
  }

  // Récupère un utilisateur par son id
  public function getUserById(int $id):?User {
    $query = $this->db->prepare("SELECT * FROM User WHERE id = :id");
    $query->execute([
      "id" => $id
    ]);

    $user = new User($query->fetch(PDO::FETCH_ASSOC));
    return $user;
  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}

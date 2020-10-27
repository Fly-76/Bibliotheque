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
  public function getUserById() {

  }

  // Récupère un utilisateur par son code personnel
  public function getUser() {

  }
}

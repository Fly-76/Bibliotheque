<?php
// Classe pour se connecter à la base de données
abstract class Connexion {
  const HOST = "localhost";
  const DBNAME = "bibliotheque";
  const USER = "bibliothecaire";
  const PASSWORD = "biblio";

  public static function getPDOConnexion() {
    try {
      $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::DBNAME, self::USER, self::PASSWORD);
      return $db;
    } catch (\Exception $e) {
      echo "<br>Erreur lors de la connexion à la base de donée: " . $e->getMessage() . "<br>";
      die();
    }
  }
}

abstract class Manager {
  protected PDO $db;

  public function __construct() {
    $this->db = Connexion::getPDOConnexion();
  }
}

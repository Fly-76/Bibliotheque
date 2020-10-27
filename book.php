<?php
// Controleur qui gère l'affichage du détail d'un livre
require "model/entity/book.php";
require "model/entity/user.php";
require "model/bookManager.php";

if (empty($_GET) || !isset($_GET["id"])) {
  header("Location: index.php");
}

$id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
$bookManager = new BookManager();
$book = $bookManager->getBook($id);

if(!$book) {
  $error ="Livre non trouvé";
}

require "view/bookView.php";

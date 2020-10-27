<?php
// Controlleur qui gérer l'affichage de tous les livres
require "model/entity/book.php";
require "model/bookManager.php";

$bookManager = new BookManager();
$books = $bookManager->getBooks();

require "view/indexView.php";

<?php
// Controleur qui gère la l'ajout d'un livre
require "model/entity/book.php";
require "model/bookManager.php";

if(isset($_POST["add_book"])) {
    $bookManager = new BookManager();
    $book = new Book($_POST);
    $result = $bookManager->addBook($book);

    if($result) {
        header("Location: index.php");
        exit();
    }
    $error = "Une erreur est survenue, le livre n'a pas été enregistré";
}  

require "view/newBookView.php";



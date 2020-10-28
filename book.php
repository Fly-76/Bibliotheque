<?php
// Controleur qui gère l'affichage du détail d'un livre
require "model/entity/book.php";
require "model/entity/user.php";
require "model/bookManager.php";

// Emprunt de livre
if(isset($_POST["loan_book"])) {
    $bookManager = new BookManager();

    if (isset($_GET["id"]))
        $bookId = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);

    if (isset($_POST["user"])) {
        $userId = filter_var($_POST["user"], FILTER_SANITIZE_NUMBER_INT);
        $status = 'Emprunté';
    }

    $result = $bookManager->updateBookStatus($bookId, $status, $userId);

    if($result) {
        header("Location: index.php");
        exit();
    }
    $error = "Une erreur est survenue, le livre n'a pas pu être emprunté";
}

// Retour de livre
if(isset($_POST["return_book"])) {
    $bookManager = new BookManager();

    if (isset($_GET["id"]))
        $bookId = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);

    $result = $bookManager->updateBookStatus($bookId, 'Disponible', null);

    if($result) {
        header("Location: index.php");
        exit();
    }
    $error = "Une erreur est survenue, le livre n'a pas pu être restitué";
}

if (empty($_GET) || !isset($_GET["id"])) {
    header("Location: index.php");
}
$id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);

$bookManager = new BookManager();
$book = $bookManager->getBook($id);

$status = '';
if(!$book) {
    $error ="Livre non trouvé";
} else {
    $status = $book->getStatus();
}

require "view/bookView.php";

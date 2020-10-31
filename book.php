<?php
// Controleur qui gère l'affichage du détail d'un livre
require "model/entity/user.php";
require "model/userManager.php";

require "model/entity/book.php";
require "model/bookManager.php";

// !!! FIRST Check book id exist 
if (empty($_GET) || !isset($_GET["id"])) {
    header("Location: index.php");
    exit();
}
$bookId = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);
$bookManager = new BookManager();

try {
    // Emprunt de livre
    if(isset($_POST["loan_book"])) {
        global $bookManager, $bookId;

        if (isset($_POST["user"])) {
            $userId = filter_var($_POST["user"], FILTER_SANITIZE_NUMBER_INT);
            $userId = intval($userId,10);

            if (!$userId) throw new Exception(" N° adhérent non valide");

            $userManager = new UserManager();
            $user = $userManager->getUserById($userId);

            if(!$user) throw new Exception(" N° adhérent non valide");

            $result = $bookManager->updateBookStatus($bookId, 'Emprunté', $userId);

            if($result) {
                header("Location: index.php");
                exit();
            }
            throw new Exception("le livre n'a pas pu être emprunté");
        }
        throw new Exception("pas d'adhérent spécifié");
    }

    // Retour de livre
    if(isset($_POST["return_book"])) {
        global $bookManager, $bookId;

        $result = $bookManager->updateBookStatus($bookId, 'Disponible', null);
        if($result) {
            header("Location: index.php");
            exit();
        }
        throw new Exception("le livre n'a pas pu être restitué");
    }

    // Suppression de livre
    if(isset($_POST["delete_book"])) {
        global $bookManager, $bookId;

        $result = $bookManager->deleteBook($bookId);
        if($result) {
            header("Location: index.php");
            exit();
        }
        throw new Exception("le livre n'a pas pu être supprimé");
    }
}
catch (\Exception $e) {
    $error = "Une erreur est survenue, " . $e->getMessage();
}

$status = '';
$book = $bookManager->getBook($bookId);
if(!$book)
    $error ="Livre non trouvé";
else {
    $status = $book->getStatus();

    if ($status=='Emprunté') {
        $id = $book->getUser_id();
        $userManager = new UserManager();
        $user = $userManager->getUserById($id);
    }    
}

require "view/bookView.php";

<?php
    include "view/template/nav.php";
    include "view/template/header.php";
?>

    <p><?= $book->getTitle() ?></p>
    <p><?= $book->getAuthor() ?></p>
    <p><?= $book->getSummary() ?></p>
    <p><?= $book->getRelease_Date() ?></p>
    <p><?= $book->getCategory() ?></p>
    <p><?= $book->getStatus() ?></p>
    <p><?= $book->getUser_Id() ?></p>

<?php
    include "view/template/footer.php";
?>

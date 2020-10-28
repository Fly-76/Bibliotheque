<?php
    include "view/template/nav.php";
    include "view/template/header.php";

    require_once "view/formView.php";
    $form = new Form('','POST','form-inline');
	$form->setText('user', 'Adhérent');
    $form->setSubmit('add_book','Emprunter');
    $form->showForm();
?>

    <p><?= $book->getTitle() ?></p>
    <p><?= $book->getAuthor() ?></p>
    <p><?= $book->getSummary() ?></p>
    <p><?= $book->getRelease_Date() ?></p>
    <p><?= $book->getCategory() ?></p>
    <p><?= $book->getStatus() ?></p>


<?php
    include "view/template/footer.php";
?>

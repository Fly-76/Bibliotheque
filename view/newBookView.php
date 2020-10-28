<?php
    include "view/template/nav.php";
    include "view/template/header.php";

    require_once "view/formView.php";
    $form = new Form();
	$form->setText('title', 'Titre');
	$form->setText('author', 'Auteur');
	$form->setText('release_date', 'Date Parution');
	$form->setText('category', 'Catégorie');
	$form->setArea('summary', 'Résumé');
    $form->setSubmit('add_book','Enregistrer');
    $form->showForm();

    include "view/template/footer.php";
?>

<?php
    include "view/template/nav.php";
    include "view/template/header.php";

    require_once "view/formView.php";
    if ($status=='Disponible') {
        $form = new Form('','POST','form-inline');
        $form->setText('user', 'Adhérent');
        $form->setSubmit('loan_book','Emprunter');
        $form->showForm();
    }
    if ($status=='Emprunté') {
        $form = new Form('','POST','form-inline');
        $form->setSubmit('return_book','Rendre');
        $form->showForm();
    }    
?>

    <table class="table table-striped table-bordered table-sm">
        <tbody>
            <tr><th>Titre</th><td><?= $book->getTitle() ?></td></tr>
            <tr><th>Auteur</th><td><?= $book->getAuthor() ?></td></tr>
            <tr><th>Résumé</th><td><?= $book->getSummary() ?></td></tr>
            <tr><th>Date de parution</th><td><?= $book->getRelease_Date() ?></td></tr>
            <tr><th>Catégorie</th><td><?= $book->getCategory() ?></td></tr>
            <tr><th>Statut</th><td><?= $book->getStatus() ?></td></tr>
        </tbody>
    </table>

<?php
    include "view/template/footer.php";
?>

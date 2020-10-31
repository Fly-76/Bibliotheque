<?php
    include "view/template/nav.php";
    include "view/template/header.php";

    if(!empty($error)) echo "<div class='alert alert-danger'>$error</div>";
    else {


    require_once "view/formView.php";
    if ($status=='Disponible') {
        $form = new Form('','POST','form-inline');
        $form->setText('user', 'Adhérent');
        $form->setSubmit('loan_book','Emprunter');
        $form->setSubmit('delete_book','Supprimmer');
        $form->showForm();
    }
    if ($status=='Emprunté') {
        $form = new Form('','POST','form-inline');
        $form->setSubmit('return_book','Rendre');
        $form->showForm();
    }    
?>
    <div class="alert alert-primary" role="alert">
        <h5><td>LIVRE : <?= $book->getTitle() ?></h5>
    </div>

    <table class="table table-striped table-bordered table-sm">
        <tbody>
            <tr><th>Auteur</th><td><?= $book->getAuthor() ?></td></tr>
            <tr><th>Résumé</th><td><?= $book->getSummary() ?></td></tr>
            <tr><th>Date de parution</th><td><?= $book->getRelease_Date() ?></td></tr>
            <tr><th>Catégorie</th><td><?= $book->getCategory() ?></td></tr>
            <tr><th>Statut</th><td><?= $book->getStatus() ?></td></tr>
        </tbody>
    </table>

<?php
    if ($status=='Emprunté') {
?>

    <div class="alert alert-primary" role="alert">
        <h5><td>Emprunté par : <?= $user->getCivility() ?> <?= $user->getFirstname() ?> <?= $user->getLastname() ?></h5>
    </div>

    <table class="table table-striped table-bordered table-sm">
        <tbody>
            <tr><th>Email</th><td><?= $user->getEmail() ?></td></tr>
            <tr><th>Adresse</th><td><?= $user->getAdress() ?></td></tr>
            <tr><th>Code postal</th><td><?= $user->getZip_Code() ?></td></tr>
            <tr><th>Ville</th><td><?= $user->getCity() ?></td></tr>
        </tbody>
    </table>

<?php
    }  
?>

<?php
    } // end else if no error
    include "view/template/footer.php";
?>
<?php
    include "view/template/nav.php";
    include "view/template/header.php";
?>

<a href="newBook.php" class="btn btn-warning col-sm-2 my-2">Ajouter un livre</a>

<div class="alert alert-primary" role="alert">
    <h5>Liste des livres du catalogue</h5>
</div>

<table class="table table-striped table-bordered table-sm">
    <thead>
    <tr>
        <th class="th-sm">Titre</th>
        <th class="th-sm">Auteur</th>
        <th class="th-sm">Parution</th>
        <th class="th-sm">Catégorie</th>
        <th class="th-sm">Statut</th>
        <th class="th-sm">Adhérent</th>        
    </tr>
    </thead>
    <tbody>
        <?php foreach ($books as $key => $book) { ?>
            <tr>
                <td><a href="book.php?id=<?= $book->getId() ?>" >
                    <?= $book->getTitle() ?>
                </a></td>
                <td><?= $book->getAuthor() ?></td>
                <td><?= $book->getRelease_date() ?></td>
                <td><?= $book->getCategory() ?></td>
                <td><?= $book->getStatus() ?></td>
                <td><?= $book->getUser_id() ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    include "view/template/footer.php";
?>
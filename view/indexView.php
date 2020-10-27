<?php
    include "view/template/nav.php";
    include "view/template/header.php";
?>

<p>Vos livre au catalogue s'affichent sur cette page</p>

<table class="table table-striped table-bordered table-sm">
    <thead>
    <tr>
        <th class="th-sm">Titre</th>
        <th class="th-sm">Auteur</th>
        <th class="th-sm">Parution</th>
        <th class="th-sm">Catégorie</th>
        <th class="th-sm">Statut</th>
        <th class="th-sm">Utilisateur</th>        
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
                <td></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    include "view/template/footer.php";
?>
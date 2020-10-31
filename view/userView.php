<?php
    include "view/template/nav.php";
    include "view/template/header.php";
?>
    <div class="alert alert-primary" role="alert">
        <h5><td>Adhérent : <?= $user->getCivility() ?> <?= $user->getFirstname() ?> <?= $user->getLastname() ?></h5>
    </div>

    <table class="table table-striped table-bordered table-sm">
        <tbody>
            <tr><th>Email</th><td><?= $user->getEmail() ?></td></tr>
            <tr><th>Adresse</th><td><?= $user->getAdress() ?></td></tr>
            <tr><th>Code postal</th><td><?= $user->getZip_Code() ?></td></tr>
            <tr><th>Ville</th><td><?= $user->getCity() ?></td></tr>
        </tbody>
    </table>

    <div class="alert alert-primary" role="alert">
        <h5><?= count($books) ?> livres empruntés</h5>
    </div>

    <table class="table table-striped table-bordered table-sm">
        <thead>
        <tr>
            <th class="th-sm">Titre</th>
            <th class="th-sm">Auteur</th>
            <th class="th-sm">Parution</th>
            <th class="th-sm">Catégorie</th>
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
                </tr>
            <?php } ?>
        </tbody>
    </table>

<?php
    include "view/template/footer.php";
?>

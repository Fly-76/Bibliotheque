<?php
    include "view/template/nav.php";
    include "view/template/header.php";
?>

<p>Vos utilisateurs en base de données s'affichent sur cette page</p>

<table class="table table-striped table-bordered table-sm">
    <thead>
        <tr>
            <th class="th-sm">Nom</th>
            <th class="th-sm">Email</th>
            <th class="th-sm">Adresse</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($users as $key => $user) { ?>
            <tr>
            <td><a href="user.php?id=<?= $user->getId() ?>" >
                <?= $user->getCivility() . " " . $user->getFirstname() . " " . $user->getLastname() ?>
            </a></td>
            <td><?= $user->getEmail() ?></td>
            <td><?= $user->getAdress() . " " . $user->getZip_code() . " " . $user->getCity() ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    include "view/template/footer.php";
?>
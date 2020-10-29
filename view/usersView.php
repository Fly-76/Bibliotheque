<?php
    include "view/template/nav.php";
    include "view/template/header.php";
?>

<a href="newUser.php" class="btn btn-warning col-sm-2 my-2">Ajouter un adhérent</a>

<div class="alert alert-primary" role="alert">
  <h5>Liste des adhérents</h5>
</div>


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
            <td>
                <a href="user.php?id=<?= $user->getId() ?>" >
                    <?= $user->getCivility() . " " . $user->getFirstname() . " " . $user->getLastname() ?>
                </a>
            </td>
            <td><?= $user->getEmail() ?></td>
            <td><?= $user->getAdress() . " " . $user->getZip_code() . " " . $user->getCity() ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<?php
    include "view/template/footer.php";
?>
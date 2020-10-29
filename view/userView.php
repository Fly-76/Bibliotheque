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

<?php
    include "view/template/footer.php";
?>

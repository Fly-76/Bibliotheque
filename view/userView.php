<?php
    include "view/template/nav.php";
    include "view/template/header.php";
?>

    <table class="table table-striped table-bordered table-sm">
        <tbody>
            <tr><th>Civilité</th><td><?= $user->getCivility() ?></td></tr>
            <tr><th>Nom</th><td><?= $user->getLastname() ?></td></tr>
            <tr><th>Prénom</th><td><?= $user->getFirstname() ?></td></tr>
            <tr><th>Email</th><td><?= $user->getEmail() ?></td></tr>
            <tr><th>Adresse</th><td><?= $user->getAdress() ?></td></tr>
            <tr><th>Code postal</th><td><?= $user->getZip_Code() ?></td></tr>
            <tr><th>Ville</th><td><?= $user->getCity() ?></td></tr>
        </tbody>
    </table>

<?php
    include "view/template/footer.php";
?>

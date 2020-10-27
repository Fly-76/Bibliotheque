<?php
    include "view/template/nav.php";
    include "view/template/header.php";
?>

    <p><?= $user->getCivility() ?></p>
    <p><?= $user->getLastname() ?></p>
    <p><?= $user->getFirstname() ?></p>
    <p><?= $user->getEmail() ?></p>
    <p><?= $user->getAdress() ?></p>
    <p><?= $user->getZip_Code() ?></p>
    <p><?= $user->getCity() ?></p>

<?php
    include "view/template/footer.php";
?>

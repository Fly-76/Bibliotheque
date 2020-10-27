<?php
// Controleur qui gère l'affichage de tous les utilisateurs
require "model/entity/user.php";
require "model/userManager.php";

$userManager = new UserManager();
$users = $userManager->getUsers();

require "view/usersView.php";

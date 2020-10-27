<?php
// Controleur qui gère l'affichage du détail d'un utilisateur
require "model/entity/user.php";
require "model/userManager.php";

if (empty($_GET) || !isset($_GET["id"])) {
  header("Location: index.php");
}

$id = filter_var($_GET["id"], FILTER_SANITIZE_NUMBER_INT);

$userManager = new UserManager();
$user = $userManager->getUser($id);

if(!$user) {
  $error ="Utilisateur non trouvé";
}

require "view/userView.php";

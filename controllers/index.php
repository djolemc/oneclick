<?php require '../config/init.php';
include '../templates/includes/header.php';
include '../templates/includes/nav_menu.php';




$db= new Database();
$profile = new Profile($db);

$profiles = $profile->readAllProfiles();

$template = new Template("../templates/index.php");

$template->profiles = $profiles;

echo $template;
include '../templates/includes/footer.php';
?>
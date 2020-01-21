<?php require '../config/init.php';
include '../templates/includes/header.php';
include '../templates/includes/nav_menu.php';




$db= new Database();


$template = new Template("../templates/index.php");



echo $template;
include '../templates/includes/footer.php';
?>
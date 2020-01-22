<?php
require '../config/init.php';
include '../templates/includes/header.php';
include '../templates/includes/nav_menu.php';


$db = new Database();

$id = $_GET['id'];




$comment = new Comment($db);
$comments = $comment->getAllComments($id);



$template = new Template("../templates/admin_comments.php");

$template->comments = $comments;

echo $template;

include '../templates/includes/footer.php';
?>





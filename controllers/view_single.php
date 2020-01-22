<?php require '../config/init.php';
include '../templates/includes/header.php';
include '../templates/includes/nav_menu.php';



$db= new Database();
$profile = new Profile($db);
$comment = new Comment($db);


$id=$_GET['id'];

$profile = $profile->getSingleProfile($id);
$comments = $comment->getAllComments($id);

$template = new Template("../templates/view_single.php");

$template->comments = $comments;
$template->profile = $profile;

echo $template;
include '../templates/includes/footer.php';
?>
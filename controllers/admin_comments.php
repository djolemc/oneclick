<?php
require '../config/init.php';
include '../templates/includes/header.php';
include '../templates/includes/nav_menu.php';


$db = new Database();
$id = $_GET['id'];



$comment = new Comment($db);
$comments = $comment->getAllComments($id);

/*
 * Broji koliko ima komentara koji nisu odobreni
 */
$countComments=0;
foreach ($comments as $comment) {
    if ($comment->is_enabled==0) {
        $countComments++;
    }
}


$template = new Template("../templates/admin_comments.php");

$template->comments = $comments;
$template->countComments = $countComments;

echo $template;

include '../templates/includes/footer.php';
?>





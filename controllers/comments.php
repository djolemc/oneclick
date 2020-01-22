<?php require '../config/init.php';
include '../templates/includes/header.php';
include '../templates/includes/nav_menu.php';




$db= new Database();



/*
 * Upisuje nov komentar u bazu
 */
if (isset($_POST['dodaj_komentar'])) {
    $id=$_POST['profile_id'];
    $comment = new Comment($db);
    $comment->insertComment();
    $_SESSION['msg']='Uspešno ste dodali komentar!';
    header("location:view_single.php?id=$id");
}


/*
 * Odobrava prikazivanje komentara na profilu
 */
if (isset($_POST['enable_comment'])) {
    $comment_id=$_POST['comment_id'];
    $profile_id=$_POST['profile_id'];
    $comment = new Comment($db);
    $comment->enableComment($comment_id);
    header("location:admin_comments.php?id=$profile_id");
}

/*
 * Brise komentar iz baze
 */

if (isset($_POST['delete_comment'])) {
    $comment_id=$_POST['comment_id'];
    $profile_id=$_POST['profile_id'];
    $comment = new Comment($db);
    $comment->deleteComment($comment_id);
    header("location:admin_comments.php?id=$profile_id");
}



include '../templates/includes/footer.php';
?>
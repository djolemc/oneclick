<?php require '../config/init.php';


$db = new Database();
$profile = new Profile($db);

$msg = '';


/*
 * Brise profil iz baze
 */

if (isset($_POST['name'])) {
    $id = $_POST['id'];
    $profile->deleteProfile($id);
    $msg = "Uspešno ste obrisali profil";
    echo $msg;
    die();
}




if (isset($_POST['insert_profile'])) {
    $price = $_POST['price'];
    $description = $_POST['description'];
    $profile->insertProfile($price, $description);
    $msg = "Uspešno ste uneli nov profil";
}


$profiles = $profile->readAllProfiles();
$template = new Template("../templates/admin.php");
$template->msg = $msg;
$template->profiles = $profiles;

include '../templates/includes/header.php';
include '../templates/includes/nav_menu.php';
echo $template;
unset($msg);

include '../templates/includes/footer.php';
?>
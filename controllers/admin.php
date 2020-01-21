<?php require '../config/init.php';


$db = new Database();
$profile = new Profile($db);
$template = new Template("../templates/admin.php");
$msg = '';


/*
 * Brise profil iz baze
 */



if (isset($_GET['action'])) {
    $id = $_GET['id'];
    $profile->deleteProfile($id);
    $msg = "Uspešno ste obrisali profil";
    echo $msg;

}

if (isset($_GET['update'])) {
    $id = $_GET['id'];
    $singleProfile = $profile->getSingleProfile($id);
    var_dump($singleProfile);

    $template->singleProfile = $singleProfile;


}





if (isset($_POST['insert_profile'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $profile->insertProfile($name, $price, $description);
    $msg = "Uspešno ste uneli nov profil";
}


$profiles = $profile->readAllProfiles();

$template->msg = $msg;
$template->profiles = $profiles;

include '../templates/includes/header.php';
include '../templates/includes/nav_menu.php';
echo $template;
unset($msg);

include '../templates/includes/footer.php';
?>
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

}

/*
 * Cita jedan profil iz baze i prosledjuje na template
 */

if (isset($_GET['update'])) {
    $id = $_GET['id'];
    $singleProfile = $profile->getSingleProfile($id);
    $template->singleProfile = $singleProfile;
}


/*
 * Snima nov profil u bazu
 */
if (isset($_POST['insert_profile'])) {
    $profile->insertProfile();
    $msg = "Uspešno ste uneli nov profil";
}


/*
 * Snima izmenjen profil u bazu

 */
if (isset($_POST['update_profile'])) {
    $profile_id = $_POST['profile_id'];
    $profile->updateProfile($profile_id);
    $msg = "Uspešno ste izmenili profil";
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
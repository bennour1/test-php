<?php
//le formulaire a til ete envoyé
$isPosted = filter_has_var("submit");

if($isPosted){
    //recuperation des donnees de l'upload
    $upload= $_FILES ["photo"];

    //definition de lextention du fichier
    $extension = explode("/", $upload["type"])[1];
    
    //le chemin de stockage de l'image
    $imageFolder = ROOT_PATH . "/www/images/";
    //nom de l'image
    $fileName =uniqid("photos_") . "." . $extension;

    //deplacement du fichier temporaire
    if(move_uploaded_file($upload["tmp_name"],$imageFolder.$fileName)) {
        $_SESSION["message"] = "téléchargement terminé";
    } else {
        $_SESSION["message"] = "Echec du téléchargement";
    }
    
}

var_dump ($_POST);
var_dump ($_FILES);

$title = "Ma photo";
$viewName = "upload";

require VIEW_PATH . "/gabarit.php";
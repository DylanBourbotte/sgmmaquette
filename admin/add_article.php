<?php 
require('../includes/config.php');
require('auth_verification.php');

$name = htmlspecialchars($_POST['name']);
$modele = htmlspecialchars($_POST['modele']);
$annees = htmlspecialchars($_POST['years']);
$kilometrage = htmlspecialchars($_POST['kilometrage']);
$type = htmlspecialchars($_POST['type']);
$hours = htmlspecialchars($_POST['hours']);
$prix = htmlspecialchars($_POST['prix']);
$page = $_POST['page'];
$materiel = $_POST['materiel'];
// $img = "1";

if(isset($_FILES['image']) AND !empty($_FILES['image']['name'])) {
    $tailleMax = 2097152;
    $extensionsValides = array('jpg', 'jpeg', 'png');
    if($_FILES['image']['size'] <= $tailleMax) {
        $extensionsUpload = strtolower(substr(strrchr($_FILES['image']['name'], '.'), 1));
        if(in_array($extensionsUpload, $extensionsValides)) {
            $chemin = "img/".$prix.".".$extensionsUpload;
            $resultat = move_uploaded_file($_FILES['image']['tmp_name'], $chemin);
            if($resultat)
            $img = $chemin;
            {
                if(isset($_POST['send'])) {
                    $req = $bdd->prepare("INSERT INTO nouveaute (nameproduct, modele, categorie, materiel, yearproduct, kilometrage, typeproduct, hoursproduct, price, img) VALUES ('$name', '$modele', '$page', '$materiel', '$annees', '$kilometrage', '$type', '$hours', '$prix', '$img')");
                    $req->execute();
                    header('Location: liste_article.php');
                } else {
                    echo "Désolé, mais une erreur c'est produite";
                }
            } 
        } else {
            $msg = "Votre photo doit être format jpg, jpeg, ou png.";
        }
        
    } else {
        $msg = "Votre photo ne doit pas dépasser 2MO."; 
    }
}



?>
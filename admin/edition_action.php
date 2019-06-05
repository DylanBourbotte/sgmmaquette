<?php
require('../includes/config.php');

if(isset($_POST['update'])) {

$name = htmlspecialchars($_POST['nameproduct']);
$modele = htmlspecialchars($_POST['modeleproduct']);
$year = htmlspecialchars($_POST['yearproduct']);
$km = htmlspecialchars($_POST['kilometrage']);
$type = htmlspecialchars($_POST['typeproduct']);
$hours = htmlspecialchars($_POST['hoursproduct']);
$price = htmlspecialchars($_POST['prix']);
$img = "1";
$id = intval($_POST['id']);

// $req = $bdd->prepare("UPDATE articles SET titre=$titre, description=$description WHERE id = ?");

// $req = $bdd->prepare("UPDATE artcles SET")

/* Exécution d'une requête préparée en liant des variables PHP */

$req = $bdd->prepare("UPDATE nouveaute SET nameproduct = :nameproduct, modele = :modele, yearproduct = :yearproduct, kilometrage = :kilometrage, typeproduct = :typeproduct, hoursproduct = :hoursproduct, price = :price, img = :img WHERE id = $id");
$req->bindParam(':nameproduct', $name, PDO::PARAM_STR, 255);
$req->bindParam(':modele', $modele, PDO::PARAM_STR, 16000);
$req->bindParam(':yearproduct', $year, PDO::PARAM_INT);
$req->bindParam(':kilometrage', $km, PDO::PARAM_INT);
$req->bindParam(':typeproduct', $type, PDO::PARAM_STR, 255);
$req->bindParam(':hoursproduct', $hours, PDO::PARAM_INT);
$req->bindParam(':price', $price, PDO::PARAM_INT);
$req->bindParam(':img', $img, PDO::PARAM_STR, 255);
$req->execute();
header('Location: liste_article.php');
}
<?php
require('../includes/config.php');
require('auth_verification.php');


if(isset($_POST['delete'])) {
    $id = intval($_POST['id']);
    $req = $bdd->prepare("DELETE FROM nouveaute WHERE id = $id");
    $req->execute();
    header('Location: liste_article.php');
}
?>


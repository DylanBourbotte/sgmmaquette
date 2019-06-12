<?php 
session_start();

$name = "sgmadmin";
$pass = "sgmmdpadmin";

if($_POST['username'] == "sgmadmin" && $_POST['pass'] == "sgmmdpadmin") {
    $_SESSION['identifiant'] = $_POST['username'];
    header('Location: admin_index.php');
} else {
    echo "Désolé vous coordonnées ne sont pas valide";
}
?>
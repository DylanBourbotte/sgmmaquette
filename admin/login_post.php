<?php 

$name = "sgmadmin";
$pass = "sgmmdpadmin";

if($_POST['username'] == "sgmadmin" && $_POST['pass'] == "sgmmdpadmin") {
    header('Location: admin_index.php');
} else {
    echo "Désolé vous coordonnées ne sont pas valide";
}
?>
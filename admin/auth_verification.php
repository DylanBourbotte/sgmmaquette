
<?php

session_start();
if(!isset($_SESSION['identifiant'])) {
  header("Location: index.php");
  exit();
}

?>
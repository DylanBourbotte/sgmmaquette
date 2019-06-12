<?php 
require('auth_verification.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Espace d'administration - SGM</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/light-bootstrap-dashboard.css?v=2.0.0 " rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/css/demo.css" rel="stylesheet" />
</head>

<body>
    <div class="wrapper">
        <div class="sidebar">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="sidebar-wrapper">
                <div class="logo">
                    <a href="javascript:;" class="simple-text">
                      <img src="assets/img/logo_sgm.png" class="img-fluid" alt="">
                    </a>
                </div>
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="admin_index.php">
                            <i class="fas fa-plus"></i>
                            <p>Ajoutez un article</p>
                        </a>
                    </li>
                    <li>
                        <a class="nav-link" href="liste_article.php">
                            <i class="fas fa-list"></i>
                            <p>Liste d'articles</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="edition.php">
                            <i class="fas fa-edit"></i>
                            <p>Edition d'articles</p>
                        </a>
                    </li>

                    <li class="nav-item active active-pro">
                        <a class="nav-link active" href="..\index.php">
                            <i class="fas fa-home"></i>
                            <p>Retour au site</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg " color-on-scroll="500">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#pablo">Espace d'administration</a>
                    <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                        <span class="navbar-toggler-bar burger-lines"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="section">
                        <form class="form" action="add_article.php" method="post" enctype="multipart/form-data">
                            
                            <div class="form-group">
                                <label for="name">Nom du produit</label>
                                <input type="text" class="form-control" name="name" placeholder="Nom du produit" required>
                            </div>

                            <div class="form-group">
                                <label for="modele">Modele</label>
                                <input type="text" class="form-control" name="modele" placeholder="Modele du produit" required>
                            </div>

                            <div class="form-group">
                                <label for="modele">Page</label>
                                <select class="form-control" name="page">
                                    <option value="btp">Matériel BTP</option>
                                    <option value="transport">Matériel de transport</option>
                                    <option value="agricole">Matériel agricole</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="materiel">Type de matériel</label>
                                <select class="form-control" name="materiel">
                                    <option disabled selected>BTP</option>
                                    <option value="pelleteuse">Pelleteuse</option>
                                    <option value="chargeuse">Charseuse</option>
                                    <option value="bulldozer">Bulldozer</option>
                                    <option value=niveleuse>Niveleuse</option>
                                    <option value="tractopelle">Tractopelle</option>
                                    <option value="tomberau">Tomberau</option>
                                    <option value="grue">Grue</option>
                                    <option value="forage">Forage</option>
                                    <option value="concassage">Concassage</option>
                                    <option value="groupe-electrogene">Groupe électrogène</option>
                                    <option value=porteengin>Porte engin</option>
                                    <option value="location">Location</option>
                                    <option value="pieces">Piece</option>
                                    <option value="pneu">Pneu</option>
                                    <option disabled selected>TRANSPORT</option>
                                    <option value="camion">Camion</option>
                                    <option value="tracteur">Tracteurs</option>
                                    <option value="utilitaires">Utilitaires</option>
                                    <option value="remorque">Remorque / Semi Remorque</option>
                                    <option value="bus">Bus / Autocar</option>
                                    <option value="location">Location</option>
                                    <option value="pieces">Piece</option>
                                    <option value="pneu">Pneu</option>
                                    <option disabled selected>AGRICOLE</option>
                                    <option value="tracteur">Tracteurs</option>
                                    <option value="recolte">Récolte</option>
                                    <option value="balle">Balles</option>
                                    <option value="pulverisateur">Pulvérisateur</option>
                                    <option value="feneison">Feneison</option>
                                    <option value="irrigition">Irrigition</option>
                                    <option value="location">Location</option>
                                    <option value="pieces">Piece</option>
                                    <option value="pneu">Pneu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="years">Années</label>
                                <input type="number" class="form-control" name="years" placeholder="Années du véhicule" required>
                            </div>

                            <div class="form-group">
                                <label for="kolimetrage">Kilométrage</label>
                                <input type="number" class="form-control" name="kilometrage" placeholder="Nom de kilomètres" required>
                            </div>

                            <div class="form-group">
                                <label for="type">Type</label>
                                <input type="text" class="form-control" name="type" placeholder="Type: Diesel/Essence" required>
                            </div>
                            <div class="form-group">
                                <label for="hours">Heures</label>
                                <input type="hours" class="form-control" name="hours" placeholder="Nombre d'heure" required>
                            </div>
                            <div class="form-group">
                                <label for="price">Prix</label>
                                <input type="number" class="form-control" name="prix" placeholder="Prix du produit" required>
                            </div>
                            <div class="form-group">
                                <label for="image">Photo du produit (Taille de fichier max: 2mo)</label>
                                <input type="file" class="form-control-file" name="image" placeholder="Photo du produit">
                            </div>
                            <div class="form-group">
                                <input type="submit" name="send" class="btn" name="hours" value="Ajoutez l'article">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
 

</body>
<!--   Core JS Files   -->
<script src="assets/js/core/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="assets/js/plugins/bootstrap-switch.js"></script>
<!--  Google Maps Plugin    -->
<!-- <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script> -->
<!--  Chartist Plugin  -->
<script src="assets/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Light Bootstrap Dashboard: scripts for the example pages etc -->
<script src="assets/js/light-bootstrap-dashboard.js?v=2.0.0 " type="text/javascript"></script>
<!-- Light Bootstrap Dashboard DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>
<script src="https://kit.fontawesome.com/fa4584ccdd.js"></script>
</html>

<?php
require('../includes/config.php');
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
    <link href="assets/css/new.scss" rel="stylesheet">
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
                    <li class="nav-item">
                        <a class="nav-link" href="admin_index.php">
                            <i class="fas fa-plus"></i>
                            <p>Ajoutez un article</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="liste_article.php">
                            <i class="fas fa-list"></i>
                            <p>Liste d'articles</p>
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="liste_article.php">
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
                        <ul class="nav navbar-nav mr-auto">
                            <li class="nav-item">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                    <i class="fas fa-users-cog"></i>
                                    <span class="d-lg-none">Dashboard</span>
                                </a>
                            </li>
                    
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a class="nav-link" href="#pablo">
                                    <span class="no-icon">Deconnection</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container">
                    <div class="section">
                    <?php 
                        $requete = 'SELECT * FROM nouveaute';
                        $resultat = $bdd->query($requete);
                        while ($ligne = $resultat->fetch()) {
                    ?>
            <div class="row new_article" style="margin-top: 5%;">
            <div class="col-4 photo_engin">
            <img src="../img/nouveaute.png" class="img-fluid newimg" alt="Photo d'une nouveauté">
            </div>

        <div class="col-4">
        <ul class="info-list">
          <h2 class="modele"><?php echo $ligne['nameproduct']; ?><br><span><?php echo $ligne['modele']; ?></span></h2>
          <li class="info-items"><img src="../img/yearsicon.png" class="img-fluid" alt="Icon années"> <?php echo $ligne['yearproduct']; ?></li>
          <li class="info-items"><img src="../img/kmicon.png" class="img-fluid" alt="Icon années"> <?php echo $ligne['kilometrage']; ?></li>
          <li class="info-items"><img src="../img/typeicon.png" class="img-fluid" alt="Icon années"> <?php echo $ligne['typeproduct']; ?></li>
          <li class="info-items"><img src="../img/hoursicon.png" class="img-fluid" alt="Icon années"> <?php echo $ligne['hoursproduct']; ?></li>
          
        </ul>
      </div>

      <div class="col-4">
            <form action="update.php" method="post">
                <input type="hidden" value="<?php echo $ligne['id']; ?>" name="id">
                <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
                <br>
            </form>

      </div>
  </div>
 
<?php
    }
?>
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

<?php
require('includes/config.php');
include('includes/header.php');
?>
<!-- Image top -->
<section class="sliderTop">
    <img src="img/transportHome.jpg" class="img-fluid" alt="Image BTP">
</section>

<!-- Select picto section -->
<section class="picto_section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center icon_select">
                <a href="transport.php?materiel=camion"><img class="img-fluid icon_btp" src='img/iconcamion.png' alt="Icon d'un camion" title="Camion"></a>
                <a href="transport.php?materiel=tracteurs"><img class="img-fluid icon_btp" src='img/icontracteur.png' alt="Icon d'un tracteur" title="Tracteur"></a>
                <a href="transport.php?materiel=utilitaires"><img class="img-fluid icon_btp" src='img/iconutilitaire.png' alt="Icon d'un utilitaire" title="Utilitaire"></a>
                <a href="transport.php?materiel=remorque"><img class="img-fluid icon_btp" src='img/iconsemi.png' alt="Icon semi / semi remorque" title="Remorque / Semi Remorque"></a>
                <a href="transport.php?materiel=bus"><img class="img-fluid icon_btp" src='img/iconautocar.png' alt="Icon autocar" title="Autocar"></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center icon_select">
                <a href="location_piece.php"><img class="img-fluid icon_btp" src='img/iconlocation.png' alt="Icon location" title="Location"></a>
                <a href="location_piece.php"><img class="img-fluid icon_btp" src='img/iconpiece.png' alt="Icon pieces" alt="Pieces" title="Pneu"></a>
                <a href="transport.php?materiel=pneu"><img class="img-fluid icon_btp" src='img/iconpneu.png' alt="Icon de pneu" title="Pneu"></a>
            </div>
        </div>
    </div>
</section>

<section class="article_btp">
    <div class="container">

    <?php
      if(!empty($_GET['materiel'])) {
        $cat = $_GET['materiel'];
        $sth = $bdd->prepare('SELECT * FROM nouveaute WHERE categorie = "transport" AND  materiel = "' . $cat . '" ORDER BY id');
        $sth->execute();
        $resultat = $sth->fetchAll();
        foreach ($resultat as $key => $ligne) {
      ?>
    
    <div class="row new_article">
      <div class="col-lg-4 col-md-12 img_article">
        <img src="admin/<?php echo $ligne['img']; ?>" class="img-fluid photo_new" alt="photo de transport">
      </div>
      
      <div class="col-lg-4 col-md-12 info_new">
        <ul class="info-list">
          <li class="info-items"><p class="title_article"><?php echo $ligne['nameproduct']; ?><br>
          <?php echo $ligne['modele']; ?></p></li>
          <li class="info-items"><img src="img/yearsicon.png" alt="Icon de calendrier" class='icon_new'><span class="info"><?php echo $ligne['yearproduct'] ?></span></li>
          <li class="info-items"><img src="img/kmicon.png" alt="Icon de kilometrage" class='icon_new'><span class="info"><?php echo $ligne['kilometrage'] ?></span></li>   
          <li class="info-items"><img src="img/typeicon.png" alt="Icon de type" class='icon_new'><span class="info"><?php echo $ligne['typeproduct'] ?></span></li>   
          <li class="info-items"><img src="img/hoursicon.png" alt="Icon d'heures" class='icon_new'><span class="info"><?php echo $ligne['hoursproduct'] ?></span></li>   
        </ul>
      </div>
      
      <div class="col-lg-4 col-md-12">
        <div class="price">
          <p class="prix text-center"><?php echo $ligne['price']; ?> € HT</p>
        </div>
          <button class="read_more new_btn" id="myBtn" onclick="window.location.href='contact.php'"><span class="text_readmore">En savoir +</span></button>
      </div>
    </div>
<?php
    } 
  } else {
      $sth = $bdd->prepare('SELECT * FROM nouveaute WHERE categorie = "transport"  ORDER BY id');
      $sth->execute();
      $resultat = $sth->fetchAll();
      foreach ($resultat as $key => $ligne) {
  ?>
    
    <div class="row new_article">
      <div class="col-lg-4 col-md-12 img_article">
        <img src="admin/<?php echo $ligne['img']; ?>" class="img-fluid photo_new" alt="photo d'une nouveauté">
      </div>
      
      <div class="col-lg-4 col-md-12 info_new">
        <ul class="info-list">
          <li class="info-items"><p class="title_article"><?php echo $ligne['nameproduct']; ?><br>
          <?php echo $ligne['modele']; ?></p></li>
          <li class="info-items"><img src="img/yearsicon.png" alt="Icon de calendrier" class='icon_new'><span class="info"><?php echo $ligne['yearproduct'] ?></span></li>
          <li class="info-items"><img src="img/kmicon.png" alt="Icon de kilometrage" class='icon_new'><span class="info"><?php echo $ligne['kilometrage'] ?></span></li>   
          <li class="info-items"><img src="img/typeicon.png" alt="Icon de type" class='icon_new'><span class="info"><?php echo $ligne['typeproduct'] ?></span></li>   
          <li class="info-items"><img src="img/hoursicon.png" alt="Icon d'heures" class='icon_new'><span class="info"><?php echo $ligne['hoursproduct'] ?></span></li>   
        </ul>
      </div>

      <div class="col-lg-4 col-md-12">
        <div class="price">
          <p class="prix text-center"><?php echo $ligne['price']; ?> € HT</p>
        </div>
          <button class="read_more new_btn" id="myBtn" onclick="window.location.href='contact.php'"><span class="text_readmore">En savoir +</span></button>
      </div>
    </div>
<?php
    }
  }
?>

  </div>
</section>

<?php
include('includes/footer.php');
?>
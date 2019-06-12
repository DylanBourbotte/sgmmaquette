<?php
require('includes/config.php');
include('includes/header.php');
?>

<section class="sliderTop">
    <img src="img/agricoleHome.jpg" class="img-fluid" alt="Image agricole">
</section>

<section class="picto_section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center icon_select">
                <a href="agricole.php?materiel=tracteurs"><img class="img-fluid icon_btp" src='img/icontracteurs.png'></a>
                <a href="agricole.php?materiel=recolte"><img class="img-fluid icon_btp" src='img/iconrecolte.png'></a>
                <a href="agricole.php?materiel=balles"><img class="img-fluid icon_btp" src='img/iconpresse.png'></a>
                <a href="agricole.php?materiel=pulverisateurs"><img class="img-fluid icon_btp" src='img/iconpulve.png'></a>
                <a href="agricole.php?materiel=feneison"><img class="img-fluid icon_btp" src='img/iconplateau.png'></a>
                <a href="agricole.php?materiel=irigition"><img class="img-fluid icon_btp" src='img/iconregi.png'></a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center icon_select">
                <a href="agricole.php?materiel=location"><img class="img-fluid icon_btp" src='img/iconlocation.png'></a>
                <a href="agricole.php?materiel=pieces"><img class="img-fluid icon_btp" src='img/iconpiece.png'></a>
                <a href="agricole.php?materiel=pneu"><img class="img-fluid icon_btp" src='img/iconpneu.png'></a>
            </div>
        </div>
    </div>
</section>

<section class="article_btp">
    <div class="container">
    <?php
    if(!empty($_GET['materiel'])) {
      $cat = $_GET['materiel'];
      $sth = $bdd->prepare('SELECT * FROM nouveaute WHERE categorie = "agricole" AND  materiel = "' . $cat . '" ORDER BY id');
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
          <button class="read_more new_btn" id="myBtn"><span class="text_readmore">En savoir +</span></button>
      </div>
    </div>
 
<?php
    } 
    } else {
      $sth = $bdd->prepare('SELECT * FROM nouveaute WHERE categorie = "agricole"  ORDER BY id');
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
          <button class="read_more new_btn" id="myBtn"><span class="text_readmore">En savoir +</span></button>
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
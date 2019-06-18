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
                <div class="test"><a href="agricole.php?materiel=tracteurs" class="link_img"><img class="img-fluid icon_btp" src='img/icontracteurs.png' alt="Icon de tracteur" title="Tracteur"><div class="test_icon">Tracteur</div></a></div>
                <div class="test"><a href="agricole.php?materiel=recolte" class="link_img"><img class="img-fluid icon_btp" src='img/iconrecolte.png' alt="Icon de recolte" title="Recolte"><div class="test_icon">Récolte</div></a></div>
                <div class="test"><a href="agricole.php?materiel=balles" class="link_img"><img class="img-fluid icon_btp" src='img/iconpresse.png' alt="Icon de presse" title="Balles"><div class="test_icon">Balles</div></a></div>
                <div class="test"><a href="agricole.php?materiel=pulverisateurs" class="link_img"><img class="img-fluid icon_btp" src='img/iconpulve.png' alt="Pulverisateur" title="Pulvérisateur"><div class="test_icon">Pulvérisateur</div></a></div>
                <div class="test"><a href="agricole.php?materiel=feneison" class="link_img"><img class="img-fluid icon_btp" src='img/iconplateau.png' alt="Icon de feneison" title="Feneison"><div class="test_icon">Feneison</div></a></div>
                <div class="test"><a href="agricole.php?materiel=irigition" class="link_img"><img class="img-fluid icon_btp" src='img/iconregi.png' alt="Irigition" title="Irigition"><div class="test_icon">Irigation</div></a></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12 text-center icon_select">
            <div class="test"><a href="location_piece.php" class="link_img"><img class="img-fluid icon_btp" src='img/iconlocation.png' alt="Icon de location" title="Location"><div class="test_icon">Location</div></a></div>
                <div class="test"><a href="piece.php" class="link_img"><img class="img-fluid icon_btp" src='img/iconpiece.png' alt="Icon de pieces" title="Pieces"><div class="test_icon">Pièces</div></a></div>
                <div class="test"><a href="agricole.php?materiel=pneu" class="link_img"><img class="img-fluid icon_btp" src='img/iconpneu.png' alt="Icon de pneu" title="Pneu"><div class="test_icon">Pneu</div></a></div>
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
        <img src="admin/<?php echo $ligne[' img']; ?>" class="img-fluid photo_new" alt="photo d'une nouveauté">
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
          <button class="read_more new_btn" id="myBtn" onclick="window.location.href='index.php'"><span class="text_readmore">En savoir +</span></button>
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
<?php
include('includes/header.php');
require('includes/config.php');
?>

<!-- Top image -->
<section class="sliderTop">
    <img src="img/btphome.jpg" class="img-fluid" alt="Image BTP">
</section>
<!-- End top image -->

<!-- Picto select section -->
<section class="picto_section">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center icon_select">
                <div class="test"><a href="btp.php?materiel=pelleteuse" class="link_img"><img class="img-fluid icon_btp" src='img/iconpelle.png' alt="Icon de pelleteuse" title="Pelleteuse"><div class="test_icon">Pelles</div></a></div>
                <div class="test"><a href="btp.php?materiel=chargeuse" class="link_img"><img class="img-fluid icon_btp" src='img/iconchargeuse.png' alt="Icon de chargeuse" title="Chargeuse"><div class="test_icon">Chargeuses</div></a></div>
                <div class="test"><a href="btp.php?materiel=bulldozer" class="link_img"><img class="img-fluid icon_btp" src='img/iconbuldo.png' alt="Icon de bulldozer" title="Bulldozer"><div class="test_icon">Bulldozers</div></a></div>
                <div class="test"><a href="btp.php?materiel=niveleuse" class="link_img"><img class="img-fluid icon_btp" src='img/iconnive.png' alt="Icon de niveleuse" title="Niveleuse"><div class="test_icon">Niveleuses</div></a></div>
                <div class="test"><a href="btp.php?materiel=tractopelle" class="link_img"><img class="img-fluid icon_btp" src='img/icontracto.png' alt="Icon de tractopelles" title="Niveleuse"><div class="test_icon">Tractopelles</div></a></div>
                <!-- <div class="test"><a href="btp.php?materiel=tractopelle" class="link_img"><img class="img-fluid icon_btp" src='img/icontracto.png' alt="Icon de tractopelle" title="Tractopelle"></div class="test_icon">Tractopelles</div></a></div> -->
                <div class="test"><a href="btp.php?materiel=tomberau" class="link_img"><img class="img-fluid icon_btp" src='img/icontombereau.png' alt="Icon de tomberau" title="Tomberau"><div class="test_icon">Tombereaux</div></a></div>
                <div class="test"><a href="btp.php?materiel=grue" class="link_img"><img class="img-fluid icon_btp" src='img/icongrue.png' alt="Icon de grue" title="Grue"><div class="test_icon">Grue</div></a></div>
            </div>
        </div>

            <div class="col-12 text-center icon_select">
                <div class="test"><a href="btp.php?materiel=forage" class="link_img"><img class="img-fluid icon_btp" src='img/iconforage.png' alt="Icon de forage" title="Forage"><div class="test_icon">Forage</div></a></div>
                <div class="test"><a href="btp.php?matereiel=concassage" class="link_img"><img class="img-fluid icon_btp" src='img/iconconca.png' alt="Icon de concassage" title="Concassage"><div class="test_icon">Concassage</div></a></div>
                <div class="test"><a href="btp.php?materiel=groupe" class="link_img"><img class="img-fluid icon_btp" src='img/icongroupe.png' alt="Icon de groupe électrogène" title="Groupe électrogène"><div class="test_icon">Électrogène</div></a></div>
                <div class="test"><a href="btp.php?materiel=porteengin" class="link_img"><img class="img-fluid icon_btp" src='img/iconporte.png' alt="Icon de porte engin" title="Porte engin"><div class="test_icon">Porte-engins</div></a></div>
                <div class="test"><a href="location_piece.php" class="link_img"><img class="img-fluid icon_btp" src='img/iconlocation.png' alt="Icon de location" title="Location"><div class="test_icon">Location</div></a></div>
                <div class="test"><a href="location_piece.php" class="link_img"><img class="img-fluid icon_btp" src='img/iconpiece.png' alt="Icon de pieces" title="Pieces"><div class="test_icon">Pièces</div></a></div>
                <div class="test"><a href="btp.php?materiel=pneu" class="link_img"><img class="img-fluid icon_btp" src='img/iconpneu.png' alt="Icon de pneu" title="Pneu"><div class="test_icon">Pneu</div></a></div>
            </div>
        </div>
    </div>
</section>
<!-- Article section -->
<section class="article_btp">
    <div class="container pelleteuse">

    <?php
      if(!empty($_GET['materiel'])) { // Si il récupere bien une valeur dans l'url
        $cat = $_GET['materiel']; // On crée une variable cat (catégorie)
        $sth = $bdd->prepare('SELECT * FROM nouveaute WHERE categorie = "btp" AND  materiel = "' . $cat . '" ORDER BY id');
        $sth->execute(); // On execute la requete ci-dessus
        $resultat = $sth->fetchAll(); // On récuperer tout les élement de la base de données avec la catégorie btp et la valeur de la variable $cat
        foreach ($resultat as $key => $ligne) { // On fait une boucle pour les afficher 
    ?>
    <div class="row new_article">
      <div class="col-lg-4 col-md-12 img_article">
        <img src="admin/<?php echo $ligne['img']; ?>" class="img-fluid photo_new" alt="Photo d'un article de btp">
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
    } else { // Sinon si rien n'est passer dans l'url
      $sth = $bdd->prepare('SELECT * FROM nouveaute WHERE categorie = "btp"  ORDER BY id'); // On affiche tout les élement de btp dans l'ordre de leur id
      $sth->execute(); // On execute la requete ci-dessus
      $resultat = $sth->fetchAll(); // On récuperer tout
      foreach ($resultat as $key => $ligne) { // On boucle jusqu'a qu'il n'y a plus d'article avec la catégorie BTP
  ?>
    <div class="row new_article">
      <div class="col-lg-4 col-md-12 img_article">
        <img src="admin/<?php echo $ligne['img']; ?>" class="img-fluid photo_new" alt="photo d'un article de btp">
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
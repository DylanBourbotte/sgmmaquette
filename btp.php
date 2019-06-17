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
                <a href="btp.php?materiel=pelleteuse"><img class="img-fluid icon_btp" src='img/iconpelle.png' alt="Icon de pelleteuse" title="Pelleteuse"></a>
                <a href="btp.php?materiel=chargeuse"><img class="img-fluid icon_btp" src='img/iconchargeuse.png' alt="Icon de chargeuse" title="Chargeuse"></a>
                <a href="btp.php?materiel=bulldozer"><img class="img-fluid icon_btp" src='img/iconbuldo.png' alt="Icon de bulldozer" title="Bulldozer"></a>
                <a href="btp.php?materiel=niveleuse"><img class="img-fluid icon_btp" src='img/iconnive.png' alt="Icon de niveleuse" title="Niveleuse"></a>
                <a href="btp.php?materiel=tractopelle"><img class="img-fluid icon_btp" src='img/icontracto.png' alt="Icon de tractopelle" title="Tractopelle"></a>
                <a href="btp.php?materiel=tomberau"><img class="img-fluid icon_btp" src='img/icontombereau.png' alt="Icon de tomberau" title="Tomberau"></a>
                <a href="btp.php?materiel=grue"><img class="img-fluid icon_btp" src='img/icongrue.png' alt="Icon de grue" title="Grue"></a>
            </div>
        </div>

            <div class="col-12 text-center icon_select">
                <a href="btp.php?materiel=forage"><img class="img-fluid icon_btp" src='img/iconforage.png' alt="Icon de forage" title="Forage"></a>
                <a href="btp.php?matereiel=concassage"><img class="img-fluid icon_btp" src='img/iconconca.png' alt="Icon de concassage" title="Concassage"></a>
                <a href="btp.php?materiel=groupe"><img class="img-fluid icon_btp" src='img/icongroupe.png' alt="Icon de groupe électrogène" title="Groupe électrogène"></a>
                <a href="btp.php?materiel=porteengin"><img class="img-fluid icon_btp" src='img/iconporte.png' alt="Icon de porte engin" title="Porte engin"></a>
                <a href="location_piece.php"><img class="img-fluid icon_btp" src='img/iconlocation.png' alt="Icon de location" title="Location"></a>
                <a href="location_piece.php"><img class="img-fluid icon_btp" src='img/iconpiece.png' alt="Icon de pieces" title="Pieces"></a>
                <a href="btp.php?materiel=pneu"><img class="img-fluid icon_btp" src='img/iconpneu.png' alt="Icon de pneu" title="Pneu"></a>
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
<?php
require('includes/config.php');
include('includes/header.php');
?>

<!-- Carousel Top Page -->
<section class="sliderTop">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators firstSlider">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
  
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="img/firstSlide.jpg" class="d-block w-100" alt="Image de btp">
    </div>
    
    <div class="carousel-item">
      <img src="img/secondSlie.jpg" class="d-block w-100" alt="Image de transport">
    </div>
    
    <div class="carousel-item">
      <img src="img/thirdSlide.jpg" class="d-block w-100" alt="Image agricole">
    </div>
  </div>
  
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Précedent</span>
  </a>

  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div>
</section>

<!-- End of carousel top page -->

<!-- Section Welcome logo + two text -->

<section class="welcome">
    <div class="container">
        <div class="row text-center welcome_row align-items-center">
            <div class="col-lg-4 col-12 welcome_content">
                <img class="img-fluid logo_welcome" src="img/logo_transpa.png" alt="Logo de l'entreprise">
            </div>
            <div class="col-lg-4 col-12 welcome_content">
                <p class="welcome_para text-left">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Praesentium eligendi neque, iste laboriosam molestiae omnis mollitia ipsam distinctio earum repellat officiis ducimus sit sunt nobis autem illum perspiciatis quisquam exercitationem Ipsum porro repellendus, recusandae atque laborum facere nihil voluptates quas dolore natus a hic nulla itaque architecto quibusdam voluptatum.</p>
            </div>
            <div class="col-lg-4 col-12 welcome_content">
                <p class="welcome_para text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi tenetur a, blanditiis officia enim impedit culpa soluta atque quasi sed id at ratione nihil natus non. Quis necessitatibus commodi suscipit?Voluptas porro facilis quas quae non possimus vitae libero optio dicta nobis nulla neque labore vero, dolorem unde cupiditate recusandae deleniti rem officia, cum ipsam? Nostrum incidunt necessitatibus fugiat aperiam.</p>
            </div>  
        </div>
</section>

<!-- End of welcome section -->
<!-- Section nouveauté -->

<section class="new">
    <div class="container">
      <div class="row marquage">
        <div class="col-md col-sm text-center newTitle">
          <img src="img/stripe_yellow.png" class='img-fluid stripe_new' alt="stripe">
          <h4 class="new_title">NOUVEAUTÉS</h4>
        </div>

        <div class="col-lg-4 col-md-12 col-12 new_text">
          <p>Les derniers engins d'occasions à votre disposition</p>
        </div>

      </div>
<!-- Requete SDL pour afficher les quatres derniere nouveauté de la base de données -->
  <?php 
    $sth = $bdd->prepare('SELECT * FROM nouveaute ORDER BY id DESC LIMIT 4 ');
    $sth->execute();
    $resultat = $sth->fetchAll();
    foreach ($resultat as $key => $ligne) {
  ?>
<!-- Fin de ma requete SQL -->
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
?>
<
    </div>
  </div>
</section> <!-- Fin de mes affichage de nouveauté -->

<!-- Carte actualitée --> 
<section class="actu"> 
  <div class="container">
    <div class="row marquage">
      <div class="col-md col-sm text-center actuTitle">
        <img src="img/stripe_yellow.png" class='img-fluid stripe_actu' alt='stripe'>
        <h5 class="actu_title">ACTUALITÉS</h5>
      </div>

    <div class="col-lg-4 col-md-12 col-12 actu_text">
        <p>Les actualités de nos réseaux sociaux, les derniers engins et les occasions à saisir</p>
    </div>
  </div>

    <div class="row article_actu">
        <div class="col-sm text-center">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/actuimg.png" alt="Card image cap">
           <div class="card-body">
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore<span id="dots">(..)</span><span id="more">et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
              <button class="readmore" id="myBtn" onclick="readMore()"><span class="text_readmore">Lire la suite</span></button>
          </div>
        </div>
      </div>

        <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/actuimg.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore<span id="dots">(..)</span><span id="more">et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
            <button class="readmore" id="myBtn" onclick="readMore()"><span class="text_readmore">Lire la suite</span></button>   
        </div>
    </div>
</div>

        <div class="col-sm">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img/actuimg.png" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore<span id="dots">(..)</span><span id="more">et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>
            <button class="readmore"><span class="text_readmore">Lire la suite</span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</div>

<!-- Marque section -->

<section class="nos_marque">
    <div class="container">
      <div class="row marquage">       
        <div class="col-md col-sm text-center marqueTitle">
            <img src="img/stripe.png" class='img-fluid stripe_marque' alt="stripe">
            <h1 class="marque_title text-center">NOS MARQUES</h1>
        </div>

        <div class="col-lg-4 col-md-12 col-12 marque_text">
          <p>Retrouvez les plus grandes marques d’engins pour répondre à tous vos besoins, que ce soit dans les travaux publics, le transport et les travaux agricoles.</p>
        </div>
      </div>

      <div class="marque_slider">
        <div id="carouselExampleIndicators" class="carousellol slide" data-ride="carousellol">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img/marque_slider1.jpg" class="d-block w-100" alt="Image BTP">
            </div>
    
            <div class="carousel-item">
              <img src="img/marque_slider2.jpg" class="d-block w-100" alt="Image Transport">
            </div>

            <div class="carousel-item">
              <img src="img/marque_slider3.jpg" class="d-block w-100" alt="Image Agricole">
            </div>
          </div>
        </div>
      </div>
    </div>
</section>

<!-- End of marque carousel -->

<!-- Section of nos engins -->
<section class="nosengins">
    <div class="container">
      <div class="row marquage">
        <div class="col-md col-sm text-center enginTitle">
          <img src="img/stripe_yellow.png" class='img-fluid stripe_engin' alt="stripe">
          <h3 class="engin_title">NOS ENGINS</h3>
        </div>

        <div class="col-lg-4 col-md-12 col-12 engin_text">
          <p>Retrouvez nos engins et matériels d'occasion, classé par secteur d'activité. Une sélection d'appareils contrôlés et garantis, pour réaliser vos chantiers sereinement.</p>
        </div>
      </div>

  <!-- Icon engin -->
    <!-- Icon btp -->
      <div class="row icon_engin">
        <div class="col-sm text-center">
          <a href="btp.php"><img id="my-img"  class="icon" src="img/btpIcon.png" alt="Icon btp" onmouseover="hover(this);" onmouseout="unhover(this);"></a>
        </div>
    <!-- Icon transport -->
        <div class="col-sm text-center">
          <a href="transport.php"><img src="img/transportIcon.png" class="icon" alt="Icon transport" onmouseover="hovertransport(this);" onmouseout="unhovertransport(this);"></a>
        </div>
    <!-- Icon agricole -->
        <div class="col-sm text-center">
          <a href="agricole.php"><img src="img/agrIcon.png" class="icon" alt="Icon agriculture" onmouseover="hoveragriculture(this);" onmouseout="unhoveragriculture(this);"></a>
        </div>
      </div>
    </div>
</section>





<!-- Google map -->
<section class="map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380513.7159859942!2d-88.01214778988322!3d41.83339250495681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C+Illinois%2C+%C3%89tats-Unis!5e0!3m2!1sfr!2sfr!4v1559207687316!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
<!-- End of google map -->
<!-- Fin des carte d'actualitée et de la page d'accueil -->
<?php
include('includes/footer.php');
?>
<?php
require('includes/config.php');
include('includes/header.php');
?>

<section class="sliderTop">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators firstSlider">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/firstSlide.jpg" class="d-block w-100" alt="Image BTP">
    </div>
    <div class="carousel-item">
      <img src="img/secondSlie.jpg" class="d-block w-100" alt="Image Transport">
    </div>
    <div class="carousel-item">
      <img src="img/thirdSlide.jpg" class="d-block w-100" alt="Image Agricole">
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


<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-12 info_contact">
                <h1 class="text-center contactus">Nous contacter</h1>
                <p class="text-center contactus_p">Une demande de produit en particulier ? Une demande de renseignement ? Nous vous répondrons dans les plus bref délai.</p>
            </div>
        </div>
        
        <form action="contact_send.php" method="post">
        <div class="row">
            <div class="col-6">
                    <div class="form-group">
                        <label for="name"></label>
                        <input type="text" name="name" class="form-control" placeholder="Votre nom" required>
                    </div>
                    <div class="form-group">
                        <label for="surname"></label>
                        <input type="text" name="surname" class="form-control" placeholder="Votre prénom" required>
                    </div>
                    <div class="form-group">
                        <label for="mail"></label>
                        <input type="email" name="mail" class="form-control" placeholder="Votre adresse email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone"></label>
                        <input type="phone" name="phone" class="form-control" placeholder="Votre numéro de téléphone" required>
                    </div>
            </div>
            <div class="col-6">
                <label for="message"></label>
                <textarea name="message" class="form-control" id="message_contact" cols="60" rows="10" required></textarea>
            </div>
            <div class="col-12 submit">
                <input type="submit" name="envoie" class="btn btn-primary send" value="Soumettre">
            </div>
        </div>
</form>

    </div>
    </div>
</section>

<section class="map">
  <div class="row">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d380513.7159859942!2d-88.01214778988322!3d41.83339250495681!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880e2c3cd0f4cbed%3A0xafe0a6ad09c0c000!2sChicago%2C+Illinois%2C+%C3%89tats-Unis!5e0!3m2!1sfr!2sfr!4v1559207687316!5m2!1sfr!2sfr" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>
</section>
<?php
include('includes/footer.php');
?>
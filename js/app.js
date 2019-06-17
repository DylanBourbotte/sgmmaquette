$(document).ready(function(){ 
    $(".submenu").hide();
    $(".materielbtp").mouseover(function(){
    $(".submenu").show();
    $(".nav-items").css( "color", "white" );
    });
    $(".materielbtp").mouseleave(function(){
    $(".submenu").hide();
    });    

    $(".submenu-transport").hide();
    $(".materieltransport").mouseover(function(){
    $(".submenu-transport").show();
    $(".nav-items").css( "color", "white" );
    });
    $(".materieltransport").mouseleave(function(){
    $(".submenu-transport").hide();
    })

    $(".submenu-agricole").hide();
    $(".materielagricole").mouseover(function(){
    $(".submenu-agricole").show();
    $(".nav-items").css( "color", "white" );
    });
    $(".materielagricole").mouseleave(function(){
    $(".submenu-agricole").hide();
    })


     $('.carousellol').carousel({
         interval: 1000 * 5
       })

      $('.btnMenu').click(function () {
        $(".overlayMenu").toggleClass("active");

});
});



$(document).ready(function(){
  $(".sebmenu").hide();
  $(".tractopelle").mouseover(function(){
    $(".submenu").show();
    $(".nav-items").css('"color', "white");
  });
});



function hover(element) {
    element.setAttribute('src', './img/btphoverIcon.png');
  }
  
  function unhover(element) {
    element.setAttribute('src', './img/btpIcon.png');
  }

  function hovertransport(element) {
    element.setAttribute('src', './img/transporthoverIcon.png');
  }
  
  function unhovertransport(element) {
    element.setAttribute('src', './img/transportIcon.png');
  }

  function hoveragriculture(element) {
    element.setAttribute('src', './img/agriculturehoverIcon.png');
  }
  
  function unhoveragriculture(element) {
    element.setAttribute('src', './img/agrIcon.png');
  }

  function readMore() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");
    let innerBtn = document.getElementById("text_read");

  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      innerBtn.innerHTML = "Lire la suite"
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      innerBtn.innerHTML = "Contactez-nous"
      moreText.style.display = "inline";
    }
  } 

  document.getElementById("myHome").onclick = function () {
    location.href = "www.yoursite.com";
};



 
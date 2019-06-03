$(document).ready(function(){
    $(".submenu").hide();
    $(".materielbtp").mouseover(function(){
    $(".submenu").show();
    $(".nav-items").css( "color", "white" );
    });
    $(".materielbtp").mouseleave(function(){
    $(".submenu").hide();
    })

     $('.carousellol').carousel({
         interval: 1000 * 5
       })
})

$(document).ready(function(){
  $(".sebmenu").hide();
  $(".tractopelle").mouseover(function(){
    $(".submenu").show();
    $(".nav-items").css('"color', "white");
  });
  $(".tractopelle").mouseleave(function(){
    $(".submenu").hide();
  })
})


function hover(element) {
    element.setAttribute('src', './img/btphoverIcon.png');
  }
  
  function unhover(element) {
    element.setAttribute('src', './img/btpIcon.png');
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
 
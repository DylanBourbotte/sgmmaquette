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
    let innerBtn = document.getElementsByClassName("text_readmore");

  
    if (dots.style.display === "none") {
      dots.style.display = "inline";
      moreText.style.display = "none";
    } else {
      dots.style.display = "none";
      innerBtn.innerHTML = "Contactez-nous";
      moreText.style.display = "inline";
    }
  } 
 
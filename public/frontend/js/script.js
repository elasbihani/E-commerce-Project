
// ==========    SUB-MENU   ==============//


    let subMenu = document.getElementById("subMenu");

    function toggleMenuProfile(){
        subMenu.classList.toggle("open-menu");
    }


    let subSearch = document.getElementById("subSearch");

    function toggleMenuSearch(){
        subSearch.classList.toggle("open-search");
    }


// ==========  END  SUB-MENU   ==============//


// ==========    SCROLL TOP PAGE   ==============//



var btn = $('#buttonTop');

$(window).scroll(function() {
  if ($(window).scrollTop() > 50) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({scrollTop:0}, '300');
});



// ==========    SCROLL   ==============//


$(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (scroll < 50) {
        $('.fixed-top').css('background', 'transparent');
    } else {
        $('.fixed-top').css('background', 'white');
        $('.navbar>.container-fluid a').css('color', 'rgba(37,33,34,255)');
    }
});



$(function() {
    var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
    ];
    $("#search_product").autocomplete({
        source: availableTags
    });
});

// ==========    PROGRESS SCROLL   ==============//

function progressBarScroll() {
    let winScroll = document.body.scrollTop || document.documentElement.scrollTop,
        height = document.documentElement.scrollHeight - document.documentElement.clientHeight,
        scrolled = (winScroll / height) * 100;
    document.getElementById("progressBar").style.width = scrolled + "%";
  }

  window.onscroll = function () {
    progressBarScroll();
  };

  // ==========  END  PROGRESS SCROLL   ==============//

// ==========    LOADING   ==============//


window.addEventListener("load", () => {
    document.querySelector('.loaders').classList.add("loader--hidden");
    document.querySelector('.loaders').addEventListener("transitionend", () => {
      document.body.removeChild(document.querySelector('.loaders'));
    });
  });







/* navbra forme mobile */

/* Mobile view styles */


let navigation = document.querySelector('.navigateur');

let menu = document.querySelector('.navbar-toggler');






menu.onclick=function(){

    navigation.classList.toggle('open')
}


/*===================  PAGE CONATACT  =========================*/



window.addEventListener("scroll",()=>{
    let content = document.querySelector('nav');
    if (document.documentElement.scrollTop) {
        content.classList.add('nav-bg');
    }else{
        content.classList.remove('nav-bg');
    }
})
$(window).load(function(){
    $('.preloader').fadeOut(2000); // set duration in brackets    
  });

AOS.init();

$(document).ready(()=>{
    $(".slider-content").owlCarousel(
        {
            loop:false,
            nav:true,
            margin:6,
            responsive:{
                0:{
                    loop:false,
                    items:1,
                    margin:3,
                },
                800:{
                    items:2,
                    margin:10,
                    loop: false
                },
                1200:{
                    items:3
                }
            }
        }
    )
    $(".about-content").owlCarousel(
        {
            loop:false,
            nav:false,
            margin:5,
            dots:false,
            responsive:{
                0:{
                    loop:false,
                    items:1,
                    margin:3,
                    autoplay:true,
                    autoplayTimeout:2000,
                },
                900:{
                    items:2
                },
                1200:{
                    items: 3
                }
            }
        }
    )
})
// SLIDE PORTFOLIO
var slideIndex = 1;
showSlides(slideIndex);

// Next/previous controls
function plusSlides(n) {
  showSlides(slideIndex += n);
}

// Thumbnail image controls
function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("slides");
  var dots = document.getElementsByClassName("list");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
} 
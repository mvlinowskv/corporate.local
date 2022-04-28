
    var slideIndex1 = 1;

    var myTimer;

    var slideshowContainer;

    showSlides(slideIndex1);
    myTimer = setInterval(function(){plusSlides(1)}, 4000);

    //COMMENT OUT THE LINE BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
    slideshowContainer = document.getElementsByClassName('slider')[0];
        


    // NEXT AND PREVIOUS CONTROL
    function plusSlides(n){
        clearInterval(myTimer);
        if (n < 0){
        showSlides(slideIndex1 -= 1);
        } else {
        showSlides(slideIndex1 += 1); 
        }
        
        //COMMENT OUT THE LINES BELOW TO KEEP ARROWS PART OF MOUSEENTER PAUSE/RESUME
        
        if (n === -1){
        myTimer = setInterval(function(){plusSlides(n + 2)}, 4000);
        } else {
        myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
        }
    }

    //Controls the current slide and resets interval if needed
    function currentSlide(n){
        clearInterval(myTimer);
        myTimer = setInterval(function(){plusSlides(n + 1)}, 4000);
        showSlides(slideIndex1 = n);
    }

    function showSlides(n){
        var i;
        var slides = document.getElementsByClassName("box-image");
        var small_images = document.getElementsByClassName('img-small');

        if (n > slides.length) {slideIndex1 = 1}
        if (n < 1) {slideIndex1 = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.zIndex = 0;
            slides[i].style.opacity = 0.3;
            slides[i].style.transition = "opacity 1.5s linear";
        }

        slides[slideIndex1-1].style.zIndex = 1;
        slides[slideIndex1-1].style.opacity = 1;
        slides[slideIndex1-1].style.transition = "opacity 1.5s ease-out";

        const mediaMin576 = window.matchMedia('(min-width: 576px)');

        if(mediaMin576.matches) {
        for(i=0; i<small_images.length; i++) {
            small_images[i].style.width = "calc(2rem + 3vw)";
            small_images[i].style.transition = "width 0.5s linear";
        }

        small_images[slideIndex1-1].style.width = "calc(2rem + 7vw)";
        small_images[slideIndex1-1].style.transition = "width 0.5s linear";

        } 

        if(!mediaMin576.matches) {
        for(i=0; i<small_images.length; i++) {
            small_images[i].style.width = "40px";
            small_images[i].style.transition = "width 0.5s linear";
        }

        small_images[slideIndex1-1].style.width = "10rem";
        small_images[slideIndex1-1].style.transition = "width 0.5s linear";
        }

        
        

        

        

        
    }

/*Open Menu mobile */

function OpenMenu() {
    var checkbox = document.getElementById("menu");
    var menu = document.getElementById("site-header-menu");
    var fall = document.getElementById('fall-white');
  
    if(checkbox.checked == true) {
      menu.style.left = 0;
      menu.style.top = "0rem";
    } else {
      menu.style.left="-100vw";
      menu.style.top = "0rem";
    }
  }







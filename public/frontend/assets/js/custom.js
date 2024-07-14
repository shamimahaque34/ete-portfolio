//Testimonial JS Starts Here
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:1,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[979,1],
        itemsTablet:[768,1],
        pagination:false,
        navigation:true,
        slideSpeed:1000,
        singleItem:true,
        transitionStyle:"goDown",
        navigationText:["",""],
        autoPlay:false
    });
}); 
//Testimonial JS Ends Here



//Preloader JS Starts Here
var preloader = document.getElementById('loading');

function myFunction() {
    preloader.style.display = 'none';
}
//Preloader JS Ends Here

 


//Custom Type JS Starts Here
var typed = new Typed(".type", {
            strings: [

                "Web Design?",
                "Web Development?",
                "A WordPress Website?",
                "eCommerce Solution?",
            ],
            typeSpeed: 60,
            backSpeed: 60,
            loop: true

        });

//Custom Type JS Ends Here


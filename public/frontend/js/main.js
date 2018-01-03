/*

Template: saiful community center
Author: PeopleNtech
Version: 1
Design and Developed by: BM Rafiq + Masud Rana
NOTE: If you have any note put here. 

*/
/*================================================
[  Table of contents  ]
================================================
    01. jQuery MeanMenu
    02. wow js active
    03. scrollUp jquery active
    04. slick carousel 

 
======================================
[ End table content ]
======================================*/


(function($) {
    "use strict";


    /*-------------------------------------------
        01. jQuery MeanMenu
    --------------------------------------------- */
    jQuery('nav#dropdown').meanmenu();


    /*-------------------------------------------
        01. slicknav MobileMenu
    --------------------------------------------- */
    jQuery('header nav').meanmenu();


    /*-------------------------------------------
        02. wow js active
    --------------------------------------------- */
    new WOW().init();

    /*-------------------------------------------
        03. scrollUp jquery active
    --------------------------------------------- */
    /*----------------------------
        scrollUp
    ------------------------------ */
    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '300', // Distance from top before showing element (px)
        topSpeed: 300, // Speed back to top (ms)
        animation: 'fade', // Fade, slide, none
        animationInSpeed: 200, // Animation in speed (ms)
        animationOutSpeed: 200, // Animation out speed (ms)
        scrollText: '<span><i class="fa fa-angle-up"></i></span>' // Text for element
    });
    

    /*-------------------------------------------
        04. slick carousel 
    --------------------------------------------- */
    $('.your-class').slick({
          slidesToShow: 3,
          slidesToScroll: 1,
          autoplay: true,
          autoplaySpeed: 2000
    });

    /*------------------------------------------------
      Preloader
     -------------------------------------------------- */
    $("#fakeloader").fakeLoader({
        timeToHide:2000,
        zIndex:"9999999999999",//Default zIndex
        spinner:"spinner2",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
        bgColor:"rgba(0,33,33,33)", //Hex, RGB or RGBA colors

    });

    /*************************
          tooltip
    *************************/
    $('[data-toggle="tooltip"]').tooltip();


    /***********************
        Carousel active
    ***********************/
    $('.carousel-activator').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        freeDrag: true,
        mouseDrag: false
    });


    /****************************
        testimonial-activator
    *****************************/
    $('.testimonial-activator').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true
    });


    /****************************
        Slider opener
    *****************************/
        $('span.slider-social-trigger').on('click', function(){
            $('.slider-social').toggleClass('open');
            $(this).children('i.fa').toggleClass('fa-angle-right').toggleClass('fa-angle-left');
        });

        //imagesLoaded activation
        $('#container').imagesLoaded( function() {

            // init Isotope
            var $grid = $('.grid').isotope({
              itemSelector: '.grid-item',
              percentPosition: true,
              masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: 1
              }
            })

            // filter items on button click
            $('.protfolio-menu').on( 'click', 'button', function() {
              var filterValue = $(this).attr('data-filter');
              $grid.isotope({ filter: filterValue });
            });

            //for menu active class
            $('.protfolio-menu button').on('click', function(event) {
                $(this).siblings('.active').removeClass('active');
                $(this).addClass('active');
                event.preventDefault();
            });
        });


        lightbox.option({
          'resizeDuration': 700,
          'wrapAround': true
        })


// smooth scroll active
var scroll = new SmoothScroll('a[href*="#"]');

        $('.carousel-indicators li:nth-child(1)').addClass('active');
        $('.item:nth-child(1)').addClass('active');

})(jQuery);




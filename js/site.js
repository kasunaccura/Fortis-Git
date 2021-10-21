jQuery(document).ready(function ($) {


    $('.home-banner-slide').slick({
        centerMode: true,
        centerPadding: '25%',
        slidesToShow: 1,
        draggable: false,
        arrows: true,
        dots: false,
        focusOnSelect: true,
        prevArrow: '<i class="home fa fa-angle-left"></i>',
        nextArrow: '<i class="home fa fa-angle-right"></i>',
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    centerPadding: '15%',
                    // arrows: false,
                    centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    // arrows: false,
                    centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 481,
                settings: {
                    // arrows: false,
                    centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.home-service-first-slide').slick({
        // centerMode: true,
        // centerPadding: '25%',
        slidesToShow: 1,
        draggable: false,
        arrows: true,
        dots: false,
        autoplay: false,
        autoplay: true,
        focusOnSelect: true,
        prevArrow: '<i class="home-s fa fa-angle-left"></i>',
        nextArrow: '<i class="home-s fa fa-angle-right"></i>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    // arrows: false,
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 481,
                settings: {
                    // arrows: false,
                    // centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.home-project-slide').slick({
        // centerMode: true,
        // centerPadding: '25%',
        slidesToShow: 2,
        draggable: false,
        arrows: false,
        dots: false,
        focusOnSelect: true,
        autoplay: false,
        prevArrow: '<i class="home-s fa fa-angle-left"></i>',
        nextArrow: '<i class="home-s fa fa-angle-right"></i>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 481,
                settings: {
                    arrows: false,
                    centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });


    $('.home-slider-logos').slick({
        // centerMode: true,
        // rows: 1,
        variableWidth: true,
        centerPadding: '20px',
        slidesToShow: 6,
        draggable: false,
        arrows: false,
        dots: false,
        focusOnSelect: true,
        autoplay: true,
        prevArrow: '<i class="fa fa-angle-left"></i>',
        nextArrow: '<i class="fa fa-angle-right"></i>',
        responsive: [
            {
                breakpoint: 769,
                settings: {
                    // arrows: true,
                    // centerMode: true,
                    // rows: 2,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    // centerMode: true,
                    slidesToShow: 3
                }
            }
        ]
    });



    $('.home-partners-logos').slick({
        // centerMode: true,
        variableWidth: true,
        centerPadding: '20px',
        slidesToShow: 6,
        draggable: false,
        arrows: true,
        dots: false,
        focusOnSelect: true,
        autoplay: true,
        prevArrow: '<i class="fa fa-angle-left"></i>',
        nextArrow: '<i class="fa fa-angle-right"></i>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    // centerMode: true,
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    // centerMode: true,
                    slidesToShow: 3
                }
            }
        ]
    });


    $('.home-our-client').slick({
        centerMode: true,
        centerPadding: '0px',
        slidesToShow: 1,
        draggable: false,
        arrows: true,
        dots: false,
        focusOnSelect: true,
        prevArrow: '<i class="fa fa-angle-left"></i>',
        nextArrow: '<i class="fa fa-angle-right"></i>',
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 481,
                settings: {
                    arrows: false,
                    centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });




    // project

    jQuery('.gallery_top_nav_items_1').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        autoplay: false,
        prevArrow: '<i class="project fa fa-angle-left"></i>',
        nextArrow: '<i class="project fa fa-angle-right"></i>',
        dots: false,
        asNavFor: '.gallery_bottom_nav_items_1'
    });

    jQuery('.gallery_bottom_nav_items_1').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        asNavFor: '.gallery_top_nav_items_1',
        dots: false,
        arrows: false,
        dots: false,
        centerMode: true,
        // centerPadding: '60px',
        slidesToShow: 7,
        focusOnSelect: true,
        prevArrow: false,
        // autoplay:true,
        autoplay: true,
        infinite: true,
        centerMode: true,
        responsive: [
            {
                breakpoint: 1025,
                settings: {
                    slidesToShow: 5,
                }
            },
            {
                breakpoint: 481,
                settings: {
                    arrows: false,
                    centerMode: true,
                    // centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });

    // 2
    jQuery('.gallery_top_nav_items_2').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        autoplay: true,
        prevArrow: '<i class="project fa fa-angle-left"></i>',
        nextArrow: '<i class="project fa fa-angle-right"></i>',
        dots: false,
        asNavFor: '.gallery_bottom_nav_items_2'
    });

    jQuery('.gallery_bottom_nav_items_2').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        asNavFor: '.gallery_top_nav_items_2',
        dots: false,
        arrows: false,
        dots: false,
        centerMode: true,
        // centerPadding: '60px',
        slidesToShow: 7,
        focusOnSelect: true,
        prevArrow: false,
        autoplay: true,
        // autoplay:false,
        infinite: true,
        centerMode: true
    });
    // 2

    // 3
    jQuery('.gallery_top_nav_items_3').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        prevArrow: '<i class="project fa fa-angle-left"></i>',
        nextArrow: '<i class="project fa fa-angle-right"></i>',
        dots: false,
        asNavFor: '.gallery_bottom_nav_items_3'
    });

    jQuery('.gallery_bottom_nav_items_3').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        asNavFor: '.gallery_top_nav_items_3',
        dots: false,
        arrows: false,
        dots: false,
        centerMode: true,
        // centerPadding: '60px',
        slidesToShow: 7,
        focusOnSelect: true,
        prevArrow: false,
        autoplay: true,
        // autoplay:false,
        infinite: true,
        centerMode: true
    });
    // 3

    // 4
    jQuery('.gallery_top_nav_items_4').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: true,
        prevArrow: '<i class="project fa fa-angle-left"></i>',
        nextArrow: '<i class="project fa fa-angle-right"></i>',
        dots: false,
        asNavFor: '.gallery_bottom_nav_items_4'
    });

    jQuery('.gallery_bottom_nav_items_4').slick({
        slidesToShow: 7,
        slidesToScroll: 1,
        asNavFor: '.gallery_top_nav_items_4',
        dots: false,
        arrows: false,
        dots: false,
        centerMode: true,
        // centerPadding: '60px',
        slidesToShow: 7,
        focusOnSelect: true,
        prevArrow: false,
        autoplay: true,
        // autoplay:false,
        infinite: true,
        centerMode: true
    });
    // 4



    // project end



    // services

    $('.construction-slider').slick({
        // slidesToShow: 1,
        // draggable: false,
        // arrows: true,
        // dots: false,
        // focusOnSelect: true,
        // prevArrow: '<i class="services-c fa fa-angle-left"></i>',
        // nextArrow: '<i class="services-c fa fa-angle-right"></i>',
        slidesToScroll: 1,
        // asNavFor: '.gallery_top_nav_items_1',
        dots: false,
        arrows: true,
        prevArrow: '<i class="services-c fa fa-angle-left"></i>',
        nextArrow: '<i class="services-c fa fa-angle-right"></i>',
        dots: false,
        // centerMode: true,
        // centerPadding: '60px',
        slidesToShow: 1,
        focusOnSelect: true,
        // prevArrow: false,
        // autoplay:false,
        autoplay: true,
        infinite: true,
        // centerMode: true
    });




    // services end





    var a = 0;

    $(window).scroll(function () {



        var oTop = $('#counter').offset().top - window.innerHeight;

        if (a == 0 && $(window).scrollTop() > oTop) {

            $('.counter-value').each(function () {

                var $this = $(this),

                    countTo = $this.attr('data-count');

                $({

                    countNum: $this.text()

                }).animate({

                    countNum: countTo

                },



                    {



                        duration: 4000,

                        easing: 'swing',

                        step: function () {

                            $this.text(Math.floor(this.countNum));

                        },

                        complete: function () {

                            $this.text(this.countNum);

                            //alert('finished');

                        }



                    });

            });

            a = 1;

        }



    });


    // (function($) {
    /** change value here to adjust parallax level */
    //   var parallax = -0.5;

    //   var $bg_images = $(".wp-block-cover-image");
    //   var offset_tops = [];
    //   $bg_images.each(function(i, el) {
    //     offset_tops.push($(el).offset().top);
    //   });

    //   $(window).scroll(function() {
    //     var dy = $(this).scrollTop();
    //     $bg_images.each(function(i, el) {
    //       var ot = offset_tops[i];
    //       $(el).css("background-position", "0% " + (dy - ot) * parallax + "px");
    //     });
    //   });
    // })(jQuery);





});
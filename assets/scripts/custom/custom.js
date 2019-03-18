(function($){

    $(document).ready(function() {
console.log("Hello world!");
        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        /* ~~~~~~~~~~ Plugin Inits ~~~~~~~~~~ */
        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

            /* ~~~~~~~~~~ Match height ~~~~~~~~~~ */

            $('.match-height').matchHeight({
                byRow: true,
                property: 'min-height',
                target: null,
                remove: false
            });


            /* ~~~~~~~~~~ Select2 ~~~~~~~~~~ */

            $('select').select2();


            /* ~~~~~~~~~~ Retina init ~~~~~~~~~~ */

            retinajs();


            /* ~~~~~~~~~~ AOS init ~~~~~~~~~~ */

            AOS.init();

            $(window).on('load', function () {
                AOS.refresh();
            });


            /* ~~~~~~~~~~ Mobile navigation ~~~~~~~~~~ */

            $('.main-header').addClass('mmenu-fixed');

            if($('#wpadminbar').length) {
                $('#wpadminbar').addClass('mmenu-fixed');
            }

            var $menu = $("#mobile-navigation").mmenu({
                "extensions": [
                    "pagedim-black",
                    "theme-dark"
                ],
                "offCanvas": {
                    "position": "right"
                },
                "navbars": [
                    {
                        "position": "top"
                    }
                ]
            }, {
                classNames: {
                    fixedElements: {
                        fixed: "mmenu-fixed",
                        elemInsertSelector: '.main-content'
                    }
                }
            });

            var $icon = $("#mmenu-triger");
            var API = $menu.data( "mmenu" );

            $icon.on( "click", function() {
                if($icon.hasClass('is-active')) {
                    API.close();
                } else {
                    API.open();
                }
            });

            API.bind( "opened", function() {
               setTimeout(function() {
                  $icon.addClass( "is-active" );
               }, 10);
            });
            API.bind( "closed", function() {
               setTimeout(function() {
                  $icon.removeClass( "is-active" );
               }, 10);
            });


            /* ~~~~~~~~~~ Owl ~~~~~~~~~~ */

            var owlHelloSection = $('#hello-section__background-wrapper');
            owlHelloSection.owlCarousel({
                loop: true,
                margin: false,
                dots: false,
                autoplay: true,
                autoplayHoverPause: true,
                items: 1
            });

            $('.hello-section__background-wrapper-controls__single-control__button--left').click(function(e) {
                e.preventDefault();

                owlHelloSection.trigger('prev.owl.carousel');
            });

            $('.hello-section__background-wrapper-controls__single-control__button--right').click(function(e) {
                e.preventDefault();

                owlHelloSection.trigger('next.owl.carousel');
            });

            var owlInfoSection = $('.big-info-section__carousel');
            owlInfoSection.owlCarousel({
                loop: true,
                margin: 15,
                dots: true,
                autoplay: true,
                autoplayHoverPause: true,
                items: 1
            });

            var owlPartners = $('.partners__list');
            owlPartners.owlCarousel({
                loop: true,
                margin: false,
                dots: false,
                autoplay: true,
                autoplayHoverPause: true,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 3
                    },
                    576:{
                        items: 4
                    },
                    768:{
                        items: 5
                    }
                }
            });

            var owlThumbnails = $('.gallery-section__thumbnails');
            owlThumbnails.owlCarousel({
                loop: false,
                lazyLoad:true,
                nav: true,
                responsiveClass:true,
                responsive:{
                    0:{
                        items: 2,
                        nav: true,
                        margin: 15
                    },
                    768:{
                        items: 2,
                        nav: true,
                        margin: 30
                    },
                    992:{
                        items: 2,
                        nav: true
                    }
                }
            });


        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        /* ~~~~~~~~~~ Functions ~~~~~~~~~~ */
        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

            /* ~~~~~~~~~~ Modal fix ~~~~~~~~~~ */

            $('.modal').insertAfter($('body'));


            /* ~~~~~~~~~~ Set animation scroll when URL is with #anchor and make smooth scroll ~~~~~~~~~~ */

            $(function(){
                if ( window.location.hash ) scroll(0,0);
                setTimeout( function() { scroll(0,0); }, 1);

                var headerHeight = $('.main-header').height();

                if($('#wpadminbar').length) {
                    headerHeight += $('#wpadminbar').height();
                }

                $('.scroll').on('click', function(e) {
                    e.preventDefault();

                    $('html, body').animate({
                        scrollTop: ($($(this).attr('href')).offset().top - headerHeight) + 'px'
                    }, 1000, 'swing');
                });

                if(window.location.hash) {
                    $('html, body').animate({
                        scrollTop: ($(window.location.hash).offset().top - headerHeight) + 'px'
                    }, 1000, 'swing');
                }
            });


            /* ~~~~~~~~~~ Mail Button ~~~~~~~~~~ */


            $(window).scroll(function() {
                if ($(this).scrollTop() >= 100) {
                    $('.mail').addClass('mail--visible');
                } else {
                    $('.mail').removeClass('mail--visible');
                }
            });


            /* ~~~~~~~~~~ First content element fix ~~~~~~~~~~ */

            $('.content').prepend('<span class="first-element-fix"></span>');
            $('blockquote').prepend('<span class="first-element-fix"></span>');
            $('.panel').prepend('<span class="first-element-fix"></span>');


            /* ~~~~~~~~~~ Make dropdowns visible on hover ~~~~~~~~~~ */

            $('ul.navbar-nav li.dropdown').hover(function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeIn();
            }, function() {
                $(this).find('.dropdown-menu').stop(true, true).delay(50).fadeOut();
            });


            /* ~~~~~~~~~~ Delete empty <p> elements ~~~~~~~~~~~ */

            $('p').each(function() {
                var $this = $(this);
                if($this.html().replace(/\s|&nbsp;/g, '').length === 0)
                    $this.remove();
            });


            /* ~~~~~~~~~~ Lazy Scroll Parallax Fix ~~~~~~~~~~ */

             $(".lazy").Lazy({
                afterLoad: function(element) {
                    jQuery(window).trigger('resize').trigger('scroll');
                },
                effect: "fadeIn"
             });


            /* ~~~~~~~~~~ Collapse Options ~~~~~~~~~~ */

            $('.expanded-content-collapse-button').on('click', function() {
                $(this).remove();
            });

            $('.collapse').on('shown.bs.collapse', function () {
                jQuery(window).trigger('resize').trigger('scroll');
            });


            /* ~~~~~~~~~~ Counter Before ginput_container ~~~~~~~~~~ */

            $('#gform_wrapper_2 .gfield .ginput_container .medium').before( '<span class="counter">/12</span>' );


            /* ~~~~~~~~~~ Remove Label ~~~~~~~~~~ */

            $('.select2-container').remove();


            /* ~~~~~~~~~~ Add For Chosen Search Input Placeholder ~~~~~~~~~~ */

            $('.chosen-drop .chosen-search input').attr('placeholder','Find Desired Accommodation');


            /* ~~~~~~~~~~ Set minimum date for datepicker ~~~~~~~~~~ */

            if($('#input_2_5, #input_2_6').length) {

                $( "#input_2_5, #input_2_6" ).datepicker({ minDate: '0d'});

            }

            /* ~~~~~~~~~~ Gallery Tabs ~~~~~~~~~~ */

            $('.gallery-section__thumbnails .gallery-section__thumbnails__link').on('click', function() {

                $(this).tab('show');

                $('.gallery-section__thumbnails__link').removeClass('active');
            });


            /* ~~~~~~~~~~ Load more gallery button ~~~~~~~~~~~ */

            $(document).ready(function () {
                size_li = $(".gallery-list .single-image-link").size();
                y=3;
                x=3;
                $('.gallery-list .single-image-link:lt('+y+')').show();
                $('#loadMore').click(function () {
                    x= (x+5 <= size_li) ? x+5 : size_li;
                    $('.gallery-list .single-image-link:lt('+x+')').show();
                    $("#loadLess").addClass('visible');

                    if (x >= size_li) {
                        $("#loadMore").removeClass('visible');
                    }

                    jQuery(window).trigger('resize').trigger('scroll');
                });

                $('#loadLess').click(function () {
                    x=(x-5<0) ? 3 : x-5;
                    $('.gallery-list .single-image-link').not(':lt('+x+')').hide();
                    if (x <= 3) {
                        $("#loadLess").removeClass('visible');
                    }

                    if (x <= size_li) {
                        $("#loadMore").addClass('visible');
                    }

                    jQuery(window).trigger('resize').trigger('scroll');
                });
            });


            /* ~~~~~~~~~~ Change navigation after scroll ~~~~~~~~~~ */

            $(window).scroll(function() {
                if ($(this).scrollTop() >= 100) {
                    $('.main-header').addClass('main-header--scrolled');
                } else {
                    $('.main-header').removeClass('main-header--scrolled');
                }
            });


            /* ~~~~~~~~~~ Replace all SVG images with inline SVG ~~~~~~~~~~ */

            jQuery('img.svg').each(function(){
                var $img = jQuery(this);
                var imgID = $img.attr('id');
                var imgClass = $img.attr('class');
                var imgURL = $img.attr('src');

                jQuery.get(imgURL, function(data) {
                    var $svg = jQuery(data).find('svg');

                    if(typeof imgID !== 'undefined') {
                        $svg = $svg.attr('id', imgID);
                    }

                    if(typeof imgClass !== 'undefined') {
                        $svg = $svg.attr('class', imgClass+' replaced-svg');
                    }

                    $svg = $svg.removeAttr('xmlns:a');
                    $img.replaceWith($svg);
                }, 'xml');
            });

    });


    $(window).bind('load resize orientationChange', function () {

        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
        /* ~~~~~~~~~~ Functions ~~~~~~~~~~ */
        /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

            /* ~~~~~~~~~~ Bootstrap modal margin top if WP admin exist ~~~~~~~~~~ */

            if($('#wpadminbar').length) {
                $('.modal').on('shown.bs.modal', function (e) {
                    var modalHeight = $(this).find('.modal-content').height();
                    var WPAdminBarHeight = $('#wpadminbar').height();

                    if(modalHeight >= $(window).height()) {
                        $('.modal .vertical-alignment-helper').css("padding-top", (WPAdminBarHeight + 15));
                    } else {
                        $('.modal .vertical-alignment-helper').css("padding-top", 15);
                    }
                });
            }
    });


    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */
    /* ~~~~~~~~~~ Resuable functions ~~~~~~~~~~ */
    /* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ */

        /* ~~~~~~~~~~ Check if current devices is mobile ~~~~~~~~~~ */

        function isMobile() {
            try{ document.createEvent("TouchEvent"); return true; }
            catch(e){ return false; }
        }

})(jQuery);
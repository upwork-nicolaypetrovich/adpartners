$(window).on('load', function(){
    "use strict";


    // adaptation split
    function prCount () {
        let contentWidth = $('.content-area').width();
        let contentMargin = parseInt( $('.content-area').css('marginRight') );

        if ( $(window).width() > 1304 ) {

            $('.split').each(function() {
                let first = $(this).find("> div:first-child").data('width');
                let second = $(this).find("> div:last-child").data('width');
                
                let left = (contentWidth / 100 * first) + contentMargin;
                let right = (contentWidth / 100 * second) + contentMargin;
                let sum = left + right;
                
                let leftPr = left / (sum / 100);
                let rightPr = right / (sum / 100);
                
                $(this).find("> div:first-child").css('width', leftPr+'%');
                $(this).find("> div:last-child").css('width', rightPr+'%');
            });

            $('.carousel-conteiner').each(function() {

                let first = 0, second = 100;
                
                let left = (contentWidth / 100 * first) + contentMargin;
                let right = (contentWidth / 100 * second) + contentMargin;
                let sum = left + right;
                
                let leftPr = left / (sum / 100);
                
                $(this).css('right', '-'+leftPr+'%');
            });

        } else {
            $('.split > div:first-child').css('width', '');
            $('.split > div:last-child').css('width', '');
            $('.carousel-conteiner').css('right', '');
        }

        if ( $(window).width() > 920 && $(window).width() < 1304 ) {
            $('.split-920').each(function() { console.dir($(this));
                let first = $(this).find("> div:first-child").data('width-920');
                let second = $(this).find("> div:last-child").data('width-920');
                
                let left = (contentWidth / 100 * first) + contentMargin;
                let right = (contentWidth / 100 * second) + contentMargin;
                let sum = left + right;
                
                let leftPr = left / (sum / 100);
                let rightPr = right / (sum / 100);
                
                $(this).find("> div:first-child").css('width', leftPr+'%');
                $(this).find("> div:last-child").css('width', rightPr+'%');
            });
        }

    }
    prCount();
    $(window).on('resize', function(){ prCount(); });


    // navigation
    $("#nav-burger").click(function() {
        $("nav").show();
    });
    $("#menu-main-menu a").click(function() {
        event.stopPropagation();
    });
    $("#menu-main-menu").click(function() {
        if ( $(window).width() <= 920 )
            $("nav").hide();
    });


    // front scroll
    $("#front-scroll").click(function() {
        $([document.documentElement, document.body]).animate({
            scrollTop: $("header").offset().top
        }, 500, function() {
            $("#front-block").remove();
        });
    });
    $(window).on("resize scroll", function() {
        if ($('#front-block').length && !$("#front-block").isInViewport())
            $("#front-block").remove();
    });


    // viewport check
    $.fn.isInViewport = function() {
        let elementTop = $(this).offset().top;
        let elementBottom = elementTop + $(this).outerHeight();
        let viewportTop = $(window).scrollTop();
        let viewportBottom = viewportTop + $(window).height();
        return elementBottom > viewportTop && elementTop < viewportBottom;
    };


    // testimonials
    $(".testimonials-bullets li").click(function() {
        $(".testimonials-bullets li").removeClass( "active" );
        $(this).addClass( "active" );
        $(".testimonials-container li").hide();
        $("#testimonial-"+$(this).data('id')).show();
    });


    // book pop up
    $("#book-pop").click(function() {
        $('.book-pop-up-container').show();
    });
    $("#book-pop-up-close, .book-pop-up-container").click(function() {
        $('.book-pop-up-container').hide();
    });
    $(".book-pop-up").click(function( event ) {
        event.stopPropagation();
    });
    // ajax submit
    $(".booking-form").submit(function( event ) {
        event.preventDefault();
        $.post( front_ajax_object.ajax_url, {
            action: 'booking_form',
            data: $( this ).serialize(),
        }, function(response) {
            alert('Sent :)');
        });
    });


    // download form ajax submit
    $(".download-form").submit(function( event ) {
        event.preventDefault();
        $.post( front_ajax_object.ajax_url, {
            action: 'download_form',
            data: $( this ).serialize(),
        }, function(response) {
            alert('Sent :)');
        });
    });


    // carousel
    $("#carousel-what-we-do, #carousel-partners, #carousel-featured").slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        arrows: false,
        variableWidth: true,
    });

    $("#carousel-featured-button").clone().appendTo('#carousel-featured');


    // featured pop up
    $(".open-featured").click(function() {
        $( "#featured-item-container" ).empty();
        $('.featured-pop-up-container').show();
        $("#loading").show();

        // ajax download
        $.post( front_ajax_object.ajax_url, {
            action: 'featured',
            id: $(this).data('id'),
        }, function(response) {
            $("#loading").hide();
            $( "#featured-item-container" ).append(response);

            // featured scripts
            $('.featured-slider').slick({
                dots: true,
                infinite: true,
                speed: 300,
                slidesToShow: 1,
                adaptiveHeight: true,
                appendArrows: '.featured-controls>div:last-child',
                appendDots: '.featured-controls>div:first-child',
                nextArrow: '<button type="button" class="slick-next"><img src="/adpartners.git/wp-content/themes/webdesignsuntheme/assets/images/scroll.svg" alt="Next"></button>',
                prevArrow: '<button type="button" class="slick-prev"><img src="/adpartners.git/wp-content/themes/webdesignsuntheme/assets/images/scroll.svg" alt="Previous"></button>',
            });
        });

    });
    $("#featured-pop-up-close, .featured-pop-up-container").click(function() {
        $('.featured-pop-up-container').hide();
    });
    $(".featured-pop-up").click(function( event ) {
        event.stopPropagation();
    });

});
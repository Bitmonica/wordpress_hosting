		window.addEventListener('DOMContentLoaded', event => {



    // Navbar shrink function

    var navbarShrink = function () {

        const navbarCollapsible = document.body.querySelector('#mainNav');

        if (!navbarCollapsible) {

            return;

        }

        if (window.scrollY === 0) {

            navbarCollapsible.classList.remove('navbar-shrink')

        } else {

            navbarCollapsible.classList.add('navbar-shrink')

        }



    };



    // Shrink the navbar 

    navbarShrink();



    // Shrink the navbar when page is scrolled

    document.addEventListener('scroll', navbarShrink);



    // Activate Bootstrap scrollspy on the main nav element

    const mainNav = document.body.querySelector('#mainNav');

    if (mainNav) {

        new bootstrap.ScrollSpy(document.body, {

            target: '#mainNav',

            offset: 100,

        });

    };



    // Collapse responsive navbar when toggler is visible

    const navbarToggler = document.body.querySelector('.navbar-toggler');

    const responsiveNavItems = [].slice.call(

        document.querySelectorAll('#navbarResponsive .nav-link')

    );

    responsiveNavItems.map(function (responsiveNavItem) {

        responsiveNavItem.addEventListener('click', () => {

            if (window.getComputedStyle(navbarToggler).display !== 'none') {

                navbarToggler.click();

            }

        });

    });



});

		

// Shrink the navbar 

$(document).ready(function() {

    jQuery(".h-banner-slider").slick({
        infinite: true,
        arrows: false,
        dots: false,
        fade: true,
        autoplay: false,
        speed: 2000,
        autoplaySpeed: 1500,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    //ticking machine
    var percentTime;
    var tick;
    var time = 1;
    var progressBarIndex = 0;

    var progress = $('.inProgress');

    jQuery('.progressBarContainer .progressBar').each(function(index) {
        var progress = "<div class='inProgress inProgress" + index + "'></div>";
        $(this).html(progress);
    });

    function startProgressbar() {
        resetProgressbar();
        percentTime = 0;
        tick = setInterval(interval, 10);
    }

    function interval() {
        if (($('.h-banner-slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
            progressBarIndex = $('.h-banner-slider .slick-track div[aria-hidden="false"]').data("slickIndex");

            console.log(progressBarIndex);

            if (progressBarIndex == 1) {
                $(".inProgress0").addClass('on');
                $(".inProgress1").removeClass('on');
            } else if (progressBarIndex == 2) {
                $(".inProgress0").addClass('on');
                $(".inProgress1").addClass('on');
            } else if (progressBarIndex == 0) {
                $(".inProgress0").removeClass('on');
                $(".inProgress1").removeClass('on');
            }
            startProgressbar();

        } else {
            percentTime += 1 / (time + 4);
            $('.inProgress' + progressBarIndex).css({
                width: percentTime + "%"
            });
            if (percentTime >= 100) {
                $('.single-item').slick('slickNext');

                //console.log(progressBarIndex);

                if (progressBarIndex == 0) {
                    $(".inProgress0").addClass('on');

                } else if (progressBarIndex == 1) {
                    $(".inProgress0").addClass('on');
                    $(".inProgress1").addClass('on');
                } else if (progressBarIndex == 2) {
                    $(".inProgress0").removeClass('on');
                    $(".inProgress1").removeClass('on');
                }

                progressBarIndex++;

                if (progressBarIndex > 2) {
                    progressBarIndex = 0;
                }
                startProgressbar();

            }

        }
    }

    function resetProgressbar() {
        $('.inProgress').css({
            width: 0 + '%'
        });
        clearInterval(tick);
    }
    startProgressbar();
    // End ticking machine

    jQuery('.progressBarContainer div').click(function() {
        clearInterval(tick);
        var goToThisIndex = $(this).find("span").data("slickIndex");
        jQuery('.single-item').slick('slickGoTo', goToThisIndex, false);
        startProgressbar();
    });
});
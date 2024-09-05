$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        responsive: {
            0: {
                items: 3 // Number of items to show on screens smaller than 600px
            },
            600: {
                items: 2 // Number of items to show on screens between 600px and 1000px
            },
            1000: {
                items: 3 // Number of items to show on screens larger than 1000px
            }
        }
    });
});
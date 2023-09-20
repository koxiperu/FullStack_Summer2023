jQuery(document).ready(function () {

    jQuery('.owl-carousel').owlCarousel({
        margin: 10,
        nav: true,
        navText: ["<div class='nav-btn prev-slide'><i class='fa fa-angle-left'></i></div>", "<div class='nav-btn next-slide'><i class='fa fa-angle-right'></i></div>"],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    });
    jQuery('.btn-more').on('click', function () {
        jQuery(this).parents('.item').find('.review_txt').addClass('expand');
        jQuery(this).parents('.item').find('.more-txt').css('display', 'inline');
        jQuery(this).parents('.item').find('.btn-less').css('display', 'block');
        jQuery(this).css('display', 'none');
    });
    jQuery('.btn-less').on('click', function () {
        jQuery(this).parents('.item').find('.review_txt').removeClass('expand');
        jQuery(this).parents('.item').find('.more-txt').css('display', 'none');
        jQuery(this).parents('.item').find('.btn-more').css('display', 'inline');
        jQuery(this).css('display', 'none');
    });
});
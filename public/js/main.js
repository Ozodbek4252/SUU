//________HEADER_____________

$('.header-lang__open').click(() => {
    $('.header-profile__dropdown').hide()
    $('.header-lang__dropdown').fadeToggle(400)
})

$('.header-profile .header-side__btn').click(() => {
    $('.header-lang__dropdown').hide()
    $('.header-profile__dropdown').fadeToggle(400)
})


//________MOBILE-MENU____________

$('.header-mobile').click(() => {
    $('.mobile-menu').slideDown(600)
})

$('.header-mobile__open').click(() => {
    $('.mobile-menu').slideUp(600)
})


//_______MAIN-CAROUSEL_____________

let slideChange = () => {
    $('.main-animation').hide()
    $('.main-animation__item').removeClass('main-animation__item-show')

    setTimeout(() => {
        $('.main-animation').show()
        $('.main-animation__item').addClass('main-animation__item-show')
    }, 600)
}

$('.main-carousel').owlCarousel({
    items: 1,
    smartSpeed: 700,
    autoplay: true,
    lazyLoad: true,
    autoplayTimeout: 5000,
    loop: true,
    dots: true,
    nav: false,
    mouseDrag: false,
    onInitialized: slideChange,
    onChange: slideChange,
})


//_____________NEWS CAROUSEL__________


$('.news-carousel').owlCarousel({
    smartSpeed: 700,
    lazyLoad: true,
    dots: false,
    nav: false,
    mouseDrag: false,
    responsive: {
        0: {
            items: 1,
            margin: 20
        },

        600: {
            items: 2,
            margin: 20
        },

        992: {
            items: 3,
            margin: 20
        },

        1200: {
            items: 4,
            margin: 20
        },

        1500: {
            items: 4,
            margin: 30
        }
    }
})

$('.news-arrows .arrow-left').click(() => {
    $('.news-carousel').trigger('prev.owl.carousel', [700]);

})

$('.news-arrows .arrow-right').click(() => {
    $('.news-carousel').trigger('next.owl.carousel', [700]);
})


//_____________FEEDBACK__________

$('.feedback-open').click(e => {
    e.preventDefault()
    $('.popup-layer').show()
    $('.feedback').addClass('feedback-show')
})


$('.popup-layer').click(function() {
    $(this).hide()
    $('.feedback').removeClass('feedback-show')
})


//_____________LOGIN__________

$('.header-profile__login').click(e => {
    e.preventDefault()
    $('.popup-layer').show()
    $('.login').addClass('login-show')
    $('.header-lang__dropdown').hide()
    $('.header-profile__dropdown').fadeToggle(400)
})


$('.popup-layer').click(function() {
    $(this).hide()
    $('.login').removeClass('login-show')
})


//____________SIDE-BASKET_________

$('.products-list__basket').click(function() {
    $('.side-basket__layer').fadeIn(500)
    $('.side-basket').addClass('side-basket-show')
})

$('.side-basket__layer').click(function() {
    $(this).fadeOut(500)
    $('.side-basket').removeClass('side-basket-show')
})


$(document).ready(function() {
    $.dobPicker({
        daySelector: '#dobday',
        monthSelector: '#dobmonth',
        yearSelector: '#dobyear',
        minimumAge: 12,
        maximumAge: 80
    });

    $.dobPicker({
        daySelector: '#dobday-cabinet',
        monthSelector: '#dobmonth-cabinet',
        yearSelector: '#dobyear-cabinet',
        minimumAge: 12,
        maximumAge: 80
    });
});



// ____________WATER ANIMATION_____________


$(".water-anim").ripples({
    resolution: 450,
    perturbance: 0.05,
    interactive: true,
    dropRadius: 12
});


// ____________ABOUT ANIMATION_____________

$(window).on('load', () => {
    $('.about-water .water').css('transform', 'none')
    setTimeout(() => {
        $('.about-water .ice').css('opacity', '1')
    }, 1300);

    new WOW({
        offset: 50,
        mobile: false
    }).init();
})

//____________ABOUT CAROUSEL__________


$('.about-products__carousel').owlCarousel({
    smartSpeed: 700,
    dots: false,
    nav: false,
    mouseDrag: false,
    loop: true,
    center: true,
    items: 3,
    margin: 20,
    // responsive: {
    //     0: {
    //         items: 1,
    //         margin: 20
    //     },

    //     600: {
    //         items: 2,
    //         margin: 20
    //     },

    //     992: {
    //         items: 3,
    //         margin: 20
    //     },
    // }
})

$('.about-products__arrows .arrow-left').click(() => {
    $('.about-products__carousel').trigger('prev.owl.carousel', [700]);
})

$('.about-products__arrows .arrow-right').click(() => {
    $('.about-products__carousel').trigger('next.owl.carousel', [700]);
})


//____________CABINET TABS__________

$('.cabinet-menu li').click(function() {
    let index = $(this).index('.cabinet-menu li')
    $('.cabinet-menu li').removeClass('active')
    $(this).addClass('active')
    $('.cabinet-tab').hide()
    $('.cabinet-tab').eq(index).show()
})



//___________ORDER__________

$('.order-item .btn').click(function() {
    $(this).parent().find('.btn').removeClass('active')
    $(this).addClass('active')
})


//____________BASKET_________

$('.basket-item__open').click(function() {
    $(this).toggleClass('active')
    $(this).parent().toggleClass('basket-item-active')
    $(this).parent().find('.basket-item__dropdown').slideToggle(600)
})

$('.basket-form__card').click(function() {
    $('.basket-form__card').removeClass('active')
    $(this).addClass('active')
})

$('.basket-form__choose').on('input', function() {

    if($('.basket-form__choose #card').prop('checked')) {
        $('.basket-form__cards').css('display', 'flex')
    } else {
        $('.basket-form__cards').css('display', 'none')
    }
})


//_____________INPUTMASK__________


$('.form__tel').inputmask("+\\9\\98 99 999 99 99")

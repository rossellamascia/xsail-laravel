//focus modal
let focusModal = (idTrigger, idFocus) => { document.querySelector(idTrigger).addEventListener('click', () => { setTimeout(() => { document.querySelector(idFocus).focus() }, 500) }); }
focusModal('#modal-register-form', '#username');
focusModal('#trigger-login', '#f-email');
focusModal('#t-search', '#f-search');

// caroselli
var swiper = new Swiper('.swiper-container', {
    loop: true,
    pagination: {
        el: '.swiper-pagination',
        clickable: true,
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    breakpoints: {
        576: {
            slidesPerView: 1,
            spaceBetween: 20,
        },
        768: {
            slidesPerView: 2,
            spaceBetween: 40,
        },
        992: {
            slidesPerView: 2,
            spaceBetween: 10,
        },
        1024: {
            slidesPerView: 3,
            spaceBetween: 20,
        },
    }
});
//caroselli prodotto
var swiper = new Swiper('.swiper-container-p', {
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
//nav scoll
let navbar = document.querySelector('#navbar')
let navbarBrand = document.querySelector('#navbarLogo')
let topbar = document.querySelector('#topbar')


if (window.innerWidth < 567) {
    navbar.classList.add('bg-main', 'shadow')
} else {
    document.addEventListener('scroll', () => {
        let navbar = document.querySelector('#navbar')
        let scrolled = window.pageYOffset
        if (scrolled > 40) {
            topbar.classList.add('d-none')
            navbar.classList.remove('bg-transparent')
            navbar.classList.add('bg-main', 'shadow')
        } else {
            topbar.classList.remove('d-none')
            navbar.classList.remove('bg-main', 'shadow')
            navbar.classList.add('bg-transparent')
        }
    })
}


$(function () {
    $('[data-toggle="popover"]').popover()
})
$(function () {
    $('input[name="daterange"]').daterangepicker({
        opens: 'left'
    }, function (start, end, label) {
        console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
    });
});
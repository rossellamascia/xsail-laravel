document.getElementById('login').addEventListener('click', () => {
    $('#register-form').modal('hide')
    $('#login').modal('show')
 })
document.getElementById('register').addEventListener('click', () => {
    $('#login').modal('hide')
    $('#register-form').modal('show')
 })

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
        if (scrolled > 20) {
            topbar.classList.add('d-none')
            navbar.classList.remove('bg-transparent')
            navbar.classList.add('bg-main', 'shadow')
        } else {
            topbar.classList.remove('d-none')
            navbar.classList.remove('bg-main', 'shadow' ,'mt-5')
            navbar.classList.add('bg-transparent')
        }
    })
}
// Prevent event bubble up to window.
document.getElementById("stopClose").addEventListener('click', function (event) {
    event.stopPropagation();
});
document.addEventListener("DOMContentLoaded", () => {
    moment.locale('it');
    $('#datePicker').daterangepicker();
    $(function () {
        $('input[name="daterange"]').daterangepicker({
            "locale": {
                "applyLabel": "Applica",
                "cancelLabel": "Cancella",
            },
            opens: 'left'
        });
    });
    $(function () {
        moment.locale('it');
        $('input[name="datetimes"]').daterangepicker({
            timePicker: true,
            startDate: moment().startOf('hour'),
            endDate: moment().startOf('hour').add(48, 'hour'),
            language: 'it',
            timePicker24Hour: true,
            locale: {
                format: 'DD/M hh:mm',
                "applyLabel": "Applica",
                "cancelLabel": "Cancella",
            }
        });
    });
})
//bottone persone adulti
document.getElementById("down").addEventListener("click", () => {
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) - 1;
    if (document.getElementById("myNumber").value <= parseInt(0)) {
        document.getElementById("myNumber").value = 0;
    }
})
document.getElementById("up").addEventListener("click", () => {
    document.getElementById("myNumber").value = parseInt(document.getElementById("myNumber").value) + 1;
    if (document.getElementById("myNumber").value >= parseInt(10)) {
        document.getElementById("myNumber").value = 10;
    }
})

//bottone persone bambini
document.getElementById("downChildren").addEventListener("click", () => {
    document.getElementById("numChildren").value = parseInt(document.getElementById("numChildren").value) + 1;
    if (document.getElementById("numChildren").value >= parseInt(10)) {
        document.getElementById("numChildren").value = 10;
    }
})

document.getElementById("upChildren").addEventListener("click", () => {
    document.getElementById("numChildren").value = parseInt(document.getElementById("numChildren").value) - 1;
    if (document.getElementById("numChildren").value <= parseInt(0)) {
        document.getElementById("numChildren").value = 0;
    }
})

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
            slidesPerView: 4,
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






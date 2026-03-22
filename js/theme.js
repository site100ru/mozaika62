/* Parallax home section */
$(window).scroll(function (e) {
    var scrolled = $(window).scrollTop();
    $('.parallax-home-section').css('top', (-(scrolled * .35)) + 'px'); // 35 - скорость прокрутки
    $('.parallax-home-section-closets').css('top', (-(scrolled * .35)) + 'px'); // 35 - скорость прокрутки
    $('.index-parallax-home-section').css('top', (-(scrolled * .35)) + 'px'); // 35 - скорость прокрутки
    $('.jobs-home-section').css('top', (-(scrolled * .35)) + 'px'); // 35 - скорость прокрутки
    $('.closets-home-section').css('top', (-(scrolled * .35)) + 'px'); // 35 - скорость прокрутки
    $('.parallax-home-section-portfolio').css('top', (-(scrolled * .35)) + 'px'); // 35 - скорость прокрутки
    $('.home-cucina-parallax-home-section').css('top', (-(scrolled * .35)) + 'px'); // 35 - скорость прокрутки
});

/* End parallax home section */

jQuery(function ($) {
    $(window).on('scroll', function () {
        const scrollTop = $(window).scrollTop();
        const sectionTop = $('.parallax-background').offset().top;
        const sectionHeight = $('.parallax-background').outerHeight();

        if (scrollTop + window.innerHeight > sectionTop &&
            scrollTop < sectionTop + sectionHeight) {

            const offset = (scrollTop - sectionTop) * 0.35;
            $('.parallax-background').css('transform', `translateY(${offset}px)`);
        }
    });
});

/* Функция "Выезжало */
function vyezjalo() {
    onscroll = function () {
        var prokrutka = window.pageYOffset;
        if (window.screen.width >= 992) {
            if (prokrutka > 400) {
                document.getElementById('sliding-header').style.top = '0px';
            } else if (prokrutka <= 400) {
                document.getElementById('sliding-header').style.top = '-100px';
            }
        }
    }
}


/* Функция "Прилипало" */
function prilipalo() {
    window.addEventListener('scroll', function () {
        var prokrutka = window.pageYOffset;
        var screenWidth = window.innerWidth;

        if (screenWidth >= 1200) {
            if (prokrutka > 57) {
                document.getElementById('header-2-bottom').classList.add('fixed-top');
                document.getElementById('header-2-bottom').style.position = 'fixed';
                document.getElementById('header-2-bottom').style.top = 0;
            } else {
                document.getElementById('header-2-bottom').classList.remove('fixed-top');
                document.getElementById('header-2-bottom').style.position = 'absolute';
                document.getElementById('header-2-bottom').style.top = '57px';
            }
        } else {
            document.getElementById('header-2-bottom').style.position = '';
            document.getElementById('header-2-bottom').style.top = 0;
            document.getElementById('header-2-bottom').classList.add('fixed-top');
        }
    });
}


/* Убираем сообщение об успешной отправки */
function modalClose() {
    document.getElementById('background-msg').style.display = 'none';
    document.getElementById('message').style.display = 'none';
    document.getElementById('btn-close').style.display = 'none';
}
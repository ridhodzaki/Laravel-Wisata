// event di klik
$('.smooth-scroll').on('click', function (e) {

    var href = $(this).attr('href');

    var hrefTujuan = $(href);

    if ($(window).width() <= 425) {
        var margin = 220;
    } else if ($(window).width() > 425 && $(window).width() <= 768) {
        var margin = 140;
    } else {
        var margin = 60;
    }

    $('html, body').animate({
        scrollTop: hrefTujuan.offset().top - margin
    }, 1400, 'easeInOutExpo');

    $('.smooth-scroll').removeClass('active');
    $(this).addClass('active');

    e.preventDefault();

});


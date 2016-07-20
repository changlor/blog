(function() {
    $('#logo').animate({
        'padding-top': '250px',
        'padding-bottom': '250px'
    }, 1000);
    $(window).scroll(function() {
        if ($(window).scrollTop() < 100) {
            $('.custom-menu-blur').css('opacity', '0');
            $('.dynamic-font-color').css('color', '#777');
        } else if ($(window).scrollTop() > 150) {
            $('.dynamic-font-color').css('color', '#fff');
            $('.custom-menu-blur').css('opacity', '0.9');
        } else if ($(window).scrollTop() > 100 && $(window).scrollTop() < 150) {
            var blurOpacity = ($(window).scrollTop() - 100) * 9 / 500;
            $('.dynamic-font-color').css('color', '#fff');
            $('.custom-menu-blur').css('opacity', blurOpacity);
        }
    });
})()

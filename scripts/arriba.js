$(document).ready(function(){
    $('.ir-arriba').click(function(){
            $('body, html').animate({
                scrollTop: '0px'
            }, 100);
    });
    $(window).scroll(function(){
        if ( $(this).scrollTop() > 200) {
            $('.ir-arriba').slideDown(300);
        }else{
            $('.ir-arriba').slideUp(300);
        }
    });

});

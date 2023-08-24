$(document).ready(function() {
    $(window).scroll(function() {
        if ($(this).scrolltop() > 1){
            $('.page-title').addClass("sticky");
        }
        else{
            $('.page-title').removeClass("sticky");
        }

    });
});
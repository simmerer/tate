jQuery(function($) {
    // reposition video thumbs for narrow widths

    $(document).ready(function(){
        // $('html, body').animate({
        //     scrollTop: $(window.location.hash).offset().top
        // }, 1500);
    });

    $(window).bind("load resize", function(){
        var w = $(window).width();
        var h = $('.html5gallery-car-0').height();

        if(w < 958) {    
            $('.html5gallery-box-0').css({'top': h});
            $('.primary').css({'margin-bottom' : h});
            $('.page-video .html5gallery-box-0').css({'top': h + 40});
            $('.page-video article').css({'top': h + 40});
            $('.page-video .primary').css({'margin-bottom' : h + 40});
            $('.html5gallery-car-0').attr('style','position: absolute !important; top: 0;');
        } else {
            $('.html5gallery-box-0').attr('style','');
            $('.html5gallery-car-0').attr('style','position: relative !important');
            $('.page-video article').css({'top': 'auto'});
        }
    });
});
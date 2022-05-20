$(document).ready(function(){
    deskmdiff();
    $(window).resize(function(){
        deskmdiff();
      });

    $('.gnb_1dli').click(function(){
        if($(this).hasClass('li_view')){
            $(this).removeClass('li_view');
        } else{
            $(this).addClass('li_view');
        }
    })

    $('.pc #gnb_1dul').mouseover(function(){
        $('#hd_wrapper').addClass('bgcolor');
    })
    $('.pc #gnb_1dul').mouseout(function(){
        $('#hd_wrapper').removeClass('bgcolor');
    })

    $('.navbar-toggler').click(function(){
        if($('#hd_wrapper').hasClass('bgcolor')){
            $('#hd_wrapper').removeClass('bgcolor');
        } else{
            $('#hd_wrapper').addClass('bgcolor');
        }
    })
   
    
})

function deskmdiff(){
    if($(window).width() > 991 ){
        $('html').addClass('pc');
    }else{
    $('html').removeClass('pc');
    $('#navbarNavDropdown').removeClass('show');

    }
}







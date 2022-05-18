// $(document).ready(function(){
//     $('.gnb_1dli').click(function(){
//         $('.gnb_1dli').removeClass('show')
//         $(this).addClass('show')
//     })
// })


$(document).ready(function(){
    $('.gnb_1dli').click(function(){
        if($(this).hasClass('show')){
            $(this).removeClass('show');
        } else{
            $(this).addClass('show');
        }
    })
})

$(document).ready(function(){
    $('#portfolio_3 .portfolio_div.flip-container').click(function() {
        $(this).toggleClass('hover');
    });

    $('#portfolio_5 .tab_filter').click(function(){
        $('.tab_filter').removeClass('active');
        $(this).addClass('active');
    });

    $('.portfolio_6_div').slick({
        prevArrow:'<i class="arrow_left fa fa-chevron-left"></i>',
        nextArrow:'<i class="arrow_right fa fa-chevron-right"></i>',
        dots:true
    });
});
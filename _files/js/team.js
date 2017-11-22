$(document).ready(function(){
    $('.team_8_div').slick({
        prevArrow:'<i class="arrow_left fa fa-chevron-left"></i>',
        nextArrow:'<i class="arrow_right fa fa-chevron-right"></i>',
        dots:true,
        slidesToShow: 3,
        slidesToScroll: 3,
        responsive: [
            {
              breakpoint: 1366,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true
              }
            }
            // You can unslick at a given breakpoint now by adding:
            // settings: "unslick"
            // instead of a settings object
          ]
    });
    $('.team_9_div').slick({
        prevArrow:'<i class="arrow_left fa fa-chevron-left"></i>',
        nextArrow:'<i class="arrow_right fa fa-chevron-right"></i>',
        dots:true
    });
    $('.team_10_div').slick({
        prevArrow:'<i class="arrow_left fa fa-chevron-left"></i>',
        nextArrow:'<i class="arrow_right fa fa-chevron-right"></i>',
        dots:true
    });
});
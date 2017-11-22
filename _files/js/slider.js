$(document).ready(function(){
    $('.slider_1_div').slick({
        prevArrow:'<i class="arrow_left fa fa-chevron-left"></i>',
        nextArrow:'<i class="arrow_right fa fa-chevron-right"></i>',
        dots:true
    });
    $('.slider_2_div').slick({
        prevArrow:'',
        nextArrow:'<i class="arrow_right fa fa-chevron-right"></i>',
        dots:true
    });
    $('.slider_3_div').slick({
        prevArrow:'<i class="arrow_left fa fa-chevron-left"></i>',
        nextArrow:'<i class="arrow_right fa fa-chevron-right"></i>',
        dots:true
    });
    $('.slider_4_div').slick({
        prevArrow:'<i class="arrow_left fa fa-chevron-left"></i>',
        nextArrow:'<i class="arrow_right fa fa-chevron-right"></i>',
        dots:true
    });
    $('.slider_5_div').slick({
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
    $('.slider_6_div').slick({
        prevArrow:'<i class="arrow_left fa fa-chevron-left"></i>',
        nextArrow:'<i class="arrow_right fa fa-chevron-right"></i>',
        dots:true,
        initialSlide: 1,
        slidesToShow: 3,
        slidesToScroll: 3,
        centerMode: true,
        centerPadding: '20px',
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
    $('.slider_7_div').slick({
        prevArrow:'<i class="arrow_left fa fa-chevron-left"></i>',
        nextArrow:'<i class="arrow_right fa fa-chevron-right"></i>',
        dots:true
    });
});
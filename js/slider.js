$('.five-cont__slider-block').slick({
  slidesToShow: 2,
  arrows: true,
  infinite: true,
  responsive: [
  {
    breakpoint: 1399,
    settings: {
      slidesToShow: 1
    }
  },
  {
    breakpoint: 768,
    settings: {
      arrows: false,
      centerMode: true,
      centerPadding: '40px',
      slidesToShow: 3
    }
  },
  {
    breakpoint: 480,
    settings: {
      arrows: false,
      centerMode: true,
      centerPadding: '40px',
      slidesToShow: 1
    }
  }
  ]
});

$('.one-cont__one-img').slick({
  slidesToShow: 1,
  arrows: false,
  autoplay: true,
  infinite: true
});

jQuery(document).ready(function(){
  function classFunction(){
    if(jQuery('body').width()<575){ 
     $('.two-cont__sentence-block').slick({
      slidesToShow: 2,
      arrows: false,
      autoplay: true,
      infinite: true
    });

     $('.four-cont__verification-block').slick({
      slidesToShow: 1,
      arrows: false,
      autoplay: true,
      infinite: true
    });

   }
   else{

  }
}

classFunction();
jQuery(window).resize(classFunction);
})
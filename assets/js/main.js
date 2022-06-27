
var $status = $('.pagingInfo');
var $slickElement = $('.slider');

$slickElement.on('init reInit afterChange', function (event, slick, currentSlide, nextSlide) {
  //currentSlide is undefined on init -- set it to 0 in this case (currentSlide is 0 based)
  if(!slick.$dots){
    return;
  }
  
  var i = (currentSlide ? currentSlide : 0) + 1;
  $status.text(i + '/' + (slick.$dots[0].children.length));
  console.log($status);
});

$slickElement.slick({
  infinite: false,
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: true,
  fade: false,
  dots:true,
  autoplay:false,
  autoplaySpeed: 3000,
  prevArrow:'<button class="slick-prev"> < </button>',
  nextArrow:'<button class="slick-next"> > </button>',
});

new WOW().init();

$('.wow').click(function(){
  new WOW().init();
});

$(window).scroll(function () {
  var scroll = $(window).scrollTop();
  if (scroll > 50) {
    $(".header").addClass("active-h");
    
  } else {
    $(".header").removeClass("active-h");
  }
});

$('.menu a[href^="#"]').on('click', function(event) {
  var target = $( $(this).attr('href') );
  var number = 100
  if( target.length ) {
    event.preventDefault();
    $('html, body').animate({
      scrollTop: target.offset().top - number
    }, 500);
  }
  $('.nav-kd a').removeClass('active');
  $(this).addClass('active');
});


$('.js-menu').click(function(){
  $(this).toggleClass('active');
  $('.header .menu').toggleClass('active-m');
});
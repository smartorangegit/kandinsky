//animate open-menu
var navList = $('.menu-open__item');
var navListLength = navList.length;
var tamplateItem = '<div class="open-menu__anim-pict"></div>';
var circlHeight = 0;
var currentSlide = {};
var navWidth = 0;


function getId(elem){
	return $(elem).attr('id').replace(/\D/g ,'');
}

function getBg(elem) { // getting bg url
	var data = $(elem).attr('data-img');
	var val = 'url("' + data + '") center center no-repeat';
	return val;
}

function setBg(elem, str) { //setting bg url
	elem.css({
    'background': str,
    'background-size': 'cover'
  });
}


$('.header__menu-btn').on('click', function(){
  $('.menu-open').fadeToggle();
  $('.menu-open__inner').toggleClass('active');
  $('.open-menu__anim-pict').eq(0).addClass('active');
  $('body').toggleClass('no-scroll');
  for(var i = 0; i < navListLength; i++) {
    (function(i){
      return setTimeout(function(){
        navList.eq(i).toggleClass('slideleft');
      },i*100);
    })(i);
  }
  var lol = document.getElementById('menu-item-0').offsetTop;
  navWidth = $('.nav').width();
  console.log(navWidth);
	
})

navList.on('mouseover', function(){
	var elem = $(this);
	var elemInner = elem.find('.menu-open__item_inner');
  	var elemBg = $('.open-menu__anim-pict');
  	var data = elemInner.attr('data-img');
	var id = getId(elem);
	var elemPict = $('#anim-pict-' + id);
	elem.find('.anim-triangle').addClass('active').css({'left' : navWidth});
	circlHeight = -( $('.menu-open__pict').width()  / 2) + this.offsetTop - $(this).height() *2;
	$('.decorative-circle').css('top',circlHeight);
	$('.decorative-circle').removeClass('active');
	setTimeout(function(){
		
		$('.decorative-circle').addClass('active');
		
		
	},400)
	setTimeout(function(){
		
		elemBg.removeClass('active');
		
	},700)
	
	setTimeout(function(){
		
		
		elemPict.addClass('active');
	},1000)
	setTimeout(function(){
		
		$('.decorative-circle').removeClass('active');
		
	},1200)
});
navList.on('mouseleave', function(){
	var elem = $(this);
	elem.find('.anim-triangle').removeClass('active').css({'left' : '100%'});
});


for(var i = 0; i < navListLength; i++) {
  var elem = $(tamplateItem).clone();
  var elemId = 'anim-pict-' + getId(navList.eq(i));
  var bgUrl =  getBg(navList.eq(i).find('.menu-open__item_inner'));
  setBg(elem, bgUrl);
  elem.attr('id',elemId);
   $('.menu-open__pict').append(elem);
}



/*var lol = document.getElementById('menu-item-5').getBoundingClientRect().top;
  console.log(lol);*/



//animate open-menu end

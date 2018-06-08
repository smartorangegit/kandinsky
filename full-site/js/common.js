/*$('#submit').on('click', function(e){
	e.preventDefault();
	var elem = $('#form-send');
	var data = elem.serialize();
	var regExpTel = /^((8|\+3)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$/i;
	var regExpEmail = /.+@.+\..+/i;
	var elemEmail = elem.find('input[type="email"]');
	var elemTel = elem.find('input[type="tel"]');
	var email = elemEmail.val();
	var tel = elemTel.val();
	
	if(regExpTel.test(tel) ) {
		
		$.ajax({
			method: 'POST',
			url: 'post.php',
			data: data,
			success: function(){
			  alert('Сообщение отправлено');
			  $('#form-send')[0].reset();
			  $.magnificPopup.close();
			},
			error: function(){
				alert("Произошла ошибка");
			},
		});			
	} else {
		elemTel.css({'border-color': 'red'})
	} 
	
	

});*/

var globalTimeOut = 2500;

if (sessionStorage.getItem("preloader")) {
  $('.preloader').css('display', "none");
  globalTimeOut = 0;
} else {
  (function(){
  	/*var snapB = Snap("#svgB");*/
    var lineColor = '#e5e5e5';
    var delay = 200;
  	var arrLines = $('.path-line');
    var elements = Array.prototype.slice.call( document.getElementsByClassName( 'path-line' ), 0);
    var smallLine = Array.prototype.slice.call( document.getElementsByClassName( 'small-line' ), 0);
    var preload = document.getElementById( 'preloaderSVG' ); // main word
    var circle = document.getElementById( 'circle-svg' ); // circle
    var circleLine = document.getElementById( 'circle-line' ); // line above circle
    var circleLength = 733.143798828125; // circle.getTotalLength();
    console.log(circleLength);
    var circleLineLength = circleLine.getTotalLength();
    /*var preload = $('#preloaderSVG');*/
    var elementsLength = elements.length;
    var arrLength = elements.length;
    var randArr = [];
    var lenPath = preload.getTotalLength();
    preload.style.strokeDasharray = lenPath + ' ' + lenPath;
    preload.style.strokeDashoffset = lenPath;
    preload.style.strokeWidth = '3';
    //4.45
    circle.style.strokeDasharray = circleLength  + ' ' + circleLength * 1.5;
    circle.style.strokeDashoffset = circleLength * 4;

    circleLine.style.strokeDasharray = circleLineLength  + ' ' + circleLineLength;
    circleLine.style.strokeDashoffset = circleLineLength;
    
    setTimeout(function(){ // animate main letters
      circleLine.style.transition = 0.25 + 's';
      circleLine.classList.add( 'animateLines' );
      circleLine.style.strokeDashoffset = -circleLineLength * 0.35; 
    }, globalTimeOut * 0.45);

    setTimeout(function(){ // animate main letters
      circle.style.transition = 1.0 + 's';
      circle.classList.add( 'animateLines' );
      circle.style.strokeDashoffset = circleLength * 4.45; 
    }, globalTimeOut * 0.3);

    function makeRandArr(arr) {
      var randVal = Math.floor(Math.random() * elementsLength);
    }
    /*makeRandArr();*/

    for (var i = 0; i < elementsLength; i++) {
    
      var randVal = Math.floor(Math.random() * arrLength);
      var element = elements[randVal];
      var length = element.getTotalLength();
      element.style.strokeWidth = '3';
      element.style.strokeDasharray = length + ' ' + length;
      element.style.strokeDashoffset = length;
      (function(element, i){
        return setTimeout( function() {
            element.classList.add( 'animateLines' );
            element.style.transition = 5/i + 's';
            element.style.strokeDashoffset = -length;
            //console.log(element);
        }, delay * i );
      })(element, i);
      elements.splice(randVal, 1);
      arrLength = elements.length;
    }
    
    setTimeout(function(){ // animate main letters
      preload.classList.add('animateSCG');
      preload.style.visibility = 'visible';  
      preload.style.strokeDashoffset = lenPath / 2;  
    },0);

     setTimeout(function(){ // animate small lines
      smallLine.forEach( function( element, index ) {
        var length = element.getTotalLength();
        element.style.strokeWidth = '3';
        element.style.strokeDasharray = length + ' ' + length;
        element.style.strokeDashoffset = length;
        setTimeout( function() {
          element.style.strokeDashoffset = -length * 0.8;
          element.classList.add( 'animateLines' );
        }, delay * index );
      });   
    }, delay * elementsLength);

   	$('body').addClass('no-scroll');
  	setTimeout(function(){
  		$('.preloader').fadeOut(1200);
  		$('body').removeClass('no-scroll');
  	},globalTimeOut + 400);

    sessionStorage.setItem("preloader","true");
  })();
}

setTimeout( function(){
  (function(){
    var elemLine = $('.view-more__line');
    var viewMore = $('.view-more__link');
    var windowHeight = $(window).height();
    var postTitle = $('.post__title');
    var advantagesMainTitle = $('.advantages-main__title');
    var mainPageTitle = $('.main-page__title');
    elemLine.addClass('active');
    mainPageTitle.addClass('active');
    postTitle.addClass('visible');
    setTimeout(function(){
      viewMore.addClass('active');
      postTitle.addClass('active');
      advantagesMainTitle.addClass('active');
    },1400);

  viewMore.on('click',function(e){
    e.preventDefault();
    $('html, body').animate({
      scrollTop: windowHeight
    }, 700);
  })
})();
  
  setAnimation('.about', 'animate');
  setAnimation('.curve-line', 'animate');
  setAnimation('.block-end', 'animate');
  setAnimation('.about-kand__left-pict', 'animate');
  setAnimation('.about-kand__right-pict', 'animate');
  setAnimation('.about-company__pict', 'animate');
  setAnimation('.bordered', 'activeWidth',0);
  setAnimation('.bordered', 'activeHeight',600);
  setAnimation('.modern-place__pict img', 'vissible',1400);
  setAnimation('.architection__about_pict img', 'fadeIn',1400);
  setAnimation('.architection__about_title', 'animate');
  setAnimation('.architection__about_text', 'animate');
  setAnimation('.architection__about_title', 'underline',1400);
  setAnimation('.about__title', 'animate');
  setAnimation('.news__item', 'animate');
  setAnimation('.news__item', 'animate');
  setAnimation('.location-main__description', 'fadeIn');
  setAnimation('.architection-main__title', 'fadeIn');
  setAnimation('.developers', 'fadeIn');
  setAnimation('.infostruction__about', 'fadeIn');
  setAnimation('.infostruction__main_text', 'fadeIn');
  setAnimation('.infostruction__advantages_item', 'fadeIn');
  setAnimation('.modern-place__title_inner', 'fadeIn');
  setAnimation('.advantages__item', 'fadeIn');
  setAnimation('.location-about__item-1', 'fadeIn');
  setAnimation('.location-about__item-2', 'fadeIn');
  setAnimation('.grad__title', 'fadeIn');
  setAnimation('.contacts__inner', 'fadeIn');

  // apartments

  setAnimation('.apartments__title', 'anim__title'); 
  setAnimation('.apartments__color_item', 'fadeIn');
  setAnimation('.apartments__plan', 'anim');
  var deg = $('.apartments-compass').attr('data-rotate');
  $('.apartments-compass').css({
    'transform':'rotate(' + deg + ')'
  })


 
}, globalTimeOut);


//popup for main
$('#main-about-popup-1').magnificPopup({
  items: [
    {
      src: $('.about-kand__popup'), // Dynamically created element
      type: 'inline'
    }
  ],
  callbacks: {
    open: function() {
      var delay = 300;
      setTimeout(function(){
        $('.main-popup').addClass('active');
      },delay);
      setTimeout(function(){
        $('.main-popup').addClass('vissible');
      },3 * delay);
      setTimeout(function(){
        $('.about-kand__popup_inner').addClass('vissible');
      },5 * delay);
      setTimeout(function(){
        $('.mfp-close').addClass('vissible');
       
      },500);
    },
    close: function(){
      $('.main-popup').find('.vissible').removeClass('vissible');
       $('.main-popup').removeClass('active').removeClass('vissible');
    }
  },
  removalDelay: 600,
  mainClass: 'mfp-fade'
});

$('#main-about-popup-2').magnificPopup({
  items: [
    {
      src: $('.about-company__popup'), // Dynamically created element
      type: 'inline'
    }
  ],
 callbacks: {
    open: function() {
      var delay = 300;
      setTimeout(function(){
        $('.main-popup').addClass('active');
      },delay);
      setTimeout(function(){
        $('.main-popup').addClass('vissible');
      },3 * delay);
      setTimeout(function(){
        $('.about-kand__popup_inner').addClass('vissible');
      },5 * delay);
      setTimeout(function(){
        $('.mfp-close').addClass('vissible');
       
      },500);
    },
    close: function(){
      $('.main-popup').find('.vissible').removeClass('vissible');
       $('.main-popup').removeClass('active').removeClass('vissible');
    }
  },
   removalDelay: 600,
   mainClass: 'mfp-fade'
  }
);

$('#main-about-popup-3').magnificPopup({
  items: [
    {
      src: $('.about-company__popup-3'), // Dynamically created element
      type: 'inline'
    }
  ],
  callbacks: {
    open: function() {
      var delay = 300;
      setTimeout(function(){
        $('.main-popup').addClass('active');
      },delay);
      setTimeout(function(){
        $('.main-popup').addClass('vissible');
      },3 * delay);
      setTimeout(function(){
        $('.about-kand__popup_inner').addClass('vissible');
      },5 * delay);
      setTimeout(function(){
        $('.mfp-close').addClass('vissible');
       
      },500);
    },
    close: function(){
      $('.main-popup').find('.vissible').removeClass('vissible');
       $('.main-popup').removeClass('active').removeClass('vissible');
    }
  },
   removalDelay: 600,
   mainClass: 'mfp-fade'
  }
);
//popup for main end

$('.input-form_zag').magnificPopup({
 items: [
     {
       src: $('.form_zag'), // Dynamically created element
       type: 'inline'
     }
   ],
 removalDelay: 600,
 mainClass: 'mfp-fade'
}
);


$('.call-back__form').magnificPopup({
  items: [
    {
      src: $('.form_zag'), // Dynamically created element
      type: 'inline'
    }
  ],
  callbacks: {
    open: function() {
      var inputs = $('.zag__form input');
      var delay = 200;
      setTimeout(function(){
        $('.zag__form_wrapper').addClass('active');
      },300);
      setTimeout(function(){
        $('.mfp-close').addClass('vissible');
       
      },500);
      setTimeout(function(){
        $('.zag__form').addClass('vissible');
         $.each(inputs, function(index, value){
          setTimeout(function(){
            $(value).addClass('vissible');
          }, delay * index)
        })
      },1500);
    },
    beforeClose: function() {
      var elem = $('.zag__form_wrapper');
        setTimeout(function(){
          elem.removeClass('active');
          elem.find('.vissible').removeClass('vissible');
        },500);
    }
  },
  removalDelay: 600,
  mainClass: 'mfp-fade'
});


$('.apartments__get-prize').magnificPopup({
 items: [
     {
       src: $('.form_price'), // Dynamically created element
       type: 'inline'
     }
   ],
  callbacks: {
    open: function() {
      var inputs = $('.zag__form input');
      var delay = 200;
      setTimeout(function(){
        $('.zag__form_wrapper').addClass('active');
      },300);
      setTimeout(function(){
        $('.mfp-close').addClass('vissible');
       
      },500);
      setTimeout(function(){
        $('.zag__form').addClass('vissible');
         $.each(inputs, function(index, value){
          setTimeout(function(){
            $(value).addClass('vissible');
          }, delay * index)
        })
      },1500);
    },
  }, 
 removalDelay: 300,
 mainClass: 'mfp-fade'
}
);

$('.apartments__bookin_link').magnificPopup({
  items: [
       {
         src: $('.form_booking'), // Dynamically created element
         type: 'inline'
       }
     ],
  callbacks: {
    open: function() {
      var inputs = $('.zag__form input');
      var delay = 200;
      setTimeout(function(){
        $('.zag__form_wrapper').addClass('active');
      },300);
      setTimeout(function(){
        $('.mfp-close').addClass('vissible');
       
      },500);
      setTimeout(function(){
        $('.zag__form').addClass('vissible');
         $.each(inputs, function(index, value){
          setTimeout(function(){
            $(value).addClass('vissible');
          }, delay * index)
        })
      },1500);
    },
    beforeClose: function() {
      var elem = $('.zag__form_wrapper');
        setTimeout(function(){
          elem.removeClass('active');
          elem.find('.vissible').removeClass('vissible');
        },500);
    }
  },
   removalDelay: 300,
   mainClass: 'mfp-fade'
  }
);

// construction gallery

$('.construction_item_link').on('click', function(e){
  e.preventDefault();
  var data = $(this).attr('data-img');
  $.ajax({
    method: 'POST',
    url: "/modules/some.php",
    data: data,
    success: function(data){
      var dataImg = $.parseJSON(data);
      $.magnificPopup.open({
        items: dataImg,
        type: 'image',
        gallery:{
          enabled:true
        }
      });
    },
    error: function(){
      alert(Error);
    },
  });
})

// construction gallery end

// construction status percent
var progressLines = $('.construction__progress--line');

function setProgressLinesWidth(){
  var constructionStatusWidth = $('.construction__progress--bar').innerWidth();
  progressLines.width(constructionStatusWidth);
}

setProgressLinesWidth();
var progressValues = $('.construction__progress--val');


progressValues.each(function(){
  var elem = $(this);
  var progressContainer = elem.siblings('.construction__progress--container');
  var progressLine = progressContainer.find('.construction__progress--line');
  var width = parseFloat(elem.html());
  progressLine.html(width + '%');
  progressContainer.width(width + '%');
})

window.addEventListener('resize', setProgressLinesWidth);

$(".floor-slider").ionRangeSlider({
   min: -2,
   max: 100,
   from: -2,
   to: 100,
   type: 'double',
   prefix: "",
   onChange: function(data){
       $('.parametrs__table_value').addClass('active');
   },
   onFinish: function (data) {
      $('.parametrs__table_value').removeClass('active');
        updateInputs ();
     }
    

});
$(".room-slider").ionRangeSlider({
   min: 1,
   max: 10,
   from: 1,
   to: 10,
   type: 'double',
   prefix: "",
    onChange: function(data){
       $('.parametrs__table_value').addClass('active');
   },
   onFinish: function (data) {
      $('.parametrs__table_value').removeClass('active');
        updateInputs ();
     }
});
$(".square-slider").ionRangeSlider({
   min: 1,
   max: 1000,
   from: 1,
   to: 1000,
   type: 'double',
   prefix: "",
    onChange: function(data){
       $('.parametrs__table_value').addClass('active');
   },
   onFinish: function (data) {
      $('.parametrs__table_value').removeClass('active');
        updateInputs ();
     }
});

tmas=['room','floor','square'];

function updateInputs (data) {
    var vals=[];
    for(i=0; i<tmas.length; i++){
        vals[i]=$("."+tmas[i]+'-slider').data("ionRangeSlider");
}
    data = $('.sort');
    var n=0;
    
    
    for(i=0; i<data.length; i++){

    if(    data[i].dataset.room>=vals[0].old_from && data[i].dataset.room<=vals[0].old_to &&
        data[i].dataset.floor>=vals[1].old_from && data[i].dataset.floor<=vals[1].old_to &&
        data[i].dataset.square>=vals[2].old_from && data[i].dataset.square<=vals[2].old_to
        ){
    data[i].style.display='';
    }else{
    data[i].style.display='none';
    n++;
    }
    
    }
     if (n==data.length) {     $('.not_found').css("display", "block");    }
     else { $('.not_found').css("display", "none");}
    
        }

 $('.sort').click( function() {
   window.location = $(this).attr('data-href');
 });

$('.apartments__param_list').owlCarousel({
	  	
 	nav: true,
 	navText: ['<div class="slider-arrows main-style"><img src="/img/apartments/slider-arrow-left.png" alt="arrow-left"></div>',
 	'<div class="slider-arrows main-style"><img src="/img/apartments/slider-arrow-right.png" alt="arrow-right"></div>'],
 	dots: false,
 	autoplay: true,
 	responsive : {
   
    0 : {
       items: 3
    },
    400 : {
       items: 4
    },
    500 : {
        items: 5
    },
     700 : {
        items: 6
    },
    
    800 : {
        items: 7
    },
    
    1200 : {
       items: 7 
    }
	},
 	items: 7
});

function showTableImg(sTableID, sTable, sImgID) {//sTableID - table row, sTable - table that has overflow, sImgID - img for hover
	var tabelElem = $(sTableID);
	// if(tabelElem.length > 0 && $(window).width() >= 1180) {}
	  tabelElem.on('mouseover', function(){
	  	var tableTop = $(sTable).offset().top;
	    var elem = $(this);
	    var coords = elem.offset();
	    var pict = elem.find(sImgID);
	    var pictHeight = pict.height();
	   	if((coords.top - tableTop) >  pictHeight + 50) {
	    	pict.addClass('table__img_top');
	    } else {
	    	pict.addClass('table__img_bottom');
	    }
	  });
	
  	tabelElem.on('mouseout',function(){
		var lol = $(this).find(sImgID);
		lol.removeClass('table__img_top');
		lol.removeClass('table__img_bottom');
	});
}

showTableImg('.parametrs__table-row', '.parametrs__table_value', '.parametrs__table_pict');

//animate main view site


// change the color of header bootom items
function scrollHeader(){
  var scrollHeight = $(window).height();
  var menuBtnScrollTop = parseInt($('.header__menu-btn').css('bottom'));
  var top = pageYOffset;
  var dif = scrollHeight - menuBtnScrollTop;
  if(pageYOffset > menuBtnScrollTop) {
   $('header').addClass('scrolled');
  } else {
    $('header').removeClass('scrolled');
  }
}

$(window).on('scroll', function(){
  scrollHeader();
});

// delay for begining animation; reverse - means remove class after 2s;
function setAnimation(sClass, sAnimationClass, delay, reverse) {
  var windowTop = $(window).scrollTop();
  var windowHeight = $(window).height() - 50;
  var elem  = $(sClass);
  var delay = delay || 0;
  var reverse = reverse || false;
  
  function anim(elem){
    windowTop = $(window).scrollTop();
    windowHeight = $(window).height();
    elemTop = $(elem).offset().top;
    if (windowTop >=  elemTop - windowHeight) {
      setTimeout(function(){
        $(elem).addClass(sAnimationClass);
        if(reverse) {
          setTimeout(function(){
            $(elem).removeClass(sAnimationClass);
          },2000);
        }
      },delay);
    
      $(window).off('scroll',anim);
    }
  }
  
  $.each(elem, function( index, value ) {
    var animateElem  = $(value);
    //animateElem.addClass('animated');
    var elemTop = animateElem.offset().top;
    if (windowTop >=  elemTop - windowHeight) {
      setTimeout(function(){
        animateElem.addClass(sAnimationClass);
        if(reverse) {
          setTimeout(function(){
            animateElem.removeClass(sAnimationClass);
          },2000);
        }
      },delay);
      
    } else {
      $(window).on('scroll', animateElem, function(){
        anim(animateElem);
      });
    }
  });
}

//animated elements 

// adaptive render for house-choose
if(document.querySelector('#svg--img')){
  (function(){
    var svgImg = document.querySelector('#svg--img');
    var svgBlock = document.querySelector('.house-choose--svg');
    var svgRender = document.querySelector('#house-choose-svg');
    var windowWidth = window.innerWidth;
    var windowHeight = window.innerHeight;
    var svgImgSize  = {
      width: svgRender.getBoundingClientRect().width,
      height:  svgRender.getBoundingClientRect().height
    }
    function compare(){
      refreshPageSize();
      if(windowHeight <= windowWidth && svgImgSize.height >= windowHeight && windowWidth >= svgImgSize.width){
         
       
        svgRender.classList.remove('svg__height--decorator');
        svgRender.classList.add('svg__width--decorator');
      } else {
        svgRender.classList.remove('svg__width--decorator');
        svgRender.classList.add('svg__height--decorator');
      }
    }



    function refreshPageSize(){
     
      windowWidth = window.innerWidth;
      windowHeight = window.innerHeight;
      svgImgSize  = {
        width: svgRender.getBoundingClientRect().width,
        height:  svgRender.getBoundingClientRect().height
      }
    }

    compare();
    window.addEventListener('resize',function(){
      compare();
    })
    // adaptive render for house-choose end
  })();
}

//number change
/*var startNumber = $('.contacts__info_item').eq(1).html();
var headerTel = $('.header__tel span');
startNumber = startNumber.replace('<i class="phone-ico"></i>','');

function setNumber() {
  var numberTel = $('.contacts__info_item').eq(1).html();
  numberTel = numberTel.replace('<i class="phone-ico"></i>','');
  return numberTel;
  
}
var telInterval = setInterval(function(){v
  var number = setNumber();
  if (number !== startNumber) {
    clearInterval(telInterval);
  };
  console.log(number)
  headerTel.html(number);
  //headerTel.attr(href, number.replace(/D/gi,''))
},100)
*/




 
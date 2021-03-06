//animate open-menu
var navList = $('.menu-open__item');
var navListLength = navList.length;
var tamplateItem = '<div class="open-menu__anim-pict"></div>';
var circlHeight = 0;
var currentSlide = {};
var navWidth = 0;
var circleBottom = 110;
var circleLeft = 40;
var path1 = "M 16.996262,69.25 C 16.993702,65.312381 16.377248,62.490913 15.040484,60.298549 12.971466,56.905244 8.4008614,54 5.1314474,54 2.1042891,54 0,52.930934 0,51.393011 c 0,-1.87126 7.2065021,-1.859441 10.79966,0.01771 3.074325,1.606102 7.419192,6.04448 9.078154,9.273535 C 21.365858,63.580635 21.314212,72.285788 19.8,73.8 c -2.205699,2.205699 -2.799973,1.241292 -2.803738,-4.55 z m 8.971325,5 C 25.515077,63.779449 25.056025,60.944634 23.244362,57.433102 22.09036,55.196309 20.438286,52.778709 19.573088,52.060658 17.207869,50.097701 17.653074,48 20.4349,48 c 3.999205,0 7.54871,1.799925 12.722167,6.451308 8.186963,7.360783 13.855887,7.2346 22.395029,-0.498486 8.81291,-7.981012 15.880883,-7.972397 25.026248,0.0305 8.974739,7.85359 14.275633,7.846552 22.973756,-0.0305 8.81291,-7.981012 15.88088,-7.972397 25.02624,0.0305 8.97474,7.85359 14.27564,7.846552 22.97376,-0.0305 8.81291,-7.981012 15.88088,-7.972397 25.02624,0.0305 8.97497,7.853793 13.86835,7.853793 22.84332,0 9.14536,-8.002901 16.21333,-8.011516 25.02624,-0.0305 8.53915,7.733086 14.20807,7.859269 22.39503,0.498486 5.28578,-4.752372 9.25547,-6.734514 11.64839,-5.816267 2.40623,0.923359 1.77984,2.010359 -2.24132,3.889478 -2.0625,0.963821 -5.83612,3.685064 -8.38581,6.047207 -8.02016,7.430195 -15.51175,7.260072 -24.44253,-0.555052 -8.97474,-7.85359 -14.27564,-7.846552 -22.97376,0.0305 -8.81712,7.984824 -16.07868,7.984824 -24.8958,0 -8.69815,-7.877081 -14.40605,-7.877081 -23.1042,0 -8.81712,7.984824 -16.07868,7.984824 -24.8958,0 -8.69815,-7.877081 -14.40605,-7.877081 -23.1042,0 -8.647588,7.8313 -16.308955,7.969083 -24.360186,0.438099 -2.576154,-2.40969 -5.915551,-4.849522 -7.420884,-5.421848 l -2.736967,-1.040593 0.670438,8.881157 C 71.344512,70.762396 70.707383,75 68.480948,75 67.324976,75 66.987354,73.518796 66.94237,68.25 66.86056,58.667833 65.802768,53.585698 63.810285,53.201981 62.897677,53.026228 59.664413,55.134293 56.625256,57.886568 47.929809,65.761204 40.26154,66.047572 32.389774,58.791632 29.9529,56.5454 27.763571,54.903096 27.524599,55.142068 27.285627,55.381039 27.72508,57.359335 28.50116,59.538281 30.24613,64.437513 30.408605,72.191395 28.8,73.8 c -1.351814,1.351814 -2.783608,1.579291 -2.832413,0.45 z M 56.19774,69.75 C 56.420299,65.884338 56.895525,64.5 58,64.5 c 0.908814,0 1.629305,1.131462 1.828082,2.870829 C 60.300965,71.508717 59.202947,75 57.428688,75 56.207389,75 55.956971,73.931965 56.19774,69.75 Z M 1,43.998747 C -0.33333333,43.110972 -0.33333333,42.889028 1,42.001253 3.0326065,40.64788 5.5,41.195503 5.5,43 5.5,44.804497 3.0326065,45.35212 1,43.998747 Z M 54,28.860861 C 44.829662,15.641279 27.05075,5.5237826 9.4643332,3.5168215 2.0167085,2.666899 0,2.1162424 0,0.93261233 0,-1.5100315 21.222879,1.0876465 29.448988,4.5371652 39.455195,8.7331461 51.876855,18.7716 58.086327,27.680175 61.435799,32.485581 61.720309,34.01928 59.25,33.953158 58.2875,33.927395 55.925,31.635861 54,28.860861 Z M 32.5,23.423776 C 26.04382,18.957286 18.434003,16.112273 8.7165028,14.532056 0.28736136,13.161347 -1.2454252,12.435941 1.0289603,10.893855 3.0612214,9.5159337 12.210887,10.512469 20.209062,12.982853 30.771033,16.245114 43.016653,25.367092 38.5,26.608095 c -0.55,0.151119 -3.25,-1.281825 -6,-3.184319 z";
var path2 = "m 72,189.22251 c 0,-3.12139 1.606312,-5.79699 7.174365,-11.95017 C 82.515438,173.58017 83,172.42258 83,168.13313 c 0,-3.34894 -0.608917,-5.66265 -1.91392,-7.27235 -2.236945,-2.75922 -2.207351,-2.77969 -4.900174,3.38922 -1.140395,2.6125 -2.661249,4.74523 -3.379676,4.7394 -0.718426,-0.006 -6.203607,-5.43527 -12.18929,-12.06542 L 49.733881,144.86916 45.61694,145.58497 C 29.84587,148.32708 16.461178,141.8019 10.313834,128.37433 7.494506,122.2161 7.0230627,114.09067 9.0306085,106.25763 L 10.339244,101.15161 5.1285176,95.450241 C 2.262618,92.31449 0.1281278,89.538539 0.38520597,89.281461 0.64228414,89.024383 4.8940815,89.386053 9.8336445,90.085173 18.75965,91.348512 18.852431,91.339352 24.978994,88.589914 37.338782,83.043172 50.333309,85.5295 60.291221,95.346436 64.008534,99.011122 65.72047,100 68.347422,100 c 3.264875,0 3.337221,-0.09343 3.402234,-4.393914 0.07993,-5.287271 0.994322,-7.125113 6.793925,-13.655156 C 82.538497,77.452868 83,76.422359 83,72 83,67.577641 82.538497,66.547132 78.543581,62.04907 72.655495,55.4194 71.769231,53.58141 71.769231,48 c 0,-5.58141 0.886264,-7.4194 6.77435,-14.04907 C 82.552797,29.436767 83,28.432597 83,23.944277 83,19.565109 82.532397,18.438572 79.174365,14.727657 73.606312,8.5744772 72,5.898883 72,2.7774938 c 0,-3.7994549 1.608076,-3.49506482 2.945563,0.5575607 0.605367,1.83428 2.471787,4.64678 4.147601,6.25 5.02496,4.8072875 7.137605,9.0457825 7.137605,14.3198195 0,5.67952 -0.870224,7.496466 -6.77435,14.144196 C 75.461503,42.547132 75,43.577641 75,48 c 0,4.422359 0.461503,5.452868 4.456419,9.95093 5.888086,6.62967 6.77435,8.46766 6.77435,14.04907 0,5.58141 -0.886264,7.4194 -6.77435,14.04907 C 75.635111,90.351658 75,91.685874 75,95.410935 c 0,2.389297 0.5625,4.797725 1.25,5.352075 0.6875,0.55434 4.625,1.54622 8.75,2.20418 7.18869,1.14662 15.00056,2.87642 14.999496,3.32135 -0.0016,0.69137 -5.127859,13.45789 -11.570503,28.81565 C 84.343047,144.84414 81,153.31486 81,153.92803 c 0,0.61317 1.176923,2.8933 2.615385,5.06696 4.890706,7.39036 3.227011,16.00641 -4.522221,23.41996 -1.675814,1.60322 -3.542234,4.41572 -4.147601,6.25 C 73.608076,192.71757 72,193.02196 72,189.22251 Z M 74.575136,160.25 c 1.528709,-3.57849 1.501178,-3.9283 -0.601965,-7.6486 -2.446307,-4.32733 -2.957492,-11.89366 -1.044975,-15.46723 0.637431,-1.19105 3.164354,-4.42351 5.615385,-7.18324 C 82.537558,125.45393 83,124.42169 83,120.00362 c 0,-4.35661 -0.494019,-5.50488 -4.25,-9.87844 -2.3375,-2.72185 -4.925,-5.24853 -5.75,-5.61484 -0.825,-0.3663 -12.75,-2.6151 -26.5,-4.997329 C 24.372856,95.679421 21.245486,95.343623 19.285184,96.590845 13.456237,100.29945 12.986007,99.581728 43.084607,132.9166 58.520745,150.01247 71.560454,164 72.061737,164 c 0.501283,0 1.632312,-1.6875 2.513399,-3.75 z m 11.3208,-27.0115 c 4.067764,-9.75617 8.004793,-19.18542 8.748953,-20.95388 1.215346,-2.8882 1.170076,-3.31328 -0.444915,-4.1776 -0.988862,-0.52922 -4.622835,-1.28182 -8.075494,-1.67245 l -6.277562,-0.71022 3.191926,4.52842 c 2.551458,3.61978 3.191925,5.52356 3.191925,9.48797 0,5.84888 -0.843548,7.63056 -6.77435,14.30833 C 75.62163,138.36684 75,139.6784 75,143.45159 c 0,5.12376 0.759681,7.55298 2.356989,7.53691 0.628656,-0.006 4.471182,-7.99382 8.538947,-17.75 z M 45.5,141.32478 C 45.5,139.64979 15.010138,106 13.49244,106 c -3.358722,0 -3.429526,14.47991 -0.105131,21.5 4.880973,10.3071 13.689343,15.65581 25.112691,15.24918 4.554419,-0.16213 7,-0.65976 7,-1.4244 z M 14.654923,96.456872 C 15.370915,94.591027 15.234062,94.457455 11.75,93.621624 9.8064514,93.155365 9,93.348715 9,94.280948 c 0,3.222915 4.577293,4.984184 5.654923,2.175924 z M 57,97.154988 C 57,93.770816 46.203304,89.050056 38.399223,89.021962 32.298269,88.999999 26,90.502423 26,91.979741 c 0,0.431251 4.1625,1.525015 9.25,2.430587 5.0875,0.905573 11.275,2.034406 13.75,2.508518 6.137823,1.175765 8,1.230732 8,0.236142 z";
var path3 = "m 0,0 -1.379,0.911 c 7.906,11.975 6.269,28.043 -3.893,38.205 -11.849,11.846 -31.125,11.846 -42.974,0 l -1.167,1.167 c 12.491,12.494 32.817,12.491 45.308,0 C 6.61,29.569 8.338,12.628 0,0";
var arrSvg = $('#logoSvg').find('path');
var menuDelay = 100;


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


$('.header__menu-btn, .menu-btn-top').on('click', function(){
	
	$('.header__menu-btn').toggleClass('active');
	var windowWidth = $(window).width();
	var x = -windowWidth / 2 + circleLeft;
	var y = -windowWidth / 2 + circleBottom;
	var menuStatus = $('.menu-open__inner').hasClass('active');
	var topBtn = document.querySelector(".menu-btn-top");
	$('.decorative-circle').css({
		'bottom': y,
		'left': x
	});

	if(menuStatus){
		refreshLogo();
	} else {
		animateLogo();
	}
	$('body').toggleClass('no-scroll');
	$('.menu-open').fadeToggle();
	animateSvg('#menu-open-svg1',path1);
	animateSvg('#menu-open-svg2',path2);
	if(topBtn.classList.contains('active')){
		topBtn.classList.remove('active');
	} else {
		topBtn.classList.add('active');
	}
		
		
	
	if(menuStatus){
		navList.removeClass('slideleft');
		$('.menu-open__inner').removeClass('active');
		$('.open-menu__anim-pict').removeClass('active');
		$('.menu-open__pict').removeClass('active');
		$('.menu-open__tel').removeClass('active');
	} else {
		setTimeout(function(){
			$('.menu-open__inner').toggleClass('active');
			$('.open-menu__anim-pict').eq(4).addClass('active');
			
			setTimeout(function(){
					
				for(var i = 0; i < navListLength; i++) {
					(function(i){
					    return setTimeout(function(){
					      navList.eq(i).toggleClass('slideleft');
					    }, i * menuDelay);
					})(i);
				}
				
			},200);
		},100);

		setTimeout(function(){
			$('.menu-open__tel').addClass('active');;
		},(1800 + (navListLength + 1) * menuDelay));
		
		setTimeout(function(){
			$('.menu-open__pict').toggleClass('active');
		},2000);
	}
	
	navWidth = $('.decorative-circle').width();
	$('.decorative-circle').toggleClass('active');
})

//hover for nav list

navList.on('mouseover', function(){
	var elem = $(this);
	var elemInner = elem.find('.menu-open__item_inner');
  	var elemBg = $('.open-menu__anim-pict');
  	var data = elemInner.attr('data-img');
	var id = getId(elem);
	var elemPict = $('#anim-pict-' + id);
	var arrSVG = $('.menu-open__pict_container').find('svg path');
	var svgColor = elemInner.attr('data-color');
	var strokeColor = "#234c5a";
	setTimeout(function(){
		if(svgColor) {
			arrSVG.attr('stroke','#fff');
		} else {
			arrSVG.attr('stroke',strokeColor);
		}
		elemBg.removeClass('active');
		elemPict.addClass('active');
		
	},100)
});

//create imgs blocks for list
for(var i = 0; i < navListLength; i++) {
  var elem = $(tamplateItem).clone();
  var elemId = 'anim-pict-' + getId(navList.eq(i));
  var bgUrl =  getBg(navList.eq(i).find('.menu-open__item_inner'));
  setBg(elem, bgUrl);
  elem.attr('id',elemId);
   $('.menu-open__pict').append(elem);
}

function animateSvg(id,path){
	var snapB = Snap(id);
	var timeOut = 7000;
	$(id).html('');
 
  var myPathB = snapB.path(path).attr({
    id: "squiggle",
    fill: "none",
    strokeWidth: "1",
     stroke: '#234c5a',
    strokeMiterLimit: "10",
    strokeDasharray: "9 9",
    strokeDashOffset: "988.01",
  });

 var lenB = myPathB.getTotalLength();

 myPathB.attr({
	  stroke: '#234c5a',
	  strokeWidth: 1,
    fill: 'none',
    "stroke-dasharray": lenB + " " + lenB,
    "stroke-dashoffset": lenB
  }).animate({"stroke-dashoffset": 10}, timeOut,mina.easeinout);

  
};



function animateLogo() {
  var delay = 100;
  var letters = Array.prototype.slice.call( document.getElementsByClassName( 'letter' ), 0);
  
  function animate( elements ) {
    var elementsLength = elements.length;
    elements.forEach( function( element, index ) {
      var length = element.getTotalLength();
      element.style.strokeDasharray = length + ' ' + length;
      element.style.strokeDashoffset = length;
      
      setTimeout( function() {
        element.style.strokeDashoffset = '0';
        element.classList.add( 'fillIt' );
      }, delay * index );
       setTimeout( function() {
        element.style.fillOpacity = 1;
        element.style.strokeOpacity = 0;
      }, (elementsLength + 1 ) * delay );
    } );  
  } 
  
  setTimeout( function() {
    animate( letters );
  }, 100);
};

function refreshLogo() {
	var letters = Array.prototype.slice.call( document.getElementsByClassName( 'letter' ), 0);	
	letters.forEach( function( element, index ) {
		var length = element.getTotalLength();
    	element.style.strokeDasharray = length + ' ' + length;
    	element.style.strokeDashoffset = length;
    	element.style.fillOpacity = 0;
    	element.style.strokeOpacity = 1;
	});
}



//animate open-menu end









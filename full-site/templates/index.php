<?php  HeadAdd();?>
	<div class="wrapper">
		<!-- <div class="preloader">
			<div class="preloader__svg">
				<svg id="svgB" width="100%" height="100%" viewBox="0 0 1360 93" preserveAspectRatio="xMidYMid meet">

				</svg>
			</div>
		</div> -->

     	<?
			// include('preloader_saga.php'); 
			?>


		<section class="video-container">
			<div class="main-video">
				<video playsinline autoplay muted loop class="main-video-bg" id="bgvideo">
			  	<source src="/video/clipchamp.mp4" type='video/mp4;'></source>
					<!-- <source src="video/video.ogv" type='video/ogg;'></source> -->
					<source src="video/video.webm" type='video/webm;'></source>
				</video>
			</div>
			<div class="container">
				<div class="main-page__inner">
					<div class="main-page__title">
						<h1 class="h1"><?H1page()?> <i class="brown-line"></i></h1>
						<p class="main-page__title_text"><?=$mes['i-mes1']?></p>
					</div>
				</div>
			</div>
		</section>
		<section class="main-page">
			<!-- header -->
			<?php HeaderInclude();?>
			<!-- header-end-->
			<div class="view-more">
				<a class="view-more__link" href=""><span><?=$mes['Смотреть сайт']?></span></a>
				<div class="view-more__line"></div>
			</div>
		</section>
		<div class="content">
			<div class="grad__title">
				<p class="grad__title_text">
					KANDINSKY
				</p>
				<p class="grad__title_body">
					<span>KANDINSKY Odessa Residence</span> <?=$mes['i-mes3']?>
				</p>
			</div>
			<div class="block-end">
				<span class="curve-line"></span>
			</div>
			<section class="about-kand">
				<div class="container">
					<div class="about-kand__left-pict">
						<!-- <img <?img("/img/main/car-img.jpg")?> height="334" width="501" alt=""> -->
					</div>
					<div class="about">
						<?php/*<div class="about__name">
							<span><?=$mes['i-mes4']?></span>
						</div>
						*/?>
						<h2 class="about__title"><?=$mes['i-mes5']?><i class="quote-end"></i></h2>
						<div class="about__quote">
							<span><?=$mes['i-mes4']?></span>
						</div>
						<p class="about__text"><?=$mes['i-mes6']?></p>
						<p class="about__text"><?=$mes['i-mes16']?></p>
						<?php/*<a id="main-about-popup-1" href="" class="about__btn"><?=$mes['i-mes7']?><i class="arrow-gray-right"></i></a>*/?>
					</div>
					<?php /*<div class="about-kand__right-pict">
						<img <?img("/img/main/beach-bg.jpg")?> alt="">
					</div>*/?>
				</div>
				<?/*
				<div class="about-kand__popup main-popup">
					<div class="about-kand__popup_inner">
						<div class="about-kand__popup_pict">
							 <img src="img/main/popup-img-1.jpg" alt="">
						</div>
						<div class="about-kand__popup_text">
							<div class="about__name">
							<span><?=$mes['Василий Кандинский']?></span>
							</div>
							<p class="about__title"><?=$mes['Прекрасно то, что отвечает ранней душевной необходимости']?></p>
							<p class="about__text"><?=$mes['Имя Василия Кандинского известно во всем мире. Именно в Одессе происход...']?>

							<p class="about__text about_top"><?=$mes['Кандинский служит одним из символов авангардного искусства, тогда как KANDINSKY Odessa Residence призван стать символом архитектурного авангарда.']?>
						</p>
						</div>
					</div>
				</div>*/?>
			</section>
			<section class="about-company">
				<div class="container">
					<div class="about">
						<div class="about__name">
							<span><?=$mes['Кондинский']?></span>
						</div>
						<h2 class="about__title"><?=$mes['i-mes8']?></h2>
						<p class="about__text"><?=$mes['i-mes9']?></p>
						<?php /*<a id="main-about-popup-2" href="" class="about__btn"><?=$mes['i-mes7']?><i class="arrow-gray-right"></i></a>*/?>
					</div>
					<div class="about-company__pict">
						<img <?img("/img/main/render-img.jpg")?> alt="">
					</div>
				</div>
				<?/*
				<div class="about-company__popup main-popup">
					<div class="about-kand__popup_inner">
						<div class="about-kand__popup_pict">
							 <img src="/img/menu-open/rend.jpg" alt="">
						</div>
						<div class="about-kand__popup_text">
							<div class="about__name">
							<span><?=$mes['i-mes7']?></span>
							</div>
							<h2 class="about__title"><?=$mes['Kadinsky Odessa Residence Это место создано для тех, кто хочет находиться в авангарде жизни.']?></h2>
							<p class="about__text "><?=$mes['Завтракать с видом на море и начинать день с прогулки по пляжу. Работать...']?></p>
						</div>
					</div>
				</div>*/?>
			</section>
			<div class="block-end">
				<span class="curve-line"></span>
			</div>
			<section class="modern-place">
				<div class="container">
					<div class="modern-place__pict-1 modern-place__pict">
						<div class="bordered">
							<div class="border border-left"></div>
							<div class="border border-right"></div>
							<div class="border border-bottom"></div>
							<div class="border border-top"></div>
						</div>
						<img <?img("/img/main/boat-img.jpg")?> alt="">
					</div>
					<div class="modern-place__title">
						<div class="modern-place__title_inner">
							<h2 class="about__title"><?=$mes['i-mes10']?></h2>
								<p class="about__text">
									<?=$mes['KANDINSKY Odessa Residence воплощает в себе уникальный стиль жизни. Здес...']?>
								</p>
								<p class="about__text">
									<?=$mes['Это место создано для тех, кто хочет находиться в авангарде жизни. Завтракать...']?>
								</p>
								<p class="about__text">
									<?=$mes['Ничего лишнего – только море и небо, разделенные зеленью прибрежного парка.']?>
								</p>
						<?php /*<a id="main-about-popup-3" href="" class="about__btn"><?=$mes['i-mes7']?><i class="arrow-gray-right"></i></a>*/?>
							<div class="modern-place__pict-2 modern-place__pict">
								<div class="bordered">
									<div class="border border-left"></div>
									<div class="border border-right"></div>
									<div class="border border-bottom"></div>
									<div class="border border-top"></div>
								</div>
								<img <?img("/img/main/golf-img.jpg")?> alt="">
							</div>
						</div>

					</div>

					<div class="modern-place__pict-3 modern-place__pict">
						<div class="bordered">
							<div class="border border-left"></div>
							<div class="border border-right"></div>
							<div class="border border-bottom"></div>
							<div class="border border-top"></div>
						</div>
						<img <?img("/img/main/plain-img.jpg")?> alt="">
					</div>
				</div>
<?/*
				<div class="about-company__popup-3 main-popup">
					<div class="about-kand__popup_inner">
						<div class="about-kand__popup_pict">
							 <img src="/img/main/plain-img.jpg" alt="">
						</div>
						<div class="about-kand__popup_text">

							<h2 class="about__title"><?=$mes['i-mes10']?></h2>
							<p class="about__text"><?=$mes['KANDINSKY Odessa Residence воплощает в себе уникальный стиль жизни. Здес...']?></p>
						<p class="about__text about_top"><?=$mes['Это место создано для тех, кто хочет находиться в авангарде жизни. Завтр...']?></p>
						<p class="about__text about_top"><?=$mes['Ничего лишнего – только море и небо, разделенные зеленью прибрежного пар...']?></p>
						</div>
					</div>
				</div>
				*/?>

			</section>
			<section class="contacts" id='contact'>
				<div class="container">
					<div class="contacts__inner">
						<div class="contacts__info">
							<p class="contacts__info_title"><?=$mes['i-mes11']?></p>
							<div class="contacts__info_container">
								<p class="contacts__info_subtitle"><?=$mes['i-mes12']?></p>
								<ul class="contacts__info_list">
									<li class="contacts__info_item"><i class="map-ico"></i><?=$mes['i-mes13']?></li>
									<li class="contacts__info_item"><i class="phone-ico"></i><?=$mes['tel-format']?></li>
									<li class="contacts__info_item"><i class="mail-ico"></i>info@kandinsky-residence.com.ua</li>
								</ul>
							</div>
							<div class="contacts__info_container contacts__info_marketing">
								<p class="contacts__info_subtitle"><?=$mes['i-mes15']?></p>
								<ul class="contacts__info_list">
									<li class="contacts__info_item"><i class="mail-ico"></i>marketing@saga-development.com.ua </li>
								</ul>
							</div>
						</div>
						<div class="contacts__form_wrapper">
							<?php /*** modules/inc/form/ */ FormInclude('form_index');?>
						</div>
					</div>
				</div>
			</section>
		</div>

<?php	 FooterAdd();		?>
<!-- timer -->
 <div class="modal_window__container" style="display:none;">
	<div class="modal_window">
			<div class="modal_window__main-content">
					<span class="modal__close">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="40" height="40">
							<path d="M37.304 11.282l1.414 1.414-26.022 26.02-1.414-1.413z" fill="#244C5A"/><path d="M12.696 11.282l26.022 26.02-1.414 1.415-26.022-26.02z" fill="#244C5A"/>
						</svg>
					</span>
				<div id="clock" class="clearfix"><p class="text_timer">До удорожания осталось</p>
					<div>дней:<span class="days">00</span></div>
					<div>часов:<span class="hours">00</span></div>
					<div>минут:<span class="minutes">00</span></div>
					<div>секунд:<span class="seconds">00</span></div>
				</div>
				<div class="modal_window__link"></div>
			</div>
    </div>
	<style>
.modal_window__container {
	position: fixed;
    width: 100%;
   height: 100%;
   z-index: 1;
   background: rgba(0,0,0,0.4);
}
.modal_window {
    max-width: 432px;
   width: 100%;
   position: fixed;
   left: 50%;
   top: 50%;
   transform: translate(-50%,-50%);
   padding: 20px;
   background: rgba(0,0,0,.8);
}
#clock {
    margin: 0px auto;
   width: 100%;
   padding: 20px 20px 20px 10px;
   position: relative;
   padding: 20px;
   font-family: inherit;
   box-sizing: border-box;
   font-size: 20px;
   pointer-events: none;
   text-align: center;
   color: white;
}
#clock div {
    margin: 5px;
   float: none;
   width: 20%;
   text-align: center;
   display: inline-block;
   font-size:16px;
}
#clock div span {
    display: block;
   width: 100%;
   background: #000;
   border: #244C5A 1px solid;
   color: #eee;
   text-align: center;
   font-size: 40px;
   line-height: 60px;
   letter-spacing: 2pt;
   margin-top: 10px;
}

.modal__close{
position: absolute;
    right: 0;
   top: 0;
}
	</style>
		<script type="text/javascript">
		        var deadline = 'March 28 2018';
				var t = getTimeRemaining(deadline);
		        function getTimeRemaining(endtime){
		      var t = Date.parse(endtime) - Date.parse(new Date());
		      var seconds = Math.floor( (t/1000) % 60 );
		      var minutes = Math.floor( (t/1000/60) % 60 );
		      var hours = Math.floor( (t/(1000*60*60)) % 24 );
		      var days = Math.floor( t/(1000*60*60*24) );
		      return {
		       'total': t,
		       'days': days,
		       'hours': hours,
		       'minutes': minutes,
		       'seconds': seconds
		      };
		    }
		function initializeClock(id, endtime){
		 var clock = document.getElementById(id);
		  var daysSpan = clock.querySelector('.days');
		  var hoursSpan = clock.querySelector('.hours');
		  var minutesSpan = clock.querySelector('.minutes');
		  var secondsSpan = clock.querySelector('.seconds');
		 var timeinterval = setInterval(function(){
			 t = getTimeRemaining(deadline);
			daysSpan.innerHTML = t.days;
		  hoursSpan.innerHTML = t.hours;
		  minutesSpan.innerHTML = t.minutes;
		  secondsSpan.innerHTML = t.seconds;


		 },1000);
		 if(t.total<=0){
			  clearInterval(timeinterval);
		  }else{
				var elem = document.getElementsByClassName("modal_window__container")[0];
				elem.style.cssText = 'display:block;';

		  }
		}
initializeClock('clock', deadline);

</script>
</div>
		<!-- end timer -->
<script>
$('.modal__close').click(function(){
	$('.modal_window__container').fadeOut(1000)
})
</script>

<?php  HeadAdd();?>
	<div class="wrapper"> 
		<!-- <div class="preloader">
			<div class="preloader__svg">
				<svg id="svgB" width="100%" height="100%" viewBox="0 0 1360 93" preserveAspectRatio="xMidYMid meet">

				</svg>
			</div>
		</div> -->
		<section class="video-container">
			<div class="main-video">
				<video autoplay muted loop class="main-video-bg" id="bgvideo">
			  	<source src="video/clipchamp.mp4" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'></source>
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
				<h2 class="grad__title_text">
					KANDINSKY
				</h2>
				<h2 class="grad__title_body">
					<span>KANDINSKY Odessa Residence</span> <?=$mes['i-mes3']?>
				</h2>
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
				<div class="about-kand__popup main-popup">
					<div class="about-kand__popup_inner">
						<div class="about-kand__popup_pict">
							 <img src="img/main/popup-img-1.jpg" alt="">
						</div>
						<div class="about-kand__popup_text">
							<div class="about__name">
							<span><?=$mes['Василий Кандинский']?></span>
							</div>
							<h2 class="about__title"><?=$mes['Прекрасно то, что отвечает ранней душевной необходимости']?></h2>
							<p class="about__text"><?=$mes['Имя Василия Кандинского известно во всем мире. Именно в Одессе происход...']?>

							<p class="about__text about_top"><?=$mes['Кандинский служит одним из символов авангардного искусства, тогда как KANDINSKY Odessa Residence призван стать символом архитектурного авангарда.']?>
						</p>
						</div>
					</div>
				</div>
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
				</div>
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

			</section>
			<section class="contacts" id='contact'>
				<div class="container">
					<div class="contacts__inner">
						<div class="contacts__info">
							<h2 class="contacts__info_title"><?=$mes['i-mes11']?></h2>
							<div class="contacts__info_container">
								<h3 class="contacts__info_subtitle"><?=$mes['i-mes12']?></h3>
								<ul class="contacts__info_list">
									<li class="contacts__info_item"><i class="map-ico"></i><?=$mes['i-mes13']?></li>
									<li class="contacts__info_item"><i class="phone-ico"></i><?=$mes['tel-format']?></li>
									<li class="contacts__info_item"><i class="mail-ico"></i>info@kandinsky-residence.com.ua</li>
								</ul>
							</div>
							<div class="contacts__info_container contacts__info_marketing">
								<h3 class="contacts__info_subtitle"><?=$mes['i-mes15']?></h3>
								<ul class="contacts__info_list">
									<li class="contacts__info_item"><i class="mail-ico"></i>marketing@riverside.net.ua</li>
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

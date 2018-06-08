<?php  HeadAdd();?>
	<section class="location-main" >
		<!-- header -->
		<?php HeaderInclude();?>
		<!-- header-end-->
		<div class="container">
			<h1 class="post__title"><?H1page()?></h1>
			<p class="location-main__description"><?=$mes['В курортной части Одессы, на Французском бульваре, на берегу моря расположен KANDINSKY Odessa Residence']?></p>
			</div>
			<div class="view-more">
				<a class="view-more__link" href=""><span><?=$mes['Смотреть сайт']?></span></a>
				<div class="view-more__line"></div>
			</div>
		</section>
	<div class="wrapper">
		<!-- <div class="preloader">
			<div class="preloader__svg">
				<svg id="svgB" width="100%" height="100%" viewBox="0 0 1360 93" preserveAspectRatio="xMidYMid meet">
				
				</svg>
			</div>
		</div> -->
		
		<div class="content">
			<div class="grad__title">
				<div class="grad__title_logo">
					<p class="grad__title_text"><?=$mes['Location.']?></p>
				</div>
				<p class="grad__title_body">
					<?=$mes['<span>KANDINSKY Odessa Residence</span> расположен в курортной части Одессы, на Французском бульваре. Прежде здесь размещались дачи одесских аристократов, сегодня же здесь живописные парки соседствуют с домами отдыха и уютными ресторанами.']?>  
				</p>
			</div>
			<div class="block-end">
				<span class="curve-line"></span>
			</div>
			<section class="location-about">
				<div class="container">
					<div class="location-about__item location-about__item-1">
						<div class="location-about-pict">
							<img <?img("/img/location/location-pict-1.jpg")?> alt="">
						</div>
						<div class="location-about__text">
							<p class="location-about__title"><?=$mes['Спуск к морю']?></p>
							<p class="location-about__paragraph"><?=$mes['От просторного городского пляжа резиденцию отделяет лишь знаменитая Трасса здоровья – излюбленное место прогулок одесситов. Спуститься к морю можно с помощью лифта, предназначенного для жителей KANDINSKY.']?></p>
						</div>
					</div>
					<div class="location-about__item location-about__item-2">
						<div class="location-about__text">
							<p class="location-about__title"><?=$mes['Пешая доступность']?></p>
							<p class="location-about__paragraph"><?=$mes['В пешей доступности от резиденции находится множество кафе, ресторанов и ночных клубов, а также супермаркеты и сервисные центры. Но чтобы получить все необходимое для жизни, жителям KANDINSKY не требуется покидать резиденцию, ведь рестораны и магазины расположены и на ее территории.']?></p>
						</div>
						<div class="location-about-pict">
							<img <?img("/img/location/location-pict-2.jpg")?> alt="">
						</div>
					</div>
					<div class="location__flat-choose--btn">
						<a href="<?=UrlAdd('houses')?>" class="location__flat-choose--link"><?=$mes['Выбор квартиры']?> <i class="arrow-right-black"></i></a>
					</div>
				</div>		
			</section>
			<section class="location-map" id='location'>
				<div class="location-map__inner">
					<div id="map" class="main-map"></div>
					<div class="markers__text">
						<div class="main__marker">
							<div class="map__info-marker">
								<p><img class="main__marker_logo" src="/img/main-logo.png" height="52" width="165" alt=""></p>
							    <p><i class="map-ico"></i> <?=$mes['i-mes14']?> <?=$mes['i-mes13-contact']?></p>
							</div>
						</div>
					</div>
					<div class="map__infostruction">
						<ul class="map__infostruction_list">
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="suvenire"><span class="map-ico__wrapper"><i class="suvenire-mini-ico"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Сувенирные магазины']?></span></button>
							</li>
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="gym"><span class="map-ico__wrapper"><i class="gym-mini-ico"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Спорт комплексы']?></span></button>
							</li>
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="highschool"><span class="map-ico__wrapper"><i class="highschool-mini-ico"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Высшие учебные заведения']?></span></button>
							</li>
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="kinderGarden"><span class="map-ico__wrapper"><i class="kinder-garden-mini-ico"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Детские садики']?></span></button>
							</li>
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="restaurant"><span class="map-ico__wrapper"><i class="restaurant-mini-ico"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Кафе, рестораны']?></span></button>
							</li>
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="school"><span class="map-ico__wrapper"><i class="school-mini-ico"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Школы']?></span></button>
							</li>
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="dantist"><span class="map-ico__wrapper"><i class="dantist-mini-ico"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Стоматология']?></span></button>
							</li>
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="aptec"><span class="map-ico__wrapper"><i class="aptec-mini-ico"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Аптеки']?></span></button>
							</li>
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="shop"><span class="map-ico__wrapper"><i class="market-mini-ico"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Супермаркеты']?></span></button>
							</li>
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="market"><span class="map-ico__wrapper"><i class="shop-mini-ico"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Тортговые центры']?></span></button>
							</li>
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="bank"><span class="map-ico__wrapper"><i class="bank-mini-ico"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Банки']?></span></button>
							</li>
							<li class="map__infostruction_item">
								<button class="btn-filter" data-type="park"><span class="map-ico__wrapper"><i class="tree-yellow-silhouette-shape"></i></span>
								<span class="map_infostruction_item--text"><?=$mes['Парки']?></span></button>
							</li>
						</ul>
					</div>
					<div class="map__info_container">
						<div class="map__info">
							<p class="map__info_title"><?=$mes['пешком']?></p>
							<p class="map__info_subtitle"><?=$mes['1 минута']?></p>
							<ul class="map__info_list">
								<li class="map__info_item"><?=$mes['Пляж']?></li>
								<li class="map__info_item"><?=$mes['Ботанический сад']?></li>
							</ul>
							<p class="map__info_subtitle"><?=$mes['3 минуты']?></p>
							<ul class="map__info_list">
								<li class="map__info_item"><?=$mes['Ближайший супермаркет']?></li>
							</ul>
							<p class="map__info_subtitle"><?=$mes['10 минут']?></p>
							<ul class="map__info_list">
								<li class="map__info_item"><?=$mes['ТРЦ Сады победы']?></li>
							</ul>
							<p class="map__info_title"><?=$mes['на авто']?></p>
							<p class="map__info_subtitle"><?=$mes['5 минут']?></p>
							<ul class="map__info_list">
								<li class="map__info_item"><?=$mes['Аркадия']?></li>
							</ul>
							<p class="map__info_subtitle"><?=$mes['10 минут']?></p>
							<ul class="map__info_list">
								<li class="map__info_item"><?=$mes['Улица Дерибасовская']?></li>
							</ul>
						</div>
					</div>
				</div>
			</section>
		</div>
		
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCb1nF3LPA_ZOACIAdwgtrh0nrQd4NYybA&sensor=false"></script>	
	
<?php	 FooterAdd();		?>

	
	


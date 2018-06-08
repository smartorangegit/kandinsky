<?php  HeadAdd();?>




	<div class="wrapper">
		<section class="news">
			<!-- header -->
			<?php HeaderInclude();?>
			<!-- header-end-->
			<div class="container"  >
				<h1 class="news__title"><?H1page()?></h1>
				
				<?if (count($ReaNews['ReaNews'])) {?>
				<div class="news__list" id="content">
				 	<? $i=0; foreach($ReaNews['ReaNews'] as $key=>$s): $i++;?>
					<div class="news__item">
					
					
					<?if($i%2) {?>
					
					<div class="news__item_pict">
							<?/*<img <?img('/img/news/news-item-1.jpg');  AltImgAdd($s['name_news'])?> >*/?>
						<a href="<?UrlAdd($s["urls"])?>">
							<img <?img($s['img-min']);  AltImgAdd($s['name_news'])?>>
						</a>
					</div>
						<div class="news__item_text">
							<a  class="news__item_btn-a" href="<?UrlAdd($s["urls"])?>">
								<p class="news__item_title">
									<?=cropStrStyle($s['name_news'])?>
								</p>
							</a>
							<p class="news__item_about"><?=$s['mini_text']?></p>
							<a href="<?UrlAdd($s["urls"])?>" class="news__item_btn"><?=$mes['i-mes7']?><i class="arrow-gray-right"></i></a>
							<span class="news__date"><?= date("d.m.Y", strtotime($s['date']));?></span>
						</div>
					<?	} else { ?>

						<div class="news__item_text">
							<a  class="news__item_btn-a" href="<?UrlAdd($s["urls"])?>">
								<p class="news__item_title">
									<?=cropStrStyle($s['name_news'])?>
								</p>
							</a>
							<p class="news__item_about"><?=$s['mini_text']?></p>
							<a href="<?UrlAdd($s["urls"])?>" class="news__item_btn"><?=$mes['i-mes7']?><i class="arrow-gray-right"></i></a>
							<span class="news__date"><?= date("d.m.Y", strtotime($s['date']));?></span>
						</div>
						<div class="news__item_pict">						
							<a href="<?UrlAdd($s["urls"])?>">
							<img <?img($s['img-min']);  AltImgAdd($s['name_news'])?>>
						</a>
						</div>

					<? } ?>
							
					</div>
					<?endforeach;?>
										
				</div>
				<?}?>
			</div>
	
		</section>
		
<?php	 FooterAdd(array('html'=>
		"<script>
		$(document).ready(function() {
			$('#content').scrollPagination({
				nop     : {$postnumbers}, // Количество запрашиваемых из БД записей
				offset  : {$offset}, // Начальное смещение в количестве запрашиваемых данных
				count  : {$ReaNews['num']}, // Начальное смещение в количестве запрашиваемых данных
				lang  :  '{$_POST['lang']}', 
				error   : '', // оповещение при отсутствии данных в БД
				add: '{$mes['n-mes1']}',
				loading: '{$mes['n-mes2']}',
				delay   : 300, // Задержка перед загрузкой данных
				scroll  : true // Если true то записи будут подгружаться при прокрутке странице, иначе только при нажатии на кнопку 
			});
		});
		</script>" , 'head'=>true
		));		?>


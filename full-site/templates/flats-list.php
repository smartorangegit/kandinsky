<?php  HeadAdd(['robots'=>'noindex,nofollow', 'head'=>true]);?>
	<div class="wrapper">
		<section class="apartments">
			<!-- header -->
			<?php HeaderInclude();?>
			<!-- header-end-->
			<div class="container">
				<h1 class="apartments__title"><?H1page()?></h1>
				<div class="apartments__inner">
					<div class="apartments__calc">
						<?/*<a href="<?=UrlAdd('/plan1/sections1/floor3/')?>" class="apartments__calc_back">Выбрать дом <i class="arrow-left-long-grey"></i></a>*/?>
						<a href="<?UrlAdd('parametrs')?>" class="apartments__calc_btn"><i class="calc-ico"></i><span><?=$mes['f-mes8']?></span></a>
						<a  href="<? echo UrlAdd('pdf', 1).'?time='.time();?>" rel="nofollow"   target="_blank" class="apartments__PDF"><?=$mes['f-mes9']?><i class="arrow-down-brown"></i></a>
						<div class="apartments__booking">
							<div class="apartments__booking_inner">
								<a href="" class="apartments__bookin_link"></a>
								<span><?=$mes['f-mes1']?></span>
								<div class="key-ico"></div>
							</div>
						</div>
					</div>
					<div class="flat__pict">
						<a href="" class="apartments__get-prize"><?=$mes['f-mes2']?> <i class="arrow-right-brown"></i></a>
						<div class="flat__plan">
							<img <?img($img_flat)?>  <?AltImgAdd($mes['fl-mes1'].' '.$REZULT2['number'])?>>
						</div>
					</div>

					<div class="apartments__info apartments__floor">
							 <?/*Кнопки вибору поверху*/FloorPrevNextAdd($plan,$sec,$floor,$floor_next,$floor_prev, $si['compas']);?>
						<ul class="apartments__info_param">
							<li class="apartments__info_item" style="text-transform: lowercase"><span class="orange-text"><?=$plan?></span>  <?=$mes['f-mes3']?></li>
								<?/* Секция<li class="apartments__info_item"><span class="orange-text"><?=$sec?></span> <?=$mes['f-mes4']?></li>*/?>
							<li class="apartments__info_item" style="text-transform: lowercase"><span class="orange-text"><?=$number?></span> <?=$mes['f-mes5']?></li>
						</ul>
						<div class="apartments__floor_min-plan">
							<h4 class="floor__min-plan_title"><?=$mes['f-mes6']?></h4>
							<?/*<img src="/img/apartments/floor-plan.png" alt="">*/?>
								<?include($_SERVER['DOCUMENT_ROOT'].'/'.svg_plan($si['img']));?>

						</div>
					</div>

				</div>

				<div class="apartments__param">
					<h2 class="apartments__para_title"><?=$mes['f-mes7']?></h2>
					<ul class="apartments__param_list owl-carousel">
					 <?foreach($mas2 as $k=>$s){  if($s){ ?>
					 	<li class="apartments__square_item">
							<span class="apartments__param_val"><?=$s?></span>
							<h4 class="apartments__param_name"><?=$mas1[$k]?></h4>
						</li>

					<?}}?>

					</ul>
				</div>


			</div>
			<?php /*** modules/inc/form/ */ FormInclude('form_apartments', $kv);?>
		</section>


<?php	 FooterAdd();		?>
<script type="text/javascript">
$('.open_select_list').click(function(){
	$('.select-level-floor-list').toggleClass('select-level-floor-list-opened');
	$('.open_select_list svg').toggleClass('rotated');
})

</script>

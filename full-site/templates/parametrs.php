<?php  HeadAdd();?>
	<div class="wrapper">
		<section class="apartments">
			<!-- header -->
			<?php HeaderInclude();?>
			<!-- header-end-->
			<div class="container">
				<h1 class="apartments__title"><?H1page()?></h1>
				
				<div class="parametrs__filter">
					<div class="parametrs__back-btn">
						<a class="parametrs__back_link" href="javascript:history.go(-1)" mce_href="javascript:history.go(-1)" class=""><?=$mes['Назад']?><i class="arrow-left-brown"></i></a>
					</div>
					<div class="parametrs__filter_item">
						<h3 class="parametrs__filter_item--title"><?=$mes['fl-mes9']?></h3>
						<input type="text" class="floor-slider" data-min='<?= $Rest['floor']['min']?>' data-max='<?=$Rest['floor']['max']?>' name="example1" value="" />
					</div>
					<div class="parametrs__filter_item">
						<h3 class="parametrs__filter_item--title"><?=$mes['fl-mes5']?></h3>
						<input type="text" class="room-slider" data-min='<?= $Rest['room']['min']?>' data-max='<?=$Rest['room']['max']?>' name="example2" value="" />
					</div>
					<div class="parametrs__filter_item">
						<h3 class="parametrs__filter_item--title"><?=$mes['Площадь м2']?></h3>
						<input type="text" class="square-slider" data-min='<?= $Rest['area']['min']?>' data-max='<?=$Rest['area']['max']?>' name="example3" value="" />
					</div>
					
				</div>
				<div class="parametrs__table">

					<ul class="parametrs__table-row-th">
						<li class="parametrs__table_item"><?=$mes['Корпус']?></li>
						<li class="parametrs__table_item"><?=$mes['fl-mes9']?></li>
						<li class="parametrs__table_item">№</li>
						<li class="parametrs__table_item"><?=$mes['Комнат']?></li>
						<li class="parametrs__table_item"><?=$mes['Площадь м2']?></li>
					</ul>
					<div class="parametrs__table_value">
			<?	foreach($REZULT as $key=>$s){ $url="/plan{$s['buld']}/sections{$s['sec']}/floor{$s['floor']}/flat{$s['number']}_{$s['id']}/"; ?>
			<ul class="parametrs__table-row sort" data-floor='<?=$s['floor']?>' data-square='<?=$s['all_room']?>' data-room='<?=$s['kim']?>' 
			data-href='<?UrlAdd('plan'.$s['buld'].'/sections'.$s['sec'].'/floor'.$s['floor'].'/flat'.$s['number'].'_'.$s['id'])?>'>
							<li class="parametrs__table_item"><?=$s['buld']?></li>
							<li class="parametrs__table_item"><?=$s['floor']?></li>
							<li class="parametrs__table_item"><?=$s['number']?></li>
							<li class="parametrs__table_item"><?=$s['kim']?></li>
							<li class="parametrs__table_item"><?=$s['all_room']?></li>
							<li class="parametrs__table_pict">
								<img <?img($s['img'])?> alt="">
							</li>
			</ul>

			<?}?>
		
					</div>
				</div>
					<div class="not_found" ><?=$mes['По вашему запросу ничего не найдено']?></div>
				
			</div>
			
		</section>

		
<?php	 FooterAdd();		?>
	
	


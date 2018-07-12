<?php  HeadAdd();?>
	<div class="wrapper">
		<section class="construction">
			<!-- header -->
			<?php HeaderInclude();?>
			<!-- header-end-->
			<div class="container">
				<h1 class="news__title"><?H1page()?></h1>
				<div class="construction__status-text">
				    <p><?/* =$mes['Статус работ'] */?></p>
					<p><?/* =$mes['Статус работ: работы по благоустройству фундамента'] */?></p>
					<p><?=$mes['Запланированное время завершения строительства: II квартал 2018 года']?></p>
					
				</div>
				<div class="construction__progress--wrapper">
					<div class="construction__progress">
						<div class="construction__progress--heading"><?=$mes['Секция 3']?></div>
							<div class="block_hod-stroitelstva">
								<p><?=$mes['Статус работ']?></p>
								<p><?=$mes['Статус работ описание 3']?></p>
							</div>
					<ul class="construction__progress--items">
						<li class="construction__progress--item">
							<span class="construction__progress--name"><?= $mes['construction-perc1']; ?></span>
							<div class="construction__progress--bar">
								<span class="construction__progress--val"><?= $constructionMain3; ?></span>
								<span class="construction__progress--container">
									<span class="construction__progress--line"></span>	
								</span>
								<div class="construction__progress--specific-data">
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc2']; ?> - <?= $constructionSub3[0]; ?>%</span>
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc3']; ?> - <?= $constructionSub3[1]; ?>%</span>
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc4']; ?> - <?= $constructionSub3[2]; ?>%</span>
									
								</div>
							</div>
						</li>
						<li class="construction__progress--item">
							<span class="construction__progress--name"><?= $mes['construction-perc5']; ?></span>
							<div class="construction__progress--bar">
								<span class="construction__progress--val"><?= $facadeMain3; ?></span>
								<span class="construction__progress--container">
									<span class="construction__progress--line"></span>	
								</span>
								<div class="construction__progress--specific-data">
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc6']; ?> - <?= $facadeSub3[0]?>%</span>
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc7']; ?> - <?= $facadeSub3[1]?>%</span>
								</div>
							</div>
						</li>
						<li class="construction__progress--item">
							<span class="construction__progress--name"><?= $mes['construction-perc8']; ?></span>
							<div class="construction__progress--bar">
								<span class="construction__progress--val"><?= $beautificationMain3; ?></span>
								<span class="construction__progress--container">
									<span class="construction__progress--line"></span>	
								</span>
								<!-- <div class="construction__progress--specific-data">
									<span class="construction__progress--specific-data-val">роботи до відм. 0,000 - 1%</span>
									<span class="construction__progress--specific-data-val">каркас - 2%</span>
								</div> -->
							</div>
						</li>
						<li class="construction__progress--item">
							<span class="construction__progress--name"><?= $mes['construction-perc9']; ?></span>
							<div class="construction__progress--bar">
								<span class="construction__progress--val"><?= $networksMain3; ?></span>
								<span class="construction__progress--container">
									<span class="construction__progress--line"></span>	
								</span>
								<div class="construction__progress--specific-data">
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc10']; ?> - <?= $networksSub3[0]; ?>%</span>
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc11']; ?> - <?= $networksSub3[1]; ?>%</span>
								</div>
							</div>
						</li>
					</ul>
					</div>
					<div class="construction__progress">
						<div class="construction__progress--heading"><?= $mes['Секция 4']; ?></div>
							<div class="block_hod-stroitelstva">
								<p><?=$mes['Статус работ']?></p>
								<p><?=$mes['Статус работ описание 4']?></p>
							</div>
					<ul class="construction__progress--items">
						<li class="construction__progress--item">
							<span class="construction__progress--name"><?= $mes['construction-perc1']; ?></span>
							<div class="construction__progress--bar">
								<span class="construction__progress--val"><?= $constructionMain4; ?></span>
								<span class="construction__progress--container">
									<span class="construction__progress--line"></span>	
								</span>
								<div class="construction__progress--specific-data">
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc2']; ?> - <?= $constructionSub4[0]; ?>%</span>
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc3']; ?> - <?= $constructionSub4[1]; ?>%</span>
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc4']; ?> - <?= $constructionSub4[2]; ?>%</span>
								</div>
							</div>
						</li>
						<li class="construction__progress--item">
							<span class="construction__progress--name"><?= $mes['construction-perc5']; ?></span>
							<div class="construction__progress--bar">
								<span class="construction__progress--val"><?= $facadeMain4; ?></span>
								<span class="construction__progress--container">
									<span class="construction__progress--line"></span>	
								</span>
								<div class="construction__progress--specific-data">
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc6']; ?> - <?= $facadeSub4[0]?>%</span>
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc7']; ?> - <?= $facadeSub4[1]?>%</span>
								</div>
							</div>
						</li>
						<li class="construction__progress--item">
							<span class="construction__progress--name"><?= $mes['construction-perc8']; ?></span>
							<div class="construction__progress--bar">
								<span class="construction__progress--val"><?= $beautificationMain4; ?></span>
								<span class="construction__progress--container">
									<span class="construction__progress--line"></span>	
								</span>
								<!-- <div class="construction__progress--specific-data">
									<span class="construction__progress--specific-data-val">роботи до відм. 0,000 - 1%</span>
									<span class="construction__progress--specific-data-val">каркас - 2%</span>
								</div> -->
							</div>
						</li>
						<li class="construction__progress--item">
							<span class="construction__progress--name"><?= $mes['construction-perc9']; ?></span>
							<div class="construction__progress--bar">
								<span class="construction__progress--val"><?= $networksMain4; ?></span>
								<span class="construction__progress--container">
									<span class="construction__progress--line"></span>	
								</span>
								<div class="construction__progress--specific-data">
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc10']; ?> - <?= $networksSub4[0]; ?>%</span>
									<span class="construction__progress--specific-data-val"><?= $mes['construction-perc11']; ?> - <?= $networksSub4[1]; ?>%</span>
								</div>
							</div>
						</li>
					</ul>
					</div>
				</div>
				<!-- My -->
<?/* 				<div class="construction__progress--wrapper">
					<div class="construction__progress">
					<div class="construction__progress--heading"><?= $mes['Фото со строительства 3-й секции']; ?></div>
						<div class="construction__list" id='content1'>
							<? Gallery_list($postnumbers, $offset, $img, 3);?>
                        </div>
					</div>
					<div class="construction__progress">
					<div class="construction__progress--heading"><?= $mes['Фото со строительства 4-й секции']; ?></div>
						<div class="construction__list" id='content2'>
							<? Gallery_list($postnumbers, $offset, $img, 4);?>
						</div>
					</div>
				</div> */?>
				<style>
				.construction__webcam {margin: 43px auto 0 auto;}
				#content1 .construction_item,#content2 .construction_item {width:100%;}
				.block_hod-stroitelstva{height: 95px;width: 100%;}@media screen and (max-width:600px){.block_hod-stroitelstva{height: 128px;}}
				</style>
				<!-- Nay My -->
				<div class="construction__webcam">
					<a href="/webcam/" class="construction__webcam--link"> <?= $mes['Веб-камера']; ?> <i class="arrow-right-black"></i></a>
				</div>
				<div class="construction__status-text">
					<p><?= $mes['Фото со строительства 3-й и 4-й секций']; ?></p>
				</div>
				<div class="construction__list" id='content3'>

				<? Gallery_list($postnumbers, $offset, $img, 0);?>

				</div>

		</section>

<?php	 FooterAdd(array('html'=>
		"<script>
		$(document).ready(function() {
			$('#content1').scrollPagination({
				nop     : {$postnumbers},
				offset  : {$offset},
				count  : {$count},
				lang  :  '{$_POST['lang']}',
				error   : '',
				add: '{$mes['n-mes1']}',
				loading: '{$mes['n-mes2']}',
				delay   : 300,
				scroll  : true,
				page: 'gallery'
			});
		});
		</script>" , 'head'=>true
		));		
	 FooterAdd(array('html'=>
		"<script>
		$(document).ready(function() {
			$('#content2').scrollPagination({
				nop     : {$postnumbers},
				offset  : {$offset},
				count  : {$count},
				lang  :  '{$_POST['lang']}',
				error   : '',
				add: '{$mes['n-mes1']}',
				loading: '{$mes['n-mes2']}',
				delay   : 300,
				scroll  : true,
				page: 'gallery'
			});
		});
		</script>" , 'head'=>true
		));	
  FooterAdd(array('html'=>
		"<script>
		$(document).ready(function() {
			$('#content3').scrollPagination({
				nop     : {$postnumbers},
				offset  : {$offset},
				count  : {$count},
				lang  :  '{$_POST['lang']}',
				error   : '',
				add: '{$mes['n-mes1']}',
				loading: '{$mes['n-mes2']}',
				delay   : 300,
				scroll  : true,
				page: 'gallery'
			});
		});
		</script>" , 'head'=>true
		));		?>
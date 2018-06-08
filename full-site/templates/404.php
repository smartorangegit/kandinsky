<?php  HeadAdd(['robots'=>'noindex,nofollow', 'head'=>true]);?>
	<div class="page-404__wrapper">
		<!-- header -->
		<?php HeaderInclude();?>
		<!-- header-end-->
		<div class="page-404__content">
			<div class="page-404__inner">
				<h1 class="post__title">
					<?=$mes['404-h1']?>
				</h1>
				<div class="page-404__btns">
					<div class="page-404__btns_item first-item">
						<a class="page-404__btns_link" href="javascript:history.go(-1)" mce_href="javascript:history.go(-1)">
							<i class="arrow-long-left-black"></i><span><?=$mes['404-mes2']?></span>
						</a>
					</div>
					<div class="page-404__btns_item">
						<a class="page-404__btns_link" href="<?UrlAdd()?>">
							<i class="arrow-long-left-black"></i><span><?=$mes['404-mes3']?></span>
						</a>
					</div>
				</div>
				<h2 class="page-404__title">
					<?=$mes['404-mes1']?>
				</h2>
				<p class="page-404__text"><?=$mes['404-mes4']?></p>
				<div class="wave-line">
					
				</div>
			</div>

<?php	 FooterAdd(array('html'=>'</div>'));		?>
	
	


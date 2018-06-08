<?php  HeadAdd();?>
	<div class="webcam-wrapper">
		<!-- header -->
		<?php HeaderInclude();?>
		<!-- header-end-->
		<div class="content webcam-wrapper">
			<div class="post__inner">
				<div class="container">
					<h1 class="post__title">
						<?=$mes['webcam-h1']?>
					</h1>
					<p class="webcam-video__description">
						<?=$mes['Строительство дома №3']?>
					</p>
					<div class="webcam-video__list">
						<div class="webcam-video">
							<div class="webcam-video__inner">
								<div class="web-cam__online">
									<iframe src="https://macparts.kiev.ua:8422/player.html" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
						<div class="webcam-video">
							<div class="webcam-video__inner">
								<div class="web-cam__online">
									<iframe src="https://macparts.kiev.ua:8421/player.html" frameborder="0" allowfullscreen></iframe>
								</div>
							</div>
						</div>
					</div>

					<div class="webcam__contruction_btn">
						<a href="<?UrlAdd('construction')?>" class="webcam__contruction_link"><?=$mes['Ход строительства']?><i class="arrow-right-long-blue"></i></a>
					</div>
				</div>
			</div>
		</div>
<?php	 FooterAdd();		?>

	
	


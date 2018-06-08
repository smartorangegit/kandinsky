<?php  HeadAdd();?>
	<div class="wrapper">
		<!-- header -->
			<?php HeaderInclude();?>
		<!-- header-end-->
		<section class="contacts-page">
				<div class="container">
					<div class="contacts__inner">
						<div class="contacts__info">
							<h1 class="contacts__info_title"><?=$mes['contacts-h1']?></h1>
							<div class="contacts__info_container">
								<p class="contacts__info_subtitle"><?=$mes['i-mes12']?></p>
								<ul class="contacts__info_list">
									<li class="contacts__info_item"><i class="map-ico"></i><?=$mes['i-mes13-contact']?></li>
									<li class="contacts__info_item"><i class="phone-ico"></i><?=$mes['tel-format']?></li>
									<li class="contacts__info_item"><i class="mail-ico"></i>info@kandinsky-residence.com.ua</li>
									<li class="contacts__info_item">Пн-пт: 10.00 - 20.00</li>
									<li class="contacts__info_item">Сб - Вск: 10.00 - 18.00</li>
								</ul>
							</div>
							<div class="contacts__info_container contacts__info_marketing">
								<p class="contacts__info_subtitle"><?=$mes['i-mes15']?></p>
								<ul class="contacts__info_list">
									<li class="contacts__info_item"><i class="mail-ico"></i>marketing@saga-development.com.ua</li>
									<li>
										<a href="#"  class="collaboration_btn"><?=$mes['collaboration']?></a>
									</li>					
								</ul>
							</div>
						</div>
						<div class="contacts__form_wrapper">
							<?php /*** modules/inc/form/ */ FormInclude('form_index');?>		
						</div>
						
						<?php /*** modules/inc/form/ */ FormInclude('form_rieltor');?>
					</div>
				</div>
		</section>
<?php	 FooterAdd();		?>

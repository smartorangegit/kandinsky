<?php  HeadAdd(['robots'=>'noindex,nofollow', 'head'=>true]);?>
	<div class="page-404__wrapper">
		<!-- header -->
		<?php HeaderInclude();?>
		<!-- header-end-->
		<div class="page-404__content">
			<div class="page-404__inner">
				<h1 class="post__title">
				
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
				<h2 class="page-404__title message_title ">
					<?=$mes['message-title']?>
				</h2>
				<p class="page-404__text"><?=$mes['404-mes4']?></p>
				<div class="wave-line">
					
				</div>
			</div>
<style>
.page-404__content {
	
 	min-height: 100%;
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
     background:url(/img/message/message-bg.jpg) center center no-repeat; 
    -webkit-background-size: cover;
    background-size: cover;
    position: relative; 
}
.message_title {
	font-size: 4.875em;
	background: rgba(255,255,255,.4);
	color:#244C5A;
}
@media screen and (max-width: 1200px){
	.message_title {
		font-size: 3.375em;
	}
}
@media screen and (max-width: 450px){
	.message_title {
		font-size: 2.5em;
	}
}
</style>
<?php	 FooterAdd(array('html'=>'</div>'));		?>
	
	


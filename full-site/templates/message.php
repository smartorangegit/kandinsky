<?php  HeadAdd(['robots'=>'noindex,nofollow', 'head'=>true]);?>
	<div class="page-404__wrapper">
		<!-- header -->
		<?php HeaderInclude();?>
		<!-- header-end-->
		<div class="page-404__content">
			<div class="page_hidden">

			</div>
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
				<p class="page-404__text"><?=$mes['message-text']?></p>
				<p class="page-404__text"><?=$mes['message-text1']?></p>
				<div class="owl-carousel owl_custom_stying">
					<div class="other-projects__project other-projects__project__rybalsky">
						<a target="_blank" href="https://rybalsky.com.ua/"><img src="/img/other-projects-logos/rybalsky_logo_blue.svg" alt="RYBALSKY"></a>
					</div>
					<div class="other-projects__project other-projects__project__bristol">
						<a target="_blank" href="https://bristol.house/"><img src="/img/other-projects-logos/bristol_logo.svg" alt="Bristol"></a>
					</div>
					<div class="other-projects__project other-projects__project__newyork">
						<a target="_blank" href="http://new-york.com.ua/"><img src="/img/other-projects-logos/new_york_logo.svg" alt="New York"></a>
					</div>
					<div class="other-projects__project other-projects__project__resident">
						<a target="_blank" href="http://resident.house/"><img src="/img/other-projects-logos/resident_logo_color.svg" alt="RESIDENT"></a>
					</div>
					<div class="other-projects__project other-projects__project__sanfrancisco">
						<a target="_blank" href="http://sanfrancisco.com.ua/"><img src="/img/other-projects-logos/san_francisco_color.svg" alt="San Francisco"></a>
					</div>
					<div class="other-projects__project other-projects__project__einstein">
						<a target="_blank" href="https://einstein.house/"><img src="/img/other-projects-logos/einstein-logo-blue.svg" alt="EINSTEIN"></a>
					</div>
				</div>
				<div class="wave-line"></div>
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
   background:url('/img/message/message-bg.jpg') center center no-repeat;
  -webkit-background-size: cover;
  background-size: cover;
  position: relative;
	color: white;
	z-index: 1;
}
.page_hidden{
	position: absolute;
	left: 0;
	top: 0;
	width: 100%;
	height: 100%;
	/* background-color: rgba(0,0,0,0.45); */
	background-color: rgba(255,255,255,0.5);

	pointer-events: none;
	z-index: -1;
}
.message_title {
	font-size:50px;
	/* background: rgba(255,255,255,.4); */
	color:#244C5A;
}
.page-404__text {
    margin: 20px auto 10px;
    font-size: 24px;
    line-height: 1.5;
    display: block;
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

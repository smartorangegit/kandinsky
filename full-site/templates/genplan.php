<?php  HeadAdd();?>
	<div class="webcam-wrapper genplan-wrapper">
		<!-- header -->
		<?php HeaderInclude();?>
		<!-- header-end-->
		<div class="content webcam-wrapper">
			<div class="post__inner">
				<div class="container">
					<h1 class="post__title">
						Генеральный план
					</h1>
					<p class="architection__about_text">
						Наведите на синие элементы генерального плана
					</p>
					<div class="genplan_container infostruction__advantages_item">
						<div class="genplan__main-img">
							<div data-img="25_park" class="inter_link inter_link__0">Парк</div>
							<div data-img="37_dvir2" class="inter_link inter_link__1">Двор</div>
							<div data-img="31_tzk2" class="inter_link inter_link__2">Территория общего <br>пользования</div>
							<div data-img="45_kubi" class="inter_link inter_link__3">КУБЫ</div>
						</div>
						<div class="arrow_genplan_box">
							<i class="arrow-right-black fadeIn"></i>
							<i class="arrow-right-black fadeIn"></i>
							<i class="arrow-right-black fadeIn"></i>
						</div>
						<div class="genplan__prev-img">
							<!-- <img src="/img/genplan/genplan_night.jpg" alt="Kandinsky Residence"> -->
							<div class="genplan_slider">
								<div class="genplan_item">
									<img src="/img/genplan/25_park.jpg" alt="Kandinsky Residence">
									<div class="genplan_modal">Парк</div>
								</div>
								<div class="genplan_item">
									<img src="/img/genplan/37_dvir2.jpg" alt="Kandinsky Residence">
									<div class="genplan_modal">Двор</div>
								</div>
								<div class="genplan_item">
									<img src="/img/genplan/31_tzk2.jpg" alt="Kandinsky Residence">
									<div class="genplan_modal">Территория общего пользования</div>
								</div>
								<div class="genplan_item">
									<img src="/img/genplan/45_kubi.jpg" alt="Kandinsky Residence">
									<div class="genplan_modal">Кубы - ночь</div>
								</div>

							</div>
						</div>
					</div>

					<!-- <div class="webcam__contruction_btn">
						<a href="<?UrlAdd('construction')?>" class="webcam__contruction_link"><?=$mes['Ход строительства']?><i class="arrow-right-long-blue"></i></a>
					</div> -->
				</div>
			</div>
			<style media="screen">
				.infostruction__advantages_item{margin:auto;}
				.infostruction__advantages_item:before{	content: none;}
				.architection__about_text{
					margin-bottom: 20px;
					font-size: 14px;
					color: #2a5c6c;	}
				.genplan_container{
					display: flex;display: -webkit-flex;
					justify-content: space-between; -webkit-justify-content: space-between;
					align-items: center;	-webkit-align-items: center;
				}
				.genplan__main-img{
					background-image: url('/img/genplan/genplan.jpg');
					background-size: cover;
					background-position: center;
			    height: 400px;
			    width: 46%;
					position: relative;
				}
				.inter_link{display: inline-block;   background: #2a5c6c;   position: absolute; font-size: 14px; padding: 2px;}
				.genplan__prev-img{ height: 400px; width: 46%;}
				.genplan__prev-img img{	width: 100%;height: 100%;	object-fit: cover;}
				.arrow_genplan_box{	display: flex; display: -webkit-flex; flex-direction: column;	-webkit-flex-direction: column; }
				.arrow_genplan_box i{	margin: 4px 0;}
				.inter_link__0{top: 50%; left: 16%;}
				.inter_link__1{top: 35%; left: 60%;}
				.inter_link__2{top: 62%; text-align: center;left: 50%;}
				.inter_link__3{top: 40%; left: 75%;	}
				.genplan_item{position: relative;}
				.genplan_modal{	position: absolute;top: 0;left: 0;background: rgb(42, 92, 108, .85);
					width: 100%; padding: 8px 20px; font-size: 24px;}
					.slick-list,.slick-slider,.slick-track{position:relative;display:block}.slick-loading .slick-slide,.slick-loading .slick-track{visibility:hidden}*,.slick-slider,:after,:before{box-sizing:border-box}.slick-slider{-webkit-touch-callout:none;-webkit-user-select:none;-khtml-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-ms-touch-action:pan-y;touch-action:pan-y;-webkit-tap-highlight-color:transparent}.slick-list{overflow:hidden;margin:0;padding:0}.slick-list:focus{outline:0}.slick-list.dragging{cursor:pointer;cursor:hand}.slick-slider .slick-list,.slick-slider .slick-track{-webkit-transform:translate3d(0,0,0);-moz-transform:translate3d(0,0,0);-ms-transform:translate3d(0,0,0);-o-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}.slick-track{left:0;top:0;margin-left:auto;margin-right:auto}.slick-track:after,.slick-track:before{content:"";display:table}.slick-track:after{clear:both}.slick-slide{float:left;height:100%;min-height:1px;display:none;outline:0}[dir=rtl] .slick-slide{float:right}.slick-slide img{display:block}.slick-slide.slick-loading img{display:none}.slick-slide.dragging img{pointer-events:none}.slick-initialized .slick-slide{display:block}.slick-vertical .slick-slide{display:block;height:auto;border:1px solid transparent}.slick-arrow.slick-hidden{display:none}
					.genplan_slider{height: 100%; overflow: hidden;}
					.slick-slide{height: 400px;}
					.slick-dots{display: flex;  position: absolute;  bottom: 0;  text-align: center;  left: 0;  width: 100%;  justify-content: center;}
					.slick-dots button{	display: inline-block; background: #2a5c6c; border: none; border-radius: 100%; font-size: 0; padding: 7px; margin: 8px;	}
					/* slick */
				@media only screen and (max-width: 1024px) {
					.genplan__main-img{	height: 300px;}
					.genplan__prev-img, .slick-slide{	height: 300px;}
				}
				@media only screen and (max-width: 768px) {
					.genplan__main-img{width:100%;}
					.genplan__prev-img{width:100%;}
					.genplan_modal { padding: 4px 20px; font-size: 20px;} 
				}
				@media only screen and (max-width: 400px) {
					.genplan__main-img{	height: 200px;}
					.genplan__prev-img, .slick-slide{	height: 200px;}
				}
			</style>
		</div>
<?php	 FooterAdd();		?>
<script src="/js/slick.js">

</script>
<script type="text/javascript">
		// $('.inter_link').hover(function(){
		//   var image = this.dataset.img;
		//   $('.genplan__prev-img img').attr('src','/img/genplan/'+ image + '.jpg').addClass('active_img');
		// });
		var slickGenplan = $('.genplan_slider').slick({
			dots: true,
			fade: true,
			arrows: false

		});
		$('.inter_link').each( function( i ) {
		$('.inter_link__'+i).click(function(){
	    slickGenplan.slick('slickGoTo', i);
	    // slickCat1.slick('slickGoTo', i);
	  });
	});
</script>

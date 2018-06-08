<?php  HeadAdd($html=['title'=>$ReaNews['title'], 'description'=>$ReaNews['description'],
 'head'=>'Y', 
  'mata_img'=>$ReaNews['img_news'],
 'html'=>'
	<link rel="canonical" href="'.servername().$_SERVER['REQUEST_URI'].'"/>'.$rel]);?>
	<div class="wrapper">
		<section class="news-open">
			<!-- header -->
			<?php HeaderInclude();?>
			<!-- header-end-->
			<div class="news-open__inner">
				<div class="news-open__pict">
					<h1 class="news-open__title"><?=cropStrStyle($ReaNews['name_news'])?></h1>
					
					<img <?img($ReaNews['img_news']); AltImgAdd($ReaNews['name_news'])?> >
				</div>
				<div class="news-open__text">
					<?=$ReaNews['text']?>
					<a href="<?UrlAdd('news')?>" class="news-open_btn"><i class="arrow-gray-left"></i><?=$mes['new-mes3']?></a>
				</div>
			</div>
			
		</section>
		
<?php	 FooterAdd();		?>

	
	


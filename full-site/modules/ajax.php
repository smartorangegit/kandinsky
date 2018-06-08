<?php  /*All function*/ require_once('function.php');  
$postnumbers = is_numeric($_POST['offset']) ? $_POST['offset'] : die();
$offset = is_numeric($_POST['number']) ? $_POST['number'] : die();
  
   
if ($_POST['page'])  {
	require_once('gallery-lib.php'); 

	Gallery_list($postnumbers, $offset, $img);
	
}else {
	$ReaNews =LoadingNews($postnumbers, $offset);
	   
	 $i=0; foreach($ReaNews['ReaNews'] as $key=>$s): $i++; ?>
					<div class="news__item animated animate">
					
					<?if($i%2) {?>
					
					<div class="news__item_pict">
						<a  href="<?UrlAdd($s["urls"])?>">	
							<img <?img($s['img-min']);  AltImgAdd($s['name_news'])?> >
						</a>
							<?/*<img <?img($s['img-min']);  AltImgAdd($s['name_news'])?> >*/?>
					</div>
						<div class="news__item_text">
							<a  class="news__item_btn-a" href="<?UrlAdd($s["urls"])?>">
								<p class="news__item_title">
									<?=cropStrStyle($s['name_news'])?>
								</p>
							</a>
							<p class="news__item_about"><?=$s['mini_text']?></p>
							<a href="<?UrlAdd($s["urls"])?>" class="news__item_btn"><?=$mes['i-mes7']?><i class="arrow-gray-right"></i></a>
						</div>
					<?	} else { ?>

						<div class="news__item_text">
							<a  class="news__item_btn-a" href="<?UrlAdd($s["urls"])?>">
								<p class="news__item_title">
									<?=cropStrStyle($s['name_news'])?>
								</p>
							</a>
							<p class="news__item_about"><?=$s['mini_text']?></p>
							<a href="<?UrlAdd($s["urls"])?>" class="news__item_btn"><?=$mes['i-mes7']?><i class="arrow-gray-right"></i></a>
						</div>
						<div class="news__item_pict">
						<a  href="<?UrlAdd($s["urls"])?>">
							<img <?img($s['img-min']);  AltImgAdd($s['name_news'])?> >
						</a>	
						</div>

					<? } ?>
						
					</div>
					<?endforeach;?>	
<?php }?>			
									
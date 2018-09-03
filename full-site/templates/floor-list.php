<?php  HeadAdd(['robots'=>'noindex,nofollow', 'head'=>true]);?>
	<div class="wrapper">
		<section class="apartments">
			<!-- header -->
			<?php HeaderInclude();?>
			<!-- header-end-->
			<div class="container">
				<h1 class="apartments__title"><?H1page()?></h1>
				<div class="apartments__inner">
					<div class="apartments__calc">
					<?/*	<a href="<?=UrlAdd('/plan1/sections1/floor3/')?>" class="apartments__calc_back">Выбрать дом <i class="arrow-left-long-grey"></i></a>*/?>
						<a href="<?=UrlAdd('parametrs')?>" class="apartments__calc_btn"><i class="calc-ico"></i><span><?=$mes['f-mes8']?></span></a>
					</div>
					<div class="apartments__pict">
						<ul class="apartments__color_list">
							<li class="apartments__color_item"><i class="circle pink-circle"></i><?=$mes['fl-mes1']?></li>
							<li class="apartments__color_item"><i class="circle brown-circle"></i><?=$mes['fl-mes2']?></li>
							<li class="apartments__color_item"><i class="circle blue-circle"></i><?=$mes['fl-mes3']?></li>
							<li class="apartments__color_item"><i class="circle fiol-circle"></i><?=$mes['fl-mes4']?></li>
						</ul>
						<div class="apartments__plan">
							<?include(svg_plan($svg=$si['img']));?>
						</div>
					</div>
					<div class="apartments__info">
			 <?/*Кнопки вибору поверху*/FloorPrevNextAdd($plan,$sec,$floor,$floor_next,$floor_prev, $si['compas']);?>
			 <?/* Секция
			 <div class="apartments__section">
                            <span class="section__number"><?=$sec?></span>
                            <div class="section__number_title"><?=$mes['f-mes4']?></div>
                        </div>*/?>
					</div>

				</div>
				<div class="apartments__param"  id='flats' >
					<h2 class="apartments__para_title"><?=$mes['f-mes7']?></h2>
					<ul class="apartments-floor__param_list">
						<li class="apartments__param_item">
							<span class="apartments__param_val"><?=$plan?></span>
							<h4 class="apartments__param_name"><?=$mes['f-mes3']?></h4>
						</li>
						<?/* Секция
						<li class="apartments__param_item">
							<span class="apartments__param_val"><?=$sec?></span>
							<h4 class="apartments__param_name"><?=$mes['f-mes4']?></h4>
						</li> */?>
						<li class="apartments__param_item">
							<span class="apartments__param_val flats" id="number_s">X</span>
							<h4 class="apartments__param_name"><?=$mes['f-mes5']?></h4>
						</li>
						<li class="apartments__param_item">
							<span class="apartments__param_val flats" id="room_s">X</span>
							<h4 class="apartments__param_name"><?=$mes['fl-mes5']?></h4>
						</li>
						<li class="apartments__param_item">
							<span class="apartments__param_val flats" id="all_room_s">X <span><?=$mes['pl-mes7']?><?=$mes['fl-mes8']?></span></span>
							<h4 class="apartments__param_name"><?=$mes['fl-mes6']?></h4>
						</li>
						<li class="apartments__param_item">
							<span class="apartments__param_val flats" id="life_room_s">X <span><?=$mes['pl-mes7']?><?=$mes['fl-mes8']?></span></span>
							<h4 class="apartments__param_name"><?=$mes['fl-mes7']?></h4>
						</li>
					</ul>
				</div>

			</div>

		</section>
<style>
<?
foreach($clas_css as $key=>$s){
	if ($REZULT[$key]['kim']==1) $color='#b17c57';
	else if($REZULT[$key]['kim']==2) $color='#234c5a';
	else if($REZULT[$key]['kim']==3) $color='#926da2';

	if ($REZULT[$key]['sales']) $color='#f4ede7';
 echo '.'.$s.'_{ opacity: 0.8; fill:'.$color.';}';
}
?>
</style>

<? ob_start(); ?>

<script>

<? $i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key];?>
$('.<?=$clas_js[$key]?>').mouseover(function(e) {
  document.getElementById("number_s").innerHTML = "<?=$s['number']?>";
  document.getElementById("room_s").innerHTML = "<?=$s['kim']?>";
  document.getElementById("life_room_s").innerHTML = "<?=$s['life_room']?> <span><?=$mes['pl-mes7']?> <?=$mes['fl-mes8']?></span>";
  document.getElementById("all_room_s").innerHTML = "<?=$s['all_room']?> <span><?=$mes['pl-mes7']?> <?=$mes['fl-mes8']?></span>";
 <?// document.getElementById("flats").style = "display:block";>?>
  $('.flats').css("display", "block");

      var x = e.pageX;
    var y = e.pageY;
    var leftPos = x - $('.lin_<?=$i?>').width() - 250;
    var topPos = y - $('.lin_<?=$i?>').height() - 20;

    $(".lin_<?=$i?>").css({top:topPos, left:leftPos});
}).mouseout(function()
{
<?//document.getElementById("flats").style = "display:none";
 // $('.flats').css("display", "none");?>

  document.getElementById("number_s").innerHTML = "X";
  document.getElementById("room_s").innerHTML = "X";
  document.getElementById("life_room_s").innerHTML = "X <span><?=$mes['pl-mes7']?>м&sup2;</span>";
  document.getElementById("all_room_s").innerHTML = "X <span><?=$mes['pl-mes7']?>м&sup2;</span>";
});
 <?}?>
 	<?$i=0; foreach($REZULT as $key=>$s){  $i++; $cl=$clas_css[$key];?>
$('.<?=$clas_js[$key]?>').mouseover(function() {
  $('.lin_<?=$i?>').css('display', 'block');
}).mouseout(function()
{
$('.lin_<?=$i?>').css('display', 'none');
});
 <? } ?>




</script>

<script type="text/javascript">
$('.open_select_list').click(function(){
	$('.select-level-floor-list').toggleClass('select-level-floor-list-opened');
	$('.open_select_list svg').toggleClass('rotated');
})

</script>

<?$Js= ob_get_clean(); ?>


<?php	 FooterAdd(array('html'=>$Js, 'head'=>true)); ?>

<?php	include('config.php');
function LangAdd(){

			$filename='modules/language/'.(substr($_POST['lang'], 0,2)).".ini"; global 	 $mes, $len_default;

			if (file_exists($filename)) { //echo 111; echo $_POST['lang'];
			 $mes = parse_ini_file($filename);			 }
			 else{ 	 $mes = parse_ini_file('language/'.$len_default.'.ini'); ;	}
	}

function HeadAdd($html=['html'=>'', 'head'=>true]){ GLOBAL $mes,$SETPAGE;

	if ($html['head']!=false) { echo '<!DOCTYPE html><html lang="'.$mes['fut-mes3'].'">';}
	if(!$html['title'])
	{
		$html['title']=$mes[$SETPAGE.'-title'];
		
		if (empty($mes[$SETPAGE.'-title']))
		{
			$html['title']=$mes['text-title'].' '.$mes[$SETPAGE.'-h1'].' '.$mes['text-title1'];
		}	
	}
	if($html['title'] && $html['disable-auto-title'])
	{
		$html['title']=$mes['text-title'].' '.$html['title'].' '.$mes['text-title1'];
	}
	if($html['description']!='N')
	{
		if(!$html['description'])
		{
					$html['description']=$mes[$SETPAGE.'-description'];
				
					if (empty($mes[$SETPAGE.'-description']))
					{
						$html['description']=$mes[$SETPAGE.'-h1'].' '.$mes['text-description'];
					}	
		}
	}	
	if (!$html['robots']) {$html['robots']='index, follow';}
	//if (!$html['alternate']) {$html['alternate']=alternateAdd($_SERVER["REQUEST_URI"]);}
	if (strripos($_SERVER['REQUEST_URI'], '/?')!==false) {	$html['robots'] = 'noindex, nofollow'; }

	?>
	
	<head>
		<meta charset="UTF-8">
		<meta name="robots" content="<?=$html['robots']?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-MWLZSCR');</script>
		<!-- End Google Tag Manager -->

		<?if(strpos($_SERVER['REQUEST_URI'], 'plan2') || strpos($_SERVER['REQUEST_URI'], 'sections')|| strpos($_SERVER['REQUEST_URI'], 'param')):?>
		<link rel="canonical" href="<?='http://'.$_SERVER['SERVER_NAME'].'/plan/';?>"/>
		<?else:?>
		<link rel="canonical" href="<?='http://'.$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];?>"/>
		<?endif;?>
		
		<?if($html['description']!='N'):?>
		<meta name="description" content="<?=$html['description']?>">
		<?endif;?>
		<title><?=$html['title']?></title>
		<?
		if($html['alternate']): echo $html['alternate'];	endif;
		if($html['html']): 	echo $html['html'];	endif;
		?>
		<?if ($html['mata_img']) {?>
		<meta property="og:title" content="<?=$html['title']?>" />
		<meta property="og:description" content="<?=$html['description']?>" />
		<meta property="og:image" content="<?=$_SERVER['SERVER_NAME'].$html['mata_img']?>"/>
		<?}?>
		<?/*Виводиться на всіх сторінках*/?>
		<link rel="icon" href="/img/favicon.ico" type="image/x-icon">
		<link rel="stylesheet" href="<?scripts('css/style.min.css')?>">
		
		<?/***End*/?>

	</head>
<?if($html['head']){ echo '<body> 	
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MWLZSCR"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	';} 
	}
	

function HeaderInclude(){	 global $mes;
	
		require (__DIR__.'/inc/header.php'); 
	
	}
	
function H1page(){ GLOBAL $mes,$SETPAGE;

	echo $mes[$SETPAGE.'-h1'];
}	
	
	
	
function FooterAdd($html=['html'=>'', 'head'=>true]){ GLOBAL $mes,$site_url;	?>
	<? /*Виводиться на всіх сторінках*/?>
	
<!-- Footer -->
	<? include_once(__DIR__.'/inc/footer.php'); ?>
<!-- Footer end-->
	</div>
	
	<script  src="<?scripts('js/scripts.js')?>"></script>
		<script defer src="<?scripts('js/libs/jquery.inputmask.min.js')?>"></script>

<?	
if($html['html']): echo $html['html'];		endif;
if($html['head']!=false){ echo  '</body></html>';}

	}

function AltImgAdd($text=''){
	$t='alt="'.$text.'"';
	echo $t;
}

function UrlAdd($text='', $return='', $a=''){
	$slesh='/';
if ($a) {$slesh='';}

	$t='/'.$_POST['lang'].$text.$slesh;
	if($text==''){$t='/'.$_POST['lang'];}
	if($return) {
		return $t;
		} else {
			echo $t;
		}
}

function MenuAdd($text=''){ global $mes;
	include_once('menu.php');
}

function Getpar($text){
$text = strip_tags($text);
$text = htmlspecialchars($text);
return $text;
}

function ErrorPage404()
    { LangAdd(); global $mes, $SETPAGE;

        header($_SERVER['SERVER_PROTOCOL'].'HTTP/1.1 404 Not Found');
        header("Status: 404 Not Found");
        //echo "<script>document.location.replace('/404');</script>";
		$SETPAGE='404';
		 include("templates/404.php");
		// include($_SERVER['DOCUMENT_ROOT']."index.php");
        exit();
    }

function alternateAdd($url_origin=''){ global $site_url, $len_default, $len;
	   $url_str = explode("/", $url_origin);
	if (in_array($url_str[1], $len))
	{
		$st='<link rel="alternate" hreflang="'.$len_default.'" href="'.$site_url.substr($url_origin, 3).'" />';
		foreach ($len as $t)
		{
			$st.='
			<link rel="alternate" hreflang="'.$t.'" href="'.$site_url.'/'.$t.substr($url_origin, 3).'" />';
		}
	}
	else 
	{
		$st='<link rel="alternate" hreflang="'.$len_default.'" href="'.$site_url.$url_origin.'" />';
		foreach ($len as $t)
		{
			$st.='
			<link rel="alternate" hreflang="'.$t.'" href="'.$site_url.'/'.$t.$url_origin.'" />';		
		}
	 } 
 return $st;
}

function getdefolt($t){
	if(Getpar($t)){ $t=Getpar($t);}else{$t=1;}
	return $t;
}

//For plan		/*План SVG*/
function svg_plan($svg){ GLOBAL $floor_new,$plan;
	$files = scandir($_SERVER['DOCUMENT_ROOT']."/img/houses/doma/dom$plan/");
foreach($files  as $file){
$pos = strpos($file, "$floor_new");
if($pos===false){}else{ $img=$file; }
}
//echo '<pre>'; print_r($files); echo '</pre>';

$rr='img/houses/doma/dom'.$plan.'/'.$img.'/'.$svg.'.php';
	return $rr;
}
	//For plan
function FloorPrevNextAdd($plan,$sec,$floor,$floor_next,$floor_prev, $compas=0){ global $mes ?>
			 
			 <div class="apartments-compass compass-ico" data-rotate="<?=$compas?>deg" >
				<span class="compass-letter compass-north"><?=$mes['C']?></span>
				<span class="compass-letter compass-west"><?=$mes['З']?></span>
				<span class="compass-letter compass-east"><?=$mes['В']?></span>
				<span class="compass-letter compass-south"><?=$mes['Ю']?></span>
			</div>
			<div class="apartments__floor-choose">
							<a href="<?=UrlAdd($text='plan'.$plan.'/sections'.$sec.'/floor'.$floor_prev)?>" class="prev-floor"><i class="arrow-left-thin"></i></a>
								<span class="current-floor"><?=$mes['fl-mes9']?> <?=$floor[0]?></span>
							<a href="<?=UrlAdd($text='plan'.$plan.'/sections'.$sec.'/floor'.$floor_next)?>" class="next-floor"><i class="arrow-right-thin"></i></a>
			</div>
			 
			 
			
			<? }
	//For plan
function ParametrFlats(){
	$OPTIONS=array('MINFLOOR'=>2,'MAXFLOOR'=>21);
GLOBAL $floor_new,$plan,$flat,$plan,$sec,$sleh,$floor,$floor_prev,$floor_next, $db;
$plan=$sec=$id=$floor;
$sleh='/';
$plan=getdefolt($_POST['plan']);
$sec=getdefolt($_POST['sections']);
$flat=getdefolt($_POST['flat']);
$floor_new=getdefolt($_POST['floor']);

$floor[0]=$floor_new;
$floor[1]=1;

$result = $db->prepare("SELECT MIN(floor),MAX(floor)  FROM `apartments` WHERE `sec`=$sec AND `buld`=$plan");
$result->execute();     $result->bind_result($si['floor_min'],$si['floor_max']);	$result->fetch(); 	$result->close();

if($floor[0]>=$OPTIONS['MINFLOOR']) {$floor[1]=$floor[0]-1;} else {$floor[0]=$OPTIONS['MINFLOOR'];}
if($floor[0]<$OPTIONS['MAXFLOOR']){$floor[2]=$floor[0]+1;}else{$floor[2]=$OPTIONS['MAXFLOOR'];}
if($floor[2]>=$OPTIONS['MAXFLOOR'] && $floor[0]==$OPTIONS['MAXFLOOR']){$floor_next=$si['floor_min'];}else{$floor_next=$floor[2];}
if($floor[1]<=$OPTIONS['MINFLOOR']-1 && $floor[0]==$OPTIONS['MINFLOOR']){$floor_prev=$si['floor_max'];}else{$floor_prev=$floor[1];}

if ($si['floor_max']<$floor_next) {$floor_next=$si['floor_min'];}
if ($si['floor_min']>$floor_prev) {$floor_prev=$si['floor_max'];}

}

function copyringAdd(){?>
		<div class="footer clearfix">
          <span class="footer_left"><?=$mes['fut-mes1']?></span>
          <a href="http://smartorange.com.ua/" rel="nofollow" target="_blank">
            <img <?LazyLoad ("/img/logo-smart.png")?> alt="smartorange">
          </a>
          <span class="footer_right"><?=$mes['fut-mes2']?></span>
        </div>
		<?}

function servername(){
	$t=$_SERVER['REQUEST_SCHEME'].'://'.str_replace("www.", "", $_SERVER['SERVER_NAME']);
	return $t;
}

function searchPagination($url){

	$page=substr($url, 0,4);
	$val=substr($url, 4);

	if ($page=='page' && $val>1) {
		$_GET['page']=$val;
		return $page;
	}
}

function enterAdminka($correct_link){
	foreach ($_SERVER as $key=>$t) {
	if ($key=='SCRIPT_URL') {$SCRIPT_URL=$t; break;}
}
 $correct_link=substr($SCRIPT_URL, 1);

if (strripos($correct_link, '.php')===false) {
	$correct_link.='index.php';
} 
$dt='admin';
	require($correct_link);

 exit;
}

function LazyLoad ($src='', $option=''){

$t='';
	if (!empty($option['option'])) {$t='data-option="'.$option['option'].'"'; } else {$option['option']='';}
	if (empty($option['class']))  {$option['class']='';}

		echo 'class="'.$option['class'].' b-lazy" '.$t.' src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" data-src="'.$src.'"';
}

function img($img='', $lazy=true) {
	
	if ($img) {
		echo 'src="'.$img.'"';
	}
}

function FormInclude($id, $par=''){ GLOBAL $mes;
	$kv=$par;
	$webAd=$_SERVER['SCRIPT_URI'];
		
	 include("inc/form/".$id.".php");
		
}

function cropStrWord($text, $max_words=15, $append = '')
{
       $max_words = $max_words+1;
       $words = explode(' ', $text, $max_words);
       array_pop($words);
       $text = implode(' ', $words) . $append;
	   $text = str_replace("<p>", "",  $text);
	   $text = str_replace("</p>", "", $text);
	   
       return $text;
}

function cropStrStyle($text)
{
       $words = explode(' ', $text);
      // array_pop($words);
     //  $text = implode(' ', $words) . $append;
	$count=count($words);
	   foreach ($words as $key=>$t){
		   
		   if ($key==$count%2) { $words[$key]='<span class="orange-text">'.$t.'</span>';	}
		   if ($key==$count-2) { $words[$key]='<span class="italic-text">'.$t;	}
		   if ($key==$count-1) { $words[$key]=$t.'</span>';	}
		 
	   }
	     $text = implode(' ', $words);

       return $text;
}



/** Підбір новин*/
function LoadingNews($postnumbers='', $offset='') { 
	LangAdd();
	global $db, $mes, $len_default;
		/*
$news_onpage=6;
$max_line_news=4;
$news_onpage_start=0;
$news_onpage_end=$news_onpage_start+$news_onpage-1;
if($set_page){$news_onpage_start=($set_page-1)*$news_onpage; 	$news_onpage_end=$set_page*$news_onpage-1;}else{$set_page=1;}
*/
if($_POST['lang']==''){$LANG=$len_default;}else{$LANG=substr($_POST['lang'], 0,2);}
$lg=$LANG;

	$result = $db->prepare("SELECT date, news_code,name_news_$lg,description_$lg,img_name,full_text_$lg, min_text_$lg, img_path, img_name, time FROM news WHERE isActive=0 AND name_news_$lg!='' ORDER BY date DESC");
	$result->execute();
	$result->store_result();	$num=$result->num_rows;

	if ($postnumbers>$num) {$offset=0;} 
//echo $postnumbers;
//echo $offset;
	$result = $db->prepare("SELECT date, news_code,name_news_$lg,description_$lg,img_name,full_text_$lg, min_text_$lg, img_path, img_name, time FROM news 
							WHERE isActive=0 AND name_news_$lg!='' ORDER BY date DESC  LIMIT $postnumbers OFFSET $offset");
	$result->execute();
	$result->store_result();
	$result->bind_result($s['date'],$s['urls'],$s['name_news'],$s['description'],$s['filename'],$s['text'],$s['mini_text'],$s['img-min'],$s['img'],$s['time']);
	$i=0; $it=0; 
	 while ($result->fetch()) { //$s['img_news'] = '/admin/news/images/'.$s['filename'];
								$s['img_news'] = $s['img-min'].'/'.$s['img'];
								$s['img-min'].='/min_'.$s['img'];
								if(!file_exists($s['img-min'])){$s['img-min']=$s['img_news'];}
								
								//$s['mini_text']	=cropStrWord($text=$s['text']);
								$s['urls']='news/'.$s['urls'];
		
				foreach($s as $key=>$k){			$rez[$key]=$k;	}
								//if($i>=$news_onpage_start AND $i<=$news_onpage_end){	 $ReaNews[$it]=$rez; $it++;	}
								$ReaNews[$it]=$rez; $it++;
	   $i++; }
	   
	   return array('ReaNews'=>$ReaNews, 'num'=>$num);
	   		
	}


	
	/** Структура галереї*/
	function Gallery_list($postnumbers=0, $offset=0, $img=array(), $typ=0){ GLOBAL $db,$len_default;
		$i=$n=1;
		
		
if($_POST['lang']==''){$lg=$len_default;}else{$lg=substr($_POST['lang'], 0,2);}

$result = $db->prepare("SELECT date, hod_name_$lg, hod_full_$lg, path,ar_imgs, section_number
	FROM hod_stroy WHERE isActive=0 AND section_number=$typ ORDER BY date DESC");
	$result->execute();
	$result->bind_result($s['date'],$s['name'],$s['text'],$s['img-url'],$s['ar_imgs'],$s['section_number']);
	
	 while ($result->fetch()) {
		 
			$date = new DateTime($s['date']);
			$time = new DateTime($s['time']);
			
		$ss['date']=$date->format('d.m.Y');
		$ss['time']=$time->format('h:i');
		$ss['imgs']=explode('*/*', $s['ar_imgs']);
		$ss['img']=$ss['imgs'][0];
		$ss['text']=$s['name'];
		$ss['img-url']=$s['img-url'].'/';
		$ss['section']=$s['section_number'];
		
		 foreach($ss as $key=>$k){			$rez[$key]=$k;	}
		
	$ReaPost[]=$rez;  
	 }
	 
	 	$result = $db->query("SELECT * FROM pers");
	 while ($row = $result->fetch_assoc()) {
		 
		$PERC=$row;
		
	 }
	 for ($i=1; $i<=4; $i++){
		 
	 $PERC['perOpis_'.$i]=explode('/',   $PERC['perOpis_'.$i]);
		 
	 }
	 $i=1;
	
		foreach ($ReaPost as $key=>$t) { 
		
		
		
		if($offset>=$i ) { $i++; continue;  } 
		if($postnumbers<$n ) { $i++; continue;  }
		
		?>
					<div class="construction_item">
						<div class="construction_item_iner">
							<a class="construction_item_link" data-img='<?=$key?>' data-typ='<?=$t['section']?>'  href=""></a>
							<div class="construction__info">
								<span class="construction__info_item"><i class="calendar-ico"></i><?=$t['date']?></span>
							<?/*	<span class="construction__info_item"><i class="clock-ico"></i><?=$t['time']?></span>*/?>
							</div>
							<div class="construction__pict">
								<img <?img($t['img-url'].$t['img'])?>  alt="">
							</div>
							<?/*<p class="construction__text">
								<?=cropStrStyle($t['text'])?>
								</p>*/?>
						</div>
					</div>
					
		<?  $n++; $i++; }
		
	}
	

	function scripts($file)	{ 
		///***Якщо э / - Видаляем перший символ **
			if ($file[0]=='/') { 
			
			mb_internal_encoding("UTF-8");
			 $file = mb_substr( $file, 1);
			}
			
		$file ='/'.$file.'?v='.filemtime($file);
		
		echo $file; 
	}
	
global 	 $mes;	
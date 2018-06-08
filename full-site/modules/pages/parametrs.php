<?php
	$Rest=array('room'=>array('min'=>'', 'max'=>0));
	$Rest=array('floor'=>array('min'=>'', 'max'=>0));
	$Rest=array('area'=>array('min'=>'', 'max'=>0));
	//$Rest=array('area_life'=>array('min'=>'', 'max'=>0));
	//$Rest=array('sec'=>array('min'=>'', 'max'=>0));
	$Rooms[0]='';
	$kv='%';
	if($Rooms[0]>0){ $kv=$Rooms[0];}
	
	/**Якщо 1-2 кымнатны*/
	if(empty($sgl)) {$sgl='';}
	
$result = $db->prepare("SELECT floor, visible,number,buld,sec,level,all_room,life_room, id ,img,price
						FROM `apartments`
				WHERE   visible=1 $sgl ORDER BY buld ASC");
   $result->execute(); $i=0;
   $result->bind_result($s['floor'],$s['visible'],$s['number'],$s['buld'],$s['sec'],$s['level'],$s['all_room'],$s['life_room'],$s['id'],$s['img'],$s['price']); while($result->fetch()){
	 

if (strripos($s['img'], '.png') === false) {$s['img'].='.png';}


   $s['img']='/img/houses/house'.$s['buld'].'_black/floor'.$s['floor'].'/'.$s['img'];
  // $s['url']='/'.$_POST['lang'].'plan'.$s['buld'].'/sections'.$s['sec'].'/floor'.$s['floor'].'/flat'.$s['number'].'_'.$s['id'].'/';
  // $flats = explode(".", $s['number']);

	$flats=	$s['number']{0};
   $s['kim']=$flats;

   //$s['kim']=$flats[0];
   		foreach($s as $key=>$k){
			$rez[$key]=$k;
		}
		$mas_t=array('room'=>$s['kim'],'floor'=>$s['floor'],'area'=>$s['all_room'] );
		foreach($mas_t as $key=>$t){
	if(empty($Rest[$key]['min']) OR $t<$Rest[$key]['min']){$Rest[$key]['min']=round($t, 0, PHP_ROUND_HALF_UP);	}
	if(empty($Rest[$key]['max']) OR $t>$Rest[$key]['max']){$Rest[$key]['max']=round($t, 0, PHP_ROUND_HALF_UP);	}

		}
		$REZULT[$i]=$rez;
   $i++;
   }
    	 $sort=['floor','room','area'];
		 
		 	if (empty($Rest['floor']['min'])) {$Rest['floor']['min']=1;}
	if (empty($Rest['floor']['max'])) {$Rest['floor']['max']=21;}
	
	if (empty($Rest['room']['min'])) {$Rest['room']['min']=1;}
	if (empty($Rest['room']['max'])) {$Rest['room']['max']=1;}
	
	if (empty($Rest['area']['min'])) {$Rest['area']['min']=38;}
	if (empty($Rest['area']['max'])) {$Rest['area']['max']=154;}
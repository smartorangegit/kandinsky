<?php  /*All function*/ require_once('function.php');  
//Вспливайка для галереї
//require_once('gallery-lib.php');   

if ($_POST){
	//$n=each($_POST);

$id=$_POST['id'];
$typ=$_POST['typ'];

if($_POST['lang']==''){$lg=$len_default;}else{$lg=substr($_POST['lang'], 0,2);}

$result = $db->prepare("SELECT date, hod_name_$lg, hod_full_$lg, path,ar_imgs
	FROM hod_stroy WHERE isActive=0 AND section_number=?  ORDER BY date DESC");
	$result->bind_param("s", $typ); 
	$result->execute();
	$result->bind_result($s['date'],$s['name'],$s['text'],$s['img-url'],$s['ar_imgs']);
	
	 while ($result->fetch()) {
		 
			$date = new DateTime($s['date']);
			$time = new DateTime($s['time']);
			
		$ss['date']=$date->format('d.m.Y');
		$ss['time']=$time->format('h:i');
		$ss['imgs']=explode('*/*', $s['ar_imgs']);
		$ss['img']=$ss['imgs'][0];
		$ss['text']=$s['name'];
		$ss['img-url']=$s['img-url'].'/';
		
		 foreach($ss as $key=>$k){			$rez[$key]=$k;	}
		
	$ReaPost[]=$rez;  
	 }



foreach ($ReaPost[$id]['imgs'] as $key=>$t){
	
	
	$arr[]=array('src'=>$ReaPost[$id]['img-url'].$t);
		
}

echo stripslashes(json_encode($arr));

}


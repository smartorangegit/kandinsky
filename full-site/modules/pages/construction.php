<?php
$postnumbers=12;
$offset=0;
$count=count($img);

$perstSelect = $db->query("SELECT * FROM `pers`");
$rowPers= mysqli_fetch_array($perstSelect, MYSQLI_ASSOC);

// 3 Секция
$a3 = 584; //количество принятых кубов бетона выше отметки +0.000, это значение мы вам будем сообщать в конце каждой недели
$constructionSub3 = explode('/', $rowPers[perOpis_1]);
$facadeMain3 = $rowPers[persent_2];
$facadeSub3 = explode('/', $rowPers[perOpis_2]);
$networksMain3 = $rowPers[persent_3];
$networksSub3 = explode('/', $rowPers[perOpis_3]);
$beautificationMain3 = $rowPers[persent_4];
//$constructionMain3 = round((100+(($a3*100)/10484))/7.7, 1);
$constructionMain3 = $rowPers['persent_1'];

// 4 Секция
$a4 = 0; //количество принятых кубов бетона выше отметки +0.000, это значение мы вам будем сообщать в конце каждой недели
$constructionSub4 = explode('/', $rowPers[perOpis_5]);
$facadeMain4 = $rowPers[persent_6];
$facadeSub4 = explode('/', $rowPers[perOpis_6]);
$networksMain4 = $rowPers[persent_7];
$networksSub4 = explode('/', $rowPers[perOpis_7]);
$beautificationMain4 = $rowPers[persent_8];
//$constructionMain4 = round((100+(($a4*100)/10484))/7.7, 1);
$constructionMain4 = $rowPers['persent_5'];


?>

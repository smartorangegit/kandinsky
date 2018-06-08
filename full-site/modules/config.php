<?
$Server = "smartora.mysql.ukraine.com.ua";
$Login = "smartora_kandi";
$Password = "j5z9kekt";
$DataBase = "smartora_kandi";
/*
$Server = "forel.mysql.ukraine.com.ua";
$Login = "forel_kondinskiy";
$Password = "3kda24hy";
$DataBase = "forel_kondinskiy";*/

global $site_url,$len_default; $site_url='http://kandinsky-residence.com.ua';

$len_default='ru';
$len=array('en');

$db = new MySQLi($Server, $Login, $Password, $DataBase);

$result = $db->query("Set charset utf8");
$result = $db->query("Set character_set_client = utf8");
$result = $db->query("Set character_set_connection = utf8");
$result = $db->query("Set character_set_results = utf8");
$result = $db->query("Set collation_connection = utf8_general_ci");

if (mysqli_connect_errno()) {
   printf("Подключение к серверу MySQL невозможно. Код ошибки: %s\n", mysqli_connect_error());
   exit;
}

define(Cash, true);            
define(CashFile,'modules/inc/cash.ini'); 
define(CashTime, 10800);
define(ControlDir, array('modules', 'templates','js','css'));
define(NotCashlFile, array('templates/news.php')); 

/**
 * Підключення модулів
 */
include(dirname(__FILE__).'/module/CacheControls.php');
include(dirname(__FILE__).'/module/Breadcrumbs.php');
include(dirname(__FILE__).'/module/RenewalSitemap.php');
?>
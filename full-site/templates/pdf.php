<?php session_start();
date_default_timezone_set('Europe/Kiev');
$today_f = date("d.m.Y");

?>
<?php GLOBAL $html;
//unset($_SESSION['svg_min_plan']);

  $html = $_SESSION['svg_min_plan'];

 include("pdf/mpdf/mpdf.php");
 $mpdf = new mPDF('utf-8', 'A3-L', '8', '', 5, 5, 5, 5, 10, 10); /*задаем формат, отступы и.т.д.*/
 $mpdf->charset_in = 'utf-8'; /*не забываем про русский*/

 $stylesheet = file_get_contents($_SERVER['DOCUMENT_ROOT']."/css/style_pdf.css"); /*подключаем css*/
 
 $html = mb_convert_encoding($html, 'UTF-8', 'UTF-8'); 
 $mpdf->WriteHTML($stylesheet, 1);

 $mpdf->list_indent_first_level = 0; 
 date_default_timezone_set('Europe/Kiev');
$today_f = date("d.m.Y");
 //$mpdf->WriteHTML($html, 2); /*формируем pdf*/
 //$mpdf->WriteHTML(file_get_contents('../2.php'), 2); /*формируем pdf*/
 
 $mpdf->WriteHTML($html, 2);
	

 $mpdf->Output("kandinsky1.pdf", 'I');

	
 ?>

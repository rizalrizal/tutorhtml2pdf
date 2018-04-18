<?php
session_start();
//untuk menyimpan output file html dibawah
ob_start();
?>
<html>
<head>


   <style type="text/css">
 
      .box{
         border: 1px solid #000;
      }
      .header td{
         border-bottom: 1px solid #000;
      }
      .box td{
         padding: 5px 10px;
      }


   </style>
</head>
<body>

<?php 


echo "

<table class='box' width='100%' style='width: 330px' cellspacing='0'>
   
<tr class='header'>
 
   <td colspan='2' width='130' align='center' valign='middle' style='padding: 5px 30px;'>
   <b>ID CARD</b>
   </td>
</tr>
        
<tr><td>Username</td><td>: Lorem</td></tr>
<tr><td>Nama</td><td>: Lorem</td></tr>
<tr><td>Alamat</td><td>: Lorem</td></tr>
</table>";

?>

</body>
</html>

<?php
try
 {
//include library
require_once('html2pdf/html2pdf.class.php');
//untuk mengambil output
$content = ob_get_clean();

//proses konversi html ke pdf
$html2pdf = new HTML2PDF('P','A4','en');
$html2pdf->WriteHTML($content);
//akhir Proses

//cetak File dengan memberi nama file
$html2pdf->Output('card.pdf');

} catch(HTML2PDF_exception $e) { echo $e; }
?>

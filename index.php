<!DOCTYPE html>
<html>
<head>
	<title>Halaman Utama</title>

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

      button {
          border: none;
          outline: 0;
          display: inline-block;
          padding: 8px;
          color: white;
          background-color: #000;
          text-align: center;
          cursor: pointer;
          width: 100%;
          font-size: 18px;
          margin-top: 15px;
      }



      button:hover {
          opacity: 0.7;

      }

   </style>
</head>
<body>

<table class='box' width='100%' style='width: 330px' cellspacing='0'>
   
<tr class='header'>
 
   <td colspan='2' width='130' align='center' valign='middle' style='padding: 5px 30px;'>
   <b>ID CARD</b>
   </td>
</tr>
        
<tr><td>Username</td><td>: Lorem</td></tr>
<tr><td>Nama</td><td>: Lorem</td></tr>
<tr><td>Alamat</td><td>: Lorem</td></tr>
</table>

<button onclick="Cetak()">Cetak</button>
<script type="text/javascript">
	function Cetak(){
		//Membuka File Proses php dan mengatur Preview
		window.open("proses.php", "Cetak Card", "height=650, width=1024, left=150, scrollbars=yes");
   return false;
	}
</script>
</body>
</html>
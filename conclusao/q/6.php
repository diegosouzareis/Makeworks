<html>
<?php
 if(isset($_POST['submit']))
 
 {
   $nome1 = $_POST['nome'];
   $para1 = $_POST['para1'];
   $para2 = $_POST['para2'];
   $para3 = $_POST['para3'];
   $para4 = $_POST['para4'];
   
   {
     include_once('dompdf2/dompdf_config.inc.php');
     
     $html = '<html>
  <head>
		 <meta charset="UTF-8">
    <title>Conteudo</title>

  <style type="text/css">

p {line-height:1,0cm;}     

html {margin: 113px 75px 75px 113px;}

</style>

  </head>
  <body>
<center>
<p align="left" style="text-transform:uppercase;font-family: Arial;font-size: 12px;"><b>  '.$nome1.'  </b></p>
<br>
<p align="justify" style="font-family: Arial;font-size: 12px;">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;'.$para1.' </p>

<p align="justify" style="font-family: Arial;font-size: 12px;">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; '.$para2.' </p>

<p align="justify" style="font-family: Arial;font-size: 12px;">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;'.$para3.' </p>

<p align="justify" style="font-family: Arial;font-size: 12px;">&nbsp; &nbsp; &nbsp;&nbsp; &nbsp;'.$para4.' </p>
	</center>

 <br><br><br><br><br><br><br><br><br><br>

</center>


</body>
</html>';
     
     $dompdf = new DOMPDF();
     $dompdf->load_html($html);
     $dompdf->render();
     $dompdf->stream('conteudo.pdf');
   }
   
   
   
 }

?>




<body>
</body>
</html>
<html>
<?php
 if(isset($_POST['submit']))
 
 {
   $pag1 = $_POST['pag1'];
   $pag2 = $_POST['pag2'];
   $pag3 = $_POST['pag3'];
   $pag4 = $_POST['pag4'];
   $pag5 = $_POST['pag5'];
   $pag6 = $_POST['pag6'];
   
   
   {
     include_once('dompdf/dompdf_config.inc.php');
     
     $html = '<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Sumário</title>
  </head>
  <body>
  
  <center><p style="text-transform:uppercase;font-family: Arial;font-size: 14px;"><b>SUMÀRIO</b></p></center>
  
<br><br><br>

<p style="text-transform:uppercase;font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. '.$pag1.'</b>&nbsp;&nbsp;&nbsp; 1</p>

<p style="text-transform:uppercase;font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2 '.$pag2.'</b>&nbsp;&nbsp;&nbsp; 2</p>

<p style="text-transform:uppercase;font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3 '.$pag3.'</b>&nbsp;&nbsp;&nbsp; 3</p>
<p style="text-transform:uppercase;font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4 '.$pag4.'</b>&nbsp;&nbsp;&nbsp; 4</p>

<p style="text-transform:uppercase;font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5 '.$pag5.'</b>&nbsp;&nbsp;&nbsp; 5</p>
<p style="text-transform:uppercase;font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6 '.$pag6.'</b>&nbsp;&nbsp;&nbsp; 6</p>


</body>
</html>';
     
     $dompdf = new DOMPDF();
     $dompdf->load_html($html);
     $dompdf->render();
     $dompdf->stream('sumario.pdf');
   }
   
   
   
 }

?>
<body>
</body>
</html>
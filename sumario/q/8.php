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
     include_once('dompdf2/dompdf_config.inc.php');
     
     $html = '<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Bibliografia</title>

  <style type="text/css">
    
p {line-height:1,0cm;}     

html {margin: 113px 75px 75px 113px;}

</style>

  </head>
  <body>
  
  <center><p style="text-transform:uppercase;font-family: Arial;font-size: 12px;"><b>Bibliografia</b></p></center>
  
<br>

<p style="font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1. '.$pag1.'</b>&nbsp;&nbsp;&nbsp; </p>

<p style="font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2. '.$pag2.'</b>&nbsp;&nbsp;&nbsp; </p>

<p style="font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3. '.$pag3.'</b>&nbsp;&nbsp;&nbsp; </p>
<p style="font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;4. '.$pag4.'</b>&nbsp;&nbsp;&nbsp; </p>

<p style="font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. '.$pag5.'</b>&nbsp;&nbsp;&nbsp; </p>
<p style="font-family: Arial;font-size: 12px;"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. '.$pag6.'</b>&nbsp;&nbsp;&nbsp; </p>


</body>
</html>';
     
     $dompdf = new DOMPDF();
     $dompdf->load_html($html);
     $dompdf->render();
     $dompdf->stream('bibliografia.pdf');
   }
   
   
   
 }

?>

<body>
</body>
</html>
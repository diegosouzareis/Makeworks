<html>
<?php
 if(isset($_POST['submit']))
 
 {
   $instituto = $_POST['instituto'];
   $aluno = $_POST['aluno'];
   $ttrabalho = $_POST['ttrabalho'];
   $sub = $_POST['sub'];
   $sala = $_POST['ano'];
   $cidade = $_POST['cidade'];
   $natureza = $_POST['natureza'];
   $prof = $_POST['prof'];
   
   {
     include_once('dompdf2/dompdf_config.inc.php');
     
     $html = ' 
<html>
  <head>
    <title>Folha de Rosto</title>

  <style type="text/css">

p {line-height:1,0cm;}     

html {margin: 113px 75px 75px 113px;}

</style>
  </head>
  <body>
<br><br><br>
<center>
<center><p style="text-transform:uppercase;font-family: Arial;font-size: 12px;"><b>  '.$aluno.'  </b></p></center>

<br><br><br><br><br><br><br><br><br><br>

<center><p style="text-transform:uppercase;font-family: Arial;font-size: 12px;"><b> '.$ttrabalho.'</b></p><p style="font-family: Arial;font-size: 12px;">
 '.$sub.' </p></center>

<p style="font-family: Arial;font-size: 12px;"> '.$prof.' </p>

<p style="font-family: Arial;font-size: 12px;"><b><em> '.$natureza.' </em></b></p>


 <br><br><br><br><br><br><br><br><br><br>

<center><p style="font-family: Arial;font-size: 12px;"> '.$ano.' </p>
<p style="font-family: Arial;font-size: 12px;"> '.$cidade.' </p></center>
</center>


</body>
</html>';
     
     $dompdf = new DOMPDF();
     $dompdf->load_html($html);
     $dompdf->render();
     $dompdf->stream('folha.pdf');
   }
   
   
   
 }

?>
<body>
</body>
</html>
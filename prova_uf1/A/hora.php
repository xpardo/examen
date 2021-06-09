<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Obtener hora y fecha actual PHP</title>
</head>
<body>

<?php
date_default_timezone_set('Europe/Madrid');

?>
<h1>Fecha y Hora actual</h1>

<?=
date( 'G:i:s:a');


$hora = intval(date("G"));
$minutos = intval(date("i"));
$segons = intval(date("s"));    

echo "<br>";
for($h=0;$h<($hora);$h++){

    if (($h%1)==0)
    if($h<$hora)
    
    echo $h ;
    
    
    
}
echo  "<strong>$hora</strong>";
echo "<br>";
for($m=0;$m<($minutos);$m++){

     if (($m%1)==0)
     if($m<$minutos)
     
     echo  $m ;
   
     
    
 }
 echo  "<strong>$minutos</strong>";
 echo "<br>";
 for($s=0;$s<($segons);$s++){
 
      if (($s%1)==0)
      if($s<$segons)
      
      echo $s ;
      
     
}
echo  "<strong>$segons</strong>";


?>

        
</body>
</html>


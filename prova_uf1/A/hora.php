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
date( 'h:i:s:a');


$hora = intval(date("G"));
$minutos = intval(date("i"));
$segons = intval(date("s"));    

echo "<br>";
for($h=0;$h<($hora);$h++){

    if (($h%1)==0)
    if($h<$hora)
    
    echo $h ;
    echo  "$h";
    
    
}

echo "<br>";
for($m=0;$m<($minutos);$m++){

     if (($m%1)==0)
     if($m<$minutos)
     
     echo  $m ;
     echo  "$m";
     
    
 }

 echo "<br>";
 for($s=0;$s<($segons);$s++){
 
      if (($s%1)==0)
      if($s<$segons)
      
      echo $s ;
      echo  "$s";
     
}

/* 
 $time = time($h,$m,$s);

 echo "<br/>";
 
 echo $time;
 echo "<br/>";
 echo "hora","<b>" ,$h, "</b>";
 echo "<br/>";
 echo "minuts","<b>" ,$m, "</b>" ;
 echo "<br/>";
 echo "segons","<b>", $s,"</b>" ;
 
 echo "<br/>";
 
 echo ("La hora es ". date("H:i:s", $time));
 */

?>

        
</body>
</html>


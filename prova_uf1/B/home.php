<?php
session_start();
include("contrologin.php");
include("funcions.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hola,

 
    <?=$_SESSION["login"]?>


<br>

</body>
</html>
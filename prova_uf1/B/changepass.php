<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $codi=$_POST["codi"];
    $password=$_POST["p1"];
    $usuariacanviar="";

    $mysqli = new mysqli("localhost","xpardo","xpardo","xpardo_db_prova");
    $sql ="select recvery.username from recovery inner join usuaris_examen on usuaris_examen.username=recovery.username where recovery.codi='".$codi."'";

    $result = $conn -> query($sql);
    $row_cnt = $result -> num_rows;

    if ($row_cnt>0){
        
        if ($pbj = mysqli_fetch_object($result)){
            $$usuariacanviar=$obj -> username;
            $query ="update usuaris_examen set password='".$_POST["p1"]."'where username='".$usuariacanviar ."'";  
            $result = $conn -> query($query) or die (mysqli_error($conn));
            echo "tot canviat";
        }

    }else{
        echo "alguna cosa ha anat malament...";
    }
    mysqli_close($conn);


}else{


    $codi=$_GET["codi"];

    $mysqli = new mysqli("localhost","xpardo","xpardo","xpardo_db_prova");
    $sql ="select usuaris_examen.username from recovery inner join usuaris_examen on usuaris_examen.username=recovery.username where recovery.codi='".$codi."'";

    $result = $conn -> query($sql);
    $row_cnt = $result -> num_rows;

    if ($row_cnt>0){
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="changepass.php" method="post">

        <input type="password" name="p1" id=""> <br>
        <input type="hidden" name="codi" value="<?=$codi?>"> <br>
        <input type="submit" value="canviar"> 


    </form>

    
</body>
</html>
    
</body>
</html>




<?php

    }else{
        echo "alguna cosa ha anat malament...";
    }
    mysqli_close($conn);

}


?>
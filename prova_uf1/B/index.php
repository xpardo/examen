<?php
include("funcions.php");

session_start();
$na=rand(0,10);
$nb=rand(0,10);
$suma=$na+$nb;
$_SESSION["suma"]=$suma;



$error=FALSE;
$errormsg="";


if(isset($_REQUEST["okp"])){

    setcookie('politica', 1, time() + 365*24*60*60); 
    header("location:home.php");


}

if(isset($_COOKIE["email"])){


    if(validaUsuari($_COOKIE["email"],$_COOKIE["password"])){



            $_SESSION["login"]=$_COOKIE["email"];
            header('location:privada.php');

    }else{

        setcookie('email', null, 0,'/'); 
        setcookie('password', null, 0,'/'); 

    }



}


if($_SERVER['REQUEST_METHOD'] == 'POST') {




        $pass=test_input($_REQUEST["password"]);


        $email = test_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error=TRUE;
            $errormsg.= "Invalid email format";
        }

        $password = test_input($_POST["password"]);
        if (!preg_match("/^[a-zA-Z0-9' ]*$/",$password)) {
            $error=TRUE;
            $errormsg.=  "Only letters and numbers allowed";
        }
        


        if(!$error){


            if(validaUsuari($_REQUEST["email"],md5($_REQUEST["password"]))){

                echo "Ok de autenticación";
                $_SESSION["login"]=$_REQUEST["email"];

                if(isset($_REQUEST["recorda"])){
                    setcookie('email', $_REQUEST["email"], time() + 365*24*60*60,'/'); 
                    setcookie('password', md5($_REQUEST["password"]), time() + 365*24*60*60,'/'); 
                }





                header('location:privada.php');
    
    
            }else{
    
                echo "Error de autenticación";
                setcookie('contador', null, 0); 
    
    
            }



        }


     




}


    


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <br>
   
    <script>
        function check(){

            


            var vsuma=<?=$_SESSION["suma"]?>;

            if(vsuma!=document.getElementById("suma").value){
                alert("la suma no es correcta..");
            }
            if(!document.forms[0].email.value.length>0){
                alert("has d'introduir un email");
            }else{
                location.href="recoverypassword.php?email="+document.form[0].email.value;
            }
        



        }
    
    </script>
</head>
<body>


<?php

if(!isset($_COOKIE["politica"])){


?>

política....<br>
<a href="?okp">Accepto</a><br>
<a href="http://www.google.com">No Accepto</a>


<?php

}else{


    
?>


    <h1><?=$errormsg?></h1>
    <form method="post">
        email:<input type="text" name="email" id=""><br>
        password: <input type="password" name="password" id="">
        autologin<input type="checkbox" name="recorda" id="">
        <input type="submit" value="envia">
    
    </form>
    <br>
  
    <?=$na?>+<?=$nb?>=<input type="text"><a href="#" onclick="check();">Regenerar password</a>
    <a href="register.php">Crear nou usuari</a>
    <?

}



?>
</body>
</html>


<?php




?>


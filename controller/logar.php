<?php

include("conecta.php");

$email = $_GET["email"];
$senha = $_GET["senha"];

$sql =  "Select email_usuario,senha_usuario from " . $DbName . ".usuario WHERE email_usuario ='$email' AND senha_usuario='$senha' ";
$querylogar = mysqli_query($db,$sql) or die(mysqli_error($db));
$camposusuario = mysqli_fetch_array($querylogar);
if(mysqli_num_rows($querylogar) > 0){
    header("location:../home.php");
}else{
    header("location:../index.php?login=erro");
}

?>
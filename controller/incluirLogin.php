<?php

include("conecta.php");

$nome = $_GET["txtnome"];
$email = $_GET["txtemail"];
$senha = $_GET["txtpassword"];
$perfil = $_GET["optperfil"];

if(isset($_GET["txtnome"]) && $_GET["txtnome"] !='' && isset($_GET["txtemail"]) && $_GET["txtemail"] !='' &&
isset($_GET["txtpassword"]) && $_GET["txtpassword"] !='' && isset($_GET["optperfil"]) && $_GET["optperfil"] !=''  ){
$sql = "INSERT INTO usuario (nome_usuario,email_usuario,senha_usuario,id_perfil,id_categoria) 
VALUES ('$nome', '$email', '$senha',$perfil,1);";
$queryinclude = mysqli_query($db,$sql) or die(mysqli_error($db));
header('location:../home.php');
}
?>
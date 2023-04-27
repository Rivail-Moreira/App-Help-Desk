<?php

include("conecta.php");

$id = $_GET["txtid"];
$nome = $_GET["txtnome"];
$email = $_GET["txtemail"];
$senha = $_GET["txtpassword"];
$perfil = $_GET["optperfil"];

if(isset($_GET["txtnome"]) && $_GET["txtnome"] !='' && isset($_GET["txtemail"]) && $_GET["txtemail"] !='' &&
isset($_GET["txtpassword"]) && $_GET["txtpassword"] !='' && isset($_GET["optperfil"]) && $_GET["optperfil"] !=''  ){
$sql = "UPDATE tb_usuario SET nome_usuario='$nome',email_usuario='$email',senha_usuario='$senha',id_perfil=$perfil,id_categoria='1' WHERE id_usuario=$id;";
$queryinclude = mysqli_query($db,$sql) or die(mysqli_error($db));
header('location:../home.php');
}
?>
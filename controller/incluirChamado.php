<?php

include("conecta.php");

$titulo = $_GET["txttitulo"];
$categoria = $_GET["optcategoria"];
$decricao = $_GET["txtdescricao"];
if(isset($_GET["txttitulo"]) && $_GET["txttitulo"]!='' && isset($_GET["optcategoria"]) && $_GET["optcategoria"]!='' && isset($_GET["txtdescricao"]) && $_GET["txtdescricao"]!=''){
$sql = "INSERT INTO chamado (`titulo_chamado`, `descricao_chamado`, `id_categoria`, `id_usuario`) 
VALUES ('$titulo', '$decricao',$categoria, 1);";
$queryinclude = mysqli_query($db,$sql) or die(mysqli_error($db));
header('location:../home.php');
}else{
    echo "<script>alert('Favor preencher todos os campos');</script>";
    header('location:../abrir_chamado.php');
}
?>
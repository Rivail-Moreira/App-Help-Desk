<?php

include("conecta.php");

$id = $_GET['txtid'];
$titulo = $_GET["txttitulo"];
$categoria = $_GET["optcategoria"];
$decricao = $_GET["txtdescricao"];

if(isset($_GET['txtid'])){
$sql =  "UPDATE tb_chamado SET titulo_chamado ='$titulo',  descricao_chamado ='$decricao',  id_categoria =$categoria,  id_usuario ='1' WHERE id_chamado =$id;";
$querychamado = mysqli_query($db,$sql);
header('location:../consultar_chamado.php');
}
?>
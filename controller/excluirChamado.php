<?php

include("conecta.php");

$id = $_GET["id"];
if(isset($_GET["id"])){
    $sql = "DELETE FROM chamado WHERE id_chamado = $id;";
    $queryinclude = mysqli_query($db,$sql) or die(mysqli_error($db));
    header('location:../consultar_chamado.php');
}

?>
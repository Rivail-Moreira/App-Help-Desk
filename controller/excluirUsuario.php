<?php

include("conecta.php");

$id = $_GET["id"];
if(isset($_GET["id"])){
    $sql = "DELETE FROM usuario WHERE id_usuario = $id;";
    $queryinclude = mysqli_query($db,$sql) or die(mysqli_error($db));
    header('location:../listar_login.php');
}

?>
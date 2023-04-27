<?php

include("conecta.php");

$sql =  "Select * from " . $DbName . ".tb_perfil ";
$queryperfil = mysqli_query($db,$sql);
?>
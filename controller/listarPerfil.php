<?php

include("conecta.php");

$sql =  "Select * from " . $DbName . ".perfil ";
$queryperfil = mysqli_query($db,$sql);
?>
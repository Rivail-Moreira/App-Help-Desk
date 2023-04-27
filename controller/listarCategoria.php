<?php

include("conecta.php");

$sql =  "Select * from " . $DbName . ".tb_categoria ";
$querycategoria = mysqli_query($db,$sql);
?>
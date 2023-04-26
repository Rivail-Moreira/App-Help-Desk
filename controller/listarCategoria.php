<?php

include("conecta.php");

$sql =  "Select * from " . $DbName . ".categoria ";
$querycategoria = mysqli_query($db,$sql);
?>
<?php

include("conecta.php");

$sql =  "Select c.*,ct.nome_categoria from chamado c 
    INNER JOIN  categoria ct 
    on c.id_categoria = ct.id_categoria";
$querychamado = mysqli_query($db,$sql);

?>
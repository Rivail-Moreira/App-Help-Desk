<?php

include("conecta.php");

$sql =  "Select c.*,ct.nome_categoria from tb_chamado c 
    INNER JOIN  tb_categoria ct 
    on c.id_categoria = ct.id_categoria";
$querychamado = mysqli_query($db,$sql);

?>
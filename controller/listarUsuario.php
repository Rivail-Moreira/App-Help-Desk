<?php

include("conecta.php");

$sql =  "SELECT u.*,p.nome_perfil from usuario u 
         INNER JOIN perfil p
         on u.id_perfil = u.id_perfil
         GROUP BY u.id_usuario";
$queryusuario = mysqli_query($db,$sql);

?>
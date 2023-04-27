<?php
    include("conecta.php");


    $sql =  "SELECT *  from tb_usuario u 
                INNER JOIN tb_perfil p
                on p.id_perfil = u.id_perfil
                GROUP BY u.id_usuario";
    $queryusuario = mysqli_query($db,$sql);
?>
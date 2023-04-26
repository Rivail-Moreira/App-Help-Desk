<?php
$atualiza=5;
// ******************* conexão servidor ********************
// database host
$Host = 'localhost';
// database usuario
$dbUserName = 'root';
// database senha
$dbPass = '';
//  databasename
$DbName = 'helpdesk';
//  testa a conexão
$db = mysqli_connect($Host, $dbUserName, $dbPass,$DbName) or die ("Could not connect");
// //insira o nome do banco
// mysqli_select_db($DbName,'teste');





 ?>
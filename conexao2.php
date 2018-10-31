<?php

$host = "localhost";
$usuario = "root";
$senha = "";
$bd = "bancodedados";

$mysqli = new mysqli($host, $usuario, $senha, $bd);

if($mysqli - connect_errno)
	echo "Falha na conexâo: (".$mysqli- connect_errno.") ".$mysqli- connect_error;


?>
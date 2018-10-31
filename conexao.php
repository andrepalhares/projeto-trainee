<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "bancodedados";
$conexao = mysqli_connect($hostname, $user, $password, $database);

if(!$conexao){
	print"Falha na conexâo com o Banco de Dados";
}

?>
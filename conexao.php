<?php

$hostname = "localhost";
$user = "root";
$password = "";
$database = "bancodedados";

$conexao = mysqli_connect($hostname, $user, $password, $database);

$conexao->set_charset("utf8");

if(!$conexao){
	print"Falha na conexâo com o Banco de Dados";
}

?>
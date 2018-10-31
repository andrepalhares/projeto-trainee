<?php

$Nome = filter_input(INPUT_GET, "Nome");
$Artista = filter_input(INPUT_GET, "Artista");
$Album = filter_input(INPUT_GET, "Album");
$Genero = filter_input(INPUT_GET, "Genero");
$Duracao = filter_input(INPUT_GET, "Duracao");
$status = filter_input(INPUT_GET, "status");
$ID_M = filter_input(INPUT_GET, "ID_M");

$link = mysqli_connect("localhost", "root", "", "bancodedados")

if($link){
	$query = mysqli_query($link, "update musicas set Nome='$Nome', Artista='$Artista', Album='Album', Genero='Genero', Duracao='Duracao', status='status', where id = '$id';");
}else{
	die ("Error: " .mysqli_error($link));
}

?>
<?php

include_once("conexao.php");

header("Content-type: text/html; charset=utf-8");

$ID_M = $_POST['ID_M'];
$Nome = $_POST['Nome'];
$Duracao = $_POST['Duracao'];
$Genero = $_POST['Genero'];
$Album = $_POST['Album'];
$Artista = $_POST['Artista'];
$status = $_POST['status'];

$sql = "UPDATE `musicas` SET `Nome`='".$Nome."',`Duracao`='00:".$Duracao."',`Genero`='".$Genero."',`Album`='".$Album."',`Artista`='".$Artista."',`status`='".$status."' WHERE `ID_M` = $ID_M;";
$salvar = $conexao->query($sql);
echo $sql;

$conexao->close();


?>

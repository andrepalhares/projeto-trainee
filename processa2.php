<?php

include_once ("conexao.php");

$consulta = "SELECT Nome, Artista,Duracao, Album, Genero FROM musicas";
$conexao = mysqli-query($consulta) or die($mysqli-error);
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>Musicas</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Nome</td>
				<td>Artista</td>
				<td>Duração</td>
				<td>Album</td>
				<td>Genêro</td>
				<td>Status</td>
				<td>ID da Música</td>
			</tr>
			<?php while($dado = $con->fecth_array()){?>
			<tr>
				<td><?php echo $dado ["Nome"];?></td>
				<td><?php echo $dado ["Artista"];?></td>
				<td><?php echo $dado ["Duracao"];?></td>
				<td><?php echo $dado ["Album"];?></td>
				<td><?php echo $dado ["Genero"];?></td>
				<td><?php echo $dado ["status"];?></td>
				<td><?php echo $dado ["ID_M"];?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>
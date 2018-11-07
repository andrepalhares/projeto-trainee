<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf8">
		<title>Musicas</title>
		<?php require_once('conexao.php');
			$query = "SELECT * FROM musicas WHERE status = 1";
			$con = $conexao->query($query);
		?>
	</head>
	<body>
		<script>
	        function confirmarDelete(m){
	            if(confirm("Deseja realmente deletar essa playlist?")){
	                window.location.href = 'deletarMusica.php?id_m='+m;
	            }
	        }
	    </script>
		<table>
			<tr>
				<td>Nome</td>
				<td>Artista</td>
				<td>Duração</td>
				<td>Album</td>
				<td>Genêro</td>
				<td>Status</td>
				<td>ID da Música</td>
				<td></td>
				<td></td>
			</tr>
			<?php while($dado = $con->fetch_assoc()){?>
			<tr>
				<td><?php echo $dado["Nome"];?></td>
				<td><?php echo $dado["Artista"];?></td>
				<td><?php echo $dado["Duracao"];?></td>
				<td><?php echo $dado["Album"];?></td>
				<td><?php echo $dado["Genero"];?></td>
				<td><?php echo $dado["status"];?></td>
				<td><?php echo $dado["ID_M"];?></td>
				<td><?php echo "<a href=\"alteracao.php?id_m=".$dado["ID_M"]."\"><input type=\"submit\" value=\"Editar\" class=\"btn\"></input></a>"?></td>
				<td><?php echo "<a href=\"1adicionarMusicaPlaylist.php?action=selecionarPlaylistsParaMusica&id_m=".$dado["ID_M"]."\"><input type=\"button\" value=\"Adicionar\"></input></a>"?></td>
				<td><?php echo "<input type=\"button\" onclick=\"confirmarDelete(".$dado["ID_M"].")\"value=\"Deletar\"></input>"?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>
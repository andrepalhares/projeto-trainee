<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="estilo.css"/>
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
	<header>
		<nav class="menu">
			<ul>
				<li><a href="Index.php">Inicio</a></li>
				<li><a href="adicionarMusica.php">Adicionar Musica</a></li>
				<li><a href="Pagina Playlist.php">Adicionar Playlist</a></li>
				<li><a href="Exibir_musicas.php">Listar Musica</a></li>
			</ul>
		</nav>
	</header>
			<div class="margem">
			<h3>Músicas</h3>
		<table id="corpo" class="table">
			<thead class="thead-dark">
			<tr>
				<th scope="col"><h6>Nome</h6></th>
				<th scope="col"><h6>Nome</h6></th>
				<th scope="col"><h6>Artista</h6></th>
				<th scope="col"><h6>Duração</h6></th>
				<th scope="col"><h6>Album</h6></th>
				<th scope="col"><h6>Genêro</h6></th>
				<th scope="col"><h6>Editar</h6></th>
				<th scope="col"><h6>Adicionar</h6></th>
				<th scope="col"><h6>Deletar</h6></th>
			</tr>
			</thead>

			<?php  $numero=0; ?>
			<?php while($dado = $con->fetch_assoc()){ $numero++;?>
			<tr>
				<th scope="row"><?php  echo $numero     ?>
				<td><?php echo $dado["Nome"];?></td>
				<td><?php echo $dado["Artista"];?></td>
				<td><?php echo $dado["Duracao"];?></td>
				<td><?php echo $dado["Album"];?></td>
				<td><?php echo $dado["Genero"];?></td>
				<td><?php echo "<a href=\"alteracao.php?id_m=".$dado["ID_M"]."\"><input type=\"submit\" value=\"Editar\" class=\"btn btn-info\"></input></a>"?></td>
				<td><?php echo "<a href=\"1adicionarMusicaPlaylist.php?action=selecionarPlaylistsParaMusica&id_m=".$dado["ID_M"]."\"><input type=\"button\" value=\"Adicionar\" class=\"btn btn-info\"></input></a>"?></td>
				<td><?php echo "<input type=\"button\" onclick=\"confirmarDelete(".$dado["ID_M"].")\"value=\"Deletar\" class=\"btn btn-danger\"></input>"?></td>
			</tr>
		
			<?php } ?>
			</table>
			</div>
	</body>
</html>

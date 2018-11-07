<?php 

include_once("conexao.php");

header("Content-type: text/html; charset=utf-8");

$ID_M = $_GET['id_m'];
$query = "SELECT * FROM musicas WHERE ID_M =".$ID_M;
$con = $conexao->query($query)->fetch_assoc();


?>

<!DOCTYPE html>

<html>
<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo1.css"/>
	<meta charset="UTF-8">
	<title>Editar Musicas</title>
</head>
<body>
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
	<div id="conteudo">
		<p>
			<div class="formulario">
				<h3>Alterar Musica</h3>
			<form action="alterar.php" method="post">
				<input type="hidden" name="ID_M" <?php echo "value=\"".$con["ID_M"]."\"" ?> placeholder="$ID_M"/><br>
				<input type="text"  name="Nome" placeholder="Nome" <?php echo "value=\"".$con["Nome"]."\"" ?> /><br>
				<input type="time" name="Duracao"  placeholder="Duracao" <?php echo "value=\"".substr($con["Duracao"],0,5)."\"" ?> /><br>
				<input type="text" name="Genero"  placeholder="Genero" <?php echo "value=\"".$con["Genero"]."\"" ?> /><br>
				<input type="text" name="Album"  placeholder="Album" <?php echo "value=\"".$con["Album"]."\"" ?> /><br>
				<input type="text" name="Artista"  placeholder="Artista" <?php echo "value=\"".$con["Artista"]."\"" ?> /><br>
				<input type="submit" value="Alterar" class="btn btn-info">
			</form>
			</div>
		</p>
		</div>
</body>
</html>
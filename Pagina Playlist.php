<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="estilo1.css"/>
	<title>Adicionar Playlist</title>
	<meta charset="utf8">
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
	<div class="formulario">
	<fieldset>
		<legend>Nova Playlist</legend>

		<form action="processa.php" method="post">
			Nome:<br><input type="text" placeholder="Nome" name="Nome"/><br><br>
			Descrição:
			<br><textarea placeholder="Descrição" rows="4" cols="100" name="Descricao"></textarea><br><br>
			<input type="submit" value="Adicionar" class="btn btn-info">
		</form>
	</div>
	</fieldset>
</body>
</html>
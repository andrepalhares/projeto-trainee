<!DOCTYPE html>

<html>

<head>
	<title>Adicionar Playlist</title>
	<meta charset="utf8">
</head>
<body>
	<header>
		<nav class="menu">
			<ul>
				<li><a href="Inicial.html">Inicio</a></li>
				<li><a href="exibirPlaylist.html">Adicionar Musica</a></li>
				<li><a href="exibirPlaylist.html">Adicionar Playlist</a></li>
				<li><a href="Exibir_musicas.php">Listar Musica</a></li>
			</ul>
		</nav>
	</header>
<div class="formulario">
		<form action="processa.php" method="post">
			<br>
			
				<h1>Nova Playlist</h1>
				<br>
			Nome:<br><input type="text" placeholder="Nome" name="Nome"/><br><br>
			Descrição:
			<br><textarea placeholder="Descrição" rows="4" cols="100" name="Descricao"></textarea><br><br>
			<input type="submit" value="Adicionar" class="btn">
			
		</form>
	</div>
</body>
</html>

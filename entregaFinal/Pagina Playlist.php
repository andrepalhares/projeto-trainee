<!DOCTYPE html>

<html>

<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="estilo.css">
	<title>Adicionar Playlist</title>
	<meta charset="utf8">
</head>
<body>
	<header>
		<?php require_once('menu.php')?>
	</header>
	<div class="playlists">
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
	</div>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Editar Musicas</title>
</head>
<body>
	<div id="conteudo">
		<h1>Alterar Musica</h1>
		<p>
			<div class="formulario">
			<form action="alterar.php" method="post">
				<input type="text" name="ID_M" placeholder="ID_M"/><br>
				<input type="text"  name="Nome" placeholder="Nome" /><br>
				<input type="time" name="Duracao"  placeholder="Duracao"/><br>
				<input type="text" name="Genero"  placeholder="Genero" /><br>
				<input type="text" name="Album"  placeholder="Album" /><br>
				<input type="text" name="Artista"  placeholder="Artista" /><br>
				<input type="text"  name="status" placeholder="Status"/><br>
				<input type="submit" value="Alterar" class="btn">
			</form>
			</div>
		</p>
		</div>
</body>
</html>

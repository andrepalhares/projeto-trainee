<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Editar Musicas</title>
	<?php
	$Nome = filter_input(INPUT_GET, "Nome");
	$Artista = filter_input(INPUT_GET, "Artista");
	$Album = filter_input(INPUT_GET, "Album");
	$Genero = filter_input(INPUT_GET, "Genero");
	$Duracao = filter_input(INPUT_GET, "Duracao");
	$status = filter_input(INPUT_GET, "stutus");
	$ID_M = filter_input(INPUT_GET, "ID_M");
	?>
</head>
<body>
	<div id="conteudo">
		<h1>Alterar Musica</h1>
		<p>
			<form action="alterar.php">
				<input type="hidden" name="Id" value"<?php echo $ID_M ?>" />
				Nome: <input type="text" name="Nome" value"<?php echo $Nome ?>" />
				Artista: <input type="text" name="Artista" value"<?php echo $Artista ?>" />
				Album: <input type="text" name="Album" value"<?php echo $Album ?>" />
				Genero: <input type="text" name="Genero" value"<?php echo $Genero ?>" />
				Duracao: <input type="text" name="Duracao" value"<?php echo $Duracao ?>" />
				Status: <input type="text" name="Status" value"<?php echo $status ?>" />
				
				<input type="submit" name="Alterar" value="Alterar">
			</form>
		</p>
</body>
</html>
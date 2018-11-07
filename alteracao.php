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
	<meta charset="UTF-8">
	<title>Editar Musicas</title>
</head>
<body>
	<div id="conteudo">
		<h1>Alterar Musica</h1>
		<p>
			<div class="formulario">
			<form action="alterar.php" method="post">
				<input type="hidden" name="ID_M" <?php echo "value=\"".$con["ID_M"]."\"" ?> placeholder="$ID_M"/><br>
				<input type="text"  name="Nome" placeholder="Nome" <?php echo "value=\"".$con["Nome"]."\"" ?> /><br>
				<input type="time" name="Duracao"  placeholder="Duracao" <?php echo "value=\"".substr($con["Duracao"],0,5)."\"" ?> /><br>
				<input type="text" name="Genero"  placeholder="Genero" <?php echo "value=\"".$con["Genero"]."\"" ?> /><br>
				<input type="text" name="Album"  placeholder="Album" <?php echo "value=\"".$con["Album"]."\"" ?> /><br>
				<input type="text" name="Artista"  placeholder="Artista" <?php echo "value=\"".$con["Artista"]."\"" ?> /><br>
				<input type="submit" value="Alterar" class="btn">
			</form>
			</div>
		</p>
		</div>
</body>
</html>
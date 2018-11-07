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
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="estilo.css">

	<meta charset="UTF-8">
	<title>Editar Musicas</title>
</head>
<body>
	<header>
		<?php require_once('menu.php') ?>
	</header>
	<div class="playlists">
	<div id="conteudo">
		<p>
			<div class="formulario">
				<h3>Alterar Musica</h3>

			<form class="form-horizontal" action="alterar.php" method="post">
	            <fieldset>
					<input type="hidden" name="ID_M" <?php echo "value=\"".$con["ID_M"]."\"" ?> placeholder="$ID_M"/><br>
	                <div class="form-group">
	                <label>Nome:</label><input placeholder="Nome" class="form-control" type="text" name="Nome" <?php echo "value=\"".$con["Nome"]."\"" ?> required><br/>
	                </div>
	                <div class="form-group">
	                <label>Artista:</label><input placeholder="Artista" class="form-control" type="text" name="Artista" <?php echo "value=\"".$con["Artista"]."\"" ?> required><br/>
	                </div>
	                <div class="form-group">
	                <label>Álbum:</label><input placeholder="Álbum" class="form-control" type="text" name="Album" <?php echo "value=\"".$con["Album"]."\"" ?> required><br/>
	                </div>
	                <div class="form-group">
	                <label>Gênero:</label><input placeholder="Gênero" class="form-control" type="text" name="Genero" <?php echo "value=\"".$con["Genero"]."\"" ?> required><br/>
	                </div>
	                <div class="form-group">
	                <label>Duração:</label><input class="form-control" type="time" name="Duracao" <?php echo "value=\"".substr($con["Duracao"],3,8)."\"" ?> required><br/>
	                </div>
	                <button class="btn btn-info" type="submit">Salvar</button>
	                <a href="."><input class="btn btn-info" type="button" value="Voltar"></input></a>
	            </fieldset>
	        </form>
			</div>
		</p>
		</div>
		</div>
</body>
</html>

<?php

include_once("conexao.php");

header("Content-type: text/html; charset=utf-8");

$Nome = $_POST['Nome'];
$Descricao = $_POST['Descricao'];

$sql = "insert into playlist (Nome, Descricao) values ('$Nome', '$Descricao')";
$salvar = $conexao->query($sql);

$linhas = mysqli_affected_rows($conexao);

$conexao->close();

?>

<!DOCTYPE html>

<html>

<head>
	<title>Adicionar Playlist</title>
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
			<h1>Confirmação</h1>
				<br>
				<?php

				if($linhas == 1){print"A nova playlist foi adicionada";}
				else{			print" Cadastro nao efetuado";}
				?>
				<br>
			</fieldset>
		</form>
	</div>

</body>
</html>
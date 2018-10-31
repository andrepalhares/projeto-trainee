<?php

include_once("conexao.php");

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
		<h1> Adicionar Playlist</h1>
		<nav class="menu">
			<ul>
				<li><a href="Inicial.html">Pagina Inicial</a></li>
			</ul>
		</nav>
	</header>
<div class="formulario">
		
		<form action="processa.php" method="post">
			<br>
			<fieldset>
				<legend>Confirmacao</legend>
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
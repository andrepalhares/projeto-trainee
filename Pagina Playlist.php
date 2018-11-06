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
				<legend>Nova Playlist</legend>
				<br>
			<input type="text" placeholder="Nome" name="Nome"/><br><br>
			<textarea placeholder="Descricao" rows="4" cols="100" name="Descricao"></textarea><br><br>
			<input type="submit" value="Adicionar" class="btn">
			</fieldset>
		</form>
	</div>
</body>
</html>
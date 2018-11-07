<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Editar Playlist</title>
    <?php
    require_once('clientHandler.php');
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">

</head>
<body>

    <script>
        function confirmarDelete(n){
            if(confirm("Deseja realmente deletar essa playlist?")){
                window.location.href = 'exibirPlaylist.php?action=deletarPlaylist&id_p='+n;
            }
        }
    </script>

    <nav >
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link active" href=".\">INICIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adicionarMusica.php">ADICIONAR MÚSICA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Pagina Playlist.php">ADICIONAR PLAYLIST</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Exibir_musicas.php">LISTAR MÚSICAS</a>
            </li>
        </ul>
    </nav>

    <div class="playlists">
        <h1>Playlists</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="col1">Nome</th>
                    <th scope="col" class="col2">Descrição</th>
                    <th scope="col" class="col3">Exibir</th>
                    <th scope="col" class="col3">Editar</th>
                    <th scope="col" class="col3">Deletar</th>
                </tr>
            </thead>
            <tbody>
            <?php
                foreach ($playlists as $p) {
                    echo "<tr><td>".$p["Nome"]."</td><td>".$p["Descricao"]."</td><td><a href=\"exibirPlaylist.php?action=exibirPlaylist&id_p=".$p["ID_P"]."\"><input class=\"btn btn-info\" type=\"button\" value=\"Exibir\"></input></a></td><td><a href=\"editarPlaylist.php?action=editarPlaylist&id_p=".$p["ID_P"]."\"><input class=\"btn btn-info\" type=\"button\" value=\"Editar\"></input></a></td><td><input onclick=\"confirmarDelete(".$p["ID_P"].")\" class=\"btn btn-danger\" type=\"button\" value=\"Deletar\"></input></a></td></tr>";
                }
             ?>
         </tbody>
        </table>
    </div>
</body>
</html>

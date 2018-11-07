<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Editar Playlist</title>
    <?php
    require_once('clientHandler.php');
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <style>
        form{
            width: 55%;
            margin: 10px auto;
            border: 1px solid rgba(0,0,0,.2);
            border-radius: 3%;
            padding: 15px;
        }
    </style>
</head>
<body>
    <script>
        function confirmarDelete(m, p){
            if(confirm("Deseja realmente deletar essa playlist?")){
                window.location.href = 'exibirPlaylist.php?action=deletarMusicaPlaylist&id_m='+m+'&id_p='+p;
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
        <?php
            echo "<h1>".$playlist["Nome"]."</h1><p>Descrição:</br>".$playlist["Descricao"]."</p>";
        ?>
        <h1>Músicas</h1>

        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col" class="col1">Nome</th>
                    <th scope="col" class="col3">Editar</th>
                    <th scope="col" class="col3">Deletar</th>
                    <th scope="col" class="col3">Adicionar</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if(isset($musicasPlaylist)){
                foreach ($musicasPlaylist as $m) {
                    echo "<tr><td>".$m["Nome"]."</td><td><a href=\"alteracao.php?id_m=".$m["ID_M"]."\"><input class=\"btn btn-info\" type=\"button\" value=\"Editar\"></input></a></td><td> <input class=\"btn btn-danger\" type=\"button\" onclick=\"confirmarDelete(".$m["ID_M"].",".$playlist["ID_P"].")\"value=\"Deletar\"></input></td><td><a href=\"adicionarMusicaPlaylist.php?action=selecionarPlaylistsParaMusica&id_m=".$m["ID_M"]."\"><input class=\"btn btn-info\" type=\"button\" value=\"Adicionar\"></input></a></td></tr>";
                }
            }
             ?>
         </tbody>
        </table>
        <a href="exibirplaylists.php?action=selecionarPlaylistsParaMusica"><input class="btn btn-info" type="button" value="Voltar"></input></a>
    </div>
</body>
</html>

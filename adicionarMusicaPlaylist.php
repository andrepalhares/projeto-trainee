<!DOCTYPE html>
<head>
    <?php
    require_once('clientHandler.php');
    ?>
    <meta charset="utf-8">
    <title>Adicionar e remover músicas</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="estilo.css">
    <style>
        h1{
            margin: 0px 10px 50px;
        }
        select{
            height: 20px;
            background-color: pink;
            width: 10px;
            margin-bottom: 20px;
        }
    </style>

</head>
<body>
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
        <h1>Adicionar e remover músicas</h1>
        <form class="form-horizontal" action="adicionarMusicaPlaylist.php?action=adicionarMusicaPlaylist" method="post" name="AdicionarParaPlaylist">

            <label for="nome">Nome da música: </label></br><?php if(isset($musica)){echo $musica["Nome"];} ?></br>
            <input hidden type="text" name="nome" value="<?php if(isset($musica)){echo $musica["Nome"];} ?>">

            <input hidden type="number" hidden name="id_m" value="<?php if(isset($musica)){echo $musica["ID_M"];} ?>"></br>

            <label for="artista">Nome do artista:</label></br><?php if(isset($musica)){echo $musica["Artista"];} ?></br>
            <input hidden type="text" name="artista" value="<?php if(isset($musica)){echo $musica["Artista"];} ?>"></br>

            <label for="playlistSelecionada"> Selecionar playlist para adicionar:</label>
            <select class="form-control" name="playlistSelecionada">
            <?php
                foreach ($playlists as $playlist) {
                    echo "<option value=".$playlist["ID_P"].">".$playlist["Nome"]."</br>";
                }
            ?>
            <option hidden selected disabled>Selecionar Playlist</option>
            </select>

            <button class="btn btn-info" type="submit">Adicionar</button>
            <a href="."><input class="btn btn-info" type="button" value="Voltar"></input></a>
        </form>
    </div>

</body>
</html>

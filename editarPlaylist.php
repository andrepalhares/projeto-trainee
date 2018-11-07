<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Editar Playlist</title>
    <?php
    require_once('clientHandler.php');
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>

        select{
            margin-bottom: 15px;
        }

        div.playlists{
            width:  70%;
            margin: 0px auto;
            border: 1px solid rgba(0,0,0,.2);
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
            padding: 20px;
        }
        nav a{
            text-decoration: none;
            vertical-align: center;
            margin: auto 0px;
            height: 70px;
            color: white;
            font-family: -apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
            transition: background-color .5s,  color .5s;
        }
        nav a:hover{
            background-color: white;
            color: #212529;
        }
        nav{
            background-color: #212529;
            color: white;
            font-weight: bold;
        }
        nav li{
            text-align: center;
            width: 150px;
            margin: 0px 0px;
            height: 70px;
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

    <form id="formEditar" action="editarPlaylist.php?action=salvarPlaylist" method="post" name="editarPlaylist">
        <fieldset>
            <legend>Editar Playlist</legend>

            <div class="form-group">
            <label for="nome" >Nome:</label><input value="<?php if(isset($playlist)){echo $playlist["Nome"];} ?>" class="form-control" type="text" name="nome"  required><br/>
            </div>
            <label for="descricao">Descrição:</label><input value="<?php if(isset($playlist)){echo$playlist["Descricao"];} ?>" class="form-control" type="text" name="descricao" required>
                <input hidden name="id_p" type="number" value="<?php if(isset($playlist)){echo $playlist["ID_P"];} ?>"><br/>
                <button class="btn btn-info" type="submit">Salvar</button>
                <a href="exibirPlaylists.php?action=selecionarPlaylistsParaMusica"><input class="btn btn-info" type="button" value="Voltar"></input></a>
        </fieldset>

    </form>
    </div>
</body>
</html>

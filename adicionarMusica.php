<!DOCTYPE html>
    <head>
        <?php
        require_once('clientHandler.php');
        ?>

        <meta charset="utf-8" />
        <title>Adicionar Música</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="estilo.css">
        <style>
            form{
                width: 55%;
                margin: 0px auto 30px;
                border: 1px solid rgba(0,0,0,.2);
                border-bottom-left-radius: 10px;
                border-bottom-right-radius: 10px;
                padding: 15px;
            }
            div.titulo{
                background-color: #212529;
                color: white;
                padding: 10px;
                margin: 10px auto;
                border-radius: 10px;
                border: 3px solid rgba(255,255,255,0);
                width: 490px;
                text-align: center;
                vertical-align: central;
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
                    <a class="nav-link" href="Pagina_Playlist.php">ADICIONAR PLAYLIST</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Exibir_musicas.php">LISTAR MÚSICAS</a>
                </li>
            </ul>
        </nav>
        <form class="form-horizontal" action="adicionarmusica.php?action=adicionarMusica" method="post" name="Adicionar">
            <fieldset>
                <div class="titulo">
                <h1>Adicionar música</h1></div>
                <div class="form-group">
                <label>Nome:</label><input placeholder="Nome" class="form-control" type="text" name="nome"  required><br/>
                </div>
                <div class="form-group">
                <label>Artista:</label><input placeholder="Artista" class="form-control" type="text" name="artista" required><br/>
                </div>
                <div class="form-group">
                <label>Álbum:</label><input placeholder="Álbum" class="form-control" type="text" name="album" required><br/>
                </div>
                <div class="form-group">
                <label>Gênero:</label><input placeholder="Gênero" class="form-control" type="text" name="genero" required><br/>
                </div>
                <div class="form-group">
                <label>Duração:</label><input class="form-control" type="time" name="duracao" required><br/>
                </div>
                <button class="btn btn-info" type="submit">Adicionar</button>
                <a href="."><input class="btn btn-info" type="button" value="Voltar"></input></a>
            </fieldset>
        </form>
    </body>
</html>

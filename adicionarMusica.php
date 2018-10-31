<!DOCTYPE html>
    <head>
        <?php
        require_once('clientHandler.php');
        ?>

        <meta charset="utf-8" />
        <title>Adicionar Música</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

        <form class="form-horizontal" action="adicionarmusica.php?action=adicionarMusica" method="post" name="Adicionar">
            <fieldset>
                <legend>Adicionar música</legend>
                <div class="form-group">
                <label>Nome:</label><input class="form-control" type="text" name="nome"  required><br/>
                </div>
                <div class="form-group">
                <label>Artista:</label><input class="form-control" type="text" name="artista" required><br/>
                </div>
                <div class="form-group">
                <label>Álbum:</label><input class="form-control" type="text" name="album" required><br/>
                </div>
                <div class="form-group">
                <label>Gênero:</label><input class="form-control" type="text" name="genero" required><br/>
                </div>
                <div class="form-group">
                <label>Duração:</label><input class="form-control" type="time" name="duracao" required><br/>
                </div>
                <button class="btn btn-info" type="submit">Adicionar</button>
                <a href="index.html"><input class="btn btn-info" type="button" value="Voltar"></input></a>
            </fieldset>
        </form>
    </body>
</html>

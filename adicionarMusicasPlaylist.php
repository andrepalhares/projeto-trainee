<!DOCTYPE html>
<head>
    <?php
    require_once('clientHandler.php');
    ?>
    <meta charset="utf-8">
    <title>Adicionar e remover músicas</title>
    <style>
        div#playlists{
            width: 70%;
            margin: 15px auto;
            border: solid 1px rgba(0,0,0,.2);
            border-radius: 3%;
            padding: 20px;
        }
        col {
            all: none;
        }
        div#select{
            width: 40%;
            margin: 20px auto;
        }
        div#descricaoPlaylist{
            width:  80%;
            margin: 10px;
            margin-top: 30px;
        }
        select{
            width: 100%;
        }
        .column-one{
            width: 70%;
        }
        .column-two{
            width: 20%;
        }
        .column-three{
            width: 20%;
        }
        table{
            display: block;
            width: 100%;
        }
        tbody{
            display: block;
            width: 100%;
            max-height: 400px;
            overflow: scroll;
            overflow-x: hidden;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>

    <div id="playlists">
        <h1>Adicionar e remover músicas</h1>
        <div id="select">
        <label for="playlistSelecionada"> Selecionar Playlist</label>
        <select class="form-control" id="playlistSelecionada">
        <?php
            foreach ($playlists as $playlist) {
                echo "<option value=".$playlist["ID_P"].">".$playlist["Nome"]."</br>";
            }
        ?>
        <option hidden selected disabled>Selecionar Playlist</option>
        </select>
        </div>

        <table class="table table-striped" id="tabelaMusicas">
        </table>

        <div id="descricaoPlaylist"></div>
        <table class="table table-striped" id="tabelaMusicasPlaylist">
        </table>

        <a href="index.html"><input class="btn btn-info" type="button" value="Voltar"></input></a>
    </div>

    <script src=".\javascript\adicionarMusicaPlaylist.js"></script>
</body>
</html>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Editar Playlist</title>
    <?php
    require_once('clientHandler.php');
    ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        form{
            width: 55%;
            margin: 10px auto;
            border: 1px solid rgba(0,0,0,.2);
            border-radius: 3%;
            padding: 15px;
        }
        select{
            margin-bottom: 15px;
        }
    </style>
</head>
<body>

    <form id="formEditar" action="editarPlaylist.php?action=editarPlaylist" method="post" name="editarPlaylist">
        <fieldset>
            <legend>Editar Playlist</legend>
            <select class="form-control" id="selecionaPlaylist">
                <?php
                    foreach ($playlists as $playlist) {
                        echo "<option value=".$playlist["ID_P"].">".$playlist["Nome"]."</br>";
                    }
                ?>
                <option hidden selected disabled>Selecionar Playlist</option>
            </select>

            <div class="form-group">
            <label for="nome">Nome:</label><input required class="form-control" type="text" name="nome"  required><br/>
            </div>
            <label for="descricao">Descrição:</label><input required class="form-control" type="text" name="descricao" required>
                <input hidden name="id_p" type="number"><br/>
                <button class="btn btn-info" type="submit">Salvar</button>
                <a href="index.html"><input class="btn btn-info" type="button" value="Voltar"></input></a>
        </fieldset>

    </form>

    <script>
        var playlist = document.getElementById("selecionaPlaylist");
        playlist.addEventListener("change", function(){
            let indice = playlist.selectedIndex;
            let nome = playlists[indice].playlist.nome;
            let descricao = playlists[indice].playlist.descricao;
            let id = playlists[indice].playlist.id;
            document.getElementById("formEditar")["nome"].value = nome;
            document.getElementById("formEditar")["descricao"].value = descricao;
            document.getElementById("formEditar")["id_p"].value = id;

        });
    </script>
</body>
</html>

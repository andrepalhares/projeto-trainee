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
            padding: 30px;
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
                <a class="nav-link active" href="#">INICIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="adicionarMusica.php">ADICIONAR MÚSICA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">ADICIONAR PLAYLIST</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">LISTAR MÚSICAS</a>
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
                    echo "<tr><td>".$p["Nome"]."</td><td>".$p["Descricao"]."</td><td><a href=\"exibirPlaylist.php?action=exibirPlaylist&id_p=".$p["ID_P"]."\"><input class=\"btn btn-info\" type=\"button\" value=\"Exibir\"></input></a></td><td><a href=\"editarPlaylist.php?action=editarPlaylist&id_p=".$p["ID_P"]."\"><input class=\"btn btn-info\" type=\"button\" value=\"Editar\"></input></a></td><td><a href=\"exibirPlaylist.php?action=deletarPlaylist&id_p=".$p["ID_P"]."\"><input class=\"btn btn-danger\" type=\"button\" value=\"Deletar\"></input></a></td></tr>";
                }
             ?>
         </tbody>
        </table>
    </div>
</body>
</html>

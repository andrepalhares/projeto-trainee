<?php
    $host =  'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'bancodedados';
    if(!isset($_GET["action"])){
        $_GET["action"] = "selecionarMusicasPlaylists";
    }

    switch($_GET['action']){
    case "adicionarMusica":
        $conexao = new mysqli($host, $usuario, $senha, $banco);
        $query = "INSERT INTO musicas (nome, artista, album, genero, duracao, status) VALUES ('".$_POST["nome"]."','".$_POST["artista"]."','".$_POST["album"]."','".$_POST["genero"]."','00:".$_POST["duracao"]."',1)";
        $verifica = $conexao->query($query);
        if($verifica && $_POST["nome"]){
            echo "<script>alert('Adicionada com sucesso.')</script>";
        }else{
            echo "<script>alert('Falha ao adicionar.')</script>";
        }
        $conexao->close();
        break;
    case "selecionarMusicasPlaylists":
        $conexao = new mysqli($host, $usuario, $senha, $banco);
        $query = "SELECT * FROM musicas WHERE status = 1";
        $musicas = $conexao->query($query);
        $query = "SELECT * FROM playlist WHERE status = 1";
        $playlists = $conexao->query($query);
        echo "<script>var musicas = [];
        ";
        foreach ($musicas as $m) {
            echo "musicas.push({nome:\"".$m["Nome"]."\",
                id : ".$m["ID_M"].",
                artista :\"".$m["Artista"]."\",
                genero :\"".$m["Genero"]."\",
                duracao :\"".$m["Duracao"]."\"
            })
            ";
        }

        echo "var playlists = [];
        ";
        foreach ($playlists as $p) {
            echo "playlist = {nome:\"".$p["Nome"]."\",
                id : ".$p["ID_P"].",
                descricao : \"".$p["Descricao"]."\",
                };";
            echo "var musicasPlaylist = [];";
            $query = "SELECT pertence.*, musicas.Nome FROM pertence JOIN musicas ON pertence.ID_M=musicas.ID_M WHERE ID_P = ".$p["ID_P"]." && pertence.status = 1;";
            $musicasSelecionadas = $conexao->query($query);
            foreach ($musicasSelecionadas as $musica) {
                echo "musicasPlaylist.push({nome:\"".$musica["Nome"]."\",
                    id : ".$musica["ID_M"]."
                })
                ";
            }
            echo "playlists.push({playlist, musicasPlaylist});";
        }
        echo "</script>";
        $conexao->close();
        break;
    case "selecionaPlaylist":
        $conexao = new mysqli($host, $usuario, $senha, $banco);
        $id = intval($_GET["id"]);
        $query = "SELECT pertence.*, musicas.Nome, musicas.Artista FROM pertence JOIN musicas ON pertence.ID_M=musicas.ID_M WHERE ID_P = ".$id." && pertence.status = 1;";
        $musicasSelecionadas = $conexao->query($query);


        foreach ($musicasSelecionadas as $m) {
            echo "<tr><td class=\"column-one\">".$m["Nome"]."</td><td class=\"column-two\" id=\"".$m["ID_M"]."\">".$m["Artista"]."</td><td class=\"column-three\"><button class=\"btn btn-outline-danger btn-sm\" id=\"".$m["ID_pertence"]."\">Remover</button></td></tr>";
        }
        break;
    case "deletarMusica":
        $conexao = new mysqli($host, $usuario, $senha, $banco);
        $id = intval($_GET["id"]);
        $query = "UPDATE pertence SET status = 0 WHERE ID_pertence = ".$id.";";
        $verifica = $conexao->query($query);
        $conexao->close();
        break;
    case "adicionarMusicaPlaylist":
        $conexao = new mysqli($host, $usuario, $senha, $banco);
        $id_M = intval($_GET["id_m"]);
        $id_P = intval($_GET["id_p"]);
        $query = "INSERT INTO pertence (ID_P, ID_M, status) VALUES ($id_P,$id_M,1);";
        $verifica = $conexao->query($query);
        $conexao->close();
        break;
    case "editarPlaylist":
        $conexao = new mysqli($host, $usuario, $senha, $banco);
        $id_P = intval($_POST["id_p"]);
        $query = "UPDATE `playlist` SET `Nome`=\"".$_POST["nome"]."\",`Descricao`=\"".$_POST["descricao"]."\" WHERE ID_P = \"".$id_P."\";";
        $verifica = $conexao->query($query);
        $query = "SELECT * FROM playlist WHERE status = 1";
        $playlists = $conexao->query($query);
        $conexao->close();

        echo "<script> var playlists = [];";
        foreach ($playlists as $p) {
            echo "playlist = {nome:\"".$p["Nome"]."\",
                id : ".$p["ID_P"].",
                descricao : \"".$p["Descricao"]."\",
                };
                playlists.push({playlist});";
        }
        echo "</script>";
        break;
    default:
        break;
    }
 ?>

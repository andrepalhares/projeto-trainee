<?php
    $host =  'localhost';
    $usuario = 'root';
    $senha = '';
    $banco = 'bancodedados';

    $conexao = new mysqli($host, $usuario, $senha, $banco);
    $conexao->set_charset("utf8");
    if(isset($_GET["action"])){
        switch($_GET["action"]){
        case "adicionarMusica":
            $query = "INSERT INTO musicas (nome, artista, album, genero, duracao, status) VALUES ('".$_POST["nome"]."','".$_POST["artista"]."','".$_POST["album"]."','".$_POST["genero"]."','00:".$_POST["duracao"]."',1)";
            $verifica = $conexao->query($query);
            if($verifica && $_POST["nome"]){
                echo "<script>alert('Adicionada com sucesso.')</script>";
            }else{
                echo "<script>alert('Falha ao adicionar.')</script>";
            }
            break;
        case "selecionarPlaylistsParaMusica":
            $query = "SELECT * FROM playlist WHERE status = 1";
            $playlists = $conexao->query($query);
            if(isset($_GET["id_m"])){
                $id_m = $_GET["id_m"];
                $query = "SELECT * FROM musicas WHERE ID_M = ".$id_m.";";
                $verifica = $conexao->query($query);
                $musica = $verifica->fetch_assoc();
            }
            break;
        case "deletarMusica":
            $id = intval($_GET["id"]);
            $query = "UPDATE pertence SET status = 0 WHERE ID_pertence = ".$id.";";
            $verifica = $conexao->query($query);

            break;
        case "adicionarMusicaPlaylist":
            $id_M = intval($_POST["id_m"]);
            $id_P = intval($_POST["playlistSelecionada"]);
            $query = "SELECT * FROM pertence WHERE ID_P = '$id_P'  && ID_M = $id_M && status = 1;";
            $verifica = $conexao->query($query);

            if(!$verifica){
                echo "<script>alert(\"Erro de conexão.\")</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; url=adicionarMusicaPlaylist.php?action=selecionarPlaylistsParaMusica&id_M=".$id_M."\">";
                break;
            }

            $result=$verifica->fetch_assoc();
            if(!empty($result)){
                echo "<script>alert(\"A música já existe na playlist\")</script>";
            }else{
                echo $result["Nome"];
                $query = "INSERT INTO pertence (ID_P, ID_M) VALUES ($id_P,$id_M);";
                $verifica = $conexao->query($query);
                echo "<script>alert(\"Adicionada com sucesso.\")</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; url=exibirmusicas.php\">";
            }

            $query = "SELECT * FROM musicas WHERE ID_M = ".$id_M.";";
            $verifica = $conexao->query($query);
            $musica = $verifica->fetch_assoc();
            $query = "SELECT * FROM playlist WHERE status = 1";
            $playlists = $conexao->query($query);
            break;
        case "editarPlaylist":
            $id_P = intval($_GET["id_p"]);
            $query = "SELECT * FROM playlist WHERE ID_P = ".$id_P.";";
            $verifica = $conexao->query($query);
            $playlist = $verifica->fetch_assoc();
            break;
        case "exibirPlaylist":
            $id_P = intval($_GET["id_p"]);
            $query = "SELECT * FROM playlist WHERE ID_P = ".$id_P.";";
            $verifica = $conexao->query($query);
            $playlist = $verifica->fetch_assoc();
            $query = "SELECT pertence.status, pertence.ID_pertence, pertence.ID_M, musicas.ID_M, musicas.Nome FROM pertence JOIN musicas ON musicas.ID_M=pertence.ID_M WHERE ID_P = ".$id_P." && pertence.status = 1;";
            $musicasPlaylist = $conexao->query($query);
            break;
        case "salvarPlaylist":
            $id_P = intval($_POST["id_p"]);
            $query = "UPDATE `playlist` SET `Nome`=\"".$_POST["nome"]."\",`Descricao`=\"".$_POST["descricao"]."\" WHERE ID_P = \"".$id_P."\";";
            $verifica = $conexao->query($query);
            if($verifica){
                echo "<script>alert(\"Salva com sucesso.\")</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; url=exibirplaylists.php?action=selecionarPlaylistsParaMusica\">";
            }else{
                echo "<script>alert(\"Erro ao salvar alterações.\")</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; url=editarPlaylist.php?action=editarPlaylist&id_p=".$id_P."\">";
            }
            break;
        case "deletarMusicaPlaylist":
            $id_P = intval($_GET["id_p"]);
            $id_M = intval($_GET["id_m"]);
            $query = "UPDATE pertence SET status = 0 WHERE ID_P = $id_P && ID_M = $id_M";
            $verifica = $conexao->query($query);
            if($verifica){
                echo "<script>alert(\"Música deletada da playlist com sucesso.\")</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; url=exibirplaylists.php?action=selecionarPlaylistsParaMusica\">";
            }else{
                echo "<script>alert(\"Erro ao deletar música da playlist.\")</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; url=editarPlaylist.php?action=editarPlaylist&id_p=".$id_P."\">";
            }
            break;
        case "deletarPlaylist":
            $id_P = intval($_GET["id_p"]);
            $query1 = "UPDATE `pertence` SET `status`= 0 WHERE ID_P = \"".$id_P."\";";
            $query2 = "UPDATE `playlist` SET `status`= 0 WHERE ID_P = ".$id_P.";";
            $verifica = $conexao->query($query1);
            if(!$verifica){
                echo "<script>alert(\"Falha ao deletar músicas relacionadas a playlist.\")</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; url=exibirplaylists.php?action=selecionarPlaylistsParaMusica\">";
            }

            $verifica = $conexao->query($query2);
            echo $query2;
            if($verifica){
                echo "<script>alert(\"Playlist deletada com sucesso.\")</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; url=exibirplaylists.php?action=selecionarPlaylistsParaMusica\">";
            }else{
                echo "<script>alert(\"Erro ao salvar alterações.\")</script>";
                echo "<meta http-equiv=\"refresh\" content=\"0; url=exibirplaylists.php?action=selecionarPlaylistsParaMusica\">";
            }
            break;
        default:
            break;
        }
    }
    $conexao->close();
 ?>

<?php require_once('conexao.php');
    $id_M = $_GET["id_m"];
    $query1 = "UPDATE `pertence` SET `status`= 0 WHERE ID_M = \"".$id_M."\";";
    $query2 = "UPDATE `musicas` SET `status`= 0 WHERE ID_M = \"".$id_M."\";";
    $verifica = $conexao->query($query1);
    if(!$verifica){
        echo "<script>alert(\"Falha ao deletar música das playlists.\")</script>";
        echo "<meta http-equiv=\"refresh\" content=\"0; url=Exibir_musicas.php\">";
    }

    $verifica = $conexao->query($query2);
    if($verifica){
        echo "<script>alert(\"Música deletada com sucesso.\")</script>";
        echo "<meta http-equiv=\"refresh\" content=\"0; url=Exibir_musicas.php\">";
    }else{
        echo "<script>alert(\"Erro ao deletar música.\")</script>";
        echo "<meta http-equiv=\"refresh\" content=\"0; url=Exibir_musicas.php\">";
    }
?>

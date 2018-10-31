
var criaBotao = function (element){
    botaoAdicionar = document.createElement('button');
    botaoAdicionar.value = element.id;
    botaoAdicionar.className="btn btn-outline-primary btn-sm";
    botaoAdicionar.textContent = "Adicionar";

    return botaoAdicionar;
}

var atualizaMusicas = function(musicasAtuais){

    var tabela = document.getElementById('tabelaMusicas');
    tabela.innerHTML = "<tbody>";
    tabela.innerHTML = "<col class=\"column-one\"><col class=\"column-two\"><col class=\"column-three\"><thead><tr><th scope=\"col\">Música<\/th><th scope=\"col\">Artista<\/th><th scope=\"col\">Adicionar<\/th><\/thead>";

    musicasAtuais.forEach(function(element){
        tableRow = document.createElement('tr');

        tableNomeMusica = document.createElement('td');
        tableNomeMusica.textContent = element.nome;
        tableNomeMusica.className = "column-one";
        tableArtistaMusica = document.createElement('td');
        tableArtistaMusica.textContent = element.artista;
        tableArtistaMusica.className = "column-two";

        tableDataAdd = document.createElement('td');
        tableDataAdd.appendChild(criaBotao(element));
        tableDataAdd.className = "column-one";


        tableRow.appendChild(tableNomeMusica);
        tableRow.appendChild(tableArtistaMusica);
        tableRow.appendChild(tableDataAdd);
        tabela.appendChild(tableRow);
    });

    tabela.innerHTML += "</tbody>";
};

var verificaMusicasAdicionadas = function(id_P, indice){
    var musicasAtuais = [];
    musicas.forEach(function(musica){
        musicasAtuais.push(musica);
    });

    for(var i = 0; i < playlists[indice].musicasPlaylist.length; i++){
	       for(var j = musicasAtuais.length-1; j >= 0; j--){
               if(musicasAtuais[j].id == playlists[indice].musicasPlaylist[i].id){
                   musicasAtuais.splice(j,1);
               }
           }
    }

    atualizaMusicas(musicasAtuais);
}

function selecionaPlaylist(id) {
    if (id=="") {
        //document.getElementById("txtHint").innerHTML="";
        return;
    }
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    document.getElementById("tabelaMusicasPlaylist").innerHTML = "<col class=\"column-one\"><col class=\"column-two\"><col class=\"column-three\"><thead><tr><th scope=\"col\">Música<\/th><th scope=\"col\">Artista<\/th><th scope=\"col\">Remover<\/th><\/thead>";
    xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            document.getElementById("tabelaMusicasPlaylist").innerHTML+=this.responseText;
        }
    }

    xmlhttp.open("GET","clientHandler.php?action=selecionaPlaylist&&id="+id,true);
    xmlhttp.send();
    document.getElementById("descricaoPlaylist").innerHTML = "<strong>Nome: " + playlists[playlistSelecionada.selectedIndex].playlist.nome + "</strong><br>Descrição: " + playlists[playlistSelecionada.selectedIndex].playlist.descricao;
    verificaMusicasAdicionadas(id, playlistSelecionada.selectedIndex);
}

var playlistSelecionada = document.getElementById("playlistSelecionada");
playlistSelecionada.addEventListener("change",function(){
    selecionaPlaylist(playlistSelecionada[playlistSelecionada.selectedIndex].value);
});

function deletarMusicaPlaylist(id_pertence, id_musica){
      if (id_pertence=="") {
        return;
      }
      if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
      } else {
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }

      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            selecionaPlaylist(playlistSelecionada[playlistSelecionada.selectedIndex].value);
        }
      }

      let deletar;
      playlists[playlistSelecionada.selectedIndex].musicasPlaylist.splice(playlists[playlistSelecionada.selectedIndex].musicasPlaylist.findIndex(function(musica){
            return musica.id == id_musica;
      }),1);

      xmlhttp.open("GET","clientHandler.php?action=deletarMusica&&id="+id_pertence,true);
      xmlhttp.send();
}

function adicionarMusicaPlaylist(id){
      if (id=="") {
        return;
      }
      if (window.XMLHttpRequest) {
        xmlhttp=new XMLHttpRequest();
      } else { 
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }

      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
            selecionaPlaylist(playlistSelecionada[playlistSelecionada.selectedIndex].value);
        }
      }
      let indice = playlistSelecionada.selectedIndex;

      xmlhttp.open("GET","clientHandler.php?action=adicionarMusicaPlaylist&&id_m="+id+"&&id_p="+playlistSelecionada[indice].value,true);
      xmlhttp.send();

      musica = musicas[musicas.findIndex(function(musica){ return musica.id == id})];

      playlists[indice].musicasPlaylist.push(musica);

      verificaMusicasAdicionadas(id, playlistSelecionada.selectedIndex);
}

var mouseHandler = function(event){
    if(event.target.localName == "button" && event.target.innerText == "Remover"){

        if(confirm("Confimar remoção?")){
            deletarMusicaPlaylist(event.target.id, event.target.parentElement.previousSibling.id);
        }
    }else if(event.target.localName == "button" && event.target.innerText == "Adicionar"){
        adicionarMusicaPlaylist(event.target.value);
    }
}

addEventListener("click",function(event){
    mouseHandler(event);
});

atualizaMusicas(musicas);

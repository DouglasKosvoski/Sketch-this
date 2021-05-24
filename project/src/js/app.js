function login() {
  document.location.href = "./main.php?acao=salas";
}

function mute() {
  //sound goes none
}

function popUp(id){
  var ballon = document.getElementsByName('popup'+id);
  if (ballon[0].style.display === 'none'){
    ballon[0].style.display = 'flex';
  }
  else {
    ballon[0].style.display = 'none';
  }
}

//expande o menu de avatares
function avatares(){
  var avatar = document.getElementById('avat');
  if (avatar.style.display === 'none'){
    avatar.style.display = 'block';
  }
  else {
    avatar.style.display = 'none';
  }
}

//muda o avatar
function selectAvatar(id) {
  var image = document.getElementById(id).src;
  var hiddeninput = document.getElementById("avatar");
  document.getElementById('selectedAvatar').src = image;
  hiddeninput.value = image.slice(-5, -4);
}

function updateQuery() {
  const searchInput = document.getElementById("mensagem");
  searchInput.addEventListener("keyup", function(event) {
    let searchParams = new URLSearchParams(window.location.search);
    searchParams.set("text", event.target.value);

    if (window.history.replaceState) {
      const url = window.location.protocol
      + "//" + window.location.host
      + window.location.pathname
      + "?"
      + searchParams.toString();

      window.history.replaceState({
        path: url
      }, "", url)
    }
  })
}

document.addEventListener('DOMContentLoaded', function scrollBottom() {
  url = new URL(window.location.href);
  if (url.searchParams.get('acao') == 'chat') {
    var objDiv = document.getElementById("hist");
    objDiv.scrollTop = objDiv.scrollHeight;
  }
}, false);

window.onload = function() {
  url = new URL(window.location.href);
  if (url.searchParams.get('acao') == 'chat') {
    const params = new URLSearchParams(window.location.search);
    document.getElementById('mensagem').value = params.get('text');
  }
}

window.ready = function(){
  url = new URL(window.location.href);
  if (url.searchParams.get('acao') == 'cadastro') {
    selectAvatar("../img/avatares/a.png");
  }
}

setInterval(function () {
  url = new URL(window.location.href);
  if (url.searchParams.get('acao') == 'chat') {
    const params = new URLSearchParams(window.location.search);
    params.set('text', document.getElementById('mensagem').value);
    window.location.search = params.toString();
    window.location.href = window.location.href;
  }
}, 10000);

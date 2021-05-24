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
  document.getElementById('selectedAvatar').src = image;

  var hiddeninput = document.getElementById("avatar");
  hiddeninput.value = image.slice(-5, -4);
}

//rola para o fim da coversa quando a página carrega
document.addEventListener('DOMContentLoaded', function scrollBottom() {
  var objDiv = document.getElementById("hist");
  objDiv.scrollTop = objDiv.scrollHeight;
}, false);

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

window.onload = function() {
  const params = new URLSearchParams(window.location.search);
  document.getElementById('mensagem').value = params.get('text');
}

window.ready = function(){
  selectAvatar("../img/avatares/a.png");
}

setInterval(function () {
  const params = new URLSearchParams(window.location.search);
  params.set('text', document.getElementById('mensagem').value);
  window.location.search = params.toString();
  window.location.reload();
}, 7000);

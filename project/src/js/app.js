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


window.onload = function(){
  selectAvatar("../img/avatares/a.png");
}

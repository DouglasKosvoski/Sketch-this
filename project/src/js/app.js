function login() {
  document.location.href = "./main.php?acao=salas";
}

function mute() {
  //sound goes none
}

function popUp(){
  var ballon = document.getElementById('popup');
  if (ballon.style.display === 'none'){
    ballon.style.display = 'flex';
  }
  else
  ballon.style.display = 'none';
}

//expande o menu de avatares
function avatares(){
  var avatar = document.getElementById('avat');
  if (avatar.style.display === 'none'){
    avatar.style.display = 'block';
  }
  else
  avatar.style.display = 'none';
}

//muda o avatar
function selectAvatar(id) {
  var image = document.getElementById(id).src;
  document.getElementById('selectedAvatar').src = image;

  var hiddeninput = document.getElementById("avatar");
  hiddeninput.value = image.slice(-5, -4);

}

//rola para o fim da coversa quando o usuário clica no chat
function scrollBottom() {
  var objDiv = document.getElementById("hist");
  objDiv.scrollTop = objDiv.scrollHeight;
}

//Não se se essa função vai ser utilizada, mas deixei aqui por conveniência, se for usar, tem que alterar o nome, dá conflito com outra função
// function selectAvatar(){
//   var avatarImg = document.getElementById('avat');
// }

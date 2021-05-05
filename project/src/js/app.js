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

function avatares(){
  var avatar = document.getElementById('avat');
  if (avatar.style.display === 'none'){
    avatar.style.display = 'block';
  }
  else 
  avatar.style.display = 'none';
}

//rola para o fim da coversa quando o usuário clica no chat
function scrollBottom() {
  var objDiv = document.getElementById("hist");
  objDiv.scrollTop = objDiv.scrollHeight;
}

function selectAvatar(){
  var avatarImg = document.getElementById('avat');
}


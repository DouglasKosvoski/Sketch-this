function login() {
    document.location.href = "C:/Users/Pichau/Desktop/FrontEnd Projeto Integrador/src/salas.html";
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

//rola para o fim da coversa quando o usuário clica no chat
function scrollBottom() {
    var objDiv = document.getElementById("hist");
    objDiv.scrollTop = objDiv.scrollHeight;
}

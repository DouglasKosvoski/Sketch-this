<?php
$id = isset($_GET['id']) ? $_GET['id'] : "";
$sala = isset($_GET['sala']) ? $_GET['sala'] : "";

if (isset($_POST['usermsg'])) {
  if ($id == "None" || $id == "") {
    ?><script type="text/javascript">window.location.href = './main.php?acao=login';</script><?php
  }

  require_once './class/MensagemDAO.php';
  $txt = $_POST['usermsg'];
  $msgDAO = new MensagemDAO();
  $msgDAO->insereMensagem($id, $sala, $txt);
}

function show_popup($temp) {
  require_once "./class/Usuario.php";
  require_once "./class/UsuarioDAO.php";

  $userDAO = new UsuarioDAO();
  $user = $userDAO->userFromId($temp);
  ?>

  <div id="popUp" name=<?="popup".$temp?> style="display:none">
    <div class="popUp">
      <img id="avatar" src="../img/avatares/<?=$user[0]->getAvatar()?>.png">
      <div id="perfil-nome"><?=$user[0]->getNick()?></div>
      <div id="perfil-elogio">Elogiar</div>
      <div id="perfil-denuncia">Denunciar</div>
    </div>
  </div>
  <?php
}?>
<body>

  <header>
    <a href="./main.php?acao=salas&id=<?=$id?>"><img src="../img/Voltar.svg" id="voltar"></a>
    <?php include "./php/include/mute.php"; ?>
  </header>

  <div class="entrada">
    <form method="POST" action="./main.php?acao=chat&id=<?=$id?>&sala=<?=$sala?>">
      <input type="hidden" name="acao" value="chat">
      <input type="hidden" name="id" value="<?=$id?>">
      <input type="hidden" name="sala" value="<?=$sala?>">
      <input name="usermsg" type="text" placeholder="Escreva alguma coisa..." id="mensagem" autocomplete="off" onchange="updateQuery()" onkeypress="updateQuery()" autofocus/>
      <input type="submit" id="submitmsg"/>
    </form>
  </div>

  <div class="mensagens" id="hist">
    <?php
    require_once "./class/Mensagem.php";
    require_once "./class/MensagemDAO.php";
    $asd = new MensagemDAO();
    $mensagens = $asd->listar();

    foreach ($mensagens as $msg) { ?>
      <?php
      if ($msg->getIdSala() == $sala) {
        if ($msg->getIdUsuario() == $id) { ?>
          <div class="enviado">
            <div class="conversaEnv">
              <?php
              $arr2 = explode(" ", $msg->getDataEnvio());
              $date = explode("-", $arr2[0]);
              $time = explode(":", $arr2[1]);
              echo "Dia: ".$date[2]." - ".$time[0].":".$time[1]."h - Você <br>".$msg->getTexto()?>
            </div>
          </div>
        <?php }
        else { ?>
          <div class="recebido" onclick="popUp(<?=$msg->getIdUsuario()?>)">
            <div class="conversaRec">
              <?php
              $arr2 = explode(" ", $msg->getDataEnvio());
              $date = explode("-", $arr2[0]);
              $time = explode(":", $arr2[1]);
              echo "Dia: ".$date[2]." - ".$time[0].":".$time[1]."h - ".$msg->getNickUsuario()."<br>".$msg->getTexto()?>
            </div>
            <?php show_popup($msg->getIdUsuario()); ?>
          </div>
          <?php
        }
      }
    }?>
  </div>
</body>

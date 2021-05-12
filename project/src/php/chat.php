
<?php
$id = isset($_GET['id']) ? $_GET['id'] : "";
$sala = isset($_GET['sala']) ? $_GET['sala'] : "";
?>

<body>
  <header>
    <a href="./main.php?acao=salas&id=<?=$id?>"><img src="../img/Voltar.svg" id="voltar"></a>
    <?php include "./php/include/mute.php"; ?>
  </header>

  <div class="entrada">
    <form name="mensagem" action="">
      <input name="usermsg" placeholder="Escreva alguma coisa..." type="text" id="mensagem" autocomplete="off" onclick="scrollBottom()"/>
      <input name="submitmsg" type="submit" id="submitmsg" value="Enviar" />
      <!--Botão de enviar, para funcionar em mobile-->
    </form>
  </div>

  <div id="popup" onclick="popUp()">
    <div class="popUp">
      <img id="avatar" src="../img/avatar.png">
      <div id="perfil-nome">Douchebag</div>
      <div id="perfil-elogio">Elogiar</div>
      <div id="perfil-denuncia">Denunciar</div>
    </div>
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
              <?php echo $msg->getDataEnvio()." - Você <br>".$msg->getTexto()?>
            </div>
          </div>
        <?php }
        else { ?>
          <div class="recebido" onclick="popUp()">
            <div class="conversaRec">
              <?php echo $msg->getDataEnvio()." - ".$msg->getNickUsuario()."<br>".$msg->getTexto()?>
            </div>
          </div>
          <?php
        }
      }
    }
    ?>

  </div>
</body>

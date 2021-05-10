
<body>
  <header>
    <a href="./main.php?acao=salas"><img src="../img/Voltar.svg" id="voltar"></a>
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
      <div class="recebido" onclick="popUp()">
        <div class="conversaRec">
          <?= $msg->getId() ?>
          <?= $msg->getIdUsuario() ?>
          <?= $msg->getIdSala() ?>
          <?= $msg->getDataEnvio() ?>
          <?= $msg->getTexto() ?>
        </div>
      </div>

      <div class="enviado">
        <div class="conversaEnv">
          <?= $msg->getId() ?>
          <?= $msg->getIdUsuario() ?>
          <?= $msg->getIdSala() ?>
          <?= $msg->getDataEnvio() ?>
          <?= $msg->getTexto() ?>
        </div>
      </div>
    <?php } ?>


</div>
</body>

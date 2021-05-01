<?php include './php/include/header.php';?>

<body id="salas">
  <header>
    <a href="index.php"><img src="../img/Sair.svg" id="voltar"></a>
    <img src="../img/Mute.svg" onclick="mute()" class="mute">
  </header>

  <div class="wrapper">

    <div class="sala">
      <div class="tema">
        <a href="chat.php" id="exemploSala">Aleatório</a>
      </div>
      <div class="desc">
        Sala para jogar coversa fora.
      </div>
      <div class="online">
        <img src="../img/Disp.svg">
        &nbsp;&nbsp;&nbsp;online 4/5
      </div>
    </div>

    <div class="sala">
      <div class="tema">
        Segredos
      </div>
      <div class="desc">
        Quer desabafar e não tem ninguém para quem falar? agora tem.
      </div>
      <div class="online">
        <img src="../img/Disp.svg">
        &nbsp;&nbsp;&nbsp;online 3/5
      </div>
    </div>

    <div class="sala">
      <div class="tema">
        Conselhos
      </div>
      <div class="desc">
        Precisando de um conselho? as vezes um olhar estrangeiro para a situação
        pode ser bom.
      </div>

      <div class="online">
        <img src="../img/Disp.svg">
        &nbsp;&nbsp;&nbsp;online 2/5
      </div>
    </div>

    <div class="sala">
      <div class="tema">
        Pergunte algo
      </div>
      <div class="desc">
        Perguntas sem objetivo aparente.
      </div>
      <div class="online">
        <img src="../img/Disp.svg">
        &nbsp;&nbsp;&nbsp;online 3/5
      </div>
    </div>

    <div class="sala">
      <div class="tema">
        Ajuda
      </div>
      <div class="desc">
        Precisando de ajuda? talvez alguém aqui possa te ajudar.
      </div>
      <div class="online">
        <img src="../img/Disp.svg">
        &nbsp;&nbsp;&nbsp;online 3/5
      </div>
    </div>

  </div>
</body>

<?php include './php/include/footer.php'; ?>

<body id="salas">
  <header>
    <a href="./main.php?acao=index"><img src="../img/Sair.svg" id="voltar"></a>
    <img src="../img/Mute.svg" onclick="mute()" class="mute">
    <div class="cortina"></div>
  </header>


  <div class="wrapper">
    <?php
    require_once "./class/Sala.php";
    require_once "./class/SalaDAO.php";

    $salas = new SalaDAO();
    $lista = $salas->listar();
    ?>

    <?php
    foreach ($lista as $sala) { ?>
      <div class="sala">
        <div class="tema">
          <a href="./main.php?acao=chat" id="exemploSala"><?=$sala->getTema()?></a>
        </div>
        <div class="desc">
          <?=$sala->getDescricao()?>
        </div>
        <div class="online">
          <img src="../img/Disp.svg">
          &nbsp;&nbsp;&nbsp;online <?=$sala->getUsuariosOnline()?>/<?=$sala->getCapacidade()?>
        </div>
      </div>
    <?php } ?>
  </div>
</body>

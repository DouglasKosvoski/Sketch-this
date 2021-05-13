<?php $id = isset($_GET['id']) ? $_GET['id'] : "None";?>

<body id="salas">
  <header>
    <a href="./main.php?acao=index"><img src="../img/Sair.svg" id="voltar"></a>
    <?php include "./php/include/mute.php"; ?>
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
          <a href=<?="./main.php?acao=chat&sala=".$sala->getId()."&id=".$id?> id="exemploSala"><?=$sala->getTema()?></a>
        </div>
        <div class="desc">
          <?=$sala->getDescricao()?>
        </div>
        <div class="online">
          <img class="img-online" src="../img/Disp.svg">
          &nbsp;&nbsp;&nbsp;online <?=$sala->getUsuariosOnline()?>/<?=$sala->getCapacidade()?>
        </div>
      </div>
    <?php } ?>
  </div>
</body>

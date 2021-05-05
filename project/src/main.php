<?php include './php/include/header.php';?>

<main>
  <?php
  if(isset($_GET['acao'])){
    include "./php/{$_GET['acao']}.php";
  }
  else{
    include "./php/index.php";
  }
  ?>
</main>

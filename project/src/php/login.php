<?php
if (isset($_POST['email_field'])) {
  $mail = isset($_POST['email_field']) ? $_POST['email_field'] : "";
  $pswd = isset($_POST['password_field']) ? $_POST['password_field'] : "";
  require_once "./class/Usuario.php";
  require_once "./class/UsuarioDAO.php";
  $userDAO = new UsuarioDAO();
  $login_existe = $userDAO->login($mail, $pswd);
  if ($login_existe == false) {
    $tries = isset($_GET['tries']) ? $_GET['tries']+1 : 0;
    ?>
    <script type="text/javascript">window.location.href = './main.php?acao=login&tries=<?=$tries?>';</script>
    <?php
  }
  elseif ($login_existe = true) {
    $id = $userDAO->getIdFromEmail($mail);
    $id = $id[0]->getId();
    ?>
    <script type="text/javascript">window.location.href = './main.php?acao=salas&id=<?=$id?>';</script>
    <?php
  }
}
else { ?>
  <body name="telaLogin" class="telaLogin">
    <header>
      <a href="./main.php?acao=index"><img src="../img/Voltar.svg" id="voltarLogin"></a>
    </header>

    <div>
      <p id="titulo">Que bom lhe ver Novamente!</p>

      <?php
      if (isset($_GET['tries'])) {
        echo "<div id='login_invalido'>Email ou Senha incorretos</div>";
      }
      ?>

      <form method="POST" action="">
        <input type="email" name="email_field" size="37" maxlength="50" placeholder="E-mail" id="id_email" class="campo-email" autocomplete="off" required autofocus>
        <input type="password" name="password_field" size="37" maxlength="45" placeholder="Senha" id="password" class="campo-senha" required>
        <input type="submit" value="Login" class="entrar">
      </form>
    </div>
  </body>
<?php } ?>

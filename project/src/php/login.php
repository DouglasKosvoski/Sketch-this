<?php

if (isset($_POST['email_field'])) {
  $mail = isset($_POST['email_field']) ? $_POST['email_field'] : "";
  $pswd = isset($_POST['password_field']) ? $_POST['password_field'] : "";

  require_once "./class/Usuario.php";
  require_once "./class/UsuarioDAO.php";

  $userDAO = new UsuarioDAO();
  $login_existe = $userDAO->login($mail, $pswd);

  if ($login_existe == false) {
    header("Location:./main.php?acao=login");
  }
  elseif ($login_existe = true) {
    header("Location:./main.php?acao=salas");
  }
  else {
    header("Location:./main.php");
  }

} else { ?>
  <body name="telaLogin" class="telaLogin">
    <header>
      <a href="./main.php?acao=index"><img src="../img/Voltar.svg" id="voltarLogin"></a>
    </header>
    <div>
      <p>Que bom lhe ver novamente!</p>
      <form method="POST" action="">
        <input type="email" name="email_field" size="37" maxlength="50" placeholder="E-mail" id="id_email" class="campo-email" autocomplete="off" required>

        <input type="password" name="password_field" size="37" maxlength="45" placeholder="Senha" id="password" class="campo-senha" required>

        <input type="submit" value="Login" class="entrar">
      </header>
    </form>
  </div>
</body>
<?php } ?>

<?php
if (isset($_POST['nick_field'])) {
  $nick = isset($_POST['nick_field']) ? $_POST['nick_field'] : "";
  $mail = isset($_POST['email_field']) ? $_POST['email_field'] : "example@gmail.com";
  $pswd = isset($_POST['password_field']) ? $_POST['password_field'] : "";
  $senha = password_hash($pswd, PASSWORD_DEFAULT);

  require "./class/Usuario.php";
  require "./class/UsuarioDAO.php";

  $userDAO = new UsuarioDAO();
  $user = new Usuario();
  $user->setNick($nick);
  $user->setEmail($mail);
  $user->setSenha($senha);
  $userDAO->cadastrar($user);
  ?><meta http-equiv="refresh" content="0;url=./main.php?acao=salas&nick=<?=$user->getNick()?>"><?php
}
else { ?>
  <body class="telaLogin">
    <header>
      <a href="./main.php?acao=index"><img src="../img/Voltar.svg" id="voltarLogin"></a>
    </header>

    <div class="avatar" onclick="avatares()">
      <div class="img-avatar-wrapper" id="avat">
        <?php
        $dir = "../img/avatares/";
        $images = glob($dir."*.png");
        foreach($images as $image) {
          echo '<div><img src="'.$image.'" id="'.$image.'" style="margin:10%; max-width:80%;height:auto;" onclick="selectAvatar()"></div>';
        } ?>
      </div>
    </div>

    <form method="POST" action="">
      <input type="nick" name="nick_field" size="37" maxlength="50" placeholder="Nickname" id="id_nick" class="campo-nickname" autocomplete="off" required>
      <input type="email" name="email_field" size="37" maxlength="50" placeholder="E-mail" id="id_email" class="campo-email" autocomplete="off" required>
      <input type="password" name="password_field" size="37" maxlength="45" placeholder="Senha" id="password" class="campo-senha" required>
      <input type="submit" value="Cadastrar" class="entrar">
    </form>

  <div class="termos">*Ao cadastrar você concorda com os termos de uso</div>
<?php }?>
</body>

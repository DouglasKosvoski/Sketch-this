<?php include './php/include/header.php';?>

<body>
  <header>
    <a href="index.php"><img src="../img/Voltar.svg" id="voltar"></a>
  </header>
  <div>
    <p>Que bom lhe ver novamente!</p>
    <form>
      <input type="email" name="email_field" size="37" maxlength="50" placeholder="E-mail" id="id_email" class="campo-email" autocomplete="off" required>
      <input type="password" name="password_field" size="37" maxlength="45" placeholder="Senha" id="password" class="campo-senha" required>
      <input type="submit" value="Login" onclick="login()" class="entrar">
    </form>
    
  </div>
  <div>
    <img src="../img/Decoração.svg" id="dec3">
  </div>
</body>

<?php include './php/include/footer.php';?>


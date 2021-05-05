<body class="telaLogin">
  <header>
    <a href="./main.php?acao=index"><img src="../img/Voltar.svg" id="voltarLogin"></a>
  </header>
  <div>
    <div class="avatar" onclick="avatares()">
      <div class="img-avatar-wrapper" id="avat">
        <div><img id="img-avatar" src="..\img\avatares\Multiavatar-0cd252556ba6fd4b02.png" onclick="selectAvatar()"></div>
        <div><img id="img-avatar" src="..\img\avatares\Multiavatar-3bbf058328c6c9d6fc.png" onclick="selectAvatar()"></div>
        <div><img id="img-avatar" src="..\img\avatares\Multiavatar-3c3bb41fba2307b726.png" onclick="selectAvatar()"></div>
        <div><img id="img-avatar" src="..\img\avatares\Multiavatar-6980dfde77790611d8.png" onclick="selectAvatar()"></div>
        <div><img id="img-avatar" src="..\img\avatares\Multiavatar-0cd252556ba6fd4b02.png" onclick="selectAvatar()"></div>
        <div><img id="img-avatar" src="..\img\avatares\Multiavatar-16070911a0ea440e79.png" onclick="selectAvatar()"></div>
        <div><img id="img-avatar" src="..\img\avatares\Multiavatar-0cd252556ba6fd4b02.png" onclick="selectAvatar()"></div>
        <div><img id="img-avatar" src="..\img\avatares\Multiavatar-16070911a0ea440e79.png" onclick="selectAvatar()"></div>
        <div><img id="img-avatar" src="..\img\avatares\Multiavatar-fbb3f9d5e6be92b52c.png" onclick="selectAvatar()"></div>
        <div><img id="img-avatar" src="..\img\avatares\Multiavatar-0cd252556ba6fd4b02.png" onclick="selectAvatar()"></div>
        
      </div>
    </div>
    <form>
      <input type="nick" name="nick_field" size="37" maxlength="50" placeholder="Nickname" id="id_nick" class="campo-nickname" autocomplete="off" required>
      <input type="email" name="email_field" size="37" maxlength="50" placeholder="E-mail" id="id_email" class="campo-email" autocomplete="off" required>
      <input type="password" name="password_field" size="37" maxlength="45" placeholder="Senha" id="password" class="campo-senha" required>
      <input type="submit" value="Cadastrar" onclick="login()" class="entrar">
    </form>
    <div class="termos">*Ao cadastrar você concorda com os termos de uso</div>
  </div>
</body>
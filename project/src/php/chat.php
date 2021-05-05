<body>
  <header>
    <a href="./main.php?acao=salas"><img src="../img/Voltar.svg" id="voltar"></a>
    <img src="../img/Mute.svg" onclick="mute()" class="mute">
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
    <div class="recebido">
      Brother Marrom
      <div class="conversaRec">
        Today I'm here one more day, under the bloody look of the guardiam.
      </div>
    </div>
    
    <div class="enviado">
      <div class="conversaEnv">
        Faith in you brother, stay strong.
      </div>
    </div>
    
    <div class="recebido">
      Saint Lucas
      <div class="conversaRec">
        Someone knows how to open a can of pikcles?
      </div>
    </div>
    
    <div class="recebido">
      Saint Lucas
      <div class="conversaRec">
        pickles*
      </div>
    </div>
    
    <div class="enviado">
      <div class="conversaEnv">
        Put it under the hot water (only the lid).
      </div>
    </div>
    
    <div class="recebido">
      Saint Lucas
      <div class="conversaRec">
        It worked! Thank you so much kind friend :)
      </div>
    </div>
    
    <div class="enviado">
      <div class="conversaEnv">
        Nice!
      </div>
    </div>
    
    <div class="enviado">
      <div class="conversaEnv">
        Anyone knows how to properly align a block container in css without using margin or border to do so?
        been stuck in it for a time now.
      </div>
    </div>
    
    <div class="recebido" onclick="popUp()">
      Douchebag
      <div class="conversaRec">
        How come you couldn't search it on google? are you retarded?
      </div>
    </div>
  </div>
</body>
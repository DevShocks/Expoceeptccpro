<center>
  <div class="login-container">
    <div class="login-header">
      <div>Login</div>
    </div>
    <form action="" id="form">
    <input type="text" class="login-input" placeholder="Usuário" id="name">
    <input type="password" class="login-input" placeholder="Senha (Min-8, Max-15)" id="senha" maxlength="15" minlength="8">
    <button class="login-button" id="login-button" onclick="logar()">Login</button>
    <br><br>
    <p class="registrolink">
      Sem conta?
      <a href="?page=cadastro">Cadastrar</a>
    </p>
    <p class="registrolink">
      Entrar como
      <a href="?page=professorescadastro">professor</a>
    </p></form>
  </div>
  <script src="assets/js/logicalogin.js"></script>
</center>
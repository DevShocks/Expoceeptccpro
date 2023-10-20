<center>
    <div class="login-container">
        <div class="login-header">
            <div>Cadastro</div>
        </div>
        <input type="text" class="login-input" placeholder="E-mail" id="email">
        <input type="text" class="login-input" placeholder="Usuário" id="name">
        <input type="password" class="login-input" placeholder="Senha (Min-8, Max-15)" id="senha" maxlength="15" minlength="8">
        <input type="password" class="login-input" placeholder="Repetir Senha" id="senha" maxlength="15" minlength="8">
        <button class="login-button" id="login-button" onclick="logar()">
            <a href="?page=inicio" class="textolink">Cadastrar</a>
        </button> 
        <br><br>
        <script src="assets/js/logicalogin.js"></script>
    </div>
</center>
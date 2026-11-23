<?php include_once 'includes/header.php' ?>
<main class="conteudo=principal container-form">
    <section class="card-form card-form-pequeno">
        <div class="cabecalho-form">
            <h2>Entrar no Solidariza</h2>
            <p>Acesse sua conta para acompanhar ou registrar doações</p>
        </div>
        
        <form id="form-login" class="formulario" method="POST" action="actions/auth_login.php">
            <div class="grupo-input"> 
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" placeholder="seuemail@exemplo.com" autocomplete="email" required>
            </div>
            <div class="grupo-input">
                <label for="senha">Senha</label>
                <input type="senha" id="senha" name="senha" placeholder="Digite sua senha" autocomplete="current-password" required>
            </div>
            <button type="submit" class="btn-bloco btn-sustentavel">Entrar</button>
        </form>

        <div class="rodape-form">
            <p>Não tem uma conta? <a href="cadastro.php">Cadastre-se aqui</a></p>        
        </div>
    </section>
</main>

<?php include_once 'includes/footer.php' ?>
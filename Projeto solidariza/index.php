<?php include_once 'includes/header.php'?>

<main class="conteudo-principal">
    <section class="hero-section">
        <div class="hero-textos">
            <h2>A Solidariedade move o mundo, faça parte deste ciclo.</h2>
            <p>Conectando quem deseja ajudar com as campanhas de arrecadação quem mais precisam, Doe roupas, móveis, alimentos e tempo. </p>
            <div class="hero-botoes"> 
                <a href="cadastro.php" class="btn-sustentavel btn-grande">Quero doar</a>
                <a href="#campanhas" class="btn-secundario btn-grande">Ver campanhas</a>
            </div>
        </div>
        <div class= "hero-imagem">
            <img src="./assets/img/hero.jpeg" alt="Imagem de um projeto de voluntariado com pessoas ajudando">
        </div>
    </section>

    <section class="como-funciona">
        <h3>Como Funciona </h3>
        <div class="cards-passos">
            <div class="card">
                <h4>1. Cadastra-se</4>
                <p>Crie sua conta informando seu CEP. Nós organizamos a logistica para você. </p>
            </div>
            <div class="card">
                <h4>2. Escolha a causa</4>
                <p>Navegue pelas campanhas ativas e escolha onde sua doação fará diferença. </p>
            </div>
            <div class="card">
                <h4>3. Solidarize-se</4>
                <p>A ONG aprova seu item e planeja a coleta. Sustentabilidade e apoio social em um só lugar.</p>
            </div>
        </div>
    </section>

    <section class="campanhas"></section>

    <section id="campanhas" class="vitrine-campanhas">
        <div class="cabecalhos-secao">
            <h3>Campanhas Ativas</h3>
            <p>Escolha a causa e faça diferençao hoje mesmo</p>
        </div>

        <div class="grid-campanhas">
            <article class = 'card-campanha'>
                <span class = 'badge-status ativa'>Ativa</span>
                <h4>Campanha do agasalho</h4>
                <p class = 'descricao-campanha'>Arrecadação de roupas de inverno, cobertores e calçados em bom estado para famílias em situação de vulnerabilidade.</p>
                <div class = 'rodape-card'>
                    <a href="cadastro.php" class = 'btn-bloco btn-sustentavel'>Quero doar</a>
                </div>
            </article>
 
            <article class = 'card-campanha'>
                <span class = 'badge-status ativa'>Ativa</span>
                <h4>Cestabásica solidária</h4>
                <p class = 'descricao-campanha'>Doe alimentos não pericíveis e itens de higiene para montagem de cestas destinadas a comunidade local</p>
                <div class = 'rodape-card'>
                    <a href="cadastro.php" class = 'btn-bloco btn-sustentavel'>Quero doar</a>
                </div>
            </article>
 
            <article class = 'card-campanha'>
                <span class = 'badge-status ativa'>Ativa</span>
                <h4>Móveis que transformam</h4>
                <p class = 'descricao-campanha'>Doe móveis usados e eletrodomésticos em bom estado</p>
                <div class = 'rodape-card'>
                    <a href="cadastro.php" class = 'btn-bloco btn-sustentavel'>Quero doar</a>
                </div>
            </article>

        </div>
    </section>
        
        
</main>
<?php include_once 'includes/footer.php' ?>

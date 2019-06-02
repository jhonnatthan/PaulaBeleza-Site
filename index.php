<?php 
    $style = './assets/css/pages/home.css';
    @require_once('header.php'); 
?>
<main>
    <section class="carousel">
        <div class="navigation"></div>
        <div class="items"></div>
    </section>

    <section class="estetica container" id="top">
        <h1>O salão</h1>
        <div class="content">
            <div class="image">
                <img alt="Imagem do salão" src="./assets/img/quem-somos.jfif">
            </div>
            <div class="text">
                <p>Seja bem vinda a Paula Beleza</p>
                <p>O salão traz excelência e confiança reconhecida por seus clientes, além de um espaço confortável
                    e aconchegante pensado especialmente para melhor recepcioná-los, unindo o melhor de um salão de
                    beleza e um centro estético. </p>
                <p>Nossos clientes sempre estão em primeiro lugar, por isso, utilizamos apenas produtos de primeira
                    linha para garantir a satisfação e qualidade de nossos procedimentos. Conta com técnicas
                    atualizadas oferecendo uma lista completa de serviços de beleza, abrangendo o universo de
                    cabelos, manicure e pedicure, depilação entre outros serviços.</p>
                <a title="Página de Quem Somos" alt="link para a página quem somos" aria-label="Página de Quem Somoss" href="./quem-somos.html" class="btn">Saiba
                    mais</a>
            </div>
        </div>
    </section>

    <section class="frase" style="background-image: url('./assets/img/home-parallax.jfif')">
        <div class="container text">
            <p>"O sucesso nasce do querer, da determinação e persistência em se chegar a um objetivo. Mesmo não
                atingindo o alvo, quem busca e vence obstáculos, no mínimo fará coisas admiráveis."</p>
            <p class="author">José de Alencar</p>
        </div>
    </section>

    <section class="servicos container">
        <p>Serviços</p>
        <div class="items">
            <div class="item">
                <img src="./assets/img/cabelos-min.jpg" alt="Mulher fazendo o cabelo">
                <p>Cabelos.</p>
                <p>Hidratação, Botox, Cauterização, Corte (Masculino, Feminino e Infantil)</p>
            </div>
            <div class="item">
                <img src="./assets/img/pes-e-maos-min.jpg" alt="Mulher fazendo as unhas">
                <p>Pés e Mãos</p>
                <p>Manicure, Pedicure, Porcelana, Decorada, Alongamento em gel, Esmaltação em gel.</p>
            </div>
            <div class="item">
                <img src="./assets/img/depilacao-min.jpg" alt="Mulher fazendo depilação">
                <p>Depilação</p>
                <p>Cera, Fio, Eletrólise, Luz Pulsada.</p>
            </div>
        </div>
        <a title="Página de Serviços" alt="link para a página serviços" aria-label="Página de Serviços" href="./servicos.html" class="btn">Saiba mais</a>
    </section>
</main>
<?php 
    $script = './assets/js/pages/home.js';
    @require_once('footer.php');
?>
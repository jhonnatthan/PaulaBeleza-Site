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
        <h2>O salão</h2>
        <div class="content">
            <div class="image">
                <img alt="Imagem do salão" src="./assets/img/quem-somos.jfif">
            </div>
            <div class="text">
                <h3>Seja bem vinda a Paula Beleza</h3>
                <p>O salão traz excelência e confiança reconhecida por seus clientes, além de um espaço confortável
                    e aconchegante pensado especialmente para melhor recepcioná-los, unindo o melhor de um salão de
                    beleza e um centro estético. </p>
                <p>Nossos clientes sempre estão em primeiro lugar, por isso, utilizamos apenas produtos de primeira
                    linha para garantir a satisfação e qualidade de nossos procedimentos. Conta com técnicas
                    atualizadas oferecendo uma lista completa de serviços de beleza, abrangendo o universo de
                    cabelos, manicure e pedicure, depilação entre outros serviços.</p>
                <a title="Página de Quem Somos" aria-label="Página de Quem Somoss" href="./quem-somos.html" class="btn">Saiba
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
        <h2>Serviços</h2>
        <div class="items">
            <div class="item">
                <img src="./assets/img/cabelos-min.jpg" alt="Mulher fazendo o cabelo">
                <h3>Cabelos.</h3>
                <p>Hidratação, Botox, Cauterização, Corte (Masculino, Feminino e Infantil)</p>
            </div>
            <div class="item">
                <img src="./assets/img/pes-e-maos-min.jpg" alt="Mulher fazendo as unhas">
                <h3>Pés e Mãos</h3>
                <p>Manicure, Pedicure, Porcelana, Decorada, Alongamento em gel, Esmaltação em gel.</p>
            </div>
            <div class="item">
                <img src="./assets/img/depilacao-min.jpg" alt="Mulher fazendo depilação">
                <h3>Depilação</h3>
                <p>Cera, Fio, Eletrólise, Luz Pulsada.</p>
            </div>
        </div>
        <a title="Página de Serviços" aria-label="Página de Serviços" href="./servicos.html" class="btn">Saiba mais</a>
    </section>
</main>
<?php 
    $script = './assets/js/pages/home.js';
    @require_once('footer.php');
?>
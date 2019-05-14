<?php 
    $style = './assets/css/pages/servicos.css';
    @require_once('header.php'); 
?>
<main>
    <section class="breadcrumb" data-background="./assets/img/servicos-banner.jfif"></section>
    <section class="servicos container" id="top">
        <div class="servico">
            <img src="./assets/img/cabelos-min.jpg" alt="Mulher fazendo o cabelo">
            <h3>Cabelos.</h3>
            <p>Hidratação, Botox, Cauterização, Corte (Masculino, Feminino e Infantil)</p>
        </div>

        <div class="servico">
            <img src="./assets/img/pes-e-maos-min.jpg" alt="Mulher fazendo as unhas">
            <h3>Pés e Mãos</h3>
            <p>Manicure, Pedicure, Porcelana, Decorada, Alongamento em gel, Esmaltação em gel.</p>
        </div>

        <div class="servico">
            <img src="./assets/img/depilacao-min.jpg" alt="Mulher fazendo depilação">
            <h3>Depilação</h3>
            <p>Cera, Fio, Eletrólise, Luz Pulsada.</p>
        </div>
    </section>
</main>
<?php 
    $script = './assets/js/pages/servicos.js';
    @require_once('footer.php');
?>
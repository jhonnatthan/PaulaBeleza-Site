<?php 
    $style = './assets/css/pages/portfolio.css';
    @require_once('header.php'); 
?>
<main>
    <section class="breadcrumb" data-background="./assets/img/portfolio-banner.jfif"></section>
    
    <h1>Serviços prestados</h1>
    
    <section class="portfolio container" id="top">
        
        <div class="portfolio-item">
            <img alt="Mulher cortando o cabelo" class="portfolio-image" src="./assets/img/jessica-min.png">
            <p class="portfolio-title">Jéssica</p>
        </div>
        <div class="portfolio-item">
            <img alt="Unhas feitas" class="portfolio-image" src="./assets/img/roseli-min.jpg">
            <p class="portfolio-title">Roseli</p>
        </div>
        <div class="portfolio-item">
            <img alt="Perna depilada" class="portfolio-image" src="./assets/img/maria-min.jpg">
            <p class="portfolio-title">Maria</p>
        </div>
    </section>

</main>

<?php 
    $script = './assets/js/pages/portfolio.js';
    @require_once('footer.php');
?>
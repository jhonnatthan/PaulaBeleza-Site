<?php 
    $style = './assets/css/pages/portfolio.css';
    @require_once('header.php'); 
?>
<main>
    <section class="breadcrumb" data-background="./assets/img/portfolio-banner.jfif"></section>
    <section class="portfolio container" id="top">
        <div class="portfolio-item">
            <img alt="Mulher cortando o cabelo" class="portfolio-image" src="./assets/img/jessica-min.png">
            <h3 class="portfolio-title">Jéssica</h3>
        </div>
        <div class="portfolio-item">
            <img alt="Unhas feitas" class="portfolio-image" src="./assets/img/roseli-min.jpg">
            <h3 class="portfolio-title">Roseli</h3>
        </div>
        <div class="portfolio-item">
            <img alt="Perna depilada" class="portfolio-image" src="./assets/img/maria-min.jpg">
            <h3 class="portfolio-title">Maria</h3>
        </div>
    </section>
</main>
<?php 
    $script = './assets/js/pages/portfolio.js';
    @require_once('footer.php');
?>
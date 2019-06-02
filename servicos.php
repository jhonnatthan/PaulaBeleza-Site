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

    <table class="container" summary="Tabela com os serviços prestados pelo estabelecimento junto de seus preços" boder="1">
        <caption><h3>Serviços e Preços</h3></caption>
            <thead>
                <th>Hidratação Corte e Escova</th>
                <th>Pés</th>
                <th>Mãos</th>
                <th>Depilação Básica (Pernas e Axila)</th>
            </thead>
            <tbody>
                <tr>
                    <td>Preço R$: 125,00</td>
                    <td>Preço R$: 25,00</td>
                    <td>Preço R$: 25,00</td>
                    <td>Preço R$: 45,00</td>
                </tr>
                <tr>
                    <td>Duração: 3 horas </td>
                    <td>Duração: 1 hora </td>
                    <td>Duração: 1 hora </td>
                    <td>Duração: 45 minutos</td>
                </tr>
            </tbody>
            <tfoot>
            <tr>
                <th colspan="6">Serviços e Preços</th>
            </tr>
            </tfoot>

    </table>
</main>
<?php 
    $script = './assets/js/pages/servicos.js';
    @require_once('footer.php');
?>
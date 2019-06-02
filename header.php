<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Paula Beleza - Contato</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?= $style; ?>">
    <link rel="stylesheet" href="./assets/css/pages/acessibilidade.css">
</head>

<body>
    <div class="barra-auxiliar">
        <ul>
            <li><a href="#top"           alt="Link para o conteúdo principal" accesskey="1">Ir para o Conteúdo Principal [Alt + 1]</a></li>
            <li><a href="#menu"          alt="Link para o inicio do menu"     accesskey="2">Início do Menu [Alt + 2]</a></li>
            <li><a href="#altocontraste" alt="Link para ativar alto contraste" id="altocontraste" accesskey="3" onclick="window.toggleContrast()" onkeydown="window.toggleContrast()">Alto contraste [Alt + 3]</a></li>
        </ul>
    </div>
    <header>
        <a title="Página Inicial" aria-label="Página Inicial" class="logo-link" href="index.php">
            <img alt="Logo Paula Beleza" class="logo" src="./assets/img/logo-min.png">
        </a>
        <a title="Abrir menu" aria-label="Abrir menu" href="#" class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </a>
        <nav id="menu">
            <ul class="main-navbar">
                <li><a title="Página Inicial"       alt="Link para a página inicial"     aria-label="Página Inicial" href="index.php">Home</a></li>
                <li><a title="Página de Serviços"   alt="Link para a página de serviços" aria-label="Página de Serviços" href="servicos.php">Serviços</a></li>
                <li><a title="Página de Portfólio"  alt="Link para a página de portfólio" aria-label="Página de Portfólio" href="portfolio.php">Portfólio</a></li>
                <li><a title="Página de Quem Somos" alt="Link para a página de quem somos" aria-label="Página de Quem Somos" href="quem-somos.php">Quem somos</a></li>
                <li><a title="Página de Contato"    alt="Link para a página de contato" aria-label="Página de Contato" href="contato.php">Contato</a></li>
            </ul>
        </nav>
    </header>
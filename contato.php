<?php 
    $style = './assets/css/pages/contato.css';
    @require_once('header.php'); 
?>
<main>
    <section class="breadcrumb" data-background="./assets/img/contato-banner.jfif"></section>
    <section class="contato container">
        <div class="formulario">
       
            <h1> Formulário para contato </h1>
       
            <form id="frmContato" method="POST" name="frmContato" action="./sistema/enviar.php">
                    
                <div class="formGroup nome">
                    <label for="frmNome">Nome</label>
                    <input type="text" name="nome" id="frmNome" placeholder="Nome" required>
                </div>

                <div class="formGroup email">
                    <label for="frmEmail">E-mail</label>
                    <input type="email" name="email" id="frmEmail" placeholder="E-mail" required>
                </div>
                
                <div class="formGroup assunto">
                    <label for="frmAssunto">Assunto</label>
                    <input type="text" name="assunto" id="frmAssunto" placeholder="Assunto" required>
                </div>
                
                <div class="formGroup mensagem">
                    <label for="frmMensagem">Mensagem</label>
                    <textarea rows="7" name="mensagem" id="frmMensagem" placeholder="Mensagem" required></textarea>
                </div>
                
                <input type="submit" class="btn" name="frmSubmit" value="Enviar" id="frmEnviar">
            
            </form>
        </div>

        <div class="infos" id="top">

            <div class="info">
                <p>Contato</p>
                <p><a title="Link para envio de email" alt="link para enviar e-mail" aria-label="Link para envio de email" href="mailto:contato@paulabeleza.com.br">contato@paulabeleza.com.br</a></p>
            </div>
            <div class="info">
                <p>Celular</p>
                <p><a title="Link para ligação" alt="link ligar para o salão" aria-label="Link para ligação" href="tel:+5513991851854">+55 13
                        99185-1854</a></p>
            </div>
            <div class="info">
                <p>Whataspp</p>
                <p><a title="Link para o WhatsApp" alt="Link enviar mensagem via whatssap" aria-label="Link para o WhatsApp" target="_blank" rel="noopener"
                        href="https://wa.me/5513991851854">+55 13 99185-1854</a></p>
            </div>
            <div class="info">
                <p>Endereço</p>
                <p>Rua São Jorge, 591 - Vila Voturuá</p>
            </div>
            <div class="info">
                <p>Funcionamento</p>
                <p>Seg à Sex - 18 às 22h</p>
            </div>
        </div>
    </section>
</main>
<?php 
    $script = './assets/js/pages/contato.js';
    @require_once('footer.php');
?>
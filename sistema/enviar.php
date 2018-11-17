<?php
    ini_set('display_errors', 0);
    error_reporting(E_ALL);

    require_once('PHPMailer/PHPMailerAutoload.php');

    $message = "Informações de contato: <br><br><b>Nome:</b>%nome<br><b>Email:</b>%email<br><b>Assunto</b>%assunto<br><b>Mensagem:</b>%mensagem<br>";
    $search = array('%nome', '%email', '%assunto', '%mensagem');
    $replace = array($_POST['nome'], $_POST['email'], $_POST['assunto'], $_POST['mensagem']);
    $message = str_replace($search, $replace, $message);

    $mail = new PHPMailer(true);

    try {
        $mail->setFrom('', '');
        $mail->addAddress('', '');
        $mail->addReplyTo($_POST['email'], $_POST['name']);
        $mail->CharSet = 'UTF-8';
        $mail->isHTML(true);
        $mail->Subject = 'Envio de formulário';
        $mail->Body = $message;

        $mail->send();
        echo json_encode(
            array(
                "enviado" => true
            )
        );
    } catch (Exception $e) {
        echo json_encode(
            array(
                "enviado" => false, 
                "error" => $mail->ErrorInfo
            )
        );
    }

    echo json_encode($_POST);

?>
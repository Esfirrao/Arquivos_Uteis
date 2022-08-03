<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require "./vendor/phpmailer/phpmailer/src/PHPMailer.php";
require "./vendor/phpmailer/phpmailer/src/SMTP.php";
require "./vendor/autoload.php";

$mail = new PHPMailer();
$mail->isSMTP();
$mail->Host = "Seu_dominio";
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls"; //criptografia do host
$mail->Username = "exemplo@dominio.com";
$mail->Password = "123";
$mail->Port = 587; //Alterar conforme a criptografia do host

$mail->setFrom("2211600147@fema.edu.br");
$mail->addAddress("$_POST[Email]");

$mail->isHTML(true);
$mail->Subject = "Assunto";
$mail->Body = nl2br("Mensagem");

if (!$mail->send()) { //Teste de envio
    echo "<br> ERRO: " . $mail->ErrorInfo;
} else {
    echo "Enviado.";
}
?>
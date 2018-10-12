<!-- Faça um script PHP que receba os dados armazenados em variáveis chamadas nome, telefone e e-mail. Após isso, deve ser impresso na tela os valores das variáveis declaradas em um único comando echo; -->

<?php

$nome = $_POST['nome'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];


echo 'Nome: ' . $nome . ' Telefone: ' . $telefone . ' Email: ' . $email;


 ?>

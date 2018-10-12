<!-- Escreva um programa que leia do usuário o ano de seu nascimento e o ano atual, em seguida exiba a sua idade; -->

<?php

$anodenascimento = $_POST['anodenascimento'];
$anoatual = $_POST['anoatual'];
$idade = ($anoatual - $anodenascimento);


echo 'A sua idade é: ' . $idade . ' anos';


 ?>

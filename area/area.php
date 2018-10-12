<!-- Escreva um programa que leia do usuário o valor da base e da altura de um triângulo, em seguida exiba o valor da área deste; -->

<?php

$base = $_POST['base'];
$altura = $_POST['altura'];
$area = ($base * $altura) / 2;


echo 'A área do triângulo é: ' . $area;


 ?>

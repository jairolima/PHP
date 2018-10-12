<?php

$salario = $_POST['salario'];
$valortotal = $_POST['valortotal'];

$comissao = ($valortotal * 4) / 100;
$salariofinal = ($comissao + $salario);

echo "Salario é $salario, Valor de vendas $valortotal + 4% ficando com $comissao + salario = $salariofinal";

?>

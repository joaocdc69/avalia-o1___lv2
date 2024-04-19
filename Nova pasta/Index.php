<?php
require'Empregado.php';

$empregado1 = new Empregado("João", "Silva", 3000);
$empregado2 = new Empregado("Maria", "Santos", 4000);
$empregado3 = new Empregado("pedro", "martins", 9000);

echo "Salário anual de " . $empregado1->getNome() . ": $" . $empregado1->getSalarioAnual() . "<br>";
echo "Salário anual de " . $empregado2->getNome() . ": $" . $empregado2->getSalarioAnual() . "<br>";
echo "Salário anual de " . $empregado3->getNome() . ": $" . $empregado3->getSalarioAnual() . "<br><br>";

$empregado1->aplicarAumento(10);
$empregado2->aplicarAumento(10);
$empregado3->aplicarAumento(10);

echo "Salário anual após aumento de 10% de " . $empregado1->getNome() . ": $" . $empregado1->getSalarioAnual() . "<br>";
echo "Salário anual após aumento de 10% de " . $empregado2->getNome() . ": $" . $empregado2->getSalarioAnual() . "<br>";
echo "Salário anual após aumento de 10% de " . $empregado3->getNome() . ": $" . $empregado3->getSalarioAnual() . "<br><br>";
?>
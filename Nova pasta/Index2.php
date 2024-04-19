<?php
require'Fatura.php';

$fatura = new Fatura("001", "Teclado", 2, 25.5);
echo "Número da Fatura: " . $fatura->getNumero() . "<br>";
echo "Descrição: " . $fatura->getDescricao() . "<br>";
echo "Quantidade: " . $fatura->getQuantidade() . "<br>";
echo "Preço por Item: $" . $fatura->getPrecoPorItem() . "<br>";
echo "Total da Fatura: $" . $fatura->getTotalFatura() . "<br>";
echo "<br>";
?>

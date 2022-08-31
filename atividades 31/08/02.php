<?php
echo "Digite o comprimento ";
$comprimento = fgets(STDIN);

echo "Digite a largura ";
$largura = fgets(STDIN);

echo "Digite a altura ";
$altura = fgets(STDIN);

$volume = $comprimento * $altura * $largura;

echo "O volume é $volume";

?>
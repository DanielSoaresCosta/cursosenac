<?php
echo "Digite o valor de A ";
$a = fgets(STDIN);

echo "Digite o valor de B ";
$b = fgets(STDIN);

echo "Digite o valor de C ";
$c = fgets(STDIN);

$soma = $a + $b;

if ($soma < $c) {
    echo " A soma de A e B é MENOR do que C";
}
elseif ($soma > $c) {
    echo " A soma de A e B é MAIOR do que C";
}
else echo "A soma de A e B é IGUAL a C";

?>
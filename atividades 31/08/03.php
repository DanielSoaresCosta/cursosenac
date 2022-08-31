<?php
echo "Horas trabalhadas no mês ";
$ht = fgets(STDIN);

echo "Valor da hora trabalhada ";
$vt = fgets(STDIN);

echo "Percentual de desconto ";
$pd = fgets(STDIN);

$sb = $ht * $vt;

$td = ($pd/100)*$sb;

$sl = $sb - $td;



echo "$ht horas trabalhadas" . PHP_EOL;
echo "$sb salário bruto" . PHP_EOL;
echo "$td desconto". PHP_EOL;
echo "$sl salário liquido". PHP_EOL;

?>
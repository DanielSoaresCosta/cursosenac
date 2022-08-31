<?php
echo "Digite um número ";
$num1 = fgets(STDIN);
$res = $num1 %2;

if ($res == 0){
    echo "O número $res é PAR";
}
else echo "O número $res é ÍMPAR"


?>
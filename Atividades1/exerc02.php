<?php
/*
2.	: Crie um documento com o nome “exerc02.php”, com um escopo de PHP que execute as seguintes operações:
Crie duas variáveis com números inteiros, e mostre na tela as seguintes mensagens executando as operações aritméticas:
-	A média dos valores (n1) e (n2) é : (resultado)
-	O número (n1) elevado a (n2) é : (resultado)
-	O resto da divisão de (n1) por (n2) é: (resultado)

*/

$numero1 = 2;
$numero2 = 3;

echo "A média dos valores $numero1 e $numero2 é :" . ($numero1 + $numero2) / 2;
echo "<hr>";
echo "O número $numero1 elevado a $numero2 é : " . $numero1**$numero2;
echo "<hr>";
echo "O número $numero1 elevado a $numero2 é : " . pow($numero1,$numero2);
echo "<hr>";
echo "O resto da divisão de $numero1 por $numero2 é:" . $numero1 % $numero2;

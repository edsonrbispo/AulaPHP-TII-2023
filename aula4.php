<?php 

//Exemplo de switch...case
//Imprima na tela o nome do Mês referente ao número.

$mes = 2;

switch ($mes) {
  case 1:
    echo "Janeiro";
    break;
  case 2:
    echo "Fevereiro";
    break;
  case 3:
    echo "Março";
    break;
  default:
    echo "O número do mês é inválido";
}

echo "<hr>";
switch ($mes) {
  case ($mes <= 3):
    echo "Estamos no 1º trimestre no ano";
    echo "Ano atual 2024";
    break;
  case ($mes <= 6):
    echo "Estamos no 2º trimestre no ano<br>";
    echo "Ano atual 2024";
    break;
  case($mes <= 9):
    echo "Estamos no 3º trimestre no ano";
    echo "Ano atual 2024";
    break;
  case($mes <= 12):
    echo "Estamos no 4º trimestre no ano";
    echo "Ano atual 2024";
    break;
  default:
    echo "O número do mês é inválido";
}
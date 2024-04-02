<?php

echo "<h1>Trabalhando com Funções</h1>";

function somar($num1, $num2){

  return $num1 + $num2;

}

echo somar(2, 4);
echo "<br>";
echo somar(10, 20);

echo "<hr>";
echo "<h2>Verificação de Números Par ou Ímpar</h2>";

function is_par($numero){
  return $numero % 2 == 0;
}

if(is_par(11)){
  echo "É par";
}else{
  echo "É ímpar";
}

echo "<hr>";
echo "<h2>Verificação de Maioridade</h2>";

function verificar_maioridade($idade){
    if($idade >= 18){
      return "É maior de idade";
    }
    return "É menor de idade";
    
}

echo verificar_maioridade(20);

echo "<hr>";
echo "<h2>Construa uma função, chamada soma_tres(), que retorne a soma de três números.
</h2>";



echo "<hr>";
echo "<h2>Construa uma função, chamada media(), que retorne a média de 4 notas.
</h2>";


echo "<hr>";
echo "<h2>Construa uma função, chamada media_array(), que retorne a média dos valores do array.
</h2>";

//count
$notas = [10, 8, 9, 5.5, 8, 10];

function media_array($listaNotas){
    $totalNotas = 0;
    foreach($listaNotas as $nota){
        $totalNotas += $nota;
    }
     return $totalNotas / count($listaNotas);
}

echo "A média é: ". media_array($notas);

echo "<hr>";
echo "<h2>Construa uma função, chamada menor_nota(), que retorne a nota menor do array.
</h2>";



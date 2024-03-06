<?php

//Aprendendo Array no PHP
echo "<h1>Utilizando Array</h1>";

## Array Unidimensional
$listaCompras = ['Arroz','Feijão','Banana','Maçã'];


print_r($listaCompras);
echo '<hr>';

var_dump($listaCompras);
echo '<hr>';

echo '<pre>';
print_r($listaCompras);
echo '</pre>';


echo '<hr>';
echo $listaCompras[2];

echo '<hr>';

## Array Associativo
echo '<h2>Array Associativo</h2>';

$listaCompras = [
  12 => 'Arroz',
  26 => 'Feijão',
  22 => 'Banana',
  36 => 'Maçã',
];

var_dump($listaCompras);

echo '<br>';

echo $listaCompras[26];


## Array Multidimensional
echo '<h2>Array Multidimensional</h2>';

$listaCompras = [
  'Alimentos' => [
    'Arroz', 
    'feijão'
  ],
  'Frutas' => [
    'Abacaxi',
    'Banana',
    'Tomate'
    
  ],
  'Massas' => [
    'Macarrão',
    'Lasanha'
  ]
];

echo '<pre>';
print_r($listaCompras);
echo '</pre>';

echo $listaCompras['Frutas'][2];

$listaCompras['Frutas'][] = 'Pera';

echo '<pre>';
print_r($listaCompras);
echo '</pre>';

##Excluir item do Array
$listaCompras['Frutas'][1];

echo '<pre>';
print_r($listaCompras);
echo '</pre>';

echo '<hr>';
##Imprimindo todos os dados da lista de compras

$listaCompras = [
  12 => 'Arroz',
  26 => 'Feijão',
  22 => 'Banana',
  36 => 'Maçã',
];

##Imprimir o Valor
foreach($listaCompras as $item){
    echo $item .'<br>';
}

echo '<hr>';

##Imprimir o Indice e o Valor
foreach ($listaCompras as $chave => $item) {
  echo "<strong>Informações do Produto</strong><br>";
  echo "Chave do indice é: $chave <br>";
  echo "O valor é: $item <br>";
  echo "<hr>";

}

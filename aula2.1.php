<?php

$nome = "Edson";
$sobrenome = "Rodrigues";
$idade = 41;
$anoNascimento = 1983;
$anoAtual = 2024;

echo $nome;
echo "<hr>";
echo $sobrenome;
echo "<hr>";
echo "Meu nome é: $nome $sobrenome";
echo "<hr>";
echo 'Meu nome é: $nome $sobrenome';
echo "<hr>";
echo 'Meu nome é: ' . $nome.' '. $sobrenome;
echo "<hr>";
echo "A caixa d'agua está vazia";
echo "<hr>";
echo 'A caixa d\'agua está vazia';
echo "<hr>";
echo "A caixa d'agua está \"vazia\"";
echo "<hr>";

// ============================ //
// Operadores aritméticos
// Soma +
// Subtração -
// Multiplicação *
// Divisão /
// --- Resto da Divisão %
// ============================ //

echo "Minha idade é: ". $anoAtual - $anoNascimento;
echo "<hr>";

$idade = $anoAtual - $anoNascimento;
echo "Minha idade é: $idade";







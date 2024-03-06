<?php
/*
Crie um arquivo com o nome: exerc06.cond.php e desenvolva um algoritmo que verifique a regra para doar sangue, necessário ter entre 18 e 67 anos. Faça um algoritmo com uma variável idade de uma pessoa e escreva na tela:
a.Pode doar sangue
b.Não pode doar sangue
*/

$idade = 10;

if($idade >= 18 && $idade <=67){
  echo "Pode doar sangue";
} else {
  echo "Não pode doar sangue";
}

//Em if ternário
echo ($idade >= 18 && $idade <=67)?"Pode doar sangue":"Não pode doar sangue";







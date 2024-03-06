<?php
/*
4.	Crie um arquivo com o nome: exerc04.cond.php e desenvolva um programa com duas notas parciais de um aluno. O programa deve calcular a média alcançada por aluno e apresentar:
1.	A mensagem "Aprovado", se a média alcançada for maior ou igual a sete;
2.	A mensagem "Reprovado", se a média for menor do que sete;
3.	A mensagem "Aprovado com Distinção", se a média for igual a dez.

*/

$nota1 = 8;
$nota2 = 5;

$media = ($nota1 + $nota2) / 2;

if($media == 10){
  echo "Aprovado com Distinção";
}else if($media >= 7){
  echo "Aprovado";
}else{
  echo "reprovado";
}



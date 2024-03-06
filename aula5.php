<?php

echo "================" . PHP_EOL;
echo "Gerador de Senha" . PHP_EOL;
echo "================" . PHP_EOL;

$ultimaSenha = readline("Digite o número da última Senha: ");

$senha = 1;

while($senha <= $ultimaSenha){

  echo $senha.PHP_EOL;

  $senha++;

}



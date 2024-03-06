<?php

echo "<h1>Trabalhando com Estrutura Condicional</h1>";

$nome = "Edson Rodrigues";
$idade = 18;
$email = "edson@teste.com";
$senha = "12345678";
$perfil = "Estudante";
$permissao = true;

////////////////////////////////////////////
echo "<h2>Exemplo de IF (se...) </h2>";

if($idade >= 18){
  echo "O usuário $nome é maior de idade";
}

echo "<hr>";

echo "<h2>Exemplo de if e else (se...então...senão...)</h2>";

if ($email == "edson@teste.com" && $senha == "12345678") {
  echo "Usuário Logado";
}else{
  echo "Usuário ou Senha Inválido";
}

echo "<hr>";

if ($perfil == "Estudante" || $perfil == "Professor") {
  echo "Paga meia entrada";
} else {
  echo "Paga o valor cheio";
}

echo "<hr>";
/////////////////////////////////////////

$nota1 = 8;
$nota2 = 9;

if($nota1 >= 0 && $nota1 <= 10) {
     if($nota2 >= 0 && $nota2 <= 10){

        $media = ($nota1 + $nota2) / 2;

        if($media >= 7){
          echo "Aprovado!";
        }else{
          echo "Reprovado!";
        }

     }else{
      echo "Nota 2 inválida.";
     }
}else{
  echo "Nota 1 inválida.";
}





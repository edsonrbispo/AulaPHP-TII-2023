<?php
/*
Crie um arquivo com o nome: exerc07.cond.php, Faça um algoritmo que leia três números e mostre-os em ordem decrescente. Ex.
-4
-10
-8
Mostrar: 10,8,4
*/

$nun1 = 4;
$nun2 = 10;
$nun3 = 8;


if($nun1 >= $nun2 && $nun1 >= $nun3){
    if($nun2 >= $nun3){
        echo "Ordem: $nun1, $nun2, $nun3";
    }else{
        echo "Ordem: $nun1, $nun3, $nun2";
    }
}else if($nun2 >= $nun1 && $nun2>= $nun3){
    if($nun1>= $nun3){
        echo "Ordem: $nun2, $nun1, $nun3";
    }else{
        echo "Ordem: $nun2, $nun3, $nun1";
    }
}else{
    if($nun1 >= $nun2){
        echo "Ordem: $nun3, $nun1, $nun2";
    } else {
        echo "Ordem: $nun3, $nun2, $nun1";
    }
}


echo "<hr>";
//Utilizando o If Ternário
if ($nun1 >= $nun2 && $nun1 >= $nun3) {
    echo "Ordem: $nun1, " . ($nun2 >= $nun3 ? "$nun2, $nun3":"$nun3, $nun2");

} else if ($nun2 >= $nun1 && $nun2 >= $nun3) {

    echo "Ordem: $nun2, " . ($nun1 >= $nun3 ? "$nun1, $nun3" : "$nun3, $nun1");

} else {
    echo "Ordem: $nun3," . ($nun1 >= $nun2 ? "$nun1, $nun2" : "$nun2, $nun1");
}

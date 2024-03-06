<?php
/*
Digite a tabuada: 8
8 x 0 = 0
8 x 1 = 8
8 x 2 = 16
...
8 x 10 = 80
*/

$tabuada = readline("Digite a tabuada: ");

$multiplicador = 0;

while ($multiplicador <= 10) {


  echo "$tabuada x $multiplicador = ". $tabuada * $multiplicador."\n";

  $multiplicador++;
}

<?php

//Imprima os números de 0 a 10;

$contador = 0;
while($contador <= 10){
  echo $contador."\n";
  $contador++;
}

echo "---------Com for() ------------\n";

for($contador = 0; $contador <= 10; $contador++){
  echo $contador . "\n";
}

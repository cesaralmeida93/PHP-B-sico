<?php

$idade = 15;
$mensagem = $idade < 18 ? "Você é menor de idade\n" : "Você é maior de idade\n";
echo $mensagem;

// $contador = 1;

// while ($contador <= 15) {
//   echo "#$contador\n" . PHP_EOL;
//   $contador = $contador + 1;
// }

// for ($contador = 1; $contador <= 15; $contador ++) {
//   echo "#$contador\n";
// }

for ($contador = 1; $contador <= 15; $contador ++) {
  if ($contador == 13) {
      continue;
  } 
  echo "#$contador" . PHP_EOL;
}

// for ($contador = 1; $contador <= 15; $contador ++) {
//   if ($contador == 13) {
//       break;
//   } 
//   echo "#$contador" . PHP_EOL;
// }
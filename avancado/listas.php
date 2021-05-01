<?php

$idadesList = [21, 23, 19, 25, 30, 41, 18];
echo $idadesList[count($idadesList)-1].PHP_EOL;

list($idadeVininicus, , $idadeMaria) = $idadesList;
unset($idadesList[4]);

foreach ($idadesList as $idade) {
  echo $idade.PHP_EOL;
}
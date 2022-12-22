<?php

$idadeEu = 21;
$idadeCrianca = 12;
$idadeMaior = 18;
$idadeIdoso = 65;

if ($idadeEu < $idadeCrianca) {
    echo "Criança";
} else if ($idadeEu < $idadeMaior) {
    echo "Adolescente";
} else if ($idadeEu < $idadeIdoso) {
    echo "Adulto";
} else {
    echo "Idoso";
}

echo "<br>";

echo ($idadeEu < $idadeMaior)?"Menor de idade":"Maior de idade";
          
?>

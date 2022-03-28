<?php

$array = [6, 30, 88, 79, 90, 35, 75, 84, 77, 32, 2, 90, 84, 90, 92, 34, 76, 4, 78, 73, 41];
$arrayPar = [];
$arrayImpar = [];

$contador = 0;
while ($contador < 21){
    $numeroArray = $array[$contador];
    if ($numeroArray % 2 == 0) {
        array_push($arrayPar, $numeroArray);
        $contador++;
    }else if ($numeroArray % 2 != 0){
        array_push($arrayImpar, $numeroArray);
        $contador++;
    }    
};

$contador = 0;
$valor1 = 0;
$valor2 = null;

while($contador <= count($arrayPar)) {
    if($arrayPar[$contador] > $valor1){
        $valor1 = $arrayPar[$contador];
    }else{
        if($arrayPar[$contador] > $valor2) {
            $valor2 = $arrayPar[$contador];
        }
    }
    $contador++;
};

$contador = 0;
$valorI1 = 0;
$valorI2 = null;

while($contador <= count($arrayImpar)) {
    if($arrayImpar[$contador] > $valorI1){
        $valorI1 = $arrayImpar[$contador];
    }else{
        if($arrayImpar[$contador] > $valorI2) {
            $valorI2 = $arrayImpar[$contador];
        }
    }
    $contador++;
};

echo ("O maior valor Par do Array: ".$valor1." O segundo maior valor Par do Array: ".$valor2).PHP_EOL;
echo ("O maior valor Impar do Array: ".$valorI1." O segundo maior valor Impar do Array: ".$valorI2);

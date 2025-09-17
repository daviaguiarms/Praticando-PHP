<?php

 for ($i=0; $i < 20; $i++) {
     if ($i % 2 == 0) {
         echo $i . "\n";
     };

 }

 $numero = 2;

 for ($i=0; $i <= 10; $i++){
    echo "Numero: " . $numero . "x" . $i . "=" .  $numero * $i . "\n";
 };

 $maior = 0;

 
 $array = [10, 25, 3, 50, 7];

 for ($c=0; $c < count($array); $c++) {
    if ($array[$c] > $maior) {
        $maior = $array[$c];
    };
};

echo $maior . "\n";

// ou

$maiorNumber = max($array);
echo $maiorNumber . "\n";

function mostrar($maior){
    echo $maior . "\n";
};

mostrar($maiorNumber);

var_dump($array);

var_dump($maiorNumber);






?>
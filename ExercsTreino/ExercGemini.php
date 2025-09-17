<?php


function calcularMedia($numbers = [])
{
    if ($numbers === "" || count($numbers) === 0) {
        return 0;
    }

    $soma = array_sum($numbers);
    $media = $soma / count($numbers);

    echo $media;
}

//calcularMedia([10, 20, 30, 5, 7, 8, 10, 13]);


function contarVogais($word){

    $minusculo = strtolower($word);

    $vogais = ["a", "e", "i", "o", "u"];
    $somaVogais = 0;

    foreach($vogais as $vogal){
        $somaVogais += substr_count($minusculo, $vogal);
    }

    echo "Essa palavra tem $somaVogais vogais\n";
}

echo contarVogais("Testee de vogais");



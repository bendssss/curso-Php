<?php

function escrever ($texto) {
    echo $texto . "<br>";
}
escrever('Algo');
// essa função é mais flexível, pois pode ser usada para escrever qualquer texto, diferente da função do exemplo anterior, que só escrevia a mesma frase.


function soma($n1, $n2) {
    return $n1 + $n2;
}
echo soma(12, 90) . "<br>";

function conta($n1, $n2) {
    return ($n1 + $n2) * 3;
}

function contas($n1, $n2, $taxa = 2) {
    return ($n1 + $n2)  * $taxa;
}

echo conta (1,2) . "<br>"; // aqui o valor da taxa é o padrão, ou seja, 2

function Media ($n1, $n2, $n3, $n4) {
    return ($n1 + $n2 + $n3 + $n4) / 5;
}
$media = Media(6, 5, 7, 8);
echo $media . "<br>";

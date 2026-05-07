<?php
$estado = "São Paulo/SP";
$arrayEstado = explode("/", $estado); // a função explode() é usada para dividir uma string em um array, usando um delimitador, nesse caso, a barra "/"
echo "<pre>";
var_dump($arrayEstado);


$info = 'São Paulo/SP/Brasil/Terra';
$arrayInfo = explode("/", $info);
var_dump($arrayInfo);

echo '<hr>';
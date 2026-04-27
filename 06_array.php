<?php
//$carros = ['Uno', 'Gol', 'Fusion','Civic',];
//echo $carros[3];

//$carroUm = ['Uno', 'Fiat',' Preto'];
//echo $carroUm[2];

//echo '<br>';


//$carro_um = ['Uno', 'Fiat', 'Branco'];
//echo $carro_um[2];
//$carro_um = [
   // 'modelo' => 'Uno',
   // 'marca' => 'Fiat',
   // 'cor' => 'Branco',
//];
//echo $carro_um['modelo'];   
//echo $carro_um['marca'];
//echo $carro_um['cor'];


$aluno = [
    'codigo' => 150,
    'nome' => 'Ana',
    'idade' => 19,
    'cidade' => 'Americana',
    'uf' => 'São Paulo',
    'cor_cabelo' => 'Preto/Roxo',
    'altura' => 170,
    'numero_calcado' => 34
];

echo $aluno['nome'];
echo '<br>';
echo $aluno['altura'];
echo '<br>';
echo $aluno['numero_calcado'];
echo '<br>';
echo $aluno['uf'];
echo '<br>';
echo '<hr>';


$Carro_dois = [
    'modelo' => 'Fusion',
    'marca' => 'Ford',
    'cor' => 'Preto',
];

echo $Carro_dois['modelo'];
echo '<br>';
echo $Carro_dois['marca'];
echo '<br>';
echo $Carro_dois['cor'];
echo '<br>';
echo '<hr>';


$carro_tres = [
    'modelo' => 'Civic',
    'marca' => 'Honda',
    'cor' => 'Branco',
];

echo $carro_tres['modelo'];
echo '<br>';
echo $carro_tres['marca'];
echo '<br>';
echo $carro_tres['cor'];
echo '<br>';
echo '<hr>';

$carro_quatro = [
    'modelo' => 'Modelo: Gol',
    'marca' => 'Marca: Volkswagen',
    'cor' => 'Cor: Cinza',
];

echo $carro_quatro['modelo'];
echo '<br>';
echo $carro_quatro['marca'];
echo '<br>';
echo $carro_quatro['cor'];
echo '<br>';
echo '<hr>';

?>
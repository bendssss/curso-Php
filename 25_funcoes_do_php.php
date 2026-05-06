<?php
$empresa = 'Senac jau';
echo "empresa <br>";
$novaEmpresa = str_replace ('Jau','Americana',$empresa);
echo "$novaEmpresa <br>";
echo Substr($novaEmpresa, 0, 4) . "<br>"; //mostra apenas as 4 primerias letra da variavel 
echo strlen($novaEmpresa); //mostra a quantidade de caracteres na variavel


echo '<br>';


$nome = 'Carlos Ferreira' ;
if (isset($nome)){ //para validar se a variavel e verdadeira ou falsa 
    echo $nome;
}else{
    echo 'Não Existe!';
}
echo '<br>';

unset($nomes);
if (isset($nome)){
    echo $nome;
}else{
    echo 'Não Existe !';
}
?>
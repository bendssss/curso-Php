<?php
$nome = 'Carlos Ferreira' ;

unset($nomes);
if (isset($nome)){
    echo $nome;
}else{
    echo 'Não Existe !';
}
<?php
$nome = '  Senac Americana  ';
var_dump($nome); 
var_dump(ltrim($nome)); // a função ltrim() é usada para remover os espaços em branco do início da string
echo '<br>', '<hr>';
var_dump(rtrim($nome)); // a função rtrim() é usada para remover os espaços em branco do final da string
echo '<br>', '<hr>';
var_dump(trim($nome));  // a função trim() é usada para remover os espaços em branco do início e do final da string, ou seja, ela é a combinação das funções ltrim() e rtrim()
echo '<br>', '<hr>';

<?php 
$evento = $_POST['evento'];
$data = $_POST['data'];
$docente = $_POST['docente'];

$arquivo  = fopen("eventos.txt", "a");
fwrite ($arquivo, "Evento: $evento\n");
fwrite ($arquivo, "Data: $data\n");
fwrite ($arquivo, "Docente: $docente\n");
fclose($arquivo);

?>
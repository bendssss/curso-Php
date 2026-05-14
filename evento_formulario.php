<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos do Mês</title
    link rel="stylesheet" href="../style.css">
</head> 
<body>
    <h1>Eventos do Mês</h1>
    <form action="evento_salvar.php" method="post">
        <label>Evento</label>
        <input type="text" name="evento" required><br>
        <label>Data</label>
        <input type="date" name="data" required><br>
        <label>Docente</label>
        <input type="text" name="docente" required><br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>

</body>

</html> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>cadastro Aluno</h1>
    <form action="aluno_salvar.php" method="post">
        <input type="text" placeholder="Nome" name="nome" required>
        <input type="text" placeholder="RA" name="ra" required>
        <input type="number" placeholder="Idade" name="idade" required>
        <br></br>
        <input type="submit" value="Salvar">
        <input type="reset" value="Limpar">
    </form>
</body>
</html>
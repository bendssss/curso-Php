<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
<div class="login-container">
    <h1>Login</h1>    
    <form action="validar_login.php" method="post">
        <label for="email">Email</label>
        <input type="email" name="email_usuario" id="email" required>
        <label for="senha">Senha</label>
        <input type="password" name="senha_usuario" id="senha" required><br>
        <button type="submit">Acessar</button>
        <button type="reset">Limpar</button>

        <?php
        echo $_GET['mensagem'] ?? "";
        ?> 
        
    </form>
</div>
</body>
</html>
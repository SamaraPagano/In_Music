<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="processar_login.php" method="post">
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" required>
        <br><br>
        <input type="submit" value="Login">
    </form>

    <p>Ainda não tem uma conta? <a href="cadastro.php">Cadastre-se</a></p>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Cadastro</title>
</head>
<body>
    <h2>Cadastro</h2>
    <form action="processar_cadastro.php" method="post">
        <label for="nome">Nome: </label>
        <input type="text" name="nome" id="nome" required>
        <br><br>
        <label for="email">E-mail: </label>
        <input type="email" name="email" id="email" required>
        <br><br>
        <label for="senha">Senha: </label>
        <input type="password" name="senha" id="senha" required>
        <br><br>
        <input type="submit" value="Cadastrar">
        </form>

        <p>Já tem uma conta? <a href="login.php">Faça login</a></p>
</body>
</html>
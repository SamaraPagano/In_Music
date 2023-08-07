<?php
// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Conexão falhou: " . $conn->connect_error);
}

// Receber dados do formulário de login
$email = $_POST['email'];
$senha = $_POST['senha'];

// Consulta para verificar o email
$sql = "SELECT id, senha FROM usuarios WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $row = $result->fetch_assoc();
    
    if (password_verify($senha, $row['senha'])) 
    {
        echo "Login bem-sucedido!";

        //Redirecionar para a página de músicas
        header('Location: musicas.php');
        exit(); // Sair do script
    }
    else 
    {
        echo "Senha incorreta.";
    }
} 
else 
{
    echo "Email não encontrado.";
}

$conn->close();
?>
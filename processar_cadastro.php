<?php
//processar_cadastro.php

//Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "music";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn -> connect_error)
{
    die ("Conexão falhou:" . $conn -> connect_error);
}

//Receber dados do formulário de cadastro

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

//Inserir os dados na tabela de usuários
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";

if ($conn -> query($sql) === TRUE)
{
    echo "Cadastro realizado com sucesso!";

    if ($conn ->query($sql) === TRUE)
    {
        //Redirecionar para a página de músicas
        header("Location: musicas.php");
        exit(); // Sair do script 
    }
}

else
{
    echo "Erro ao cadastrar: " . $conn ->error;  
}

$conn -> close();
?>
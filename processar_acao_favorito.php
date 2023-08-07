<?php
//processar_acao_favorito.php
$usuario_id = $_SESSION['usuario_id'];
$musica_id = $_SESSION['musica_id'];

//Verificar se a música já está favoritada pelo usuário
$sql = "SELECT id FROM favoritos WHERE usuario_id = $usuario_id AND musica_id = $musica_id";
$resul = $conn-> query($sql);

if ($resul->num_rows > 0)
{
    //Música já está favoritada, então remover
    $sql = "DELETE FROM favoritos WHERE usuario_id = $usuario_id AND musica_id = $musica_id";
    //Executar o Sql e fornecer feedback adequado ao usuário
}
else
{
    //Música não está favoritada, então adicionar
    $sql = "INSERT INTO favoritos (usuario_id, musica_id) VALUES ($usuario_id, $musica_id)";
}
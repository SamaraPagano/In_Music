<?php
//Recuperar as playlists do usuário
$usuario_id = $_SESSION['usuario_id'];

$sql = "SELECT id, nome FROM playlists WHERE usuario_id = $usuario_id";
$resul = $conn ->query($sql);

if ($resul->num_rows > 0)
{
    while ($row = $result ->fetch_assoc())
    {
        echo "<li><a href='playlist.php? id={$row['id']}'>{$row['nome']"
    }
}
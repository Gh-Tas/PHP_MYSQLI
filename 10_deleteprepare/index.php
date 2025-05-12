<?php 

$host = "localhost";
$user = "root";
$pass = "tOMecEtaje5em8164iP1HaXI7e3a8e";
$bd = "cursos";

$conn = new mysqli($host, $user, $pass, $bd);

$id = 6;

$stmt = $conn->prepare("DELETE FROM clientes WHERE cliente_id = ?");
$stmt->bind_param("i", $id);
$stmt->execute();
$stmt->close();
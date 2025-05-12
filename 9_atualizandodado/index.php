<?php 

$host = "localhost";
$user = "root";
$pass = "tOMecEtaje5em8164iP1HaXI7e3a8e";
$bd = "cursos";

$conn = new mysqli($host, $user, $pass, $bd);

$id = 5;

$stmt = $conn->prepare("UPDATE clientes SET nome = ?, sobrenome = ? WHERE cliente_id = ?");

$name = "Rosimeire";
$surname = "Cosmo";

$stmt->bind_param("ssi", $name, $surname, $id);

$stmt->execute();
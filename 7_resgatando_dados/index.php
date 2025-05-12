<?php 

$host = "localhost";
$user = "root";
$pass = "tOMecEtaje5em8164iP1HaXI7e3a8e";
$bd = "cursos";

$conn = new mysqli($host, $user, $pass, $bd);

$id = 2;

$stmt = $conn->prepare("SELECT * FROM clientes WHERE cliente_id = ?");

$stmt->bind_param("i", $id);
$stmt->execute();

$results = $stmt->get_result();
$data = $results->fetch_all();

echo "<pre>";
print_r($data);
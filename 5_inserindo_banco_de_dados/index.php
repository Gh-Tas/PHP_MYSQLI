<?php 
//CONEXÃO COM O BANCO
$host = "localhost";
$user = "root";
$pass = "tOMecEtaje5em8164iP1HaXI7e3a8e";
$db = "cursos";


$conn = new mysqli($host, $user, $pass, $db);

$table = "testepratico";
$nome = "joao";
$sobrenome = "marcos";


$q = "SELECT * FROM $table";

$results = $conn->query($q);

$clients = $results->fetch_all(MYSQLI_ASSOC);

print_r($clients);
$conn->close();
?>
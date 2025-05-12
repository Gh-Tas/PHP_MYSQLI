<?php 

$host = "localhost";
$user = "root";
$pass = "tOMecEtaje5em8164iP1HaXI7e3a8e";
$bd = "cursos";

$conn = new mysqli($host, $user, $pass, $bd);

$q = "CREATE TABLE testepratico (nome VARCHAR(50), sobrenome VARCHAR(50))";

$conn->query($q);
$conn->close();
?>
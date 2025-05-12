<?php 
//CONEXÃO COM O BANCO
$host = "localhost";
$user = "root";
$pass = "tOMecEtaje5em8164iP1HaXI7e3a8e";
$db = "cursos";

$conn = new mysqli($host, $user, $pass, $db);


$name = "guilherme";
$surname = "melo";


$smtm = $conn->prepare("INSERT INTO testepratico(`nome`, `sobrenome`) VALUES (?, ?)");


$smtm->bind_param("ss", $name, $surname);
$smtm->execute();
?>
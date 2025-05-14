<?php 
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "escola";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    //ASSUNTO AULA

    $id = 10;

    $stmt = $conn->prepare("SELECT * FROM alunos WHERE id_aluno > :id");

    $stmt->bindParam(":id", $id);

    $stmt->execute();

    $data = $stmt->fetchALL(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($data);
?>
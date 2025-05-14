<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "escola";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    //ASSUNTO AULA

    $id = 15;

    $nome = "joao";
    $email = "joao@gmail.com";

    $stmt = $conn->prepare("UPDATE alunos SET nome = :nome, email = :email WHERE id_aluno = :id");

    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":nome", $nome);
    $stmt->bindParam(":email", $email);

    $stmt->execute();

?>
<?php 

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "escola";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    //ASSUNTO AULA

    $smtm = $conn->prepare("INSERT INTO alunos (nome, email) VALUES (:nome, :email)");

    $nome = "oi";
    $email = "oi@gmail.com";

    $smtm->bindParam(":nome", $nome);
    $smtm->bindParam(":email", $email);

    $smtm->execute();
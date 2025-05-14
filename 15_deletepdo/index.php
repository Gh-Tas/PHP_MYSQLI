<?php
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "escola";

    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    //ASSUNTO AULA

    $id = 15;

    $smtm =  $conn->prepare("DELETE FROM alunos WHERE id_aluno =:id");
    $smtm->bindParam(":id", $id);
    $smtm->execute();
?>
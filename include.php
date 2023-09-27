<?php

    include 'conexao.php';

    $nome = $_REQUEST['nome'];
    $idade = $_REQUEST['idade'];
    $email = $_REQUEST['email'];

    $sql = "INSERT INTO tb_pessoa (tx_nome, nr_idade, tx_email) VALUES ('$nome', '$idade', '$email')";
    $statement = $pdo->prepare($sql);
    $statement->execute();

    header("Location:  index.php");
?>
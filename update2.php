<?php

    include 'conexao.php';

    $id = $_REQUEST['id'];
    $nome = $_REQUEST['nome'];
    $idade = $_REQUEST['idade'];
    $email = $_REQUEST['email'];
    $sql = "UPDATE tb_pessoa SET tx_nome='$nome', nr_idade='$idade', tx_email='$email' WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":id",$id);
    $statement->execute();

    header("Location:  index.php");
?>
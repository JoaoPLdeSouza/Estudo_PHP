<?php

    include 'conexao.php';

    $id = $_REQUEST['id'];
    $sql = "DELETE FROM tb_pessoa WHERE id = :id";
    $statement = $pdo->prepare($sql);
    $statement->bindParam(":id",$id);
    $statement->execute();

    header("Location:  index.php");
?>
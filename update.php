<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>

    <?php
        $id = $_REQUEST['id'];

        include 'conexao.php';
      
        $sql = "SELECT * FROM tb_pessoa WHERE id = $id";
        $statement = $pdo->prepare($sql);
        $statement->execute();
        $dados = $statement->fetch(PDO::FETCH_OBJ);
    ?>
    <form method="post" action="update2.php">

        
        Nome: <input type="text" name="nome" value="<?php echo $dados->tx_nome?>">
        Idade: <input type="number" name="idade" value="<?php echo $dados->nr_idade?>">
        Email: <input type="email" name="email" value="<?php echo $dados->tx_email?>">
        <input type="text" name="id" value="<?php echo $id?>" hidden>
        <input type="submit" value="Salvar">
        <input type="submit" value="Limpar">

    </form>
</body>
</html>
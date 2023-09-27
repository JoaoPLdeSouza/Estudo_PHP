<?php
    include 'conexao.php';
    include 'autenticando.php';
      
    $sql = "SELECT * FROM tb_pessoa ";
    
    $statement = $pdo->prepare($sql);
    $statement->execute();
    $dados = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <a href="logout.php">Sair</a>

    <form method="post" action="include.php">

        Nome: <input type="text" name="nome">
        Idade: <input type="number" name="idade">
        Email: <input type="email" name="email">
        <input type="submit" value="Salvar">
        <input type="submit" value="Limpar">

    </form>

    <table width= "100%" border= "1px solid">
        <tr>
            <th>ID</th>
            <th>NOME</th>
            <th>IDADE</th>
            <th>EMAIL</th>
            <th>Ações</th>
        </tr>

        <?php foreach($dados as $linha) {?>
            <tr>
                <td><?php echo $linha->id?></td>
                <td><?php echo $linha->tx_nome?></td>
                <td><?php echo $linha->nr_idade?></td>
                <td><?php echo $linha->tx_email?></td>
                <td><a href="update.php?id=<?php echo $linha->id ?>">Editar</a> | <a href="excluir.php?id=<?php echo $linha->id ?>">Excluir</a></td>
            </tr>
        <?php }?>
    </table>

</body>
</html>
<?php
$usuarioBd = "joao.paulo";
$senhaBd = "1234";

$usuarioBd = $_REQUEST['usuario'];
$senha = $_REQUEST['senha'];

if($senhaBd == $senha){
    session_start();
    $_SESSION['usuario'] = $usuarioBd;
    header("Location: pesquisar.php");
} else{
    header("Location: index.php");
}
?>
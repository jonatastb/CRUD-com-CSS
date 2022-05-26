<?php
include 'conexao.php';
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data = $_POST['data'];

$sql_cad = "INSERT INTO `pessoa`(`id`, `nome`, `email`, `senha`, `data`) VALUES ('','{$nome}','{$email}','{$senha}','{$data}')";

if (mysqli_query($conn, $sql_cad)) {
    header('location: listar.php');
}
else {
    header('location: index.php');
}
?>
<?php
include 'conexao.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$data = $_POST['data'];

$sql_edit = "UPDATE `pessoa` SET `nome`='{$nome}',`email`='{$email}',`senha`='{$senha}',`data`='{$data}' WHERE `id` = $id";

if (mysqli_query($conn, $sql_edit)) {
    header('location: listar.php');
}


?>
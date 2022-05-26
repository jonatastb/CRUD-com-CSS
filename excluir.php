<?php

include 'conexao.php';

$id = $_POST['id'];

$sql_exc = "DELETE FROM `pessoa` WHERE `id` = $id";

if (mysqli_query($conn, $sql_exc)) {
    header('location: listar.php');
}

?>
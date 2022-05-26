<?php

include 'conexao.php';

$sql_lista = "SELECT * FROM `pessoa`";

$lista = mysqli_query($conn, $sql_lista);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <title>Projeto CRUD</title>
</head>
<body>
    <nav id="nav2">
        <h1>CRUD</h1>
        <nav id="nav">
            <a href="index.php">HOME</a>
            <a href="listar.php">LISTA</a>
            <a href="cadastrar.php">CADASTRO</a>
        </nav>
    </nav>
    <div id="main">
        <table id="table">
            <thead id="thead">
                <tr>
                    <td>NOME</td>
                    <td>EMAIL</td>
                    <td>SENHA</td>
                    <td>DATA DE NASCIMENTO</td>
                    <td>OPÇÕES</td>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php
                    while ($listar_lista = mysqli_fetch_array($lista)){ 
                        $id = $listar_lista['id'];
                        $nome = $listar_lista['nome'];
                        $email = $listar_lista['email'];
                        $senha = $listar_lista['senha'];
                        $data = $listar_lista['data'];
                        ?>
                        <tr>
                            <td><?php echo $nome;?></td>
                            <td><?php echo $email;?></td>
                            <td><?php echo $senha;?></td>
                            <td><?php echo date('d/m/Y',  strtotime($data));?></td>
                            <td>
                                <div id="e_e">
                                    <form action="editar.php" method="post">
                                    <input type="hidden" name="id" value="<?php echo $id; ?>">
                                    <input type="hidden" name="nome" value="<?php echo $nome; ?>">
                                    <input type="hidden" name="email" value="<?php echo $email; ?>">
                                    <input type="hidden" name="senha" value="<?php echo $senha; ?>">
                                    <input type="hidden" name="data" value="<?php echo $id; ?>">
                                        <input type="submit" value="EDITAR" id="btn_edt">
                                    </form>
                                    <form action="excluir.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                                        <input type="submit" value="EXCLUIR " id="btn_exc">
                                    </form>
                                </div>
                            </td>   
                        </tr>

                    <?php }?>
            </tbody>
        </table>
    </div>
    <footer>
        <p>©Copyright by Jonatas T Bueno</p>
    </footer>
</body>
</html>
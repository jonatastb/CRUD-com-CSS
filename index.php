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
        <div id="titulo"><h1>SISTEMA DE CADASTRO</h1></div>
        <div id="tabela">
            <div class="opcoes">
                <h2><a href="cadastrar.php">Cadastrar<span class="material-symbols-outlined">add</span></a></h2>
                <p>Cadastrar novos usuários! </p>
            </div>
            <div class="opcoes">
                <h2><a href="listar.php">Lista <span class="material-symbols-outlined">menu</span></a></h2>
                <p>Se você deseja ver todos os usuários cadastrados ou editar, excluir algum!</p>
            </div>
        </div>
    </div>
    <footer>
        <p>©Copyright by Jonatas T Bueno</p>
    </footer>
</body>
</html>
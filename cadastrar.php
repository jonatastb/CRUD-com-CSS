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
    <title>CADASTRAR</title>
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
    <div id="main_cad">
        <div id="titulo"><h1>CADASTRO</h1></div>
        <form action="cad_cod.php" method="post">
            <label for="">Nome: <input type="text" name="nome" required></label>
            <br>
            <label for="">Email: <input type="email" name="email" required></label>
            <br>
            <label for="">Senha: <input type="password" name="senha" required></label>
            <br>
            <label for="">Data de Nacimento: <input type="date" name="data" required></label>
            <br>
            <input type="submit" value="CADASTRAR" id="btn">
        </form>
    </div>
    <footer>
        <p>┬ęCopyright by Jonatas T Bueno</p>
    </footer>
</body>
</html>
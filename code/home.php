<?php
require('classes.php');
$validador = new Login();
$validador->verificar_logado();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require_once "classes.php";
    $cadastro = new Cadastro();

    $nome = $_POST["nome"];
    $curso = $_POST["curso"];

    $cadastro->cadastro($nome, $curso);
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #333;
        }

        .link {
            display: inline-block;
            margin-right: 10px;
            padding: 5px 10px;
            background-color: #b20000;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
        }

        .link:hover {
            background-color: #8c0000;
        }

        .logout {
            display: block;
            margin-top: 20px;
            padding: 5px 10px;
            background-color: #b20000;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
        }

        .logout:hover {
            background-color: #8c0000;
        }
    </style>
</head>
<body>



    <div class="container">
        <h2>Cadastro do Vestibular</h2>
       
        <a href="PaginadoCadastro.php" class="link">Cadastrar Candidato</a>
        <a href="CandidatosCadastrados.php" class="link">Listar Registros</a>

        <a href="login.php" class="logout">Logout</a>
    </div>
</body>
</html>
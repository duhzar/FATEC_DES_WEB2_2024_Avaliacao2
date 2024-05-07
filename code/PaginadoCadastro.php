<?php

include('cadastro.php');
require('classes.php');


$validador = new Login();
$validador->verificar_logado();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $form = new Cadastro();
    $form->processarFormulario();
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar os Candidatos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 50%;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            border-radius: 3px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .btn-container {
            text-align: center;
        }

        .botao {
            display: inline-block;
            margin-top: 10px;
            padding: 8px 20px;
            background-color: #b20000;
            color: #fff;
            text-decoration: none;
            border-radius: 3px;
            cursor: pointer;
        }

        .botao:hover {
            background-color: #8c0000;
        }
    </style>
    <body>
    <div class="container">
        <h1>Novo Candidato</h1>
        <form action="" method="post">
            <div class="form-group">
                <label for="nome">Nome Completo</label>
                <input type="text" name="nome" id="nome" required>
            </div>

            <div class="form-group">
                <label for="options">Escolha uma opção:</label>
                <select name="options" id="options" required>
                    <option value="DSM">DSM</option>
                    <option value="GE">GE</option>
                </select>
            </div>

            <div class="btn-container">
                <button type="submit" class="botao">Cadastrar</button>
                <a href="home.php" class="botao">Voltar</a>
            </div>
        </form>
    </div>
</body>
</html>
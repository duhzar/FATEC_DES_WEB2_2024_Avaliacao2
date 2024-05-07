<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidatos Cadastrados:</title>
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

        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #b20000;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .btn-container {
            text-align: center;
            margin-top: 20px;
        }

        .botao {
            display: inline-block;
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
</head>
<body>
    <div class="container">
        <h1>Lista de Pessoas</h1>
        <table>
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nome</th>
                    <th>Curso</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require('cadastro.php');
                require('classes.php');
                $validador = new Login();
                $validador->verificar_logado();

                $cadastro = new Cadastro();
                $candidatos = $cadastro->select();

                foreach ($candidatos as $candidato) {
                    echo "<tr>";
                    echo "<td>" . $candidato->id . "</td>";
                    echo "<td>" . $candidato->nome . "</td>";
                    echo "<td>" . $candidato->curso . "</td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>

     
        <div class="btn-container">
            <a href="home.php" class="botao">Voltar</a>
        </div>
    </div>
</body>
</html>
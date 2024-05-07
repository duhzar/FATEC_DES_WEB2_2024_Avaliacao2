<?php
class Cadastro
{
    private $conexao;

    public function __construct()
    {
        $dsn = "mysql:host=localhost;dbname=vestibular;charset=utf8mb4";
        $usuario = "root";
        $senha = "";

        try {
            $this->conexao = new PDO($dsn, $usuario, $senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
            exit;
        }
    }

    public function processarFormulario()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
           
            if (isset($_POST['nome'], $_POST['options'])) {
                $nome = $_POST['nome'];
                $opcaoSelecionada = $_POST['options'];

          
                $curso = ($opcaoSelecionada === "DSM") ? 1 : 2;

             
                $this->cadastro($nome, $curso);

                header('Location: cadastro.php');
                exit;
            }
        }
    }

    public function cadastro($nome, $curso)
    {
        $sql = "INSERT INTO candidatos (nome, curso) VALUES (?, ?)";

        try {
            $stmt = $this->conexao->prepare($sql);
            $stmt->execute([$nome, $curso]);
        } catch (PDOException $e) {
            echo "Erro ao inserir os dados: " . $e->getMessage();
            exit;
        }
    }

    public function select()
    {
        $sql = "SELECT * FROM candidatos";

        try {
            $stmt = $this->conexao->query($sql);
            return $stmt->fetchAll(PDO::FETCH_CLASS);
        } catch (PDOException $e) {
            echo "Erro ao executar a consulta: " . $e->getMessage();
            exit;
        }
    }


    public function __destruct()
    {
        $this->conexao = null;
    }
}
?>
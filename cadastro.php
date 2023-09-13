<?php
$hostname = "localhost";
$bancodedados = "cadastro";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno) {
    echo "falha ao conectar:(" . $mysqli->connect_errno . ")" . $mysqli->connect_errno;
} else {
    echo "Conectado ao Banco de Dados";

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        //Obtém os dados do formulário
        $nome = $_GET["nome"];
        $email = $_GET["email"];
        $cargo = $_GET["cargo"];
        $empresa = $_GET["empresa"];
        $rua = $_GET["rua"];
        $bairro = $_GET["bairro"];
        $cidade = $_GET["cidade"];
        $estado = $_GET["estado"];
        $cep = $_GET["cep"];
       
        

        //Prepara a query de inserção
        $stmt = $mysqli->prepare("INSERT INTO formulario (nome, email, cargo, empresa, rua, bairro, cidade, estado, cep) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $nome, $email, $cargo, $empresa, $rua, $bairro, $cidade, $estado, $cep);

        // Executa a query
        if ($stmt->execute()) {
            echo "Dados inseridos com sucesso!";
        } else {
            echo "Erro ao inserir os dados: " . $stmt->error;
        }

        //Fecha a declaração e a conexão
        $stmt->close();
        $mysqli->close();
    }
}
?>
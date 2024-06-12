<?php

// Conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ficha_de_reclamacoes_base_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Captura os valores do formulário
$nome = $_POST['nome'];
$localizacao = $_POST['localizacao'];
$data_de_reclamacao = $_POST['data'];
$descricao = $_POST['descricao'];

// Prepara a consulta SQL
$sql = "INSERT INTO reclamacoes (nome, localizacao, data_de_reclamacao, descricao)
        VALUES ('$nome', '$localizacao', '$data_de_reclamacao', '$descricao')";

// Executa a consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "Obrigado por nos contatar a sua reclamação será atendida brevemente";
} else {
    echo "Erro ao inserir os dados: " . $conn->error;
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

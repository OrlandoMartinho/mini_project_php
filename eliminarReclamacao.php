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

// Verifica se foi fornecido um ID válido para exclusão
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Consulta SQL para excluir o registro
    $sql = "DELETE FROM reclamacoes WHERE id = '$id'";

    if ($conn->query($sql) === TRUE) {
        echo "Eliminado com sucesso";
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }
} else {
    echo "ID inválido para exclusão.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>

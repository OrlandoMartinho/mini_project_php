<!DOCTYPE html>
<html lang="Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/index.css">
    <link rel="stylesheet" href="Css/reclamacoes_adm.css">
    <title>Administrador</title>
</head>
<body>

    <header>

       

         <nav class="menu">
            <div class="logo"><a href="#"><img src="Img/Logotipo/logo.png" alt="Logo"></a></div>
            <ul>
            <li class="menu-bar"><a href="administrador.php">Sair</a></li>
                
                <li class="menu-bar"><a href="#">Reclamações registradas</a></li>
              
                
                
              </ul>

         </nav>
         <div class="contentor">
  
         <img src="Img/Imagens Editadas/g.jpg" alt="Imagem 2" class="slide-imagem">
       
   <p class="texto">Com a EPAL, você tem a certeza de água pura e confiável, entregue com eficiência diretamente à sua porta
   </p>
</div>

        
    </header>


    <div class="centro">

        
        <h1>Ocorrências recebidas</h1>
        <div class="search-form">
  <input type="text" id="search-input" placeholder="Digite o nome...">
  <button onclick="searchTable()" id="search-button">Pesquisar</button>

</div>

        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Localização</th>
                    <th>Data de Reclamação</th>
                    <th>Descrição</th>
                    <th>Acção</th>
                </tr>
            </thead>
            <tbody id="dados-recebidos">

            <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ficha_de_reclamacoes_base_de_dados";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica se a conexão foi estabelecida com sucesso
if ($conn->connect_error) {
    die("Erro na conexão com o banco de dados: " . $conn->connect_error);
}

// Verifica se uma solicitação de exclusão foi feita
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    
    // Consulta SQL para excluir o registro com base no ID
    $deleteSql = "DELETE FROM reclamacoes WHERE id = $id";
    
    // Executa a consulta de exclusão
    if ($conn->query($deleteSql) === TRUE) {
      
    } else {
        echo "Erro ao excluir o registro: " . $conn->error;
    }
}

// Consulta SQL para selecionar os dados da tabela
$sql = "SELECT id, nome, localizacao, data_de_reclamacao, descricao FROM reclamacoes";

// Executa a consulta SQL
$resultado = $conn->query($sql);

// Verifica se existem registros retornados
if ($resultado->num_rows > 0) {
    // Loop para percorrer cada registro e adicionar à tabela HTML
    while ($row = $resultado->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["nome"] . "</td>";
        echo "<td>" . $row["localizacao"] . "</td>";
        echo "<td>" . $row["data_de_reclamacao"] . "</td>";
        echo "<td>" . $row["descricao"] . "</td>";
        echo "<td><a href=\"?delete=" . $row["id"] . "\" onclick=\"return confirm('Tem certeza que deseja excluir este registro?');\" class=\"delete-button\">Excluir</a></td>";
        echo "</tr>";
    }
} else {
    echo "Não foram encontrados registros na tabela.";
}

// Fecha a conexão com o banco de dados
$conn->close();
?>




            </tbody>
        </table>
      
      
</div>


</body>

<script src="Js/Index.js"></script>
<script src="Js/reclamacao_adm.js"></script>
</html>
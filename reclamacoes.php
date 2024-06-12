<!DOCTYPE html>
<html lang="Pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/index.css">
    <link rel="stylesheet" href="Css/reclamacoes.css">
    <title>Fichas de reclamação</title>
</head>
<body>
<header>

       

<nav class="menu">
   <div class="logo"><a href="#"><img src="Img/Logotipo/logo.png" alt="Logo"></a></div>
   <ul>
      
       <li class="menu-bar"><a href="reclamacoes.php">Ficha de Reclamação</a></li>
       <li class="menu-bar"><a href="Index.php">Home</a></li>
       
     </ul>

</nav>
<div class="contentor">
  
         <img src="Img/Imagens Editadas/g.jpg" alt="Imagem 2" class="slide-imagem">
       
   <p class="texto">Com a EPAL, você tem a certeza de água pura e confiável, entregue com eficiência diretamente à sua porta
   </p>
</div>


</header>


    <div class="centro">

        <form action="reclamar.php" class="formulario" method="POST">
            <div class="campo">
              <label for="nome">Nome:</label>
              <input type="text" id="nome" name="nome" required>
            </div>
          
            <div class="campo">
              <label for="localizacao">Localização:</label>
              <input type="text" id="localizacao" name="localizacao" required>
            </div>
          
            <div class="campo">
              <label for="data">Data da reclamação:</label>
              <input type="date" id="data" name="data" required>
            </div>
          
          
            <div class="campo">
              <label for="descricao">Descrição:</label>
              <textarea id="descricao" name="descricao" required></textarea>
            </div>
          
            <input type="submit" value="Enviar" class="botao">
          </form>
          
      
      
</div>


</body>
<script src="Js/Index.js"></script>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrador</title>
    <link rel="stylesheet" href="Css/administrador.css">
</head>
<body>
<div class="container">
    <h2>Aministrador</h2>
    <form action="verificar.php" method="post">
      <label for="username">Nome de usuário:</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Senha:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Entrar">
    </form>
  </div>
</body>
</html>
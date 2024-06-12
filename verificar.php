<?php

$username = $_POST['username'];
$password = $_POST['password'];


if ($username=='Carolina'&&$password=='1234') {
    header("Location: reclamacoes_adm.php");
    exit();
} else {
    echo "Nome de usuário ou senha inválidos.";
}

?>

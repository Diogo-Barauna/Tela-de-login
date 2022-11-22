<?php
session_start();
include("conexao.php");
#Procedimentos de login
if(empty($_POST['usuario']) || empty($_POST['senha'])) {
    header('Location: index.php');
    exit();
}

if (isset($_POST['usuario'])){
$usuario = $mysqli->real_escape_string($_POST['usuario']);
$senha = $mysqli->real_escape_string($_POST['senha']);
}
#Seletor de usuário e senha
$query = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND senha = '$senha'";

$result = mysqli_query($mysqli, $query);

$row = mysqli_num_rows($result);
#Verificação de login
if($row == 1) {
    $_SESSION['usuario'] = $usuario;
    header('Location: logado.php');
    exit();
} else {  
    $_SESSION ['n_aut'] = true;
    header('Location: index.php');
    exit();
}
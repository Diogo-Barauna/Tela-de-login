
<?php
#Conexão php com o servidor mysql
$host = "localhost";
$usuario = "root";
$senha = "";
$database = "login";
$mysqli = new mysqli($host, $usuario, $senha, $database) or die ("Não foi possível conectar");
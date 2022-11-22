<?php
#Verificação de usuário validado
if(!$_SESSION['usuario']){
    header('Location: index.php');
    exit();
}
?>
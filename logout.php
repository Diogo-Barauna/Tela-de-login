<?php
#Botão de sair
session_start();
session_destroy();
header('Location: index.php');
exit();
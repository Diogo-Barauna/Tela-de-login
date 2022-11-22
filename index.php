<?php
session_start()
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body id="index">
    <div id="tela">
        <div id="content">
            <h1>Faça seu login</h1>
            <hr> 
            <div id="form">
            <!-- Formulário -->
                <form action="login.php" method="POST">
                    <label for="usuario"><b>Usuário:</b></label><br>
                    <input type="text" class="input" name="usuario"> <br><br>
                    <label for="senha"><b>Senha:</b></label><br>
                    <input type="password" class="input"  name="senha"> <br>
                    <input id="botao" type="submit" value="Entrar"> <br>
                    <a href="senha.html">Esqueceu sua senha?</a> 
                    <!-- Erro login inválido -->
                    <?php
                    if(isset($_SESSION['n_aut'])):
                    ?>
                    <div id="error">
                        <p>Usuário ou senha inválidos</p>
                    </div>
                    <?php
                    unset($_SESSION['n_aut']);
                    endif;
                    ?>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
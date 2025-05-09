<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Página de Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <div class="navbar">
        <img class="imagem" src="assets/Imagem_connect.png" alt="Logo" class="logo">
    </div>
    
    <div class="login-container">
        <h2>Login</h2>
        <form action="tela_login.php" method="post" >
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>

            <label for="senha">Senha:</label>
            <input type="password" id="senha" name="senha" required>

            <input type="submit" value="Entrar">
        </form>
    </div>
    <?php if(isset($_GET['login']) && $_GET['login'] == 'erro'){?>

                    <div class="text-danger">
                      Usuário ou senha inválido(s)
                    </div>

                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2'){?>

                  <div class="text-danger">
                    Faça login para acessar as páginas protegidas.
                  </div>
                <?php } ?>
    

</body>
</html>

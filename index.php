<?php
include_once 'processamento/login.php';
if (isset($_GET['dados'])) {
    echo '    <div id="alerta">
        <i onclick="endalert()" class="x far fa-times-circle"></i>
        <p id="msg">Dados invalidos!</p>
    </div> <script>       alerta.style.animation = "1s alerta";
    alerta.style.display = "block";
    alerta.style.animation = "1s alerta";
    setTimeout(function () { alerta.style.display = "none"; }, 8000);</script>';
}

?>
<script>
    //Se apertar o X do alerta ele desaparece
    function endalert() {
        alerta.style.display = "none";
    }
</script>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_index.css">
    <title>Login</title>
</head>

<body>
    <section id="login">
        <form method="POST" action="processamento/login.php">
            <?php echo  $mensagem; ?>
            <h1 id="titlelogin">Login</h1>
            <h6>Entre em sua conta do LINK BIO!</h6>
            <p>NOME:</p>
            <input name="login" type="name" maxlength="255" required placeholder="Nome ou o @ do insta">
            <p>SENHA:</p>
            <input name="senha" type="password" maxlength="255" required placeholder="Senha">
            <input id="enviar" type="submit" name="acao" maxlength="255" id="enviar">
            <h1 id="cadastro">Não tem uma conta? <a href="cadastro.php">Cadastre-se</a></h1>
        </form><br><br>
    </section>

    <footer>© Wilkenio Pereira da Silva</footer>

    <a href="">
        <div id="faleconosco"><i class="far fa-comments"></i></div>
    </a>
    
    <script src="https://kit.fontawesome.com/210182064c.js" crossorigin="anonymous"></script>
</body>
</html>
<?php
include_once 'processamento/cadastramento.php';

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
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/cadastro.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <section id="cadastro">
        <img id="imgcentral" src="img/img cadastro.png" alt="">
        <img id="imgcentralmobile" src="img/Design sem nome.png" alt="">

            <form action="" method="post">
                <h1>Criar Conta Grátis</h1>
                <h6>Totalmente Grátis!</h6>
                <br>
                <?php echo $mensagem; ?>
                <p>NOME:</p>
                <input id="email" type="name" name="name" placeholder="Nome" required>
                <p>EMAIL:</p>
                <input type="email" name="email" placeholder="Email" required>
                <p>SENHA:</p>
                <input type="password" name="senha" placeholder="Senha" required>
                <input id="enviar" type="submit" name="cadastrar"><br>
                <a href="index.php">Login</a>
            </form>

    </section>
    <a href=""><div id="faleconosco"><i class="far fa-comments"></i></div></a>
    <script src="js/js.js"></script>
    <script src="https://kit.fontawesome.com/210182064c.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>
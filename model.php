<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    <title>Wil</title>
</head>

<body>

    <?php
    //session_start();

    include_once '../conexao_db.php';
    include_once 'processador.php';

    $id = $_SESSION['id'];

    if ($visible1 == 1  || null || $titulo == "" || null) {
        echo "<script>setTimeout(function () {document.getElementById('link-1').style.display = 'none';}, 0);</script>";
    }
    if ($visible2 == 1 || null || $tituloa == "" || null) {
        echo "<script>setTimeout(function () {document.getElementById('link-2').style.display = 'none';}, 0);</script>";
    }
    if ($visible3 == 1 || null || $titulob == "" || null) {
        echo "<script>setTimeout(function () {document.getElementById('link-3').style.display = 'none';}, 0);</script>";
    }
    if ($visible4 == 1 ||  null || $tituloc == "" || null) {
        echo "<script>setTimeout(function () {document.getElementById('link-4').style.display = 'none';}, 0);</script>";
    }
    if ($visible5 == 1 ||  null || $titulod == "" || null) {
        echo "<script>setTimeout(function () {document.getElementById('link-5').style.display = 'none';}, 0);</script>";
    }
    if ($visible6 == 1 || null || $tituloe == "" || null) {
        echo "<script>setTimeout(function () {document.getElementById('link-6').style.display = 'none';}, 0);</script>";
    }

    ?>

    <section id="links">
        <a href="<?php echo $urlaa; ?>">
            <div class="link" id="link-1"><?php echo $titulo ?></div>
        </a>
        <a href="<?php echo $urla; ?>">
            <div class="link" id="link-2"><?php echo $tituloa ?></div>
        </a>
        <a href="<?php echo $urlb; ?>">
            <div class="link" id="link-3"><?php echo $titulob ?></div>
        </a>
        <a href="<?php echo $urlc; ?>">
            <div class="link" id="link-4"><?php echo $tituloc ?></div>
        </a>
        <a href="<?php echo $urld; ?>">
            <div class="link" id="link-5"><?php echo $titulod ?></div>
        </a>
        <a href="<?php echo $urle; ?>">
            <div class="link" id="link-6"><?php echo $tituloe ?></div>
        </a>
    </section>

    <style>
        * {
            padding: 0;
            margin: 0 auto;
        }

        @font-face {
            font-family: K01;
            src: url(../css/fontes/KoHo-Light.ttf);
        }

        @font-face {
            font-family: R05;
            src: url(../css/fontes/Roboto-05.ttf);
        }

        @font-face {
            font-family: R03;
            src: url(../css/fontes/Roboto-03.ttf);
        }

        @font-face {
            font-family: R01;
            src: url(css/fontes/Roboto-01.ttf);
        }

        a {
            text-decoration: none;
        }

        body {
            background-color: <?php echo "$cordefundo"; ?>;
        }

        #links {
            width: 60%;
            margin-top: 5%;
        }

        .link {
            padding: 3%;
            background-color: <?php echo "$corbotoes"; ?>;
            text-align: center;
            color: white;
            margin-top: 5%;
            font-family: R03;
            border-radius: 2px;
        }
    </style>

    <!--ESTATISTICAS-->

</body>

</html>
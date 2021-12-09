<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style do dashboard.css">
    <link rel="stylesheet" href="css/style do dashboard pt2.css">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
</head>

<body>

    <?php
    //iniciando sessão
    session_start();

    //conexão DB
    include_once 'conexao_db.php';
    include_once 'save2.php';

    //PEGANDO O ID DO USUARIO, ATRAVES DA SESSÃO CRIADA.
    $id = $_SESSION['id'];
    $query = "SELECT * FROM desfrutadores  where id=$id";
    $result = mysqli_query($connect, $query) or die(mysqli_error($connect));

    //verificando se existe a sessão
    if (!isset($_SESSION["login"])) {
        header("location:index.php");
    }

    //recebendo o usuario
    //echo "Bem vindo " . $_SESSION['login'] . "!";
    echo '<a href="processamento/logout.php"> SAIR</a>';

    //Pegando os links que estao cadastrados, para mostrar nos inpunts
    $query = "SELECT * FROM desfrutadores where id=$id";
    $result = $connect->query($query);

    while ($row = mysqli_fetch_array($result)) {
        $titulo = $row['titulo'];
        $tituloa = $row['tituloa'];
        $titulob = $row['titulob'];
        $tituloc = $row['tituloc'];
        $titulod = $row['titulod'];
        $tituloe = $row['tituloe'];

        $Vurl = $row['urlaa'];
        $Vurla = $row["urla"];
        $Vurlb = $row['urlb'];
        $Vurlc = $row['urlc'];
        $Vurld = $row['urld'];
        $Vurle = $row['urle'];

        $nome = $row['nome'];
        $email = $row['email'];

        $cordefundo = $row['cordefundo'];
        $corbotoes = $row['corbotoes'];
        $corletras = $row['corletras'];

        $views = $row['viewspage'];
    }
    ?>

    <label for=""></label>
    <nav id="nav">
        <a href="admin.php">
            <li class="menu-logotipo"><img class="menu-logo" src="img/dit.png" alt=""></li>
        </a>
        <ul>
            <a onclick="inicio()">
                <li class="menu-1"><i class="fas fa-link"></i>
                    <p>Links</p>
                </li>

            </a>
            <a onclick="analise()">
                <li class="menu-2"><i class="far fa-chart-bar"></i>
                    <p>Análise </p>
                </li>
            </a>
            <a>
                <li onclick="ver()" class="menu-5"><i class="fas fa-mobile-alt"></i>
                    <p>Ver</p>
                </li>
            </a>
            <a>
                <li onclick="conta()" class="menu-4"><i class="fas fa-user-cog"></i>
                    <p>Conta</p>
                </li>
            </a>
        </ul>
    </nav>

    <div id="dark">
        <i id="claro" onclick="dark()" class=" far fa-moon"></i>
        <i id="escuro" onclick="darkinvert()" class=" fas fa-moon"></i>
    </div>

    <section id="inicio">
        <!--<div id="resultt"></div>-->
        <form method="post" action="">
            <div id="container">
                <label id="mais" onclick="my()">Adicionar Link</label>

                <div class="card" id="card">
                    <i id="lixeiraa" name="lixeiraa" onclick="lixeiraa();" style="float: right;" class="lixeira far fa-trash-alt"></i>
                    <i id="eye-1" onclick="eye1()" style="float: right;" class="lixeira far fa-eye"></i>
                    <i id="eye-slash-1" onclick="eyeinvert()" class="eye lixeira far fa-eye-slash"></i>
                    <input class="linksinput" id="namebtn" name="btn1" onchange="atualizainframe()" value="<?php echo "$titulo"; ?>" type="text" maxlength="255" placeholder="Titulo do 1° botão">
                    <input class="linksinput" id="nameurl" name="url1" onchange="atualizainframe()" value="<?php echo "$Vurl"; ?>" type="url" maxlength="255" placeholder="url">
                </div>
                <div class="card" id="carda">
                    <i id="lixeirab" name="lixeirab" onclick="lixeirab()" style="float: right;" class="lixeira far fa-trash-alt"></i>

                    <i id="eye-2" onclick="eye2()" style="float: right;" class="lixeira far fa-eye"></i>
                    <i id="eye-slash-2" onclick="eyeinvert2()" class="eye lixeira far fa-eye-slash"></i>
                    <input class="linksinput" id="namebtna" name="btn2" onchange="atualizainframe()" value="<?php echo "$tituloa"; ?>" type="text" maxlength="255" placeholder="Titulo do 2° botão">
                    <input class="linksinput" id="nameurla" name="url2" onchange="atualizainframe()" value="<?php echo "$Vurla"; ?>" type="text" maxlength="255" placeholder="url">
                </div>
                <div class="card" id="cardb">
                    <i id="lixeirac" name="lixeirac" onclick="lixeirac()" style="float: right;" class="lixeira far fa-trash-alt"></i>
                    <i id="eye-3" onclick="eye3()" style="float: right;" class="lixeira far fa-eye"></i>
                    <i id="eye-slash-3" onclick="eyeinvert3()" class="eye lixeira far fa-eye-slash"></i>
                    <input class="linksinput" id="namebtnb" name="btn3" onchange="atualizainframe()" value="<?php echo "$titulob"; ?>" type="text" maxlength="255" placeholder="Titulo do 3° botão">
                    <input class="linksinput" id="nameurlb" name="url3" onchange="atualizainframe()" value="<?php echo "$Vurlb"; ?>" type="text" maxlength="255" placeholder="url">
                </div>
                <div class="card" id="cardc">
                    <i id="lixeirad" name="lixeirad" onclick="lixeirad()" style="float: right;" class="lixeira far fa-trash-alt"></i>
                    <i id="eye-4" onclick="eye4()" style="float: right;" class="lixeira far fa-eye"></i>
                    <i id="eye-slash-4" onclick="eyeinvert4()" class="eye lixeira far fa-eye-slash"></i>
                    <input class="linksinput" id="namebtnc" name="btn4" onchange="atualizainframe()" value="<?php echo "$tituloc"; ?>" type="text" maxlength="255" placeholder="Titulo do 4° botão">
                    <input class="linksinput" id="nameurlc" onchange="atualizainframe()" value="<?php echo "$Vurlc"; ?>" name="url4" type="text" maxlength="255" placeholder="url">
                </div>
                <div class="card" id="cardd">
                    <i id="lixeirae" name="lixeirae" onclick="lixeirae()" style="float: right;" class="lixeira far fa-trash-alt"></i>
                    <i id="eye-5" onclick="eye5()" style="float: right;" class="lixeira far fa-eye"></i>
                    <i id="eye-slash-5" onclick="eyeinvert5()" class="eye lixeira far fa-eye-slash"></i>
                    <input class="linksinput" id="namebtnd" name="btn5" onchange="atualizainframe()" value="<?php echo "$titulod"; ?>" type="text" maxlength="255" placeholder="Titulo do 5° botão">
                    <input class="linksinput" id="nameurld" name="url5" onchange="atualizainframe()" value="<?php echo "$Vurld"; ?>" type="text" maxlength="255" placeholder="url">
                </div>

                <div class="card" id="carde">
                    <i id="lixeiraf" name="lixeiraf" onclick="lixeiraf()" style="float: right;" class="lixeira far fa-trash-alt"></i>
                    <i id="eye-6" onclick="eye6()" style="float: right;" class="lixeira far fa-eye"></i>
                    <i id="eye-slash-6" onclick="eyeinvert6()" class="eye lixeira far fa-eye-slash"></i>
                    <input class="linksinput" id="namebtne" name="btn6" onchange="atualizainframe()" value="<?php echo "$tituloe"; ?>" type="text" maxlength="255" placeholder="Titulo do 6° botão">
                    <input class="linksinput" id="nameurle" name="url6" onchange="atualizainframe()" value="<?php echo "$Vurle"; ?>" type="text" maxlength="255" placeholder="url">
                </div>
            </div>
        </form><br><br>
    </section>

    <div id="alerta">
        <i onclick="endalert()" class="x far fa-times-circle"></i>
        <p id="msg"></p>
    </div>

    <section id="analise">
        <div id="dados">
            <div id="dados-card"><i class="identificador-1 far fa-eye"></i> <label id="dados-titulos"> Total visualizações na página:</label>
                <p><?php echo "$views"; ?></p>
            </div>
            <div id="dados-card"><i class="identificador-2 fas fa-mouse"></i> <label id="dados-titulos">Total de visitas:</label>
                <p>300</p>
            </div>
            <div id="dados-card"><i class="identificador-3 fas fa-paperclip"></i> <label id="dados-titulos">link mais clicado:</label>
                <p>300</p>
            </div>
        </div>
    </section>
    <div id="ll">
        <img class="img" src="img/cell.png" alt="">
        <iframe id="dispositivos" src="usuarios/<?php echo "$nome"; ?>.php" frameborder="0"></iframe>
        <!-- <div id="buttomdecoration"></div> -->
        <section id="custom">
            <input id="corfundo" onchange="background()" value="<?php echo "$cordefundo"; ?>" type="color">
            <input type="color" id="corbotoes" onchange="background()" value="<?php echo "$corbotoes"; ?>">
            <input type="color" id="fontcolor" onchange="background()" value="<?php echo "$corletras"; ?>">
        </section>
    </div>
    <br><br>
    <!-- <div id="sombra"></div>
    <div id="poup-up">Deseja excluir mesmo? <a id="sim" href="">Sim</a><i onclick="endalert2()" class="x-2 far fa-times-circle"></i></div> -->

    <section id="conta">
        <div id="dadosconta">
            <div id="imgconta"></div>

            <h1 class="tituloconta">Dados cadastrais</h1>
            <h6>Nome</h6>
            <div onclick="nome_conta()">
                <input id="nome_conta" disabled value="<?php echo $nome; ?>" type="text">
            </div>
            <h6>Email</h6>
            <input id="email_conta" value="<?php echo $email; ?>" type="text">
            <h1 class="tituloconta">Alteração de Senha</h1>
            <h6>Senha Atual</h6>
            <input id="senhaatual" type="password">
            <h6>Nova Senha</h6>
            <input id="senhanova" type="password">
            <input id="senhanova2" type="password" placeholder="Digite a senha novamente">
            <span id="alterar" onclick="updatesenha()">Alterar dados</span>
            <?php echo '<a href="processamento/logout.php"> <span id="sair">Sair</span></a>'; ?>

        </div>

    </section>




    <script src="https://kit.fontawesome.com/210182064c.js" crossorigin="anonymous"></script>
    <script src="js/js.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

    <script>
        var visible1 = "<?php echo $visible1; ?>";
        var visible2 = "<?php echo $visible2; ?>";
        var visible3 = "<?php echo $visible3; ?>";
        var visible4 = "<?php echo $visible4; ?>";
        var visible5 = "<?php echo $visible5; ?>";
        var visible6 = "<?php echo $visible6; ?>";

        if (visible1 == 1) {

            var d = document.querySelector("#eye-1");
            d.style.display = "none";
            var d = document.querySelector("#eye-slash-1");
            d.style.display = "block";

        } else if (visible1 == 0) {
            var d = document.querySelector("#eye-1");
            d.style.display = "block";
            var d = document.querySelector("#eye-slash-1");
            d.style.display = "none";
        }


        if (visible2 == 1) {

            var d = document.querySelector("#eye-2");
            d.style.display = "none";
            var d = document.querySelector("#eye-slash-2");
            d.style.display = "block";

        } else if (visible1 == 0) {
            var d = document.querySelector("#eye-2");
            d.style.display = "block";
            var d = document.querySelector("#eye-slash-2");
            d.style.display = "none";
        }

        if (visible3 == 1) {

            var d = document.querySelector("#eye-3");
            d.style.display = "none";
            var d = document.querySelector("#eye-slash-3");
            d.style.display = "block";

        } else if (visible1 == 0) {
            var d = document.querySelector("#eye-3");
            d.style.display = "block";
            var d = document.querySelector("#eye-slash-3");
            d.style.display = "none";
        }

        if (visible4 == 1) {

            var d = document.querySelector("#eye-4");
            d.style.display = "none";
            var d = document.querySelector("#eye-slash-4");
            d.style.display = "block";

        } else if (visible4 == 0) {
            var d = document.querySelector("#eye-4");
            d.style.display = "block";
            var d = document.querySelector("#eye-slash-4");
            d.style.display = "none";
        }

        if (visible5 == 1) {

            var d = document.querySelector("#eye-5");
            d.style.display = "none";
            var d = document.querySelector("#eye-slash-5");
            d.style.display = "block";

        } else if (visible5 == 0) {
            var d = document.querySelector("#eye-5");
            d.style.display = "block";
            var d = document.querySelector("#eye-slash-5");
            d.style.display = "none";
        }

        if (visible6 == 1) {

            var d = document.querySelector("#eye-6");
            d.style.display = "none";
            var d = document.querySelector("#eye-slash-6");
            d.style.display = "block";

        } else if (visible6 == 0) {
            var d = document.querySelector("#eye-6");
            d.style.display = "block";
            var d = document.querySelector("#eye-slash-6");
            d.style.display = "none";
        }
    </script>

</body>

</html>
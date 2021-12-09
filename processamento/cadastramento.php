<?php
//iniciando sessão
session_start();
//conexao DB
include_once 'conexao_db.php';
//variavel vazia
$mensagem = '';
$mensagem2 = '';


////verificando se ja existe o login feito
if (isset($_SESSION["login"])) {
    header("location:admin.php");
}

//se não existir o lohin
if (!isset($_SESSION['login'])) {
    //açao no formulario 
    if (isset($_POST['cadastrar'])) {
        //pegando dados dos impunts
        $name = mysqli_escape_string($connect, trim($_POST['name']));
        $email = mysqli_escape_string($connect, trim($_POST['email']));
        $senha = mysqli_escape_string($connect, trim($_POST['senha']));
        $password = password_hash($senha, PASSWORD_DEFAULT);

        //verificando se usuario existe no banco de dados e exibindo os erros
        $query = "SELECT * FROM desfrutadores";
        $result = $connect->query($query);

        while ($row = mysqli_fetch_array($result)) {
            $nome = $row['nome'];
            $emailb = $row['email'];
            $id = $row['id'];
            if ($name == $row['nome'] and $email == $row['email']) {
                $mensagem = '  <div id="alerta">
                <i onclick="endalert()" class="x far fa-times-circle"></i>
                <p id="msg">Conta já criada!</p>
            </div> <script>       alerta.style.animation = "1s alerta";
            alerta.style.display = "block";
            alerta.style.animation = "1s alerta";
            setTimeout(function () { alerta.style.display = "none"; }, 8000);</script>';
                break;
            }

            if ($name == $row['nome']) {
                $mensagem = '  <div id="alerta">
                <i onclick="endalert()" class="x far fa-times-circle"></i>
                <p id="msg">Nome de usuario já existente!</p>
            </div> <script>       alerta.style.animation = "1s alerta";
            alerta.style.display = "block";
            alerta.style.animation = "1s alerta";
            setTimeout(function () { alerta.style.display = "none"; }, 8000);</script>';
                break;
            }
            if ($email == $row['email']) {
                $mensagem = '  <div id="alerta">
                <i onclick="endalert()" class="x far fa-times-circle"></i>
                <p id="msg">Email já existente!</p>
            </div> <script>       alerta.style.animation = "1s alerta";
            alerta.style.display = "block";
            alerta.style.animation = "1s alerta";
            setTimeout(function () { alerta.style.display = "none"; }, 8000);</script>';
                break;
            }
        }

        //CADASTRAMENTO
        if ($nome <> $name and $email <> $emailb ) {
            //pegando a data do cadastramento
            $hoje = date('d/m/Y');

            //cadastrando
            //$sql = "INSERT INTO desfrutadores  SET nome='$name', email='$email', senha='$password', datee='$hoje'";
             $sql = "INSERT INTO desfrutadores (nome, email, senha,datee) VALUES ('$name', '$email', '$password','$hoje')";
             if (mysqli_query($connect, $sql)) {

                //exibindo e mensagem
                $mensagem = '<div class="alert alert-success" role="alert"> cadastrado!</div>';

                //CRIANDO SUA PAGINA
                $arquivo = "usuarios/$name.php";
                $conteudo = file_get_contents('model.php');

                $arquivoaberto = fopen($arquivo, 'a');
                fwrite($arquivoaberto, $conteudo);
                fclose($arquivoaberto);
                //sesões para autenticação
                $_SESSION['login'] = $name;
                $_SESSION['id'] = $row['id'];

                //header("location:../usuarios/$name.php");
                //header("location:admin.php");
                unset($_SESSION['id']);
                session_destroy();
                unset($_SESSION['login']);
                session_destroy();
                header("location:index.php");

                mysqli_close($connect);
            }
        }
    }
}
//CONSERTAR!! DEPOIS DO CADASTRO ELE ENVIA PARA O LOGIN E N PARA O ADMIN, POR CAUSA DE UM ERRO 


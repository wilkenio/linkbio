<?php
//iniciando sessao
session_start();
//variavel
$mensagem = "";
//verificando se ja existe o login feito
if (isset($_SESSION["login"])) {
    header("location:admin.php");
}

//se não existir o lohin
if (!isset($_SESSION['login'])) {
    //  açao no submit
    if (isset($_POST['acao'])) {

        //INCLUINDO CONEXAO COM O DB
        include_once '../conexao_db.php';

        //Pegando dados dos inpunts
        $loginForm = mysqli_escape_string($connect, $_POST['login']);
        $senhaForm = mysqli_escape_string($connect, $_POST['senha']);

        //pegando dados do DB
        $query = "SELECT * FROM desfrutadores";
        $result = $connect->query($query);

        //consultando
        while ($row = mysqli_fetch_array($result)) {

            if ($loginForm == $row['nome'] and   password_verify($senhaForm, $row['senha'])) {
                $mensagem = '<div class="alert alert-success" role="alert">BEM VINDO!</div> ';
                $_SESSION['login'] = $loginForm;
                $_SESSION['id'] = $row['id'];
                /*$id = $row['id'] ;*/
                //header("location: usuarios/$loginForm.php");
                header("location:../admin.php");
            } else {
                header('location:../index.php?dados=invalidos');
            }
        }
    }
}

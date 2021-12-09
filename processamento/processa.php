<?php
//db | pagina principal
include_once '../conexao_db.php';
include_once '../admin.php';

//pegando e tratando os inpunts
$btn1 = mysqli_escape_string($connect, trim($_POST['namebtn']));
$btn2 = mysqli_escape_string($connect, trim($_POST['namebtna']));
$btn3 = mysqli_escape_string($connect, trim($_POST['namebtnb']));
$btn4 = mysqli_escape_string($connect, trim($_POST['namebtnc']));
$btn5 = mysqli_escape_string($connect, trim($_POST['namebtnd']));
$btn6 = mysqli_escape_string($connect, trim($_POST['namebtne']));

$urlaa = mysqli_escape_string($connect, trim($_POST['nameurl']));
$urla = mysqli_escape_string($connect, trim($_POST['nameurla']));
$urlb = mysqli_escape_string($connect, trim($_POST['nameurlb']));
$urlc = mysqli_escape_string($connect, trim($_POST['nameurlc']));
$urld = mysqli_escape_string($connect, trim($_POST['nameurld']));
$urle = mysqli_escape_string($connect, trim($_POST['nameurle']));



//Se existir ação no inpunt, cadastre no DB (cadastrando em tempo real)
if (isset($_POST['namebtn'])) {
  $sqli = "UPDATE desfrutadores SET titulo='$btn1' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['nameurl'])) {
  $sqli = "UPDATE desfrutadores  SET urlaa='$urlaa' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
//
if (isset($_POST['namebtna'])) {
  $sqli = "UPDATE desfrutadores SET tituloa='$btn2' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['nameurla'])) {
  $sqli = "UPDATE desfrutadores SET urla='$urla' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
//
if (isset($_POST['namebtnb'])) {
  $sqli = "UPDATE desfrutadores SET titulob='$btn3' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['nameurlb'])) {
  $sqli = "UPDATE desfrutadores SET urlb='$urlb' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
//
if (isset($_POST['namebtnc'])) {
  $sqli = "UPDATE desfrutadores SET tituloc='$btn4' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['nameurlc'])) {
  $sqli = "UPDATE desfrutadores SET urlc='$urlc' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
//
if (isset($_POST['namebtnd'])) {
  $sqli = "UPDATE desfrutadores SET titulod='$btn5' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['nameurld'])) {
  $sqli = "UPDATE desfrutadores SET urld='$urld' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
//
if (isset($_POST['namebtne'])) {
  $sqli = "UPDATE desfrutadores SET tituloe='$btn6' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['nameurle'])) {
  $sqli = "UPDATE desfrutadores SET urle='$urle' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
//Troca de senha




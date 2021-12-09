<?php
//db | pagina principal
include_once '../conexao_db.php';
include_once '../admin.php';

if (isset($_POST['lixeira1'])) {
  $sqli = "UPDATE desfrutadores SET titulo='', urlaa='' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['lixeira2'])) {
  $sqli = "UPDATE desfrutadores SET tituloa='', urla='' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['lixeira3'])) {
  $sqli = "UPDATE desfrutadores SET titulob='', urlb='' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['lixeira4'])) {
  $sqli = "UPDATE desfrutadores SET tituloc='', urlc='' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['lixeira5'])) {
  $sqli = "UPDATE desfrutadores SET titulod='', urld='' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['lixeira6'])) {
  $sqli = "UPDATE desfrutadores SET tituloe='', urle='' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

/////////////////////////////////

if (isset($_POST['visible1'])) {
  $sqli = "UPDATE desfrutadores SET visible1='1' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['visibleinvert1'])) {
  $sqli = "UPDATE desfrutadores SET visible1='0' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['visible2'])) {
  $sqli = "UPDATE desfrutadores SET visible2='1' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['visibleinvert2'])) {
  $sqli = "UPDATE desfrutadores SET visible2='0' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['visible3'])) {
  $sqli = "UPDATE desfrutadores SET visible3='1' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['visibleinvert3'])) {
  $sqli = "UPDATE desfrutadores SET visible3='0' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['visible4'])) {
  $sqli = "UPDATE desfrutadores SET visible4='1' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['visibleinvert4'])) {
  $sqli = "UPDATE desfrutadores SET visible4='0' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['visible5'])) {
  $sqli = "UPDATE desfrutadores SET visible5='1' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['visibleinvert5'])) {
  $sqli = "UPDATE desfrutadores SET visible5='0' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['visible6'])) {
  $sqli = "UPDATE desfrutadores SET visible6='1' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
if (isset($_POST['visibleinvert6'])) {
  $sqli = "UPDATE desfrutadores SET visible6='0' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
//-----------------
if (isset($_POST['fundo'])) {
  $fundo =  mysqli_escape_string($connect, $_POST['fundo']);


  $sqli = "UPDATE desfrutadores SET cordefundo='$fundo' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['corbotoes'])) {

  $corbotoes =  mysqli_escape_string($connect, $_POST['corbotoes']);

  $sqli = "UPDATE desfrutadores SET  corbotoes='$corbotoes' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}

if (isset($_POST['colorfont'])) {

  $colorfont =  mysqli_escape_string($connect, $_POST['colorfont']);

  $sqli = "UPDATE desfrutadores SET  corletras='$colorfont' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}
//                                     CONFIG DA CONTA                             //                      
//pegando dados do DB
$query = "SELECT * FROM desfrutadores WHERE id=$id";
$result = $connect->query($query);
while ($row = mysqli_fetch_array($result)) {

  //condicionais
  if (isset($_POST['senhaatuala'])) {
    //filtrando inpunts 
    $senhaatual =  mysqli_escape_string($connect, $_POST['senhaatuala']);
    $senhanova = mysqli_escape_string($connect, $_POST['senhanovaa']);
    $senhanova2 = mysqli_escape_string($connect, $_POST['senhanovab']);
    $newname = mysqli_escape_string($connect, $_POST['novonome']);
    $newemail = mysqli_escape_string($connect, $_POST['novoemail']);

    //cadastrando nome e email
    $sqli = "UPDATE desfrutadores SET /*nome='$newname',*/ email='$newemail'  WHERE id=$id";
    $resultado = mysqli_query($connect, $sqli);

    if (password_verify($senhaatual, $row['senha'])) {

      if ($senhanova == $senhanova2) {
        //transformando nova senha em uma hash
        $passwordnew = password_hash($senhanova2, PASSWORD_DEFAULT);

        //armazenando no DB
        $sqli = "UPDATE desfrutadores SET senha='$passwordnew' WHERE id=$id";
        $resultado = mysqli_query($connect, $sqli);
      }
    } else if ($senhaatual !== null or "") {
    }
  }
}



/*$query = "SELECT * FROM usuarios WHERE id=$id";
$result = $connect->query($query);
while ($row = mysqli_fetch_array($result)) {

if(password_verify('741852',$row['senha'])){
  $sqli = "UPDATE usuarios SET nome='OK' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
}else{
  $sqli = "UPDATE usuarios SET nome='no' WHERE id=$id";
  $resultado = mysqli_query($connect, $sqli);
  echo$row['senha'];
  //echo$id;
}
}*/



/*
$sqli = "UPDATE usuarios  SET 
titulo='$btn1', urlaa='$urlaa', 
tituloa='$btn2',urla='$urla', 
titulob='$btn3', urlb='$urlb',
tituloc='$btn4', urlc='$urlc',
titulod='$btn5', urld='$urld',
tituloe='$btn6', urle='$urle'
WHERE id=$id";
$resultado = mysqli_query($connect, $sqli);*/

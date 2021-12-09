<?php
session_start();
include_once '../conexao_db.php';

$id = $_SESSION['id'];

$query = "SELECT * FROM desfrutadores WHERE id='$id'";
$result = $connect->query($query);


//consultando
while ($row = mysqli_fetch_array($result)) {
    $titulo = $row['titulo'];
    $tituloa = $row['tituloa'];
    $titulob = $row['titulob'];
    $tituloc = $row['tituloc'];
    $titulod = $row['titulod'];
    $tituloe = $row['tituloe'];

    $urlaa = $row['urlaa'];
    $urla = $row['urla'];
    $urlb = $row['urlb'];
    $urlc = $row['urlc'];
    $urld = $row['urld'];
    $urle = $row['urle'];

    $visible1 = $row['visible1'];
    $visible2 = $row['visible2'];
    $visible3 = $row['visible3'];
    $visible4 = $row['visible4'];
    $visible5 = $row['visible5'];
    $visible6 = $row['visible6'];

    $cordefundo = $row['cordefundo'];
    $corbotoes = $row['corbotoes'];
    $corletras = $row['corletras'];
}
?>
  

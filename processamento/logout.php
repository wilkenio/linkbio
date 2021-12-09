<?php 
session_start();

if(isset($_SESSION['login'])){
    
    unset($_SESSION['login']);
    session_destroy();
    header('location:../index.php');

}else{
    header('location:../index.php');
}

if(isset($_SESSION['id'])){
    
    unset($_SESSION['id']);
    session_destroy();
    header('location:../index.php');

}else{
    header('location:../index.php');
}
?>
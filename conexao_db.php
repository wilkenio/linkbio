<?php 
//CONEXÃO DB
$servername= "localhost";
$username= 'root';
$password='';
$db_name='db_bio';

$connect = mysqli_connect($servername, $username, $password, $db_name);
 //SE HOUVER ERRO NA CONEXÃO
/*if(mysqli_connect_error()){
    echo"ACONTECEU ALGUM ERRO";
}else{
    echo"tudo certo";
}*/
?>
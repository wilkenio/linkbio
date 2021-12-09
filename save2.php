<?php 

$id = $_SESSION['id'];

 $query = "SELECT visible1,visible2,visible3,visible4,visible5,visible6 FROM desfrutadores WHERE id='$id'";
 $result = $connect->query($query);

 //consultando
 while ($row = mysqli_fetch_array($result)) {
    $visible1 = $row['visible1'];
    $visible2 = $row['visible2'];
    $visible3 = $row['visible3'];
    $visible4 = $row['visible4'];
    $visible5 = $row['visible5'];
    $visible6 = $row['visible6'];

 }


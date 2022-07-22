<?php

include("../data_base.php");
$con=conectar();

$id=$_GET['id'];

$sql="DELETE FROM personas WHERE id = '$id'";
$query=mysqli_query($con, $sql);

    if($query){
        Header("Location: ../index.php");
    }
?>
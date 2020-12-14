<?php
session_start();
include "db.php";

$sql = mysqli_query($enlace, "INSERT INTO participar (id_usuario) VALUES ( '". $_SESSION['id'] ."' )");

if($sql){
    echo "1";
}
<?php
session_start();
include "db.php";

$sql = mysqli_query($enlace, "INSERT INTO favoritos (id_anuncio,id_usuario) VALUES ('". $_GET['anuncio'] ."', '". $_SESSION['id'] ."')");

if($sql){
    echo "1";
}
<?php
session_start();
include "db.php";

/*$sql = mysqli_query($enlace, "INSERT INTO favoritos (id_anuncio,id_usuario) VALUES ('". $_GET['anuncio'] ."', '". $_SESSION['id'] ."')");*/

$sql = mysqli_query($enlace, "DELETE FROM favoritos WHERE id_anuncio = '".$_GET['anuncio']."' AND id_usuario = '". $_SESSION['id'] ."'");

if($sql){
    echo "1";
}
<?php
$temp = explode(".", $_FILES["file"]["name"]); 
$newfilename = round(microtime(true)) . '.' . end($temp); 
move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $newfilename);


session_start();
require_once 'db.php';

$id_anuncio =  $_SESSION['anuncio_verificar'];
    $sql = mysqli_query($enlace, "INSERT INTO verificacion_fotos (id_anuncio, imagen) VALUES ('$id_anuncio', '". $newfilename ."')");

    if($sql){
        echo "Todo correcto";
    }
    else{
        echo 0;
    }
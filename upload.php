<?php
$temp = explode(".", $_FILES["file"]["name"]); 
$newfilename = round(microtime(true)) . '.' . end($temp); 
move_uploaded_file($_FILES["file"]["tmp_name"], "images/" . $newfilename);


session_start();
require_once 'db.php';

$id_anuncio =  $_SESSION['id_anuncio'];
    $sql = mysqli_query($enlace, "INSERT INTO imagenes (id_anuncio, imagen) VALUES ('$id_anuncio', '". $newfilename ."')");

    if($sql){
        $sql2 = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $id_anuncio ."'");
        while($row = mysqli_fetch_array($sql2)){
            $imagen = $row['imagen'];
            echo"<div class='col-lg-2 col-4'>
				<img src='images/$imagen' class='w-100 mt-2' alt=''>
			</div>";
        }
    }
    else{
        echo 0;
    }
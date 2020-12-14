<?php


$temp = explode(".", $_FILES["file"]["name"]); 
$newfilename = round(microtime(true)) . '.' . end($temp); 

$rutaImagenOriginal = $_FILES["file"]["tmp_name"];
$rutaMarcaDeAgua =  "marca_agua.png";

$original = imagecreatefrompng($rutaImagenOriginal);
$marcaDeAgua = imagecreatefrompng($rutaMarcaDeAgua);

# Como vamos a centrar  necesitamos sacar antes las anchuras y alturas
$anchuraOriginal = imagesx($original);
$alturaOriginal = imagesy($original);
$alturaMarcaDeAgua = imagesy($marcaDeAgua);
$anchuraMarcaDeAgua = imagesx($marcaDeAgua);
# En dónde poner la marca de agua sobre la original
$centroHorizontalDeOriginal = floor($anchuraOriginal / 2);
$centroHorizontalDeMarcaDeAgua = floor($anchuraMarcaDeAgua / 2);
$centroVerticalDeOriginal = floor($alturaOriginal / 2);
$centroVerticalDeMarcaDeAgua = floor($alturaMarcaDeAgua / 2);
$centroHorizontal = $centroHorizontalDeOriginal - $centroHorizontalDeMarcaDeAgua;
$centroVertical = $centroVerticalDeOriginal - $centroVerticalDeMarcaDeAgua;

$xOriginal = $centroHorizontal;
$yOriginal = $centroVertical;
# Desde dónde comenzar a cortar la marca de agua (si son 0, se comienza desde el inicio)
$xMarcaDeAgua = 0;
$yMarcaDeAgua = 0;
# Hasta dónde poner la marca de agua sobre la original
$alturaMarcaDeAgua = $alturaMarcaDeAgua - $yMarcaDeAgua;
$anchuraMarcaDeAgua = $anchuraMarcaDeAgua - $xMarcaDeAgua;
imagecopy($original, $marcaDeAgua, $xOriginal, $yOriginal, $xMarcaDeAgua, $yMarcaDeAgua, $anchuraMarcaDeAgua, $alturaMarcaDeAgua);

# Imprimir y liberar recursos
header('Content-Type: image/png');


move_uploaded_file(imagepng($original), "images/" . $newfilename);

imagedestroy($original);
imagedestroy($marcaDeAgua);

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
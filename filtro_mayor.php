<?php
include "db.php";

    $sql = "SELECT id_anuncio FROM caracteristicas WHERE id_anuncio > 0";
    $valores = explode(",", $_POST['in_discapacitados']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_parejas']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_mujeres']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_agencia']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_independiente']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_whatsapp']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    if($_POST['pais'] != 0){ $sql .=  " AND pais = '". $_POST['pais'] ."'"; }

    $result = mysqli_query($enlace, $sql);


    if($result){
        echo $sql . "<br> <br>";
        echo "Ejecutado Correctamente";
    }
?>
<?php
include "db.php";
$min_precio = $_POST['min_precio'];
$max_precio = $_POST['max_precio'];

$baratas = explode(",", $_POST['in_baratas']);
$a1 = explode(",", $_POST['in_a1']);

$joven = explode(",", $_POST['in_joven']);
$madura = explode(",", $_POST['in_madura']);

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

    if($_POST['pais'] != 0){  } else{ $sql .=  " AND pais = '". $_POST['pais'] ."'"; }

    $valores = explode(",", $_POST['in_andina']);
    if($valores[1] == 1){ $sql .=  " AND etnia = '1'"; }
    $valores = explode(",", $_POST['in_morena']);
    if($valores[1] == 1){ $sql .=  " AND etnia = '2'"; }
    $valores = explode(",", $_POST['in_blanca']);
    if($valores[1] == 1){ $sql .=  " AND etnia = '3'"; }
    $valores = explode(",", $_POST['in_triguena']);
    if($valores[1] == 1){ $sql .=  " AND etnia = '4'"; }

    $valores = explode(",", $_POST['in_bajas']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_altas']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_naturales']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_tetonas']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_negro']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_rojas']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_rubia']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_delgadas']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_gorditas']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_depiladas']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_sin_depilar']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_actriz']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_besos']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_cuerpo']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_facial']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_disfraces']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_eroticos']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_anal']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_novia']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_trio']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_domicilio']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_cena']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_viajes']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_club_inter']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_departamento']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_despedida']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_club']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_hotel']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_eventos']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_blanco']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_benegro']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_copro']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_fetichismo']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_profunda']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_suave']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_duro']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_dorada']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_strap']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $valores = explode(",", $_POST['in_squirting']);
    if($valores[1] == 1){ $sql .=  " AND $valores[0] = '$valores[1]'"; }

    $result = mysqli_query($enlace, $sql);
    if(!$result){
        echo "Aqui hay un error";
    }
    $num = mysqli_num_rows($result);

    echo $num;
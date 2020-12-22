<?php
include "db.php";
$min_precio = $_POST['min_precio'];
$max_precio = $_POST['max_precio'];

$baratas = explode(",", $_POST['in_baratas']);
$a1 = explode(",", $_POST['in_a1']);

$joven = explode(",", $_POST['in_joven']);
$madura = explode(",", $_POST['in_madura']);

$sql = "SELECT id_anuncio FROM caracteristicas WHERE id > 0";
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
    if($num > 0){
        while($row_re = mysqli_fetch_array($result)){
            $id = $row_re['id_anuncio'];

            $min_edad = $_POST['min_edad'];
            $max_edad = $_POST['max_edad'];

            $verificado = explode(",", $_POST['in_verificado']);

            if($verificado[1] == 1){
                echo "verificado <br>";
                $sqlve = "SELECT * FROM anuncio WHERE id_anuncio = '$id' AND verificado = 1 AND estado = 1";
                if($a1[1] == 0 && $baratas[1] == 0){
                    if($max_precio > 0){ $sqlve .= "AND max_precio <= '$max_precio'"; }
                    if($min_precio > 0){ $sqlve .= "AND min_precio >= '$min_precio'"; }
                }
                else{
                    if($a1[1] > 0){ $sqlve .= "AND a1 = '1'"; }
                    elseif($baratas[1] > 0) { $sqlve .= "AND barata = '1'"; }
                }

                if($joven[1]  == 0 && $madura[1] == 0){
                    if($min_edad > 0){ $sqlve .= "AND edad >= '$min_edad'"; }
                    if($max_edad > 0){ $sqlve .= "AND edad <= '$max_edad'"; }
                }
                else{
                    if($joven[1] > 0){ $sqlve .= "AND edad <= '35'"; }
                    else{ $sqlve .= "AND edad >= '35'"; }
                }

                $resultve = mysqli_query($enlace, $sqlve);
                $numve = mysqli_num_rows($resultve);

                if($numve > 0){
                    $sqlfinal = mysqli_query($enlace, "SELECT anuncio.id AS ID, anuncio.verificado AS Verificado, anuncio.nombre AS Nombre, anuncio.edad AS Edad, anuncio.distrito, anuncio.provincia, anuncio.departamento, distritos.distrito AS Distrito, anuncio.pais AS Pais FROM anuncio INNER JOIN distritos ON anuncio.distrito = distritos.id WHERE anuncio.id = '$id'");
                    $rowfinal = mysqli_fetch_array($sqlfinal);

                    $sqlq = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $rowfinal['ID'] ."' LIMIT 1");
                    $rowq = mysqli_fetch_array($sqlq);
                    $sqlp = mysqli_query($enlace, "SELECT min(costo) AS PrecioMinimo FROM tarifas WHERE id_anuncio = '". $rowfinal['ID']."'");
                    $rowp = mysqli_fetch_array($sqlp);

                    ?>
                        <div class="col-lg-2 col-6 px-1 mx-0">
			<div class="card card1" >
				<img src="images/<?= $rowq['imagen'] ?>" class="imagen1x" alt="" onclick="mostrar_modal('<?= $row['ID'] ?>')">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
	<div class="col-12 " onclick="mostrar_modal('<?= $rowfinal['ID'] ?>')"><p><?= $rowfinal['Nombre'] ?> <?php if($rowfinal['Verificado'] == 1){  ?> <img src="img/Grupo 139.svg" alt="" class="ml-1"><?php } ?></p></div>
								
							</div>
						</div>
						<div class="col-4">

						<?php if(isset($_SESSION['id']) && $_SESSION['tipo'] == 1){
							$id = $rowfinal['ID'];
							$sqlllll = mysqli_query($enlace, "SELECT id FROM favoritos WHERE id_anuncio = '$id' AND id_usuario = '". $_SESSION['id'] ."'");
							$nummmmm = mysqli_num_rows($sqlllll);
							if($nummmmm > 0){
							?>
							<i class="fas fa-heart f2 color3"></i>
							<?php } else{ ?>

						<i class="fas fa-heart f2" onclick="agregar_favoritos('<?=  $id ?>')" id="id_<?=  $id ?>"></i>
						<?php } }
						elseif(isset($_SESSION['id'])){
						 ?>
						<i class="fas fa-heart f2"></i>
						<?php }
						else{?>
							<i class="fas fa-heart f2" data-toggle="modal" data-target="#sesion"></i>
						<?php }
						?>

						

						</div>
					</div>
				<div onclick="mostrar_modal('<?= $rowfinal['ID'] ?>')">
					<span class="badge badge-pill badge-light"><?= $rowfinal['Distrito'] ?></span>
					<span class="badge badge-pill badge-light"><?= $rowfinal['Edad'] ?> a単os</span>
					<span class="badge badge-pill badge-light">S/ <?= $rowp['PrecioMinimo'] ?></span>
					<span class="badge badge-pill badge-light"><?= $rowfinal['Pais'] ?></span>
				</div>
				</div>
			</div>

			</div>
                    <?php
                }
                else{}
                
            }
            else{
                echo "no verificado";
                $sqlve = "SELECT * FROM anuncio WHERE id_anuncio = '$id' AND estado = 1";
                if($a1[1] == 0 && $baratas[1] == 0){
                    if($max_precio > 0){ $sqlve .= "AND max_precio <= '$max_precio'"; }
                    if($min_precio > 0){ $sqlve .= "AND min_precio >= '$min_precio'"; }
                }
                else{
                    if($a1[1] > 0){ $sqlve .= "AND a1 = '1'"; }
                    elseif($baratas[1] > 0) { $sqlve .= "AND barata = '1'"; }
                }

                if($joven[1]  == 0 && $madura[1] == 0){
                    if($min_edad > 0){ $sqlve .= "AND edad >= '$min_edad'"; }
                    if($max_edad > 0){ $sqlve .= "AND edad <= '$max_edad'"; }
                }
                else{
                    if($joven[1] > 0){ $sqlve .= "AND edad <= '35'"; }
                    else{ $sqlve .= "AND edad >= '35'"; }
                }

                $resultve = mysqli_query($enlace, $sqlve);
                $numve = mysqli_num_rows($resultve);

                if($numve > 0){
                    $sqlfinal = mysqli_query($enlace, "SELECT anuncio.id AS ID, anuncio.verificado AS Verificado, anuncio.nombre AS Nombre, anuncio.edad AS Edad, anuncio.distrito, anuncio.provincia, anuncio.departamento, distritos.distrito AS Distrito, anuncio.pais AS Pais FROM anuncio INNER JOIN distritos ON anuncio.distrito = distritos.id WHERE anuncio.id = '$id'");
                    $rowfinal = mysqli_fetch_array($sqlfinal);

                    $sqlq = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $rowfinal['ID'] ."' LIMIT 1");
                    $rowq = mysqli_fetch_array($sqlq);
                    $sqlp = mysqli_query($enlace, "SELECT min(costo) AS PrecioMinimo FROM tarifas WHERE id_anuncio = '". $rowfinal['ID']."'");
                    $rowp = mysqli_fetch_array($sqlp);

                    ?>
                        <div class="col-lg-2 col-6 px-1 mx-0">
			<div class="card card1" >
				<img src="images/<?= $rowq['imagen'] ?>" class="imagen1x" alt="" onclick="mostrar_modal('<?= $row['ID'] ?>')">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
	<div class="col-12 " onclick="mostrar_modal('<?= $rowfinal['ID'] ?>')"><p><?= $rowfinal['Nombre'] ?> <?php if($rowfinal['Verificado'] == 1){  ?> <img src="img/Grupo 139.svg" alt="" class="ml-1"><?php } ?></p></div>
								
							</div>
						</div>
						<div class="col-4">

						<?php if(isset($_SESSION['id']) && $_SESSION['tipo'] == 1){
							$id = $rowfinal['ID'];
							$sqlllll = mysqli_query($enlace, "SELECT id FROM favoritos WHERE id_anuncio = '$id' AND id_usuario = '". $_SESSION['id'] ."'");
							$nummmmm = mysqli_num_rows($sqlllll);
							if($nummmmm > 0){
							?>
							<i class="fas fa-heart f2 color3"></i>
							<?php } else{ ?>

						<i class="fas fa-heart f2" onclick="agregar_favoritos('<?=  $id ?>')" id="id_<?=  $id ?>"></i>
						<?php } }
						elseif(isset($_SESSION['id'])){
						 ?>
						<i class="fas fa-heart f2"></i>
						<?php }
						else{?>
							<i class="fas fa-heart f2" data-toggle="modal" data-target="#sesion"></i>
						<?php }
						?>

						

						</div>
					</div>
				<div onclick="mostrar_modal('<?= $rowfinal['ID'] ?>')">
					<span class="badge badge-pill badge-light"><?= $rowfinal['Distrito'] ?></span>
					<span class="badge badge-pill badge-light"><?= $rowfinal['Edad'] ?> a単os</span>
					<span class="badge badge-pill badge-light">S/ <?= $rowp['PrecioMinimo'] ?></span>
					<span class="badge badge-pill badge-light"><?= $rowfinal['Pais'] ?></span>
				</div>
				</div>
			</div>

			</div>
                    <?php
                }
                else{}
                
            }
        }
    }
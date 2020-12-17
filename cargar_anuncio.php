<?php 
require_once "db.php";
mysqli_set_charset($enlace,"utf8");
session_start();

if(isset($_POST["limit"], $_POST["start"]))
{
	$sql = mysqli_query($enlace, "SELECT anuncio.id AS ID, anuncio.verificado AS Verificado, anuncio.nombre AS Nombre, anuncio.edad AS Edad, anuncio.distrito, anuncio.provincia, anuncio.departamento, distritos.distrito AS Distrito, anuncio.pais AS Pais FROM anuncio INNER JOIN distritos ON anuncio.distrito = distritos.id WHERE estado = 1 ORDER BY orden DESC LIMIT ".$_POST["start"].", ".$_POST["limit"]."");
	if(!$sql){echo "error".mysqli_error($enlace);}
$num = mysqli_num_rows($sql);


while($row = mysqli_fetch_array($sql)){
		$sqlq = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $row['ID'] ."' LIMIT 1");
		$rowq = mysqli_fetch_array($sqlq);
		$sqlp = mysqli_query($enlace, "SELECT min(costo) AS PrecioMinimo FROM tarifas WHERE id_anuncio = '". $row['ID']."'");
		$rowp = mysqli_fetch_array($sqlp);
		if(!$sqlp){
			echo "error";
		}
		?>
			
			<div class="col-lg-2 col-6 px-1 mx-0">
			<div class="card card1" >
				<img src="images/<?= $rowq['imagen'] ?>" class="imagen1x" alt="" onclick="mostrar_modal('<?= $row['ID'] ?>')">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
	<div class="col-12 " onclick="mostrar_modal('<?= $row['ID'] ?>')"><p><?= $row['Nombre'] ?> <?php if($row['Verificado'] == 1){  ?> <img src="img/Grupo 139.svg" alt="" class="ml-1"><?php } ?></p></div>
								
							</div>
						</div>
						<div class="col-4">

						<?php if(isset($_SESSION['id']) && $_SESSION['tipo'] == 1){
							$id = $row['ID'];
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
				<div onclick="mostrar_modal('<?= $row['ID'] ?>')">
					<span class="badge badge-pill badge-light"><?= $row['Distrito'] ?></span>
					<span class="badge badge-pill badge-light"><?= $row['Edad'] ?> años</span>
					<span class="badge badge-pill badge-light">S/ <?= $rowp['PrecioMinimo'] ?></span>
					<span class="badge badge-pill badge-light"><?= $row['Pais'] ?></span>
				</div>
				</div>
			</div>

			</div>

		
			
	<?php } } else{echo "No esta imprimiendo nada";}?>
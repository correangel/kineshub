<?php 
session_start();
require_once "db.php";
mysqli_set_charset($enlace,"utf8");
$sql = mysqli_query($enlace, "SELECT anuncio.id AS ID, anuncio.verificado AS Verificado, anuncio.nombre AS Nombre, anuncio.edad AS Edad, anuncio.distrito, anuncio.provincia, anuncio.departamento, distritos.distrito AS Distrito, anuncio.pais AS Pais FROM anuncio INNER JOIN distritos ON anuncio.distrito = distritos.id WHERE estado = 1");
$num = mysqli_num_rows($sql);

$sql_fav = mysqli_query($enlace, "SELECT * FROM favoritos WHERE id_usuario = '". $_SESSION['id'] ."'");
if(isset($_SESSION['id'])){
	include "include/header2.php";
}
else{
	include "include/header.php";
}
 ?>

<main>
	<div class="container-fluid">
		
	<div class="d-none d-md-block">
		<div class="row d-flex align-items-center ">
		<div class="col-lg-6">
			<div class="row d-flex justify-content-start">
				<div class="col-lg-4 ">
					<button class="btn text-dark boton8 font-weight-bold px-4"><i class="fas fa-tag pr-3"></i> Promociones</button>
				</div>
				<div class="col-lg-4  ">
					<button class="btn boton9 text-white  font-weight-bold px-4" data-toggle="modal" data-target="#ubicacion"><i class="fas fa-map-marker-alt mr-3"></i> Ubicación</button>
				</div>
				<div class="col-lg-4 ">
					<button class="btn boton10 text-white  font-weight-bold px-4"  data-toggle="modal" data-target="#filtro"><i class="fas fa-filter mr-3"></i> Filtros</button>
				</div>
			</div>
		</div>
		<div class="col-lg-6 ">
			
				<div class="row d-flex justify-content-end align-items-center">
				<div class="col-lg-4"><p class="font-weight-bold text-center pt-4">Contacto</p></div>
				<div class="col-lg-4">
					<div class="fondo1">
						<p class="pt-2 font-weight-bold text-center"><i class="fas fa-heart text-danger mr-3"></i> Favotiro <span class="ml-3">0</span></p>
					</div>
					

				</div>
			
			</div>
			
		</div>
	</div>
	</div>

	<div class="row">
		<div class="card-columns">
			<?php while($row2 = mysqli_fetch_array($sql_fav)){
        $sql = mysqli_query($enlace, "SELECT anuncio.id AS ID, anuncio.verificado AS Verificado, anuncio.nombre AS Nombre, anuncio.edad AS Edad, anuncio.distrito, anuncio.provincia, anuncio.departamento, distritos.distrito AS Distrito, anuncio.pais AS Pais FROM anuncio INNER JOIN distritos ON anuncio.distrito = distritos.id WHERE anuncio.id = '". $row2['id_anuncio'] ."'");
        if(!$sql){echo "error".mysqli_error($enlace);}
        $row = mysqli_fetch_array($sql);
        $sqlq = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $row['ID'] ."' LIMIT 1");
        if(!$sqlq){echo "error".mysqli_error($enlace);}
		$rowq = mysqli_fetch_array($sqlq);
		$sqlp = mysqli_query($enlace, "SELECT min(costo) AS PrecioMinimo FROM tarifas WHERE id_anuncio = '". $row['ID']."'");
        if(!$sqlp){echo "error".mysqli_error($enlace);}
        $rowp = mysqli_fetch_array($sqlp);
		if(!$sqlp){
			echo "error";
		}
		?>

			<div class="card">
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
				<div>
					<button type="button" onclick="quitar_favoritos('<?= $row['ID'] ?>')" class="close cerrar1" style="position: absolute;top: 0;right: 0;" >
          <span aria-hidden="true">×</span>
        </button>
				</div>
			</div>
<?php } ?>
		</div>
	</div>
	
	</div>

</main>

<script type="text/javascript">
	function quitar_favoritos(anuncio) {
		$.ajax({
                              url:   'include/eliminar_favoritos.php?anuncio=' + anuncio, 
                              type:  'GET',
                              success:  function (response){
                              	 location.reload();
                              }
                            });
	}
</script>


 		<?php 
	include "modal.php";
	include "include/footer.php";
	
 ?>
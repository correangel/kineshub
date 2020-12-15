<?php 
 session_start(); 
 if(isset($_SESSION['id'])){
	 if($_SESSION['tipo'] == 1){
		 header("Location: user.php");
	 }
	 
	include "include/header2.php";
 }
else{
	header("Location: index.php");
}

$url_admin = "http://localhost/admin/";

include "db.php";
$sql = mysqli_query($enlace, "SELECT * FROM promociones");
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
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
				<?php if(isset($_SESSION['id']) && $_SESSION['tipo'] == 1){?>
					<div class="fondo1">
						<p class="pt-2 font-weight-bold text-center"><i class="fas fa-heart text-danger mr-3"></i> <a href="favoritos.php">Favotiro <span class="ml-3">
						 <?php
              $sqlll = mysqli_query($enlace, "SELECT id FROM favoritos WHERE id_usuario = '". $_SESSION['id'] ."'");
              $nummm = mysqli_num_rows($sqlll);    
              
              echo $nummm;
            ?>
						</a></span></p>
					</div>
				<?php } ?>
				</div>
			
			</div>
			
		</div>
	</div>
	</div>
	<h2 class="color5 f10 ml-md-2 font-weight-bolder mt-4 d-none d-md-block">PROMOCIONES ACTIVAS</h2>
	<div class="container">
		<h2 class="color5 f10 mt-4 f14 font-weight-bold mb-3 d-block d-md-none">PROMOCIONES ACTIVAS</h2>
	</div>
	
<div class="container-fluid d-none d-md-block">
	<div class="row d-flex  text-center mt-2 mt-md-5">
		<?php
			while($row = mysqli_fetch_array($sql)){
		?>
		<div class="col-lg-3">
			<a href="<?= $row['link'] ?>"><img src="<?= $url_admin ?>images/<?= $row['imagen'] ?>" class="w-100" alt=""></a>
		</div>

		<?php
			}
		?>
		
	</div>
</div>
	
	</div>
	
			<div class="mt-5 mb-4 text-center ">
			<p class="grey-text f3">@Kineshub 2020. <br> Todos los derechos reservados.</p>
		</div>
</main>


 		<?php 
	include "modal.php";
	include "include/footer.php";
	
 ?>
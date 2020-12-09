<?php
 session_start(); 
 if(isset($_SESSION['id'])){
	include "include/header2.php";
 }
else{
	header("Location: index.php");
}
	
 ?>
<main>
	<div class="container-fluid">
					<!-- movil  -->

		
		<!-- fin movil  -->
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
	<div class="mt-3 d-block d-md-none">
		<img src="img/Grupo 4191.svg" class="w-100" style="" alt="">
	</div>
	<div class="mt-3 d-none d-md-block">
		<img src="img/Grupo 420.svg" class="w-100" style="" alt="">
	</div>
	<div class="container">
		<div class="row mt-md-5 d-flex justify-content-center">
			<div class="col-lg-4 col-12 ">
				<div class="flex-center">	<button class="btn boton22   d-flex align-items-center" onclick="$(location).attr('href','cambiacontraseña.php');">
					<img src="img/Icon material-security.svg" width="15" alt=""><p class="d-inline-block pb-0 ml-2 mb-0">Cambiar contraseña</p>	</button>
				</div>

			
			</div>
			<div class="col-lg-4 col-12 ">
				<div class="flex-center">
					<button class="btn boton22   d-flex align-items-center">
					<img src="img/Icon material-delete.svg" width="15" alt=""><p class="d-inline-block pb-0 ml-2 mb-0" onclick="$(location).attr('href','eliminarcuenta.php');">Eliminar Cuenta</p>	</button>
				</div>
				
			</div>
			<div class="col-lg-4 col-12 ">
				<div class="flex-center">
					
				<button class="btn boton22   d-flex align-items-center" onclick="$(location).attr('href','contacto.php');">
					<img src="img/Icon material-perm-contact-calendar.svg" width="15" alt=""><p class="d-inline-block pb-0 ml-2 mb-0">Contactar</p>	</button>
				</div>

			</div>
		</div>
	</div>
	</div>
<div class=" fixed-bottom text-center d-none d-md-block">
			<p class="grey-text f3">@Kineshub 2020. <br> Todos los derechos reservados.</p>
		</div>
			<div class="my-4 fixed-bottom text-center d-block d-md-none">
			<p class="grey-text f3">@Kineshub 2020. <br> Todos los derechos reservados.</p>
		</div>
</main>


 		<?php 
	include "modal.php";
	include "include/footer.php";
	
 ?>
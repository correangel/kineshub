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
		<img src="img/Grupo 4211.svg" class="w-100" style="" alt="">
	</div>
	<div class="mt-3 d-none d-md-block">
		<img src="img/Grupo 394.svg" class="w-100" style="" alt="">
	</div>

	<div class="text-center">
		<p class="f6 font-weight-normal mt-4">Visualiza tus anuncios y edítalos cuando quieras</p>
	</div>
	<div class="row mt-4">
		<div class="col-lg-4 col-md-6 col-12 mt-2 mt-md-0">
			<div class="card cardmovil" >
				<div class="row d-flex align-items-center  cardmovil">
					<div class="col-lg-5 col-6">
						<img src="img/Rectangle 3.png" class="" alt="">
					</div>
					<div class="col-lg-7 col-6 pr-2 text-center text-md-left  ">
						<div class="row text-left d-flex justify-content-md-start justify-content-center text-md-left mt-2 mt-md-0">
							<div class="col-lg-6 col-8 mb-0 pb-0 px-0 pl-2 pl-md-0">
								<p class="pb-0 mb-0 f4">Nombre de Kine:</p>
								<p class="font-weight-bold mb-0 pb-0 f8  pb-md-2 mb-md-2 ">Xiomara</p>
							</div>
							<div class="col-lg-6 col-8 px-0 pl-2 pl-md-0">
								<p class="pb-0 mb-0 f4">Código de Anuncio</p>
								<p class="font-weight-bold mb-0 f8  pb-md-2 mb-md-2 ">224689</p>
							</div>
							<div class="col-8 px-0 pl-2 pl-md-0">
								<p class="pb-0 mb-0 f4">Fecha de publicación:</p>
								<p class="font-weight-bold pb-0 mb-0 pb-md-2 mb-md-2 f8">13/11/2020</p>
							</div>
							<div class="container px-0 pl-2 pl-md-0">
							<div class="row ml-1 mr-md-0 pr-md-0" style="">
							<div class="col-lg-5 col-11  pl-md-0  pr-md-0 text-center text-md-left">
								<button class="btn boton19 w-100 botonmovil1 botonmovil4 pb-0 mb-0 ml-md-0   waves-effect waves-light">Editar anuncio</button>
							</div>
							<div class="col-lg-7 py-0 my-0 col-11 pr-md-4 pl-md-0 text-center text-md-left ">
								<button class="btn botonmovil3  boton20 my-0 waves-effect waves-light">Eliminar anuncio</button>
							</div>
							<div class="col-lg-12 col-11  pr-md-4    pl-md-0  text-center text-md-left">
								<button class="btn ml-md-0 boton21 btn1 botonmovil1 waves-effect waves-light" >Verificación de fotos</button>
							</div>
						</div>
						</div>
						</div>
						
						
					</div>
				</div>
			</div>
			
		</div>
		<div class="col-lg-4 col-md-6 col-12 mt-2 mt-md-0">
			<div class="card cardmovil" >
				<div class="row d-flex align-items-center  cardmovil">
					<div class="col-lg-5 col-6">
						<img src="img/Rectangle 3.png" class="" alt="">
					</div>
					<div class="col-lg-7 col-6 pr-2 text-center text-md-left  ">
						<div class="row text-left d-flex justify-content-md-start justify-content-center text-md-left mt-2 mt-md-0">
							<div class="col-lg-6 col-8 mb-0 pb-0 px-0 pl-2 pl-md-0">
								<p class="pb-0 mb-0 f4">Nombre de Kine:</p>
								<p class="font-weight-bold mb-0 pb-0 f8  pb-md-2 mb-md-2 ">Xiomara</p>
							</div>
							<div class="col-lg-6 col-8 px-0 pl-2 pl-md-0">
								<p class="pb-0 mb-0 f4">Código de Anuncio</p>
								<p class="font-weight-bold mb-0 f8  pb-md-2 mb-md-2 ">224689</p>
							</div>
							<div class="col-8 px-0 pl-2 pl-md-0">
								<p class="pb-0 mb-0 f4">Fecha de publicación:</p>
								<p class="font-weight-bold pb-0 mb-0 pb-md-2 mb-md-2 f8">13/11/2020</p>
							</div>
							<div class="container px-0 pl-2 pl-md-0">
							<div class="row ml-1 mr-md-0 pr-md-0" style="">
							<div class="col-lg-5 col-11  pl-md-0  pr-md-0 text-center text-md-left">
								<button class="btn boton19 w-100 botonmovil1 botonmovil4 pb-0 mb-0 ml-md-0   waves-effect waves-light">Editar anuncio</button>
							</div>
							<div class="col-lg-7 py-0 my-0 col-11 pr-md-4 pl-md-0 text-center text-md-left ">
								<button class="btn botonmovil3  boton20 my-0 waves-effect waves-light">Eliminar anuncio</button>
							</div>
							<div class="col-lg-12 col-11  pr-md-4    pl-md-0  text-center text-md-left">
								<button class="btn ml-md-0 boton21 btn1 botonmovil1 waves-effect waves-light" >Verificación de fotos</button>
							</div>
						</div>
						</div>
						</div>
						
						
					</div>
				</div>
			</div>
			
		</div>
		<div class="col-lg-4 col-md-6 col-12 mt-2 mt-md-0">
			<div class="card cardmovil" >
				<div class="row d-flex align-items-center  cardmovil">
					<div class="col-lg-5 col-6">
						<img src="img/Rectangle 3.png" class="" alt="">
					</div>
					<div class="col-lg-7 col-6 pr-2 text-center text-md-left  ">
						<div class="row text-left d-flex justify-content-md-start justify-content-center text-md-left mt-2 mt-md-0">
							<div class="col-lg-6 col-8 mb-0 pb-0 px-0 pl-2 pl-md-0">
								<p class="pb-0 mb-0 f4">Nombre de Kine:</p>
								<p class="font-weight-bold mb-0 pb-0 f8  pb-md-2 mb-md-2 ">Xiomara</p>
							</div>
							<div class="col-lg-6 col-8 px-0 pl-2 pl-md-0">
								<p class="pb-0 mb-0 f4">Código de Anuncio</p>
								<p class="font-weight-bold mb-0 f8  pb-md-2 mb-md-2 ">224689</p>
							</div>
							<div class="col-8 px-0 pl-2 pl-md-0">
								<p class="pb-0 mb-0 f4">Fecha de publicación:</p>
								<p class="font-weight-bold pb-0 mb-0 pb-md-2 mb-md-2 f8">13/11/2020</p>
							</div>
							<div class="container px-0 pl-2 pl-md-0">
							<div class="row ml-1 mr-md-0 pr-md-0" style="">
							<div class="col-lg-5 col-11  pl-md-0  pr-md-0 text-center text-md-left">
								<button class="btn boton19 w-100 botonmovil1 botonmovil4 pb-0 mb-0 ml-md-0   waves-effect waves-light">Editar anuncio</button>
							</div>
							<div class="col-lg-7 py-0 my-0 col-11 pr-md-4 pl-md-0 text-center text-md-left ">
								<button class="btn botonmovil3  boton20 my-0 waves-effect waves-light">Eliminar anuncio</button>
							</div>
							<div class="col-lg-12 col-11  pr-md-4    pl-md-0  text-center text-md-left">
								<button class="btn ml-md-0 boton21 btn1 botonmovil1 waves-effect waves-light" >Verificación de fotos</button>
							</div>
						</div>
						</div>
						</div>
						
						
					</div>
				</div>
			</div>
			
		</div>
	</div>
		</div>
	<div class=" fixed-bottom text-center d-none d-md-block">
			<p class="grey-text f3">@Kineshub 2020. <br> Todos los derechos reservados.</p>
		</div>
			<div class="my-4  text-center d-block d-md-none">
			<p class="grey-text f3">@Kineshub 2020. <br> Todos los derechos reservados.</p>
		</div>
			
</main>


 		<?php 
	include "modal.php";
	include "include/footer.php";
	
 ?>
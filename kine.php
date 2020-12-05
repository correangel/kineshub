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
 ?>

<main>
	<div class="container-fluid">
			<!-- movil  -->
<!-- <div class="d-block d-md-none">
	<div class="container">
			<div class="input-group md-form form-sm form-1 pl-0">
 
  <input class="form-control my-0 py-1 buscador1" type="text" placeholder="Buscar 355 Anuncios" aria-label="Search">
   <div class="input-group-prepend">
    <span class="input-group-text text-dark" id="buscador" style="border-radius: 3px;"><i class="fas fa-search  pr-1"
        aria-hidden="true"></i> Buscar</span>
  </div>
</div>
	<div class="row">
		<div class="col-6 pl-2 pr-2">
			<button class="btn boton4 w-100 pt-2" data-toggle="modal" data-target="#ubicacion">Ubicación</button>
		</div>
		<div class="col-6 pl-2">
			<button class="btn boton5 w-100 mx-0 pt-2" data-toggle="modal" data-target="#filtro">Filtros</button>
		</div>
	</div>


		</div>
	
</div> -->
		
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
	<h2 class="color5 f10 ml-md-2 font-weight-bolder mt-4 d-none d-md-block">TU PANEL DE KINE</h2>
	<div class="container">
		<h2 class="color5 f10 mt-4 f14 font-weight-bold mb-3">TU PANEL DE KINE</h2>
	</div>
	
<div class="container d-none d-md-block">
	<div class="row text-center mt-2 mt-md-5">
		<div class="col-lg-4 col-12 mt-2 mt-md-0">
			<a href="publicaranuncio.php"><img src="img/Grupo 419.svg" class="w-75" alt=""></a>
		</div>
		<div class="col-lg-4 col-12 mt-2 mt-md-0">
				<a href="misanuncios.php"><img src="img/Grupo 418.svg" class="w-75" alt=""></a>
		</div>
		<div class="col-lg-4 col-12 mt-2 mt-md-0">
				<a href="herramientas.php"><img src="img/Grupo 417.svg" class="w-75" alt=""></a>
		</div>
	</div>
</div>
<div class="container-fluid d-block d-md-none">
	<div class="row mt-2">
		<div class="col-12 ">
			<a href="publicaranuncio.php"><img src="img/Grupo 4181.svg" class="w-100" alt=""></a>
		</div>
		<div class="col-12 my-3">
			<a href="misanuncios.php"><img src="img/Grupo 4171.svg" class="w-100" alt=""></a>
		</div>
		<div class="col-12 ">
			<a href="herramientas.php"><img src="img/Grupo 4161.svg" class="w-100" alt=""></a>
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
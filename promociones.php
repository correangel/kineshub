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
					<div class="fondo1">
						<p class="pt-2 font-weight-bold text-center"><i class="fas fa-heart text-danger mr-3"></i> Favotiro <span class="ml-3">0</span></p>
					</div>
					

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
	<div class="row d-flex justify-content-center text-center mt-2 mt-md-5">
		
		<div class="col-lg-3">
			<a href="#"><img src="img/Grupo 91.png" class="w-100" alt=""></a>
		</div>
		<div class="col-lg-3">
			<a href="#"><img src="img/Grupo 460.png" class="w-100" alt=""></a>
			<a href="#"> <img src="img/Promociones-en-masajes-eróticos-para-empezar-el-año.png" class="w-100 mt-2" alt=""></a>	
		</div>
		<div class="col-lg-3">
			<a href="#"><img src="img/Grupo 464.png" class="w-100" alt=""></a>	
		</div>
		<div class="col-lg-3">
			<a href="#"><img src="img/Grupo 460.png" class="w-100" alt=""></a>
			<a href="#"><img src="img/Promociones-en-masajes-eróticos-para-empezar-el-año.png" class="w-100 mt-2" alt=""></a>
		</div>
	</div>
</div>





<div class="container-fluid d-block d-md-none">
	<div class="row mt-2">
		<div class="col-12 ">
			<a href="#">	<img src="img/Grupo 91.png" class="w-100" alt=""></a>
		</div>
		
		<div class="col-12 ">
			<a href="#"> <img src="img/Promociones-en-masajes-eróticos-para-empezar-el-año.png" class="w-100 mt-2" alt=""></a>	
		</div>
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
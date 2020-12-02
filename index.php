<?php 
session_start();
if(isset($_SESSION['id'])){
	include "include/header2.php";
}
else{
	include "include/header.php";
}
	
	
 ?>

	<main>
		<!-- pc  -->

<div class="container-fluid mb-4">
		<!-- movil  -->
<div class="d-block d-md-none">
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
	
</div>
		
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
	
	<div>
		<div class="row mt-4">
			<div class="col-lg-2 col-6 px-1 mx-0">
					<div class="card card1" data-toggle="modal" data-target="#perfilkine">
				<img src="img/Rectangle 3.png" class="imagen1x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="fas fa-heart f2 color3"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
			<div class="card card1">
				<img src="img/Rectangle 3.png" class="w-100" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
			<div class="card card1">
				<img src="img/Rectangle 3.png" class="imagen2x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
			</div>
			<div class="col-lg-2 col-6 px-1 mx-0">	<div class="card card1">
				<img src="img/Rectangle 3.png" class="imagen2x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
			<div class="card card1">
				<img src="img/Rectangle 3.png" class="w-100" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
<div class="card card1">
				<img src="img/Rectangle 3.png" class="imagen1x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
		</div>
			<div class="col-lg-2 col-6 px-1 mx-0">	<div class="card card1">
				<img src="img/Rectangle 3.png" class="w-100" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>

			<div class="card card1">
				<img src="img/Rectangle 3.png" class="imagen1x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
<div class="card card1">
				<img src="img/Rectangle 3.png" class="imagen2x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
		</div>
			<div class="col-lg-2 col-6 px-1 mx-0">

				<div class="card card1">
				<img src="img/Rectangle 3.png" class="imagen2x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>


				<div class="card card1">
				<img src="img/Rectangle 3.png" class="w-100" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>

<div class="card card1">
				<img src="img/Rectangle 3.png" class="imagen1x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>


		</div>
			<div class="col-lg-2 col-6 px-1 mx-0">
				<div class="card card1">
				<img src="img/Rectangle 3.png" class="imagen1x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>


				<div class="card card1">
				<img src="img/Rectangle 3.png" class="w-100" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
<div class="card card1">
				<img src="img/Rectangle 3.png" class="imagen2x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
		</div>
			<div class="col-lg-2 col-6 px-1 mx-0">	<div class="card card1">
				<img src="img/Rectangle 3.png" class="w-100" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
<div class="card card1">
				<img src="img/Rectangle 3.png" class="imagen2x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
			<div class="card card1">
				<img src="img/Rectangle 3.png" class="imagen1x" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
		</div>
		</div>
		<!-- <div class="card-columns mt-4">
			<div class="card card1">
				<img src="img/Rectangle 3.png" class="w-100" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
			<div class="card card1">
				<img src="img/Rectangle 3.png" class="w-100" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
			<div class="card card1">
				<img src="img/Rectangle 3.png" class="w-100" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
			<div class="card card1">
				<img src="img/Rectangle 3.png" class="w-100" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
			<div class="card card1">
				<img src="img/Rectangle 3.png" class="w-100" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
								<div class="col-12 "><p>Isabella <img src="img/Grupo 139.svg" alt="" class="ml-1"></p></div>
								
							</div>
						</div>
						<div class="col-4"><i class="far fa-heart f2"></i></div>
					</div>
				<div>
					<span class="badge badge-pill badge-light">Lima Metropolitana</span>
					<span class="badge badge-pill badge-light">18 años</span>
					<span class="badge badge-pill badge-light">S/180</span>
					<span class="badge badge-pill badge-light">Venezolana</span>
				</div>
				</div>
			</div>
		</div> -->
	</div>
</div>
		<!-- fin pc  -->







	
	</main>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
	
	<?php
		if(isset($_GET['validar'])){
			include 'db.php';
			$sql = mysqli_query($enlace, "SELECT * FROM usuarios WHERE codigo_validar = '". $_GET['validar'] ."'");
			$num = mysqli_num_rows($sql);

			if($num > 0){
			?>
			<script>
				swal("Usuario Validado. Puede iniciar Sesion");  
			</script>
			<?php
			$sql2 = mysqli_query($enlace, "UPDATE usuarios SET codigo_validar = '' WHERE codigo_validar = '". $_GET['validar'] ."'");
			}
			else{ ?>
			<script>
				swal("Este codigo no existe, o ya fue usado, contacta con soporte.");
			</script>
			<?php }
		}
	?>

	<?php 
	include "cookies.php";
	include "modal.php";
	include "include/footer.php";
	
 ?>

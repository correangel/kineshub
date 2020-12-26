<?php 
	include "include/header.php";
	
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
			<div class="card">
				<img src="images/1607830046.jpeg" class="card-img-top" style="object-fit: cover;" alt="">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
	<div class="col-12 "><p>Vanesaa </p></div>
								
							</div>
						</div>
						<div class="col-4">

													<i class="fas fa-heart f2 color3"></i>
							
						

						</div>
					</div>
				<div onclick="mostrar_modal('Pmfm5tMGeupUsJHJt8IiXUT1LqeMYzY6kp38geGdSHbyyleMYi')">
					<span class="badge badge-pill badge-light">SantaAnita</span>
					<span class="badge badge-pill badge-light">24 años</span>
					<span class="badge badge-pill badge-light">S/ 100</span>
					<span class="badge badge-pill badge-light"></span>
				</div>
				</div>
				<div>
					<button type="button" class="close cerrar1" style="position: absolute;top: 0;right: 0;" >
          <span aria-hidden="true">×</span>
        </button>
				</div>
			</div>

		</div>
	</div>
	
	</div>

</main>


 		<?php 
	include "modal.php";
	include "include/footer.php";
	
 ?>
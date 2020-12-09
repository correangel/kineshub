<?php 
	include "include/header.php";
	
 ?>
<style>
	.custom-control-input:focus:not(:checked)~.custom-control-label::before {
    border-color: #fff!important;
}
.custom-file-input:focus~.custom-file-label {
    border-color: #e34343!important;
    box-shadow: 0 0 0 0.2rem rgb(222 176 176 / 25%)!important;
}
</style>
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
	<div class="row d-flex justify-content-center mt-4">
		<div class="col-lg-6 col-12">
			<div class="card">
				<div class="card-body">
					<div class="container">
						<div class="row d-flex align-items-center">

						<div class="col-lg-8 col-6 px-0 px-md-3"><h2 class="f6 pt-2 color6 mb-4 ">Proceso de verificación</h2></div>
						<div class="col-lg-4 col-6 px-0 px-md-3 text-right">
							<img src="img/Grupo 409.svg" alt="" height="17">
							<img src="img/Grupo 410.svg" height="20" alt="">
						</div>
					</div>
					<div class="row">
						<p class="font-weight-bold px-0 px-md-3">Te hemos enviado un email con las instrucciones para poder certificarte.</p>

						
					</div>
					<div class="row ">
								<div class="col-lg-10 col-12 px-0 px-lg-3 " style="margin-top: 5px;">	 
									<div class="custom-file">
										
  <input type="file" class="custom-file-input  w-100"  name="image" id="image" lang="es">
  <label class="custom-file-label" for="subirfoto" class="pt-4"  style="font-size: 13px!important;">	 <p><img src="img/Icon awesome-camera.svg" class="mr-2" alt="">Selecciona las imágenes </p></label>
</div>

</div>
								<div class="col-lg-2 col-12 mt-2 mt-lg-0 pl-0 pr-lg-2 text-center text-lg-right">
									<a href="" class="btn botonborrar1 btn-sm">Enviar</a>
								</div>
							</div>
					
					</div>
					
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
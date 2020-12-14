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
	<div class="mt-3 d-block d-md-none">
		<img src="img/Grupo 3911.svg" class="w-100" style="" alt="">
	</div>
	<div class="mt-3 d-none d-md-block">
		<img src="img/Grupo 391.svg" class="w-100" style="" alt="">
	</div>

	<div class="text-center">
		<p class="f6 font-weight-normal mt-4">Visualiza tus anuncios y edítalos cuando quieras</p>
	</div>
	<div class="row mt-4" id="mis_anuncios">
		
	

	</div>
		</div>

			<div class="my-4  text-center ">
			<p class="grey-text f3">@Kineshub 2020. <br> Todos los derechos reservados.</p>
		</div>
			
</main>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script>
		

		window.addEventListener('load', function(){
			$.ajax({
                              url:   '<?= $url_api ?>public/json/get_misanuncios.php', 
                              type:  'GET',
                              success:  function (response) 
                                          {
											$("#mis_anuncios").html(response);
                                          }
                              
                          });
		 }, false);


		 function anuncio(params) {
			parametro = $("#int_"+params).val();
			 $("#anuncio_eliminar").val(parametro);
		 }

		 function eliminar_anuncio() {
			 var parametro = $("#anuncio_eliminar").val();
			$.ajax({
                              url:   '<?= $url_api ?>public/json/eliminar_anuncio.php?id='+parametro, 
                              type:  'GET',
                              success:  function (response) 
                                          {
												$.ajax({
												url:   '<?= $url_api ?>public/json/get_misanuncios.php', 
												type:  'GET',
												success:  function (response) 
															{
																$("#mis_anuncios").html(response);
																$("#eliminaranuncio").modal("hide");
															}
												
												});
											
                                          }
                              
                          });
		 }
	</script>
 		<?php 
	include "modal.php";
	include "include/footer.php";
	
 ?>
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
					<a href="promociones.php" class="btn text-dark boton8 font-weight-bold px-4"><i class="fas fa-tag pr-3"></i> Promociones</a>
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
						<p class="pt-2 font-weight-bold text-center"><i class="fas fa-heart text-danger mr-3"></i> <a href="favoritos.php" class="text-dark">Favotiro <span class="ml-3">
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
	
	<div class="container my-4">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-7">
				<div class="card p-lg-5 p-4">
					<form id="nueva_Clave">
					<h2 class="color6 font-weight-bold">CAMBIA TU CONTRASEÑA</h2>
					<h5 class="f12 font-weight-bolder">Completa los recuadros para cambiar tu contraseña por una nueva.</h5>
					<div class="row">
						<div class="col-lg-8 col-12">
								<p class="grey-text mb-1 pb-0 mt-lg-4 mt-2 font-weight-normal f4">Ingresa tu contraseña actual</p>
					<input class="form-control campo1 w-100  f3" type="password" id="actual" name="actual" placeholder="Contraseña">
					<p class="color6 f5 my-2">*Ingresa tu clave actual.</p>

					<p class="grey-text mb-1 pb-0 mt-lg-4 mt-4 font-weight-normal f4">Ingresa tu nueva contraseña</p>
					<input class="form-control campo1 w-100  f3" type="password" id="nueva" name="nueva" placeholder="Nueva contraseña">

						<input class="form-control campo1 mt-2 w-100  f3" type="password" id="confirmar" name="confirmar" placeholder="Confirmar contraseña">
						<p class="color6 f5 my-2">*Debes ingresar tu NUEVA contraseña en AMBOS recuadros.</p>
						</div>
						



					</div>
				






					<div class="row mt-3">
						<div class="col-lg-6 col-12">
							<a href="herramientas.php" class="btn botonborrar w-100">Regresar</a>
						</div>
						<div class="col-lg-6 col-12">
							<a href="#" class="btn botonborrar1 w-100" onclick='cambiar_contraseña()'>Cambiar Contraseña</a>
						</div>
					</div>
</form>
				</div>
			</div>
		</div>
		
	</div>
		<div class=" text-center mt-5">
			<p class="grey-text f3">@Kineshub 2020. <br> Todos los derechos reservados.</p>
		</div>
	</div>

</main>

<script>
	function cambiar_contraseña(){
	var parametros=$( "#nueva_Clave" ).serialize();
                       $.ajax({
                              data:  parametros, 
                              url:   '<?= $url_api ?>public/json/cambio_clave.php', 
                              type:  'POST',
                              success:  function (response) 
                                          {
                                            if (response==1) 
                                            {
                                              swal("Contraseña Actual no coincide con nuesta base de datos.");
                                            }

											if(response == 2){
												swal("La nueva contraseña no coincide."); 
											}

                                            if(response == 3){
												swal("Contraseña cambiada con exito, redirigiendo");
												setTimeout("location.href='herramientas.php'", 2000);
											}
                                           
                                          }
                              
                          });
	}
</script>
 		<?php 
	include "modal.php";
	include "include/footer.php";
	
 ?>
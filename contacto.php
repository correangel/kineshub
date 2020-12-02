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
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
	
</div>
		 -->
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
	<div class="row d-flex justify-content-center mt-4">
		<div class="col-lg-7 col-12">
			<div class="card">
				<div class="card-body">
					<div>
						<h2 class="f6 color6 mb-4">CONTACTO</h2>
					<p><strong>Email:</strong> Contactokineshub@kines.com</p>
					<p><strong>Teléfono:</strong> 1234567890</p>
					<p><strong>Horarios:</strong> Lunes a Viernes10 am a 06 pm</p>
					</div>
					<div>
						<h2 class="f6 color6 mt-4">Formulario de contacto</h2>
					<p class="font-weight-normal">Déjanos tus datos de contacto y en breve nos pondremos en contacto contigo.</p>
					
					</div>
					<div class="row">
						<div class="col-lg-7 col-12">
							<input class="form-control campo1 w-100  f1" type="text" id="correocontacto" name="correocontacto" placeholder="Email">

							<p class="f8 font-weight-bolder mt-3">Motivo de contacto</p>
							<div class="row">
								<div class="col-3">
									<!-- Default checked -->
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="contacto" id="consulta" >
  <label class="custom-control-label f5 pt-1" for="consulta">Consulta</label>
</div>
								</div>
								<div class="col-3">
									<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="contacto" id="Solicitud" >
  <label class="custom-control-label f5 pt-1" for="Solicitud">Solicitud</label>
</div>
								</div>
								<div class="col-6">
									<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input" name="contacto" id="denunciar" checked>
  <label class="custom-control-label f5 pt-1 " for="denunciar">Denunciar anuncio</label>
</div>
								</div>
							</div><div class="form-group mt-4">

  <textarea class="form-control" id="textareacontacto" placeholder="Texto" rows="10"></textarea>

  <div class="md-form md-outline input-with-post-icon">
  	<i class="fas fa-upload grey-text  input-prefix"></i>
  	
  	  <input class="form-control mt-2 campo1 w-100  f1" type="text" id="link" name="link" placeholder="Url del aununcio">
  </div>



</div>

						</div>

					</div>
					<p class="f8 font-weight-bolder mt-3">INFORMACIÓN BÁSICA SOBRE PROTECCIÓN DE DATOS</p>
  	<p><strong>Responsables:</strong> Contactokineshub@kines.com</p>
  		<p><strong>Finalidades:</strong> Ponernos en contacto contigo para resolver tus dudas y facilitarte la información solicitada por medios electrónicos.</p>
  				<p><strong>Derechos:</strong> Puedes acceder, rectificar y suprimir tus datos personales dirigiéndote a Contactokineshub@kines.com</p>
  				<p><strong>Info. Adicional:</strong> Puede consultar nuestra Política de Privacidad completa <a href="#" class="color3">aquí</a> </p>
  				<div>
  					   <div class="g-recaptcha" data-sitekey="6Ld5e7UUAAAAAE6BgTztqlAK2UgXCpZeGo_VTy0S"></div>
  					   <p class="font-weight-bolder mt-3">Al pulsar Enviar entiendo y acepto los Textos legales.</p>
  					   <div class="row d-flex justify-content-center">
  					   	<div class="col-lg-4 col-12">
  					   		<button class="btn boton20 w-100">Enviar</button>
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
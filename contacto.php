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
						<form id="contacto">
						<input class="form-control campo1 w-100  f1" type="text" id="correocontacto" name="correo" placeholder="Email">
							<input type="hidden" name="usuario" value="<?= $_SESSION['usuario'] ?>">
								<p id="correo_contacto" style="color: red;"></p>
							<p class="f8 font-weight-bolder mt-3">Motivo de contacto</p>
							<div class="row">
								<div class="col-3">
								<div class="custom-control custom-checkbox">
								<input type="radio" class="custom-control-input" name="tipo" id="consulta"  value="1">
								<label class="custom-control-label f5 pt-1" for="consulta">Consulta</label>
								</div>
								</div>

								<div class="col-3">
								<div class="custom-control custom-checkbox">
								<input type="radio" class="custom-control-input" name="tipo" id="solicitar"  value="2">
								<label class="custom-control-label f5 pt-1" for="solicitar">Solicitud</label>
								</div>
								</div>

								<div class="col-6">
									<div class="custom-control custom-checkbox">
								<input type="radio" class="custom-control-input" name="tipo" id="denunciar" value="3">
								<label class="custom-control-label f5 pt-1 " for="denunciar">Denunciar anuncio</label>
								</div>
								</div>

								
							</div><div class="form-group mt-4">

  <textarea class="form-control" id="textareacontacto" name="texto" placeholder="Texto" rows="10" onkeyup="validar_cantidad()" onkeydown="validar_cantidad()"></textarea>
  <span id="mensaje_contacto" style="color:red;"></span>

  <div class="md-form md-outline input-with-post-icon">
  	<i class="fas fa-upload grey-text  input-prefix"></i>
  	
  	  <input class="form-control mt-2 campo1 w-100  f1" type="text" id="link" name="link" placeholder="Url del aununcio">
  </div>

</form>

</div>

						</div>

					</div>
					<p class="f8 font-weight-bolder mt-3">INFORMACIÓN BÁSICA SOBRE PROTECCIÓN DE DATOS</p>
  	<p><strong>Responsables:</strong> Contactokineshub@kines.com</p>
  		<p><strong>Finalidades:</strong> Ponernos en contacto contigo para resolver tus dudas y facilitarte la información solicitada por medios electrónicos.</p>
  				<p><strong>Derechos:</strong> Puedes acceder, rectificar y suprimir tus datos personales dirigiéndote a Contactokineshub@kines.com</p>
  				<p><strong>Info. Adicional:</strong> Puede consultar nuestra Política de Privacidad completa <a href="#" class="color3">aquí</a> </p>
  				<div>
  					  <!-- <div class="g-recaptcha" data-sitekey="6Ld5e7UUAAAAAE6BgTztqlAK2UgXCpZeGo_VTy0S"></div> -->
  					   <p class="font-weight-bolder mt-3">Al pulsar Enviar entiendo y acepto los Textos legales.</p>
  					   <div class="row d-flex justify-content-center">
  					   	<div class="col-lg-4 col-12">
  					   		<button class="btn boton20 w-100" id="enviar" disabled onclick="contactar()">Enviar</button>
  					   	</div>
  					   </div>
  				</div>
					
				</div>
			</div>
		</div>
	</div>
	</div>

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<script>

	function validar_cantidad(){
		var mensaje = $("#textareacontacto").val();
		mensaje2 = mensaje.split('').length;
		if(mensaje2 < 180){
			minimo = 180 - mensaje2;
			$("#mensaje_contacto").html("Su mensaje debe contener minimo " + minimo);
			$("#enviar").prop('disabled', true);
		}
		else{
			$("#mensaje_contacto").html("");
			$("#enviar").prop('disabled', false);
		}
	}
  function contactar(){
    var correo = $("#correocontacto").val().length;
    var mensaje = $("#textareacontacto").val().length;
    userdevdata = 2;
    if(correo == ''){
      $("#correo_contacto").html("Debes incluir un correo donde nos podamos contactar contigo.");
	  $("#correocontacto").focus();
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata)  }
    if(mensaje == ''){
      $("#mensaje_contacto").html("Teclee por favor su mensaje.");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }

    if(userdevdata == 0){
      var parametros=$( "#contacto" ).serialize();
                       $.ajax({
                              data:  parametros, 
                              url:   '<?= $url_api ?>public/json/insert_contacto.php', 
                              type:  'POST',
                              success:  function (response) 
                                          {
                                            if (response==1) 
                                            {
                                              swal("Mensaje enviado correctamente, nos pondremos en contacto con usted."); 
                                              setTimeout("location.href='kine.php'", 5000);
                                            }

                                            else{
												swal("Error al intentar enviar su solicitud intente nuevamente. O espere un momento");
											}
                                           
                                          }
                              
                          });
    }
  }
	</script>

 		<?php 
	include "modal.php";
	include "include/footer.php";
	
 ?>
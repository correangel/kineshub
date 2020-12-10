<?php 
	include "include/header.php";
	$url_api="http://localhost/api/";
 ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>

 <style>
 	header , footer {
 		display: none;
 	}
 	
 </style>
	<main>
		<div class="text-center my-5">
			<a href="index.php"><img src="img/logo.png"  width="237" alt=""></a>
			<h2 class="font-weight-bold f2 ">Inicio de sesión</h2>
		</div>
		<form id="frm_login">
			<div class="row flex-center">
			
			<div class="col-11">
					<div class="col-12" id="mensaje"></div>
				</div>
				<div class="col-11">
					<input class="form-control campo1  f1" type="text" id="correoelectronico" name="usuario" placeholder="Correo Electronico">
	 				<p style="color:red; font-size: 10px;" id="login_nombre"></p>
				</div>
				<div class="col-11 mt-3">
					
					<input class="form-control f1 campo1" type="password" id="Contraseña" name="clave" placeholder="Contraseña">
				<p style="color:red; font-size: 10px;" id="login_clave"></p>
				</div>
				<div class="col-11 mt-3">
				
<div class="custom-control custom-checkbox mt-4 mb-5">
  <input type="checkbox" class="custom-control-input" id="recuerdame">
  <label class="custom-control-label" for="recuerdame">Recuérdame</label>
</div>
			</div>
			</div>
			
			<div class="text-center">
				<a class="btn boton1" onclick="login()">Ingresar</a>
			</div>
		</form>
		<div class="mt-4">
			<p class="text-center font-weight-bold f1">¿Eres nuevo?<a href="crearcuenta.php" class="color1 ml-1">Regístrate</a></p>
		</div>
		<div class="mt-5">
			<a href="olvidemicontraseña.php" class="text-dark"><p class="text-center font-weight-bold f1">
				<u>Olvidé mi contraseña</u>
			</p></a>	

		</div>
		<div class="fixed-bottom text-center">
			<p class="grey-text f3">@Kineshub 2020. <br> Todos los derechos reservados.</p>
		</div>
	</main>
<script>
	function login(){
    var nombre = $("#correoelectronico").val().length;
    var clave = $("#Contraseña").val().length;
    userdevdata = 2;
    if(nombre == ''){
      $("#login_nombre").html("Introduzca usuario o correo valido");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }
    if(clave == ''){
      $("#login_clave").html("Introduzca una contraseña");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }

    if(userdevdata == 0){
      var parametros=$( "#frm_login" ).serialize();
                       $.ajax({
                              data:  parametros, 
                              url:   '<?= $url_api ?>public/json/login_user.php', 
                              type:  'POST',
                              success:  function (response) 
                                          {
                                            if (response==1) 
                                            {
                                              $("#login_nombre").html("");
                                              $("#login_clave").html("");
                                              $("#mensaje").html("<div class='alert alert-danger' role='alert'>Su cuenta aun no se encuentra validada, revise su correo o contacte con soporte!</div>")  
                                            }
                                            if (response==2) 
                                            {
                                              $("#login_nombre").html("");
                                              $("#login_clave").html("");
                                              $("#mensaje").html("<div class='alert alert-danger' role='alert'>Ha solicitado un cambio de contraseña, revise su correo y estara el link o vuelva a solicitar para restablecer su contraseña!</div>")  
                                            }

                                            if (response==3) 
                                            {
                                              $("#login_nombre").html("");
                                              $("#login_clave").html("");
                                              $("#mensaje").html("<div class='alert alert-danger' role='alert'>Su cuenta se encuentra suspendida, contacte con soporte!</div>")  
                                            }

                                            if (response==4) 
                                            {
                                              swal("Inicio de sesion correcto, redirigiendo.");  
                                              url = "http://localhost/kineshub/";
                                              setTimeout("location.href='http://localhost/kineshub/'", 5000);
                                            }

                                            if (response==5) 
                                            {
                                              $("#login_nombre").html("");
                                              $("#login_clave").html("");
                                              $("#mensaje").html("<div class='alert alert-danger' role='alert'>Usuario o Contraseña erroneos!</div>")  
                                            }
                                           
                                          }
                              
                          });
    }
  }
</script>
	<?php 
	include "include/footer.php";
	include "modal.php";
 ?>

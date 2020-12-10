<?php 
	include "include/header.php";
	
 ?>
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

 <style>
 	header , footer {
 		display: none;
 	}
 
body{
	background-color: #FB6676;
}
 </style>
	<main class="d-block d-md-none">
		<div class="text-center my-5">
			<a href="index.php"><img src="img/logo.png"  width="237" alt=""></a>
			<h2 class="font-weight-bold f2 text-white mt-2 ">Regístrate para Usuario</h2>
		</div>
		
		<form id="frm_add_kine">
			<div class="row justify-content-center d-flex">
				<div class="col-12 pl-4 pr-2">
					<input class="form-control w-100 campo2  f1" type="text" id="NombreUsuario" name="usuario" placeholder="Nombre de Usuario">
					<p style="color:white; font-size: 1em;" id="reg_kine_nombre"></p>
				</div>

				<div class="col-12 pl-4 pr-2 mt-3">
					<input class="form-control w-100 campo2  f1" type="text" id="CorreoElectronico" name="correo" placeholder="Correo Electronico">
				<p style="color:white; font-size: 1em;" id="reg_kine_email"></p>
				</div>
				<div class="col-12 pl-4 pr-2 mt-3">
					
					<input class="form-control w-100 f1 campo2" type="password" id="Contraseñakine" name="clave" placeholder="Contraseña">
				<p style="color:white; font-size: 1em;" id="reg_kine_clave1"></p>
				</div>
				<div class="col-12 pl-4 pr-2 mt-3">
					
					<input class="form-control w-100 f1 campo2" type="password" id="Confirmarcontraseñakine" name="clave2" placeholder="Confirmar contraseña">
				<p style="color:white; font-size: 1em;" id="reg_kine_clave2"></p>
					<input type="hidden" value="2" name="tipo" required>
				</div>
				
			</div>
			
			<div class="text-center">
				<a onclick="registrar_kine()"  class="btn boton1">Registrar</a>
			</div>
		</form>
			<div class="mt-4 mb-5">
			<p class="text-center font-weight-bolder f1 text-white">¿Ya tienes una cuenta? <a href="iniciodesesion.php" class="font-weight-bold text-white ml-1"><u>Inicia Sesión</u></a></p>
		</div>
		<div class="my-2 text-center mt-5">
			<p class="text-white f3">@Kineshub 2020. <br> Todos los derechos reservados.</p>

		</div>
	</main>
<script>
	//Registro de Usuario Kine
	function registrar_kine(){
    var nombre = $("#NombreUsuario").val().length;
    var correo = $("#CorreoElectronico").val().length;
    var clave1 = $("#Contraseñakine").val().length;
    var clave2 = $("#Confirmarcontraseñakine").val().length;
    userdevdata = 5;
    if(nombre == ''){
      $("#reg_kine_nombre").html("Introduzca un nombre");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata); $("#reg_kine_nombre").html(""); }

    if(correo == ''){
      $("#reg_kine_email").html("Introduzca un Correo");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata); $("#reg_kine_email").html(""); }

    if(clave1 == ''){
      $("#reg_kine_clave1").html("Introduzca una clave valida");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata); $("#reg_kine_clave1").html(""); }

    if(clave2 == ''){
      $("#reg_kine_clave2").html("Repita por favor su clave");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata); $("#reg_kine_clave2").html(""); }

    if(clave1 == clave2){
      userdevdata = userdevdata-1; console.log(userdevdata)
    }
    else{
      $("#reg_kine_clave1").html("Las Claves no coinciden");
      $("#reg_kine_clave2").html("Las Claves no coinciden");
    }

    if(userdevdata == 0){
      var parametros=$( "#frm_add_kine" ).serialize();
                       $.ajax({
                              data:  parametros, 
                              url:   '<?= $url_api ?>public/json/insert_user.php', 
                              type:  'POST',
                              beforeSend: function()
                              {
                                  toastr.info('Registrando..')
                              },
                              success:  function (response) 
                                          {

                                            if (response==3) 
                                            {
                                              swal("Usuario Registrado, verifique su correo.");  
                                              setTimeout("location.href='index.php'", 2000);
                                            }
                                            if (response==2) 
                                            {
                                              swal("Este correo ya existe, use otro.");  
                                            }
                                            if (response==1) 
                                            {
                                              swal("Este usuario ya existe, use otro.");  
                                            }
                                          }
                              
                          });
    }
                       
  }
</script>
	<?php 
	include "include/footer.php";
	
 ?>

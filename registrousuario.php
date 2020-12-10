<?php 
	include "include/header.php";
	
 ?>
 <style>
 	header , footer {
 		display: none;
 	}
 
 </style>
 <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
	<main class="d-block d-md-none">
		<div class="container">
			<div class="text-center my-5">
			<a href="index.php"><img src="img/logo.png"  width="237" alt=""></a>
			<h2 class="font-weight-bold f2 mt-2">Regístrate para Usuario</h2>
		</div>
		
		<form id="frm_add_user">
			<div class="row ">
				<div class="col-12  ">
					<input class="form-control campo1  w-100 f1" type="text" id="NombreU" name="usuario" placeholder="Nombre de Usuario">
	 				<p style="color: red; font-size: 1em;" id="reg_usr_nombre"></p>
				</div>

				<div class="col-12   ">
					<input class="form-control w-100 campo1  f1" type="text" id="CorreoE" name="correo" placeholder="Correo Electronico">
					<p style="color: red; font-size: 1em;" id="reg_usr_correo"></p>
				</div>
				<div class="col-12   ">
					
					<input class="form-control w-100 f1 campo1" type="password" id="ContraseñaU" name="clave" placeholder="Contraseña">
					<p style="color: red; font-size: 1em;" id="reg_usr_clave1"></p>
				</div>
				<div class="col-12   ">
					
					<input class="form-control w-100 f1 campo1" type="password" id="ConfirmarcontraseñaU" name="clave2" placeholder="Confirmar contraseña">
					<p style="color: red; font-size: 1em;" id="reg_usr_clave2"></p>
					<input type="hidden" value="1" name="tipo" required>
				</div>
				
			</div>
			 <div class="row justify-content-center">
        <div class="col-8">
          <div class="text-center">
        <a class="btn boton1h w-100" onclick="registrar()">Registrar</a>
      </div>
        </div>
      </div>
			
		</form>
			<div class="mt-4 mb-5">
			<p class="text-center font-weight-bold f1">¿Ya tienes una cuenta? <a href="iniciodesesion.php" class="color1 ml-1">Inicia Sesión</a></p>
		</div>
		<div class="py-2 text-center mt-5">
			<p class="grey-text f3">@Kineshub 2020. <br> Todos los derechos reservados.</p>
		</div>
		</div>
		
	</main>
<script>
	//Registro de Usuario Normal
	function registrar(){
    var nombre = $("#NombreU").val().length;
    var correo = $("#CorreoE").val().length;
    var clave1 = $("#ContraseñaU").val().length;
    var clave2 = $("#ConfirmarcontraseñaU").val().length;
    userdevdata = 5;
    if(nombre == ''){
      $("#reg_usr_nombre").html("Introduzca un nombre");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata); $("#reg_usr_nombre").html("");}

    if(correo == ''){
      $("#reg_usr_correo").html("Introduzca un Correo");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata); $("#reg_usr_correo").html(""); }

    if(clave1 == ''){
      $("#reg_usr_clave1").html("Introduzca una clave valida");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata); $("#reg_usr_clave1").html(""); }

    if(clave2 == ''){
      $("#reg_usr_clave2").html("Repita por favor su clave");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata); $("#reg_usr_clave2").html(""); }

    if(clave1 == clave2){
      userdevdata = userdevdata-1; console.log(userdevdata)
    }
    else{
      $("#reg_usr_clave1").html("Las Claves no coinciden");
      $("#reg_usr_clave2").html("Las Claves no coinciden");
    }

    if(userdevdata == 0){
      var parametros=$( "#frm_add_user" ).serialize();
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
											  setTimeout("location.href='index.php'", 3000);

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

<?php 
	include "include/header.php";
	
 ?>
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
		<form>
			<div class="row flex-center">
				<div class="col-11">
					<input class="form-control campo1  f1" type="text" id="correo" name="correo" placeholder="Correo Electronico">
				</div>
				<div class="col-11 mt-3">
					
					<input class="form-control f1 campo1" type="password" id="contraseña" name="contraseña" placeholder="Contraseña">
				
				</div>
				<div class="col-11 mt-3">
				
<div class="custom-control custom-checkbox mt-4 mb-5">
  <input type="checkbox" class="custom-control-input" id="recuerdame">
  <label class="custom-control-label" for="recuerdame">Recuérdame</label>
</div>
			</div>
			</div>
			
			<div class="text-center">
				<a  class="btn boton1" type="submit">Ingresar</a>
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

	<?php 
	include "include/footer.php";
	include "modal.php";
 ?>

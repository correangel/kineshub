<?php 
	include "include/header.php";
	
 ?>
 <style>
 	header , footer {
 		display: none;
 	}
 
 </style>
	<main class="d-block d-md-none">
		<div class="text-center my-5">
			<a href="index.php"><img src="img/logo.png"  width="237" alt=""></a>
			<h2 class="font-weight-bold f2 mt-2">Regístrate para Usuario</h2>
		</div>
		
		<form>
			<div class="row flex-center">
				<div class="col-11">
					<input class="form-control campo1  f1" type="text" id="usuario" name="usuario" placeholder="Nombre de Usuario">
				</div>

				<div class="col-11 mt-3">
					<input class="form-control campo1  f1" type="text" id="correo" name="correo" placeholder="Correo Electronico">
				</div>
				<div class="col-11 mt-3">
					
					<input class="form-control f1 campo1" type="password" id="contraseña1" name="contraseña1" placeholder="Contraseña">
				
				</div>
				<div class="col-11 mt-3">
					
					<input class="form-control f1 campo1" type="password" id="confirmarcontraseña" name="confirmarcontraseña" placeholder="Confirmar contraseña">
				
				</div>
				<div class="col-11 mt-3">
				
<div class="custom-control custom-checkbox mt-4 mb-4">
  <input type="checkbox" class="custom-control-input" id="recuerdameusuario">
  <label class="custom-control-label" for="recuerdameusuario">Recuérdame</label>
</div>
			</div>
			</div>
			
			<div class="text-center">
				<a  class="btn boton1" type="submit">Registrar</a>
			</div>
		</form>
			<div class="mt-4 mb-5">
			<p class="text-center font-weight-bold f1">¿Ya tienes una cuenta? <a href="iniciodesesion.php" class="color1 ml-1">Inicia Sesión</a></p>
		</div>
		<div class="fixed-bottom text-center mt-5">
			<p class="grey-text f3">@Kineshub 2020</p>
		</div>
	</main>

	<?php 
	include "include/footer.php";
	
 ?>

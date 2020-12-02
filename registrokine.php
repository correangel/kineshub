<?php 
	include "include/header.php";
	
 ?>
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
		
		<form>
			<div class="row flex-center">
				<div class="col-11">
					<input class="form-control campo2  f1" type="text" id="usuariokine" name="usuariokine" placeholder="Nombre de Usuario">
				</div>

				<div class="col-11 mt-3">
					<input class="form-control campo2  f1" type="text" id="correokine" name="correokine" placeholder="Correo Electronico">
				</div>
				<div class="col-11 mt-3">
					
					<input class="form-control f1 campo2" type="password" id="contraseñakine" name="contraseñakine" placeholder="Contraseña">
				
				</div>
				<div class="col-11 mt-3">
					
					<input class="form-control f1 campo2" type="password" id="confirmarcontraseñakine" name="confirmarcontraseñakine" placeholder="Confirmar contraseña">
				
				</div>
				<div class="col-11 mt-3">
				
<div class="custom-control custom-checkbox mt-4 mb-4">
  <input type="checkbox" class="custom-control-input" id="recuerdamekine">
  <label class="custom-control-label text-white" for="recuerdamekine">Recuérdame</label>
</div>
			</div>
			</div>
			
			<div class="text-center">
				<a  class="btn boton1" type="submit">Registrar</a>
			</div>
		</form>
			<div class="mt-4 mb-5">
			<p class="text-center font-weight-bolder f1 text-white">¿Ya tienes una cuenta? <a href="iniciodesesion.php" class="font-weight-bold text-white ml-1"><u>Inicia Sesión</u></a></p>
		</div>
		<div class="fixed-bottom text-center mt-5">
			<p class="text-white f3">@Kineshub 2020</p>
		</div>
	</main>

	<?php 
	include "include/footer.php";
	
 ?>

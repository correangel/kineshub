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
			<h2 class="font-weight-bold f2 ">Olvidé mi contraseña</h2>
		</div>
		<form>
			<div class="row flex-center">
				<div class="col-11">
					<input class="form-control campo1  f1" type="text" id="correo2" name="correo2" placeholder="Correo Electronico">
				</div>
			
			
			</div>
			
			<div class="text-center mt-4">
				<a  class="btn boton1" type="submit" href="olvidemicontraseña2.php">Siguiente</a>
			</div>
		</form>
		
		
		<div class="fixed-bottom text-center">
			<p class="grey-text f3">@Kineshub 2020</p>
		</div>
	</main>

	<?php 
	include "include/footer.php";
	
 ?>

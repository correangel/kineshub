<?php 

require_once "db.php";
mysqli_set_charset($enlace,"utf8");
$sql = mysqli_query($enlace, "SELECT anuncio.id AS ID, anuncio.verificado AS Verificado, anuncio.nombre AS Nombre, anuncio.edad AS Edad, anuncio.distrito, anuncio.provincia, anuncio.departamento, distritos.distrito AS Distrito, anuncio.pais AS Pais FROM anuncio INNER JOIN distritos ON anuncio.distrito = distritos.id WHERE estado = 1 ORDER BY orden DESC");
$num = mysqli_num_rows($sql);


session_start();
if(isset($_SESSION['id'])){
	include "include/header2.php";
}
else{
	include "include/header.php";
}
 ?>
<style>
	body{
		padding-right: 0px!important;
	} 
</style>
	<main>
		<!-- pc  -->

<div class="container-fluid mb-4">
		<!-- movil  -->
<div class="d-block d-md-none">
	<div class="container">
			<div class="input-group md-form form-sm form-1 pl-0">
 
  <input class="form-control my-0 py-1 buscador1" type="text" placeholder="Buscar <?= $num ?> Anuncios" aria-label="Search">
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
				<div class="col-lg-4"></div>
				<div class="col-lg-4">
				<?php if(isset($_SESSION['id']) && $_SESSION['tipo'] == 1){?>
					<div class="fondo1">
						<p class="pt-2 font-weight-bold text-center"><i class="fas fa-heart text-danger mr-3"></i> <a href="favoritos.php">Favotiro <span class="ml-3">
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
	
	<div>
	<div class="row mt-4" id="filtrar">
	<?php while($row = mysqli_fetch_array($sql)){
		$sqlq = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $row['ID'] ."' LIMIT 1");
		$rowq = mysqli_fetch_array($sqlq);
		$sqlp = mysqli_query($enlace, "SELECT min(costo) AS PrecioMinimo FROM tarifas WHERE id_anuncio = '". $row['ID']."'");
		$rowp = mysqli_fetch_array($sqlp);
		if(!$sqlp){
			echo "error";
		}
		?>
			
			<div class="col-lg-2 col-6 px-1 mx-0">
			<div class="card card1" >
				<img src="images/<?= $rowq['imagen'] ?>" class="imagen1x" alt="" onclick="mostrar_modal('<?= $row['ID'] ?>')">
				<div class="card-body">
					<div class="row ">
						<div class="col-8">
							<div class="row">
	<div class="col-12 " onclick="mostrar_modal('<?= $row['ID'] ?>')"><p><?= $row['Nombre'] ?> <?php if($row['Verificado'] == 1){  ?> <img src="img/Grupo 139.svg" alt="" class="ml-1"><?php } ?></p></div>
								
							</div>
						</div>
						<div class="col-4">

						<?php if(isset($_SESSION['id']) && $_SESSION['tipo'] == 1){
							$id = $row['ID'];
							$sqlllll = mysqli_query($enlace, "SELECT id FROM favoritos WHERE id_anuncio = '$id' AND id_usuario = '". $_SESSION['id'] ."'");
							$nummmmm = mysqli_num_rows($sqlllll);
							if($nummmmm > 0){
							?>
							<i class="fas fa-heart f2 color3"></i>
							<?php } else{ ?>

						<i class="fas fa-heart f2" onclick="agregar_favoritos('<?=  $id ?>')" id="id_<?=  $id ?>"></i>
						<?php } }
						elseif(isset($_SESSION['id'])){
						 ?>
						<i class="fas fa-heart f2"></i>
						<?php }
						else{?>
							<i class="fas fa-heart f2" data-toggle="modal" data-target="#sesion"></i>
						<?php }
						?>

						

						</div>
					</div>
				<div onclick="mostrar_modal('<?= $row['ID'] ?>')">
					<span class="badge badge-pill badge-light"><?= $row['Distrito'] ?></span>
					<span class="badge badge-pill badge-light"><?= $row['Edad'] ?> años</span>
					<span class="badge badge-pill badge-light">S/ <?= $rowp['PrecioMinimo'] ?></span>
					<span class="badge badge-pill badge-light"><?= $row['Pais'] ?></span>
				</div>
				</div>
			</div>

			</div>

		
			
	<?php } ?>
	</div>
	



	
</div>
		<!-- fin pc  -->


		<div class="modal fade" id="olvidecontrasena2" tabindex="-1" role="dialog" aria-labelledby="olvidecontraseña2"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  " role="document">
    <div class="modal-content">
       <div class="text-left mr-5">
         <button type="button" class="close cerrar1" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row d-flex justify-content-center">
          <div class="col-10">
            <div class="text-center">
       <img src="img/logo.png" width="237" alt="">
       <p class="font-weight-bold mt-3 f2">Olvidé mi contraseña</p>
     </div>
     <form id="contrasenas_nuevas">
        <div class="row">
            <div class="col-12">
             
              <input class="form-control form-control-lg campo3" type="password" placeholder="Nueva Contraseña" name="clave" id="clave1">
              <p id="clave1_text" style="color: red; font-size:10px;"></p>
            </div>
             <div class="col-12 mt-3">
             
              <input class="form-control form-control-lg campo3" type="password" placeholder="Repita contraseña" id="clave2">
			  <p id="clave2_text" style="color: red; font-size:10px;"></p>
			</div>
          
              <input type="hidden" id="id_usuario_val" name="id_usuario_val" value="">
          </div>
            <div class="text-center my-3">
        <a  class="btn boton1" type="buttom" onclick="nueva_clave()" >Recuperar</a>
      </div>
     </form>
   
 
          </div>
        </div>

     
      </div>
     
    </div>
  </div>
</div>




	
	</main>
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<?php
		if(isset($_GET['validar'])){
			include 'db.php';
			$sql = mysqli_query($enlace, "SELECT * FROM usuarios WHERE codigo_validar = '". $_GET['validar'] ."'");
			$num = mysqli_num_rows($sql);

			if($num > 0){
			?>
			<script>
				swal("Usuario Validado. Puede iniciar Sesion");  
			</script>
			<?php
			$sql2 = mysqli_query($enlace, "UPDATE usuarios SET codigo_validar = '' WHERE codigo_validar = '". $_GET['validar'] ."'");
			}
			else{ ?>
			<script>
				swal("Este codigo no existe, o ya fue usado, contacta con soporte.");
			</script>
			<?php }
		}

		if(isset($_GET['recuperar'])){
			include 'db.php';
			$sql = mysqli_query($enlace, "SELECT * FROM usuarios WHERE codigo_contrasena = '". $_GET['recuperar'] ."'");
			$num = mysqli_num_rows($sql);
			$row = mysqli_fetch_array($sql);

			if($num > 0){ ?>

				<script> console.log(<?= $row['id'] ?>)
					$("#id_usuario_val").val(<?= $row['id'] ?>);
					 $('#olvidecontrasena2').modal('show'); 
					 window.$('#olvidecontrasena2').modal('hide');
				</script>

			<?php
			$sql2 = mysqli_query($enlace, "UPDATE usuarios SET codigo_contrasena = '' WHERE codigo_contrasena = '". $_GET['recuperar'] ."'");
			}
			else{?>
				<script>
					swal("Codigo usado, o no valido."); 
				</script>
			<?php
			}
		}
	?>




<script>
	function nueva_clave(){
		var clave1 = $("#clave1").val().length;
		var clave2 = $("#clave2").val().length;
userdevdata = 1;

	if(clave1 === clave2){
		userdevdata = userdevdata-1; console.log(userdevdata);
		$("#clave1_text").html("");
		$("#clave2_text").html("");
	}
	else{
		$("#clave1_text").html("Las contraseñas deben coincidir");
		$("#clave2_text").html("Las contraseñas deben coincidir");
	}
    if(userdevdata == 0){
      var parametros=$( "#contrasenas_nuevas" ).serialize();
                       $.ajax({
                              data:  parametros, 
                              url:   '<?= $url_api ?>public/json/cambiar_contraseña.php', 
                              type:  'POST',
                              success:  function (response) 
                                          {
                                            if (response==1) 
                                            {
                                              swal("Hemos restablecido su contraseña con exito, inicie sesion por favor."); 
                                              setTimeout("location.href='kine.php'", 2000);
                                            }

                                            else{
												swal("No hemos encontrado su correo en nuestra base de datos, intente nuevamente o contacte con soporte.");
                        $("#correo_contacto").html("El correo electronico debe ser valido.");
	  $("#correoelectronico2").focus();
											}
                                           
                                          }
                              
                          });
    }
	}

	function mostrar_modal(id_modal){
		$.ajax({ 
                              url:   '<?= $url_api ?>public/json/mostrar_modal.php?id_anuncio=' + id_modal, 
                              type:  'POST',
                              success:  function (response) 
                                          {
                                          	$("#contenido_modal").html(response);
                                          	$("#perfilkine").modal("show");
                                            console.log(response);                                           
                                          }
                              
                          });
	}

	function filtrar_busqueda(){
        var parametro = $("#buscar_texto").val();

                        $.ajax({ 
                          url:   '<?= $url_api ?>public/json/filtrar_texto.php?q=' + parametro, 
                          type:  'GET',
                          success:  function (response) 
                            {
                                $("#filtrar").html(response);						
                            }
                                            
                      });
    }

	function procesar_anuncio(){
    $.ajax({
                              url:   'include/nube.php', 
                              type:  'GET',
                              success:  function (response) 
                                          {
                                            if(response == 1){
												$("#nube").hide();
    $("#nube2").hide();
    $("#nube3").hide();
	console.log("Se ha finalizado");
	$("#countdown").finish();
                                              swal("Felicitaciones! Ya te encuentras participando en nuestro proximo sorteo");
                                            }
                                          }
                          });
  }


window.onload = updateClock;

var minutes = 1;
var seconds = 00;

function updateClock() {
  document.getElementById('countdown').innerHTML = (minutes + ":" + seconds);
  if(seconds == 0 && minutes == 0){
    $("#nube").hide();
    $("#nube2").hide();
    $("#nube3").hide();
	console.log("Se ha finalizado");
	$("#countdown").finish();
  }
  if(seconds == 0){
    minutes-=1;
    seconds=59;
    setTimeout("updateClock()",1000);
  }
  else{
    seconds-=1;
    setTimeout("updateClock()",1000);
  }
}

function agregar_favoritos(anuncio){
							$("#id_"+anuncio).addClass("color3");
							$.ajax({
                              url:   'include/agregarfavoritos_.php?anuncio=' + anuncio, 
                              type:  'GET',
                              success:  function (response){}
                          	});
}
</script>
	<?php 
	include "modal/nube.php";
	include "cookies.php";
	include "modal.php";
	include "include/footer.php";
	
 ?>

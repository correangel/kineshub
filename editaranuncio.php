<?php 
session_start();
$id = $_GET['id'];

if(isset($_SESSION['id'])){
    
	include "include/header2.php";
}
else{
    header("Location: index.php");
	include "include/header.php";
}

if(isset($_GET['id'])){
	$_SESSION['id_anuncio'] = "".$_GET['id']."";
}

require_once 'db.php';
mysqli_set_charset($enlace,"utf8");

$sql = mysqli_query($enlace, "SELECT * FROM anuncio WHERE id = '".$_SESSION['id_anuncio']."'");
if(!$sql){echo "error";}
$num = mysqli_num_rows($sql);
$row = mysqli_fetch_array($sql);
 ?>

<main>
<style>
	.custom-control-input:checked~.custom-control-label::before {
    color: #fff;
    border-color: #43E389!important;
    background-color: #43E389!important;
}
.custom-control-input:focus:not(:checked)~.custom-control-label::before {
    border-color: #3af9b2d4!important;
}
.custom-control-input:not(:disabled):active~.custom-control-label::before {
    color: #fff;
    background-color: #3af9b2d4!important;
    border-color: #3af9b2d4!important;
}
.custom-control-label:before{
background-color:#fff!important;
}
.custom-checkbox .custom-control-input:checked~.custom-control-label::before{
background-color:#FF1730!important;
border-color: #FF1730!important;
}
.custom-control-input:not(:disabled):active~.custom-control-label::before {
    color: #fff;
    background-color: #fff!important;
    border-color: #fff!important;
}
.custom-control-input:focus:not(:checked)~.custom-control-label::before {
    border-color: #fff!important;
}
.custom-file-input:focus~.custom-file-label {
    border-color: #e34343!important;
    box-shadow: 0 0 0 0.2rem rgb(222 176 176 / 25%)!important;
}
</style>
	<div class="container-fluid">
					<!-- movil  -->

		
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
						<p class="pt-2 font-weight-bold text-center"><i class="fas fa-heart text-danger mr-3"></i> Favotiro <span class="ml-3">0</span></p>
					</div>
				<?php } ?>
				</div>
			
			</div>
			
		</div>
	</div>

	</div>
	<div class="mt-3 d-block d-md-none">
		<img src="img/Grupo 4201.svg" class="w-100" style="" alt="">
	</div>
	<div class="mt-3 d-none d-md-block">
		<img src="img/Grupo 394.svg" class="w-100" style="" alt="">
	</div>

	<div class="row d-flex justify-content-center mt-4">
		<div class="col-lg-8 col-12">
			<div class="card pb-4">
				<div class="fondocolor3">
					<div class="container">
						<h2 class="f9 pl-2 py-2 font-weight-bolder font-weight-normal">¿Dónde quieres anunciarte?</h2>
					</div>
					
				</div>
				<div class="card-body ">
					
					<div class="row">
						<div class="col-lg-6 col-12">
							<p class="f7 font-weight-bolder mt-3">Departamento</p>
							<select class="browser-default custom-select campo3" id="dep" onchange="select_dep()">
							<option value="0">Selecciona un Departamento</option>
							<?php
								$sql_dep = mysqli_query($enlace, "SELECT * FROM departamentos");
								while($row_dep = mysqli_fetch_array($sql_dep)){
							?>
								<option <?php if($row[departamento] == $row_dep['id']) {echo "selected";} ?> value="<?= $row_dep['id'] ?>"><?= $row_dep['departamento'] ?></option>
							<?php } ?>
							</select>
							<span id="dep_text" style="color:red; font-size: 1em;"></span>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-12" >
							<div id="provincias">
							<p class="f7 font-weight-bolder mt-3">Provincias</p>
							<select class="browser-default custom-select campo3" id='pro' onchange='select_pro()'>
								<option value="0">Selecciona una Provincia</option>
							<?php
								$sql_dep23 = mysqli_query($enlace, "SELECT * FROM provincias");
								while($row_prov = mysqli_fetch_array($sql_dep23)){
							?>
								<option <?php if($row['provincia'] == $row_prov['id']) {echo "selected";} ?> value="<?= $row_prov['id'] ?>"><?= $row_prov['provincia'] ?></option>
							<?php } ?>
							</select>
							</div>
							<span id="pro_text" style="color:red; font-size: 1em;"></span>
						</div>
						
					</div>

					<div class="row">
						<div class="col-lg-6 col-12">
							<div id="distritos">
							<p class="f7 font-weight-bolder mt-3">Distritos</p>
							<select class="browser-default custom-select campo3" id='dis' onchange='update_anun()'>
								<option selected>Selecciona un Distrito</option>
								<?php
								$sql_dep24 = mysqli_query($enlace, "SELECT * FROM distritos");
								while($row_dis = mysqli_fetch_array($sql_dep24)){
							?>
								<option <?php if($row['distrito'] == $row_dis['id']) {echo "selected";} ?> value="<?= $row_dis['id'] ?>"><?= $row_dis['distrito'] ?></option>
							<?php } ?>
							</select>
							<span id="dis_text" style="color:red; font-size: 1em;"></span>
							</div>
						</div>
						
					</div>
						  
						  
				</div>
			
				
			</div>
			<div class="card mt-3">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-6 col-12">
							<p class="f7 font-weight-bolder mt-3">Telefono</p>
							<input class="form-control form-control-lg campo3" type="text" name="telefono" onblur="act_telefono()" placeholder="Agregar numero de telefono" id="movilp" value="<?= $row['telefono'] ?>">
							<span id="movil_text" style="color:red; font-size: 1em;"></span>
						</div>
					</div>
					<p class="color6 mt-3 font-weight-bolder">IMPORTANTE</p>
					<div class="container">
								<ul>
						<li>
							<p class="text-dark "> Asegúrate de agregar correctamente tu numero, para modificarlo deberás contactarte con nosotros obligatoriamente.</p>
						</li>
						<li>
							<p class="text-dark "> <strong> No esta permitido colocar algún otro numero en el titulo y texto</strong> aparte del colocado aquí, si no el anuncio será eliminado.</p>
						</li>
					</ul>
					</div>
			
					
				</div>
			</div>
			<div class="card mt-3 pb-3">
				<div class="fondocolor3">
					<div class="container">
						<h2 class="f9 pl-2 py-2 font-weight-bolder font-weight-normal">Datos del anuncio</h2>
					</div>
					
				</div>
				<div class="card-body ">
					
					<div class="row">
						<div class="col-lg-6 col-12">
							<input class="form-control form-control-lg campo3" type="text" placeholder="Nombre" id="ca_nombre" onblur="act_caracteristica('nombre');" onkeyup="validar_cantidad('nombre', 3, 'nombre')" onkeydown="validar_cantidad('nombre', 3, 'nombre')" value="<?= $row['nombre'] ?>">
							<p class="text-center text-md-right mt-2 color2 f4" id="la_nombre">Mínimo de 3 caracteres</p>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-lg-11 col-12">
							<div class="form-group ">
							  
							  <textarea class="form-control campo3"  placeholder="Texto" rows="10" id="ca_texto" onkeyup="validar_cantidad('texto', 250, 'texto')" onkeydown="validar_cantidad('texto', 250, 'texto')" onblur="act_caracteristica('texto');"><?= $row['texto'] ?></textarea>
							</div>
							<div>
								<p class="text-center text-md-right color2 f4 pb-1 mb-3 mb-md-0" id="la_texto">Mínimo de 250 caracteres</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-12">
							
           <select class="browser-default custom-select campo3" id="ca_edad" onblur="act_caracteristica('edad');">
            <option selected>Selecciona tu edad</option>
            
			<?php 
			
				for ($i=18; $i < 100; $i++) { ?>
					<option <?php if($row['edad'] == $i){echo "selected";} ?> value="<?= $i ?>"><?= $i ?></option>
				<?php }

			?>
		  </select>
		  <span id="edad_text" style="color:red; font-size: 1em;"></span>
						</div>
					</div>
					<!-- version pc  -->
						  <div class="mt-4 text-center d-none d-md-block text-md-left">
						  
						  	<img src="img/Icon ionic-logo-whatsapp2.svg" alt="" width="25" height="22" > <span class="pt-3">Whatsapp </span><span class="ml-2">Indicar que se pueden contactar por este medio</span>
						  	<span class=""> 


						  			<div class="custom-control custom-switch d-inline-block ml-4 ">
	
  <input type="checkbox" <?php if($row['whatsapp'] == 1){echo "checked";} ?>  onchange="act_caracteristica('wsp');" class="custom-control-input" id="wsp" >
  <label class="custom-control-label" for="wsp">Activado</label>
  
</div>

</span>
						  </div>

						  <!-- version movil -->

						  <div class="d-block d-md-none">
						  	<div class="row mt-3">
						  		<div class="col-6">
						  				<img src="img/Icon ionic-logo-whatsapp2.svg" alt="" width="25" height="22" > <span class="pt-3">Whatsapp </span>
						  		</div>
						  		<div class="col-6">
						  			<div class="custom-control custom-switch d-inline-block ml-4 ">
	
  <input type="checkbox" <?php if($row['whatsapp'] == 1){echo "checked";} ?> onchange="act_caracteristica('wsp1');" class="custom-control-input" id="wsp1" >
  <label class="custom-control-label" for="wsp1">Activado</label>
  <input type="hidden" value="0" id="wss_valor">
  
</div>


	
						  		</div>
						  		<div class="container">
						  			<p class="mt-4">Indicar que se pueden contactar por este medio</p>
						  		</div>
						  		
						  	</div>
						  </div>
						  
				</div>
			
				
			</div>
			<div class="card mt-3">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-11 col-12">
							<div class="row d-flex align-items-center">
									<div class="col-8 "><p class="f7 font-weight-bolder mt-3">¿Eres una escort independiente?</p></div>
							<div class="col-4 ">
								<div class="text-right">
										<img src="img/Grupo 399.svg" width="30" alt="">
								</div>
							
							</div>
							</div>
	
<div class="custom-control form-control-lg custom-checkbox">
<input type="checkbox" class="custom-control-input" <?php if($row['aceptocondiciones'] == 1){echo "checked";} ?> id="aceptocondiciones" onchange="act_caracteristica('aceptocondiciones');">
<label class="custom-control-label f8" for="aceptocondiciones">Si, este teléfono es exclusivamente mío</label>
<input type="hidden" id="acepto_valor" value="0">
</div>
						</div>
					</div>
				</div>
			</div>
			<div class="card mt-3">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-11 col-12">
							<div class="row d-flex align-items-center">
									<div class="col-6 "><p class="f7 font-weight-bolder mt-3">Tarifas</p></div>
							<div class="col-6 ">
								<div class="text-right ">

									<a onclick="añadir_tarifa()"><p class="d-inline-block pr-2 color8 f4 ">Añadir tarifa</p><img src="img/Grupo 400.svg" width="30" alt=""></a>	
								</div>
								
							
							</div>
							</div>
							<div id="tarifas">
								<?php
								$sql2 = mysqli_query($enlace, "SELECT * FROM tarifas WHERE id_anuncio = '". $_SESSION['id_anuncio'] ."'");
						$numero = mysqli_num_rows($sql2);
						while($row_tar = mysqli_fetch_array($sql2)){
							$tiempo = $row_tar['tiempo'];
							$costo = $row_tar['costo'];
							$id = $row_tar['id'];
							echo "
							<div class='row mt-3' >
							<div class='col-lg-8 col-5'>
								<div >
									<input type='text' class=' fondocolor5 font-weight-normal w-100 publicidad1 py-1 pl-3' id='tiempo_$id' value='$tiempo' disabled>
								</div>
							</div>
							<div class='col-lg-3 col-4 px-1 px-lg-2'>
									<div>
										<input type='text' class='fondocolor6  font-weight-normal w-100 publicidad1 py-1 pl-3' id='costo_$id' value='$costo' disabled >
									</div>
							</div>
								<div class='col-lg-1 col-1'>
									<button class='botonborrar1 btn btn-sm px-3' style='margin-top: 2px;width: 45px;' onclick='eliminar_horario($id, 1)'><i class='fas fa-trash'></i> </button>
								</div>
							</div>
							";	
									
						}?>
							<span id="tarifas_text" style="color:red; font-size: 1em;"></span>
							</div>
							<input type="hidden" id="tarifas_totales" value="<?= $numero ?>">
							<div class="row mt-3" id="crear_tarifa" style="display: none;">
								<div class="col-lg-8 col-5">
										<div class="">
											<input type="text" class=" fondocolor5 font-weight-normal w-100 publicidad1 py-1 pl-3" placeholder="Tiempo" required="" id="tiempo" >
									</div>
								</div>
								<div class="col-lg-3 col-4 px-1 px-lg-2">
									<div class="">
										<input type="text" required="" class="fondocolor6  font-weight-normal w-100 publicidad1 py-1 pl-3" placeholder="Costo"  id="costo_ta" >
									</div>
								</div>
								<div class="col-lg-1 col-3 ">
									<button class="botonborrar1 btn btn-sm px-3" style="margin-top: 2px;width: 45px;" onclick="guardar_extras('tarifa')"><i class="far fa-save"></i></button>
								</div>
							</div>
						

						</div>
					</div>
				</div>
			</div>

			<div class="card mt-3">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-11 col-12">
							<div class="row d-flex align-items-center">
									<div class="col-6 ">

										<p class="f7 font-weight-bolder mt-3">Horarios</p>

									</div>
							<div class="col-6 ">
								<div class="text-right ">
										<a onclick="añadir_horario()"><p class="d-inline-block pr-2 color8 f4 ">Añadir horario</p><img src="img/Grupo 400.svg" width="30" alt=""></a>
								</div>
							
							</div>
							</div>
							<div id="horarios">
								<?php
								$sql2 = mysqli_query($enlace, "SELECT * FROM horarios WHERE id_anuncio = '". $_SESSION['id_anuncio'] ."'");
						$numero = mysqli_num_rows($sql2);
						while($row_tar = mysqli_fetch_array($sql2)){
							$tiempo = $row_tar['dia'];
							$costo = $row_tar['horario'];
							$id = $row_tar['id'];
							echo "
							<div class='row mt-3' >
							<div class='col-lg-8 col-5'>
								<div >
									<input type='text' class=' fondocolor5 font-weight-normal w-100 publicidad1 py-1 pl-3' id='dia_$id' value='$tiempo' disabled>
								</div>
							</div>
							<div class='col-lg-3 col-4 px-1 px-lg-2'>
									<div>
										<input type='text' class='fondocolor6  font-weight-normal w-100 publicidad1 py-1 pl-3' id='horas_$id' value='$costo' disabled >
									</div>
							</div>
								<div class='col-lg-1 col-1'>
									<button class='botonborrar1 btn btn-sm px-3' style='margin-top: 2px;width: 45px;' onclick='eliminar_horario($id, 2)'><i class='fas fa-trash'></i> </button>
								</div>
							</div>
							";	
									
						}
								?>
							<span id="horarios_text" style="color:red; font-size: 1em;"></span>
							</div>
							<input type="hidden" id="horarios_totales" value="<?= $numero ?>">
							<div class="row mt-3" id="crear_horario" style="display: none;">
								<div class="col-lg-8 col-5">
										<div class="">
											<input type="text" class=" fondocolor5 font-weight-normal w-100 publicidad1 py-1 pl-3" placeholder="Dia" id="dia" >
									</div>
								</div>
								<div class="col-lg-3 col-4 px-1 px-lg-2">
									<div class="">
										<input type="text" class="fondocolor6  font-weight-normal w-100 publicidad1 py-1 pl-3" placeholder="Horas"  id="horas" >
									</div>
								</div>
								<div class="col-lg-1 col-3 ">
									<button class="botonborrar1 btn btn-sm px-3" style="margin-top: 2px;width: 45px;" onclick="guardar_extras('horario')"><i class="far fa-save"></i></button>
								</div>
							</div>
						

						</div>
					</div>
				</div>
			</div>
				<div class="card mt-3">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-11 col-12">
							<div class="row d-flex align-items-center">
									<div class="col-6 "><p class="f7 font-weight-bolder mt-3">Galeria</p></div>
							<div class="col-6 ">
								<div class="text-right ">
									<a onclick='cargar_fotos()'><p class="d-inline-block pr-2 color8 f4 ">Añadir fotos</p><img src="img/Grupo 400.svg" width="30" alt=""></a>	
								</div>
							
							</div>
							</div>
							<div class="mt-12 mb-12" id="cargar_foto" style="display: none;"> 
								<div class="row">
									<div class="col-lg-9 col-12 " style="margin-top: 5px;">
										<div class="custom-file">
										<form method="post" action="#" enctype="multipart/form-data">
  <input type="file" class="custom-file-input"  name="image" id="image" lang="es">
  <label class="custom-file-label" for="subirfoto" class="pt-4"  style="font-size: 13px!important;">	 <p><img src="img/Icon awesome-camera.svg" class="mr-2" alt="">Selecciona las imágenes </p></label>
</div>
									</div>
									<div class="col-lg-3 col-12 text-center text-lg-right mt-2 mt-lg-0 ">
									<input type="button" value="Cargar Foto" onclick='guardar_foto()' class="btn botonborrar1 btn-sm" >
								
										</form>
									</div>
								</div>
							
							</div>
							<div class="row" id="imagenes_cargadas">
								<?php
								$sql2 = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $id_anuncio ."'");
						        $num_f = mysqli_num_rows($sql2);
						        while($row = mysqli_fetch_array($sql2)){
						            $imagen = $row['imagen'];
						            echo"<div class='col-lg-2 col-4'>
						                <img src='images/$imagen' class='w-100 mt-2' alt=''>
						            </div>";
						        }?>
								<span id="imagenes_text" style="color:red; font-size: 1em;"></span>
							</div>
							<input type="hidden" id="imagenes_totales" value="<?= $num_f ?>">



						</div>

					</div>

				</div>

			</div>
			<div class="card  mt-3">
				<div class="fondocolor3">
					<div class="container">
						<h2 class="f9 pl-2 py-2 font-weight-bolder font-weight-normal">Sobre ti</h2>
						<input type="hidden" id="sobreti_total" value="1">
						<span id="sobreti_text" style="color:red; font-size: 1em;"></span>
					</div>
					
				</div>
				<div class="card-body ">
					<?php 
						$sqlc = mysqli_query($enlace, "SELECT * FROM caracteristicas WHERE id_anuncio = '". $_SESSION['id_anuncio'] ."'");
						if(!$sqlc){echo "error";}
						$rowc = mysqli_fetch_array($sqlc);
					?>
					
					<div class="row">
						<div class="col-lg-11 col-12">
							<div class="row">
								<div class="col-sm col-6">
								<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['mujeres'] == 1){echo "filtro1_activo";} ?>" id="la_mujeres" onclick="caracteristicas('mujeres')">Atención a mujeres</p>
								<input type="hidden" id="in_mujeres" value="<?= $rowc['mujeres'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['parejas'] == 1){echo "filtro1_activo";} ?>" id="la_parejas" onclick="caracteristicas('parejas')">Atención a parejas</p>
									<input type="hidden" id="in_parejas" value="<?= $rowc['parejas'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['altas'] == 1){echo "filtro1_activo";} ?>" id="la_altas" onclick="caracteristicas('altas')">Altas</p>
									 <input type="hidden" id="in_altas" value="<?= $rowc['altas'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['bajas'] == 1){echo "filtro1_activo";} ?>" id="la_bajas" onclick="caracteristicas('bajas')">Bajas</p>
									<input type="hidden" id="in_bajas" value="<?= $rowc['bajas'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['negro'] == 1){echo "filtro1_activo";} ?>" id="la_negro" onclick="caracteristicas('negro')">Cabello negro</p>
									<input type="hidden" id="in_negro" value="<?= $rowc['negro'] ?>">
								</div>
								<div class="col-sm col-6  d-block d-md-none">
								<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['rubia'] == 1){echo "filtro1_activo";} ?>" id="la_rubia" onclick="caracteristicas('rubia')">Rubias</p>
								<input type="hidden" id="in_rubia" value="<?= $rowc['rubia'] ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm col-6 d-none d-md-block">
								<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['rubia'] == 1){echo "filtro1_activo";} ?>" id="la_rubia1" onclick="caracteristicas('rubia1')">Rubias</p>
								<input type="hidden" id="in_rubia1" value="<?= $rowc['rubia'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['rojas'] == 1){echo "filtro1_activo";} ?>" id="la_rojas" onclick="caracteristicas('rojas')">Peli rojas</p>
									<input type="hidden" id="in_rojas" value="<?= $rowc['rojas'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['depiladas'] == 1){echo "filtro1_activo";} ?>" id="la_depiladas" onclick="caracteristicas('depiladas')">Depiladas</p>
									 <input type="hidden" id="in_depiladas" value="<?= $rowc['depiladas'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['sin_depilar'] == 1){echo "filtro1_activo";} ?>" id="la_sin_depilar" onclick="caracteristicas('sin_depilar')">Sin depilar</p>
									 <input type="hidden" id="in_sin_depilar" value="<?= $rowc['sin_depilar'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['discapacitados'] == 1){echo "filtro1_activo";} ?>" id="la_discapacitados" onclick="caracteristicas('discapacitados')">Discapacitados</p>
									<input type="hidden" id="in_discapacitados" value="<?= $rowc['discapacitados'] ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm col-6 mb-3 mb-md-0">
								    <select class="browser-default custom-select f5 marco1y pl-5 py-2" id="la_etnia" style="height: 34px;" onchange="caracteristicas('etnia')">
            <option class="">Etnia</option>
            <option value="1" <?php if($rowc['etnia'] == 1) {echo "selected";} ?>>Andinas</option>
            <option value="2" <?php if($rowc['etnia'] == 2) {echo "selected";} ?>>Morenas</option>
            <option value="3" <?php if($rowc['etnia'] == 3) {echo "selected";} ?>>Piel Blanca</option>
            <option value="4" <?php if($rowc['etnia'] == 4) {echo "selected";} ?>>Trigueñas</option>
		  </select>
								</div>
								<div class="col-sm col-6 mb-3 mb-md-0">
									   <select class="browser-default custom-select f5 marco1y pl-5 py-2" style="height: 34px;" id="la_pais" onchange="caracteristicas('pais')">
            <option selected>País</option>
			<option <?php if($rowc['pais'] == 'Argentina') {echo "selected";} ?>  value="Argentina">Argentinas</option>
			<option <?php if($rowc['pais'] == 'Boliviana') {echo "selected";} ?>  value="Boliviana">Bolivianas</option>
			<option <?php if($rowc['pais'] == 'Brasileña') {echo "selected";} ?>  value="Brasileña">Brasileñas</option>
			<option <?php if($rowc['pais'] == 'Chilena') {echo "selected";} ?>  value="Chilena">Chilenas</option>
			<option <?php if($rowc['pais'] == 'Colombiana') {echo "selected";} ?>  value="Colombiana">Colombianas</option>
			<option <?php if($rowc['pais'] == 'Coste Ricense') {echo "selected";} ?>  value="Coste Ricense">Costarricenses</option>
			<option <?php if($rowc['pais'] == 'Cubana') {echo "selected";} ?>  value="Cubana">Cubanas</option>
			<option <?php if($rowc['pais'] == 'Dominicana') {echo "selected";} ?>  value="Dominicana">Dominicanas</option>
			<option <?php if($rowc['pais'] == 'Ecuatoriana') {echo "selected";} ?>  value="Ecuatoriana">Ecuatorianas</option>
			<option <?php if($rowc['pais'] == 'Guatemalteca') {echo "selected";} ?>   value="Guatemalteca">Guatemaltecas</option>
			<option <?php if($rowc['pais'] == 'Hondureña') {echo "selected";} ?>   value="Hondureña">Hondureñas</option>
			<option <?php if($rowc['pais'] == 'Mexicana') {echo "selected";} ?>  value="Mexicana">Mexicanas</option>
			<option <?php if($rowc['pais'] == 'Nicaraguense') {echo "selected";} ?>  value="Nicaraguense">Nicaragüenses</option>
			<option <?php if($rowc['pais'] == 'Panameña') {echo "selected";} ?>  value="Panameña">Panameñas</option>
			<option <?php if($rowc['pais'] == 'Paraguaya') {echo "selected";} ?>  value="Paraguaya">Paraguayas</option>
			<option <?php if($rowc['pais'] == 'Peruana') {echo "selected";} ?>  value="Peruana">Peruanas</option>
			<option <?php if($rowc['pais'] == 'Puerto Riqueña') {echo "selected";} ?>  value="Puerto Riqueña">Puertorriqueñas</option>
			<option <?php if($rowc['pais'] == 'Slavadoreña') {echo "selected";} ?>   value="Slavadoreña">Salvadoreñas</option>
			<option <?php if($rowc['pais'] == 'Uruguaya') {echo "selected";} ?>  value="Uruguaya">Uruguayas</option>
			<option <?php if($rowc['pais'] == 'Venezolana') {echo "selected";} ?> value="Venezolana">Venezolanas</option>
          </select>								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['independiente'] == 1){echo "filtro1_activo";} ?>" id="la_independiente" onclick="caracteristicas('independiente')">Independientes</p>
									 <input type="hidden" id="in_independiente" value="<?= $rowc['independiente'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['tarjeta'] == 1){echo "filtro1_activo";} ?>" id="la_tarjeta" onclick="caracteristicas('tarjeta')">Pago por tarjeta</p>
									 <input type="hidden" id="in_tarjeta" value="<?= $rowc['tarjeta'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['agencia'] == 1){echo "filtro1_activo";} ?>" id="la_agencia" onclick="caracteristicas('agencia')">De agencia</p>
									<input type="hidden" id="in_agencia" value="<?= $rowc['agencia'] ?>">
								</div>
								<div class="col-sm col-6 d-block d-md-none">
								<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['naturales'] == 1){echo "filtro1_activo";} ?>" id="la_naturales" onclick="caracteristicas('naturales')">Pechos naturales</p>
								<input type="hidden" id="in_naturales" value="<?= $rowc['naturales'] ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm col- d-none d-md-block">
								<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['naturales'] == 1){echo "filtro1_activo";} ?>" id="la_naturales1" onclick="caracteristicas('naturales1')">Pechos naturales</p>
								<input type="hidden" id="in_naturales1" value="<?= $rowc['naturales'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['delgadas'] == 1){echo "filtro1_activo";} ?>" id="la_delgadas" onclick="caracteristicas('delgadas')">Delgadas</p>
									<input type="hidden" id="in_delgadas" value="<?= $rowc['delgadas'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['gorditas'] == 1){echo "filtro1_activo";} ?>" id="la_gorditas" onclick="caracteristicas('gorditas')">Gorditas</p>
									<input type="hidden" id="in_gorditas" value="<?= $rowc['gorditas'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['tetonas'] == 1){echo "filtro1_activo";} ?>" id="la_tetonas" onclick="caracteristicas('tetonas')">Tetonas</p>
									<input type="hidden" id="in_tetonas" value="<?= $rowc['tetonas'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['whatsapp'] == 1){echo "filtro1_activo";} ?>" id="la_whatsapp" onclick="caracteristicas('whatsapp')">WhatsApp</p>
									<input type="hidden" id="in_whatsapp" value="<?= $rowc['whatsapp'] ?>">
								</div>
							</div>
						</div>
					</div>
				
						  
						  
				</div>
			
				
			</div>
			<div class="card  mt-3">
				<div class="fondocolor3">
					<div class="container">
						<h2 class="f9 pl-2 py-2 font-weight-bolder font-weight-normal">Servicios</h2>
						<input type="hidden" id="servicio_total" value="1">
						<span id="servicio_text" style="color:red; font-size: 1em;"></span>
					</div>
					
				</div>
				<div class="card-body ">
					
					<div class="row">
						<div class="col-lg-11 col-12">
							<div class="row">
								<div class="col-6 col-sm">
								<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['actriz'] == 1){echo "filtro1_activo";} ?>" id="la_actriz" onclick="servicios('actriz')">Actriz porno</p>
								<input type="hidden" id="in_actriz" value="<?= $rowc['actriz'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['besos'] == 1){echo "filtro1_activo";} ?>" id="la_besos" onclick="servicios('besos')">Besos boca</p>
									<input type="hidden" id="in_besos" value="<?= $rowc['besos'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['cuerpo'] == 1){echo "filtro1_activo";} ?>" id="la_cuerpo" onclick="servicios('cuerpo')">Eyaculación cuerpo</p>
									<input type="hidden" id="in_cuerpo" value="<?= $rowc['cuerpo'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['facial'] == 1){echo "filtro1_activo";} ?>" id="la_facial" onclick="servicios('facial')">Eyaculación facial</p>
									<input type="hidden" id="in_facial" value="<?= $rowc['facial'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['disfraces'] == 1){echo "filtro1_activo";} ?>" id="la_disfraces" onclick="servicios('disfraces')">Fantasías y disfraces</p>
									<input type="hidden" id="in_disfraces" value="<?= $rowc['disfraces'] ?>">
								</div>
								<div class="col-6 col-sm d-block d-md-none">
								<select class="browser-default custom-select f5 pl-5 marco1y filtro1 py-2" style="height: 34px;">
            <option selected>Frances</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-sm d-none d-md-block ">
								<select class="browser-default custom-select f5 marco1y filtro1 py-2" style="height: 34px;">
            <option selected>Frances</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['eroticos'] == 1){echo "filtro1_activo";} ?>" id="la_eroticos" onclick="servicios('eroticos')">Masajes eroticos</p>
									<input type="hidden" id="in_eroticos" value="<?= $rowc['eroticos'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['anal'] == 1){echo "filtro1_activo";} ?>" id="la_anal" onclick="servicios('anal')">Sexo anal</p>
									<input type="hidden" id="in_anal" value="<?= $rowc['anal'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['novia'] == 1){echo "filtro1_activo";} ?>" id="la_novia" onclick="servicios('novia')">Trato de novia</p>
									<input type="hidden" id="in_novia" value="<?= $rowc['novia'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['trio'] == 1){echo "filtro1_activo";} ?>" id="la_trio" onclick="servicios('trio')">Trio</p>
									<input type="hidden" id="in_trio" value="<?= $rowc['trio'] ?>">
								</div>
							</div>
						
						</div>
					</div>
				
						  
						  
				</div>
			
				
			</div>
			<div class="card  mt-3">
				<div class="fondocolor3">
					<div class="container">
						<h2 class="f9 pl-2 py-2 font-weight-bolder font-weight-normal">Servicios epeciales</h2>
					</div>
					
				</div>
				<div class="card-body ">
					
					<div class="row">
						<div class="col-lg-11 col-12">
							<div class="row">
								<div class="col-6 col-sm">
								<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['blanco'] == 1){echo "filtro1_activo";} ?>" id="la_blanco" onclick="servicios('blanco')">Beso blanco</p>
								<input type="hidden" id="in_blanco" value="<?= $rowc['blanco'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['benegro'] == 1){echo "filtro1_activo";} ?>" id="la_benegro" onclick="servicios('benegro')">Beso negro</p>
									<input type="hidden" id="in_benegro" value="<?= $rowc['benegro'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['copro'] == 1){echo "filtro1_activo";} ?>" id="la_copro" onclick="servicios('copro')">Copro</p>
									<input type="hidden" id="in_copro" value="<?= $rowc['copro'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['fetichismo'] == 1){echo "filtro1_activo";} ?>" id="la_fetichismo" onclick="servicios('fetichismo')">Fetichismo</p>
									<input type="hidden" id="in_fetichismo" value="<?= $rowc['fetichismo'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['profunda'] == 1){echo "filtro1_activo";} ?>" id="la_profunda" onclick="servicios('profunda')">Garganta profunda</p>
									<input type="hidden" id="in_profunda" value="<?= $rowc['profunda'] ?>">
								</div>
								<div class="col-6 col-sm d-block d-md-none">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['dorada'] == 1){echo "filtro1_activo";} ?>" id="la_dorada" onclick="servicios('dorada')">Lluvia dorada</p>
									<input type="hidden" id="in_dorada" value="<?= $rowc['dorada'] ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-sm d-none d-md-block">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['dorada1'] == 1){echo "filtro1_activo";} ?>" id="la_dorada1" onclick="servicios('dorada1')">Lluvia dorada</p>
									<input type="hidden" id="in_dorada1" value="<?= $rowc['dorada1'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['duro'] == 1){echo "filtro1_activo";} ?>" id="la_duro" onclick="servicios('duro')">Sado duro</p>
									<input type="hidden" id="in_duro" value="<?= $rowc['duro'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['suave'] == 1){echo "filtro1_activo";} ?>" id="la_suave" onclick="servicios('suave')">Sado suave</p>
									<input type="hidden" id="in_suave" value="<?= $rowc['suave'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['squirting'] == 1){echo "filtro1_activo";} ?>" id="la_squirting" onclick="servicios('squirting')">Squirting</p>
									<input type="hidden" id="in_squirting" value="<?= $rowc['squirting'] ?>">
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['strap'] == 1){echo "filtro1_activo";} ?>" id="la_strap" onclick="servicios('strap')">Strap on</p>
									<input type="hidden" id="in_strap" value="<?= $rowc['strap'] ?>">
								</div>
							</div>
						
						</div>
					</div>
				
						  
						  
				</div>
			
				
			</div>
			<div class="card  mt-3">
				<div class="fondocolor3">
					<div class="container">
						<h2 class="f9 pl-2 py-2 font-weight-bolder font-weight-normal">Lugar de encuentro</h2>
						<input type="hidden" id="encuentro_total" value="1">
						<span id="encuentro_text" style="color:red; font-size: 1em;"></span>
					</div>
					
				</div>
				<div class="card-body ">
					
					<div class="row">
						<div class="col-lg-11 col-12">
							<div class="row">
								<div class="col-sm col-6">
								<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['domicilio'] == 1){echo "filtro1_activo";} ?>" id="la_domicilio" onclick="encuentro('domicilio')">A domicilio</p>
								<input type="hidden" id="in_domicilio" value="<?= $rowc['domicilio'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['cena'] == 1){echo "filtro1_activo";} ?>" id="la_cena" onclick="encuentro('cena')">Cena romantica</p>
									<input type="hidden" id="in_cena" value="<?= $rowc['cena'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['club_inter'] == 1){echo "filtro1_activo";} ?>" id="la_club_inter" onclick="encuentro('club_inter')">Club intercambio</p>
									<input type="hidden" id="in_club_inter" value="<?= $rowc['club_inter'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['departamento'] == 1){echo "filtro1_activo";} ?>" id="la_departamento" onclick="encuentro('departamento')">Departamento propio</p>
									<input type="hidden" id="in_departamento" value="<?= $rowc['departamento'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['despedida'] == 1){echo "filtro1_activo";} ?>" id="la_despedida" onclick="encuentro('despedida')">Despedida de solteros</p>
									<input type="hidden" id="in_despedida" value="<?= $rowc['despedida'] ?>">
								</div>
								<div class="col-sm col-6 d-block d-md-none">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['club'] == 1){echo "filtro1_activo";} ?>" id="la_club" onclick="encuentro('club')">En un club</p>
									<input type="hidden" id="in_club" value="<?= $rowc['club'] ?>">
								</div>
							</div>
							<div class="row">
								<div class="col-sm col-6 d-none d-md-block">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['club'] == 1){echo "filtro1_activo";} ?>" id="la_club1" onclick="encuentro('club1')">En un club</p>
									<input type="hidden" id="in_club1" value="<?= $rowc['club'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['hotel'] == 1){echo "filtro1_activo";} ?>" id="la_hotel" onclick="encuentro('hotel')">En un hotel/Motel</p>
									<input type="hidden" id="in_hotel" value="<?= $rowc['hotel'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['eventos'] == 1){echo "filtro1_activo";} ?>" id="la_eventos" onclick="encuentro('eventos')">Eventos y fiestas</p>
									<input type="hidden" id="in_eventos" value="<?= $rowc['eventos'] ?>">
								</div>
								<div class="col-sm col-6">
									<p class="marco1y filtro1 f5 py-2 text-center px-2 <?php if($rowc['viajes'] == 1){echo "filtro1_activo";} ?>" id="la_viajes" onclick="encuentro('viajes')">Viajes</p>
									<input type="hidden" id="in_viajes" value="<?= $rowc['viajes'] ?>">
								</div>
								<div class="col-sm col-6">
									
								</div>
							</div>
						
						</div>
					</div>
				
						  
						  
				</div>
			
				
			</div>
			<div>
				<div class="row d-flex justify-content-center mt-4">
					<div class="col-lg-4 text-center col-12">
						<button class="btn boton14 w-100 " onclick="validar_guardar()">Publicar Anuncio</button>
					</div>
				</div>
					<div class="mt-4 mb-4 text-center">
			<p class="grey-text f3">@Kineshub 2020. <br> Todos los derechos reservados.</p>
		</div>
				
			</div>
		</div>
	</div>
		
	</div>
	
</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>

<script>
	function select_dep(){
		var parametro = $("#dep").val();

		$.ajax({ 
            url:   '<?= $url_api ?>public/json/mostrar_provincias.php?departamento=' + parametro, 
            type:  'GET',
            success:  function (response) 
				{
						$("#provincias").html(response);						
				}
                              
        });
	}

	function select_pro(){
		var parametro = $("#pro").val();

		$.ajax({ 
            url:   '<?= $url_api ?>public/json/mostrar_distritos.php?provincia=' + parametro, 
            type:  'GET',
            success:  function (response) 
				{
						$("#distritos").html(response);						
				}
                              
        });
	}

	function update_anun(){
		var parametro = $("#dis").val();

		$.ajax({ 
            url:   '<?= $url_api ?>public/json/guardar_distrito.php?distrito=' + parametro, 
            type:  'GET',
            success:  function (response){}           
        });
	}

	function act_telefono(){
		var parametro = $("#movilp").val();

		$.ajax({ 
            url:   '<?= $url_api ?>public/json/guardar_telefono.php?telefono=' + parametro, 
            type:  'GET',
            success:  function (response){}           
        });
	}

	function act_caracteristica(valor){
		var parametro = $("#ca_"+valor).val();

		if(valor == 'wsp'){
			var parametro = $("#wsp").val();

			var param = $("#wss_valor").val();

			if(param == 0){	
				parametro = 1;
				$("#wss_valor").val(parametro);
			}
			else{
				parametro = 0;
				$("#wss_valor").val(parametro);
			}
		}
			if(valor == 'wsp1'){
			var parametro = $("#wsp1").val();

			var param = $("#wss_valor").val();

			if(param == 0){	
				parametro = 1;
				$("#wss_valor").val(parametro);
			}
			else{
				parametro = 0;
				$("#wss_valor").val(parametro);
			}
		}

		if(valor == 'wsp1'){
			var parametro = $("#wsp1").val();

			var param = $("#wss_valor").val();

			if(param == 0){
				parametro = 1;
				$("#wss_valor").val(parametro);
			}
			else{
				parametro = 0;
				$("#wss_valor").val(parametro);
			}

			valor = "wsp";
		}

		if(valor == "aceptocondiciones"){
			var parametro = $("#aceptocondiciones").val();

			var param = $("#acepto_valor").val();

			if(param == 0){
				parametro = 1;
				$("#acepto_valor").val(parametro);
			}
			else{
				parametro = 0;
				$("#acepto_valor").val(parametro);
			}
		}

		$.ajax({ 
            url:   '<?= $url_api ?>public/json/act_caracteristica.php?campo=' + valor + '&valor=' + parametro, 
            type:  'GET',
            success:  function (response){}           
        });
	}

	function validar_cantidad(campo, cantidad, label){
		var mensaje = $("#ca_"+campo).val();
		mensaje2 = mensaje.split('').length;
		if(mensaje2 < cantidad){
			minimo = cantidad - mensaje2;
			$("#la_"+label).html("Minimo de " + minimo + " Caracteres");
		}
		else{
			$("#la_"+label).html("");
			$("#enviar").prop('disabled', false);
		}
	}

	function añadir_tarifa(){
		$("#crear_tarifa").show(1000, "swing");
	}

	function añadir_horario(){
		$("#crear_horario").show(1000, "swing");
	}

	function cargar_fotos(){
		$("#cargar_foto").show(1000, "linear");
	}



	

	function guardar_extras(tipo){
		if(tipo == 'tarifa'){
			var tiempo = $("#tiempo").val();
			var costo = $("#costo_ta").val();
			var tipo = tipo;

		}

		if(tipo == 'horario'){
			var tiempo = $("#dia").val();
			var costo = $("#horas").val();
			var tipo = tipo;
		}

		$.ajax({ 
            url:   '<?= $url_api ?>public/json/tarifas.php?tipo=' + tipo + '&valor1=' + tiempo + '&valor2=' + costo, 
            type:  'GET',
            success:  function (response){
				
				if(tipo == 'tarifa'){
					$("#tarifas").html(response);
					var tiempo = $("#tiempo").val("");
					var costo = $("#costo_ta").val("");
					$("#crear_tarifa").hide(1000, "swing");
					var tarifas_totales = $("#tarifas_totales").val();
					tarifas = tarifas_totales + 1;
					$("#tarifas_totales").val(tarifas);
					console.log(tarifas);
				}
				if(tipo == 'horario'){
					$("#horarios").html(response);
					$("#dia").val("");
					$("#horas").val("");
					$("#crear_horario").hide(1000, "swing");
					var horarios_totales = $("#horarios_totales").val();
					horarios = horarios_totales +1;
					$("#horarios_totales").val(horarios);
					console.log(horarios)
				}
				
				
			}           
        });
	}

	function eliminar_horario(id, tabla){
		if(tabla == 1){
			tabla = "tarifas";
		}
		if(tabla == 2){
			tabla = "horarios";
		}
		$.ajax({ 
            url:   '<?= $url_api ?>public/json/eliminar_horario.php?id=' + id + '&tabla=' + tabla, 
            type:  'GET',
            success:  function (response){
				if(tabla == 'horarios'){
					$("#horarios").html(response);
				}
				if(tabla == 'tarifas'){
					$("#tarifas").html(response);
				}
					
				}          
        });
	}

	function guardar_foto(){
		var formData = new FormData();
        var files = $('#image')[0].files[0];
        formData.append('file',files);
        $.ajax({
            url: 'upload.php',
            type: 'post',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if (response != 0) {
                    $("#imagenes_cargadas").html(response);
					 imagenes_totales = $("#imagenes_totales").val();
					 imagenes = imagenes_totales + 1;
					 $("#imagenes_totales").val(imagenes);
                } else {
                    $("#imagenes_cargadas").html("No se han cargado imagenes, o ha sucedido un error, intentelo nuevamente");
                }
            }
        });
	}

	function caracteristicas(dato){
		
		
		var parametro = $("#in_"+dato).val();
		
		if(parametro == 1){
			if(dato == 'altas' || dato == 'bajas'){
			$('#la_bajas').attr('onClick', "caracteristicas('bajas');");
			$('#la_altas').attr('onClick', "caracteristicas('altas');");
			$("#la_bajas").addClass("filtro1");
			$("#la_altas").addClass("filtro1");
			$("#la_altas").removeClass("filtro_d");
			$("#la_bajas").removeClass("filtro_d");
			}

			if(dato == 'delgadas' || dato == 'gorditas'){
			$('#la_delgadas').attr('onClick', "caracteristicas('delgadas');");
			$('#la_gorditas').attr('onClick', "caracteristicas('gorditas');");
			$("#la_delgadas").addClass("filtro1");
			$("#la_gorditas").addClass("filtro1");
			$("#la_gorditas").removeClass("filtro_d");
			$("#la_delgadas").removeClass("filtro_d");
			}

			if(dato == 'independiente' || dato == 'agencia'){
			$('#la_independiente').attr('onClick', "caracteristicas('independiente');");
			$('#la_agencia').attr('onClick', "caracteristicas('agencia');");
			$("#la_independiente").addClass("filtro1");
			$("#la_agencia").addClass("filtro1");
			$("#la_independiente").removeClass("filtro_d");
			$("#la_agencia").removeClass("filtro_d");
			}

			if(dato == 'depiladas' || dato == 'sin_depilar'){
			$('#la_depiladas').attr('onClick', "caracteristicas('depiladas');");
			$('#la_sin_depilar').attr('onClick', "caracteristicas('sin_depilar');");
			$("#la_depiladas").addClass("filtro1");
			$("#la_sin_depilar").addClass("filtro1");
			$("#la_depiladas").removeClass("filtro_d");
			$("#la_sin_depilar").removeClass("filtro_d");
			}

			if(dato == 'negro' || dato == 'rubia' || dato == 'rubia1' || dato == 'rojas'){
			$('#la_negro').attr('onClick', "caracteristicas('negro');");
			$('#la_rubia').attr('onClick', "caracteristicas('rubia');");
			$('#la_rubia1').attr('onClick', "caracteristicas('rubia1');");
			$('#la_rojas').attr('onClick', "caracteristicas('rojas');");
			$("#la_negro").addClass("filtro1");
			$("#la_rubia").addClass("filtro1");
			$("#la_rubia1").addClass("filtro1");
			$("#la_rojas").addClass("filtro1");
			$("#la_negro").removeClass("filtro_d");
			$("#la_rubia").removeClass("filtro_d");
			$("#la_rubia1").removeClass("filtro_d");
			$("#la_rojas").removeClass("filtro_d");
			}

			
			parametro = 0;
			$("#in_"+dato).val("0");
			$("#la_"+dato).removeClass("filtro1_activo");
		}
		else{
			if(dato == 'negro'){
				$('#la_rubia').removeAttr('onclick');
				$('#la_rubia1').removeAttr('onclick');
				$('#la_rojas').removeAttr('onclick');
				$("#la_rubia").addClass("filtro_d");
				$("#la_rubia1").addClass("filtro_d");
				$("#la_rojas").addClass("filtro_d");
			}
			if(dato == 'rojas'){
				$('#la_rubia').removeAttr('onclick');
				$('#la_rubia1').removeAttr('onclick');
				$('#la_negro').removeAttr('onclick');
				$("#la_rubia").addClass("filtro_d");
				$("#la_rubia1").addClass("filtro_d");
				$("#la_negro").addClass("filtro_d");
			}
			if(dato == 'rubia' || dato == 'rubia1'){
				$('#la_negro').removeAttr('onclick');
				$('#la_rojas').removeAttr('onclick');
				$("#la_negro").addClass("filtro_d");
				$("#la_rojas").addClass("filtro_d");
			}

			if(dato == 'altas'){
				$('#la_bajas').removeAttr('onclick');
				$("#la_bajas").addClass("filtro_d");
			}
			if(dato == 'bajas'){
				$('#la_altas').removeAttr('onclick');
				$("#la_altas").addClass("filtro_d");
			}

			if(dato == 'delgadas'){
				$('#la_gorditas').removeAttr('onclick');
				$("#la_gorditas").addClass("filtro_d");
			}
			if(dato == 'gorditas'){
				$('#la_delgadas').removeAttr('onclick');
				$("#la_delgadas").addClass("filtro_d");
			}

			if(dato == 'independiente'){
				$('#la_agencia').removeAttr('onclick');
				$("#la_agencia").addClass("filtro_d");
			}
			if(dato == 'agencia'){
				$('#la_independiente').removeAttr('onclick');
				$("#la_independiente").addClass("filtro_d");
			}

			if(dato == 'depiladas'){
				$('#la_sin_depilar').removeAttr('onclick');
				$("#la_sin_depilar").addClass("filtro_d");
			}
			if(dato == 'sin_depilar'){
				$('#la_depiladas').removeAttr('onclick');
				$("#la_depiladas").addClass("filtro_d");
			}
			parametro = 1;
			$("#in_"+dato).val("1");
			
			$("#la_"+dato).addClass("filtro1_activo");
			if(dato == "etnia"){
				$("#la_"+dato).removeClass("filtro1_activo");
			}
			if(dato == "pais"){
				$("#la_"+dato).removeClass("filtro1_activo");
			}
		}

		if(dato == 'rubia1'){
			dato = 'rubia';
		}
		if(dato == 'naturales1'){
			dato = 'naturales';
		}

		if(dato == 'etnia'){
			var parametro = $("#la_etnia").val();
		}

		if(dato == 'pais'){
			var parametro = $("#la_pais").val();
		}

		$.ajax({ 
            url:   '<?= $url_api ?>public/json/caracteristicas.php?campo=' + dato + '&valor=' + parametro, 
            type:  'GET',
            success:  function (response){
				sobreti = $("#sobreti_total").val();
				sobretif = sobreti + 1;
				$("#sobreti_total").val(sobretif);
				console.log(sobretif);
			}          
        });
	}

	function servicios(dato){
		var parametro = $("#in_"+dato).val();
		if(parametro == 1){
			parametro = 0;
			$("#in_"+dato).val("0");
			$("#la_"+dato).removeClass("filtro1_activo");
		}
		else{
			parametro = 1;
			$("#in_"+dato).val("1");
			$("#la_"+dato).addClass("filtro1_activo");
		}

		if(dato == 'dorada1'){
			dato = 'dorada';
		}

		$.ajax({ 
            url:   '<?= $url_api ?>public/json/servicios.php?campo=' + dato + '&valor=' + parametro, 
            type:  'GET',
            success:  function (response){
				servicio = $("#servicio_total").val();
				serviciof = servicio + 1;
				$("#servicio_total").val(serviciof);
			}          
        });
	}

	function encuentro(dato){
		var parametro = $("#in_"+dato).val();

		if(parametro == 1){
			parametro = 0;
			$("#in_"+dato).val("0");
			$("#la_"+dato).removeClass("filtro1_activo");
		}
		else{
			parametro = 1;
			$("#in_"+dato).val("1");
			$("#la_"+dato).addClass("filtro1_activo");
		}

		if(dato == 'club1'){
			dato = 'club';
		}


		$.ajax({ 
            url:   '<?= $url_api ?>public/json/encuentro.php?campo=' + dato + '&valor=' + parametro, 
            type:  'GET',
            success:  function (response){
				encuentroht = $("#encuentro_total").val();
				console.log(encuentroht);
				encuentrof = encuentroht +1;
				$("#encuentro_total").val(encuentrof);
				console.log(encuentrof);
			}          
        });
	}


	function validar_guardar(){
	userdevdata = 13;

    var departamento = $("#dep").val();
	if(departamento > 0){ userdevdata = userdevdata-1; console.log(userdevdata);  $("#dep_text").html(""); }
	else{ $("#dep_text").html("Debes seleccionar un departamento"); $("#dep").focus(); }

	var provincia = $("#pro").val();
	if(provincia > 0){ userdevdata = userdevdata-1; console.log(userdevdata); $("#pro_text").html(""); }
	else{ $("#pro_text").html("Debes seleccionar un provincia"); $("#pro").focus(); }

	var distrito = $("#dis").val();
	if(distrito > 0){ userdevdata = userdevdata-1; console.log(userdevdata); $("#dis_text").html(""); }
	else{ $("#dis_text").html("Debes seleccionar un distrito"); $("#dis").focus(); }

	var movil = $("#movilp").val();
	if(movil > 0){ userdevdata = userdevdata-1; console.log(userdevdata); $("#movil_text").html(""); }
	else{ $("#movil_text").html("Debes instroducir un Movil"); $("#movilp").focus(); }

	var nombre = $("#ca_nombre").val();
	nombre2 = nombre.split('').length;
	if(nombre2 > 3){ userdevdata = userdevdata-1; console.log(userdevdata); $("#la_nombre").html(""); }
	else{ $("#la_nombre").html("Debes instroducir nombre con minimo 3 caracteres"); $("#ca_nombre").focus(); }

	var nombre = $("#ca_texto").val();
	nombre2 = nombre.split('').length;
	if(nombre2 > 250){ userdevdata = userdevdata-1; console.log(userdevdata); $("#la_texto").html(""); }
	else{ $("#la_texto").html("Debes instroducir una descripcion no menor a 250 caracteres"); $("#ca_texto").focus(); }

	var edad = $("#ca_edad").val();
	if(edad > 0){ userdevdata = userdevdata-1; console.log(userdevdata); $("#edad_text").html(""); }
	else{ $("#edad_text").html("Debes seleccionar tu edad"); $("#ca_edad").focus(); }

	var tarifas_totales = $("#tarifas_totales").val();
	if(tarifas_totales > 0){ userdevdata = userdevdata-1; console.log(userdevdata); $("#tarifas_text").html(""); }
	else{ $("#tarifas_text").html("Debes agregar por lo menos una tarifa"); $("#tarifas_totales").focus(); }

	var horarios_totales = $("#horarios_totales").val();
	if(horarios_totales > 0){ userdevdata = userdevdata-1; console.log(userdevdata); $("#horarios_text").html(""); }
	else{ $("#horarios_text").html("Debes agregar por lo menos un horario"); $("#horarios_totales").focus(); }

	var imagenes_totales = $("#imagenes_totales").val();
	if(imagenes_totales > 0){ userdevdata = userdevdata-1; console.log(userdevdata); $("#imagenes_text").html(""); }
	else{ $("#imagenes_text").html("Debes agregar por lo menos una imagen a tu galeria"); $("#imagenes_totales").focus(); }

	var sobreti_total = $("#sobreti_total").val();
	if(sobreti_total > 0){ userdevdata = userdevdata-1; console.log(userdevdata); $("#sobreti_text").html(""); }
	else{ $("#sobreti_text").html("Debes agregar por lo menos una descripcion sobre ti"); $("#sobreti_total").focus(); }

	var servicio_total = $("#servicio_total").val();
	if(servicio_total > 0){ userdevdata = userdevdata-1; console.log(userdevdata); $("#servicio_text").html(""); }
	else{ $("#servicio_text").html("Debes agregar por lo menos seleccionar 1 servicio o 1 servicio especial"); $("#servicio_total").focus(); }

	var encuentro_total = $("#encuentro_total").val();
	if(encuentro_total > 0){ userdevdata = userdevdata-1; console.log(userdevdata); $("#encuentro_text").html(""); }
	else{ $("#encuentro_text").html("Debes agregar por lo menos un tipo de sitio de encuentro	"); $("#encuentro_total").focus(); }
	
	if(userdevdata == 0){
		$.ajax({
                              url:   '<?= $url_api ?>public/json/publicar_anuncio.php', 
                              type:  'GET',
                              success:  function (response) 
                                          {
                                            if (response==1) 
                                            {
                                              swal("Anuncio Publicado con exito, espere un momento sera redirigido."); 
                                              setTimeout("location.href='misanuncios.php'", 3000);
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
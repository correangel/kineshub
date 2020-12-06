<?php 
	include "include/header.php";
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

</style>
	<div class="container-fluid">
					<!-- movil  -->

		
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
				<div class="col-lg-4"><p class="font-weight-bold text-center pt-4">Contacto</p></div>
				<div class="col-lg-4">
					<div class="fondo1">
						<p class="pt-2 font-weight-bold text-center"><i class="fas fa-heart text-danger mr-3"></i> Favotiro <span class="ml-3">0</span></p>
					</div>
					

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
							<p class="f7 font-weight-bolder mt-3">Distrito</p>
           <select class="browser-default custom-select campo3">
            <option selected>Selecciona un Distrito</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-12">
							<p class="f7 font-weight-bolder mt-3">Ciudad</p>
							<input class="form-control form-control-lg campo3" type="text" placeholder="Escribe tu ciudad o barrio" id="ciudadp">
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-12">
							<p class="f7 font-weight-bolder mt-3">Departamento</p>
           <select class="browser-default custom-select campo3">
            <option selected>Selecciona un Departamento</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
						</div>
					</div>
						  
						  
				</div>
			
				
			</div>
			<div class="card mt-3">
				<div class="card-body">
					<div class="row">
						<div class="col-lg-6 col-12">
							<p class="f7 font-weight-bolder mt-3">Telefono</p>
							<input class="form-control form-control-lg campo3" type="text" placeholder="Agregar numero de telefono" id="movilp">
						</div>
					</div>
					<p class="color6 mt-3 font-weight-bolder">IMPORTANTE</p>
					<div class="container">
								<ul>
						<li>
							<p class="f16 text-dark "> Asegúrate de agregar correctamente tu numero, para modificarlo deberás contactarte con nosotros obligatoriamente.</p>
						</li>
						<li>
							<p class="f16 text-dark "> <strong> No esta permitido colocar algún otro numero en el titulo y texto</strong> aparte del colocado aquí, si no el anuncio será eliminado.</p>
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
							<input class="form-control form-control-lg campo3" type="text" placeholder="Nombre" id="Nombreanuncio">
							<p class="text-center text-md-right mt-2 color2 f4">Mínimo de 40 caracteres</p>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-lg-11 col-12">
							<div class="form-group ">
							  
							  <textarea class="form-control campo3" id="mensajeanuncio" placeholder="Texto" rows="10"></textarea>
							</div>
							<div>
								<p class="text-center text-md-right color2 f4 pb-1 mb-3 mb-md-0">Mínimo de 250 caracteres</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6 col-12">
							
           <select class="browser-default custom-select campo3">
            <option selected>Selecciona tu edad</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
						</div>
					</div>
					<!-- version pc  -->
						  <div class="mt-4 text-center d-none d-md-block text-md-left">
						  
						  	<img src="img/Icon ionic-logo-whatsapp2.svg" alt="" width="25" height="22" > <span class="pt-3">Whatsapp </span><span class="ml-2">Indicar que se pueden contactar por este medio</span>
						  	<span class=""> <!-- Default checked -->

<div class="custom-control custom-switch d-inline-block ml-4 ">
	
  <input type="checkbox" class="custom-control-input" id="wsp" checked>
  <label class="custom-control-label" for="wsp">Activado</label>
  
</div></span>
						  </div>

						  <!-- version movil -->

						  <div class="d-block d-md-none">
						  	<div class="row mt-3">
						  		<div class="col-6">
						  				<img src="img/Icon ionic-logo-whatsapp2.svg" alt="" width="25" height="22" > <span class="pt-3">Whatsapp </span>
						  		</div>
						  		<div class="col-6">
						  			<div class="custom-control custom-switch d-inline-block ml-4 ">
	
  <input type="checkbox" class="custom-control-input" id="wsp" checked>
  <label class="custom-control-label" for="wsp">Activado</label>
  
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
							<!-- Default checked -->
<div class="custom-control custom-checkbox">
  <input type="checkbox" class="custom-control-input " id="aceptocondiciones">
  <label class="custom-control-label" for="aceptocondiciones">Si, este teléfono es exclusivamente mío</label>
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
										<p class="d-inline-block pr-2 color8 f4 ">Añadir tarifa</p><img src="img/Grupo 400.svg" width="30" alt="">
								</div>
							
							</div>
							</div>
							<div class="row">
								<div class="col-lg-8 col-6">
									<div class="fondocolor5">
											<p class="font-weight-normal py-1 pl-3">1 hora</p>
									</div>

								
								</div>
								<div class="col-lg-4 col-6">
									<div class="fondocolor6">
										<p class="font-weight-normal py-1 pl-3">S/250</p>
									</div>
									
								</div>
							</div>

	<div class="row">
								<div class="col-lg-8 col-6">
										<div class="fondocolor5">
											<p class="font-weight-normal py-1 pl-3">Tiempo</p>
									</div>

								
								</div>
								<div class="col-lg-4 col-6">
									<div class="fondocolor6">
										<p class="font-weight-normal py-1 pl-3">Costo</p>
									</div>
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
									<div class="col-6 "><p class="f7 font-weight-bolder mt-3">Horarios</p></div>
							<div class="col-6 ">
								<div class="text-right ">
										<p class="d-inline-block pr-2 color8 f4 ">Añadir horario</p><img src="img/Grupo 400.svg" width="30" alt="">
								</div>
							
							</div>
							</div>
							<div class="row">
								<div class="col-lg-8 col-6">
									<div class="fondocolor5">
											<p class="font-weight-normal py-1 pl-3">Lunes</p>
									</div>

								
								</div>
								<div class="col-lg-4 col-6">
									<div class="fondocolor6">
										<p class="font-weight-normal py-1 pl-3">10:00am a 3:00pm</p>
									</div>
									
								</div>
							</div>

	<div class="row">
								<div class="col-lg-8 col-6">
										<div class="fondocolor5">
											<p class="font-weight-normal py-1 pl-3">Dia</p>
									</div>

								
								</div>
								<div class="col-lg-4 col-6">
									<div class="fondocolor6">
										<p class="font-weight-normal py-1 pl-3">Costo</p>
									</div>
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
										<p class="d-inline-block pr-2 color8 f4 ">Añadir fotos</p><img src="img/Grupo 400.svg" width="30" alt="">
								</div>
							
							</div>
							</div>
							<div class="row">
								<div class="col-lg-2 col-4">
									<img src="img/Rectangle 3.png" class="w-100 mt-2" alt="">
								</div>
								<div class="col-lg-2 col-4">
									<img src="img/Rectangle 3.png" class="w-100 mt-2" alt="">
								</div>
								<div class="col-lg-2 col-4">
									<img src="img/Rectangle 3.png" class="w-100 mt-2" alt="">
								</div>
								<div class="col-lg-2 col-4">
									<img src="img/Rectangle 3.png" class="w-100 mt-2" alt="">
								</div>
								<div class="col-lg-2 col-4">
									<img src="img/Rectangle 3.png" class="w-100 mt-2" alt="">
								</div>
								<div class="col-lg-2 col-4">
									<img src="img/Rectangle 3.png" class="w-100 mt-2" alt="">
								</div>
							</div>
							<div class=" d-flex mt-2">
								<img src="img/Icon awesome-camera.svg" alt=""><p class="d-inline-block pt-3 ml-2">Selecciona las imágenes en el orden que quieres que aparezcan</p>
							</div>


						</div>
					</div>
				</div>
			</div>
			<div class="card  mt-3">
				<div class="fondocolor3">
					<div class="container">
						<h2 class="f9 pl-2 py-2 font-weight-bolder font-weight-normal">Sobre ti</h2>
					</div>
					
				</div>
				<div class="card-body ">
					
					<div class="row">
						<div class="col-lg-11 col-12">
							<div class="row">
								<div class="col-sm col-6">
								<p class="marco1y f5 py-2 text-center px-2">Atención a mujeres</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Atención a parejas</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Altas</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Bajas</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Cabello negro</p>
								</div>
								<div class="col-sm col-6  d-block d-md-none">
								<p class="marco1y f5 py-2 text-center px-2">Rubias</p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm col-6 d-none d-md-block">
								<p class="marco1y f5 py-2 text-center px-2">Rubias</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Peli rojas</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Depiladas</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Sin depilar</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Discapacitados</p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm col-6 mb-3 mb-md-0">
								
								    <select class="browser-default custom-select f5 marco1y py-2" style="height: 34px;">
            <option selected>Etnia</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
								</div>
								<div class="col-sm col-6 mb-3 mb-md-0">
									   <select class="browser-default custom-select f5 marco1y py-2" style="height: 34px;">
            <option selected>País</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Independientes</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Pago por tarjeta</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">De agencia</p>
								</div>
								<div class="col-sm col-6 d-block d-md-none">
								<p class="marco1y f5 py-2 text-center px-2">Pechos naturales</p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm col- d-none d-md-block">
								<p class="marco1y f5 py-2 text-center px-2">Pechos naturales</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Delgadas</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Gorditas</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Tetonas</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">WhatsApp</p>
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
					</div>
					
				</div>
				<div class="card-body ">
					
					<div class="row">
						<div class="col-lg-11 col-12">
							<div class="row">
								<div class="col-6 col-sm">
								<p class="marco1y f5 py-2 text-center px-2">Actriz porno</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Besos boca</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Eyaculación cuerpo</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Eyaculación facial</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Fantasías y disfraces</p>
								</div>
								<div class="col-6 col-sm d-block d-md-none">
								<select class="browser-default custom-select f5 marco1y py-2" style="height: 34px;">
            <option selected>Frances</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-sm d-none d-md-block ">
								<select class="browser-default custom-select f5 marco1y py-2" style="height: 34px;">
            <option selected>Frances</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
          </select>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Masajes eroticos</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Sexo anal</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Trato de novia</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Trio</p>
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
								<p class="marco1y f5 py-2 text-center px-2">Beso blanco</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Beso negro</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Copro</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Fetichismo</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Garganta profunda</p>
								</div>
								<div class="col-6 col-sm d-block d-md-none">
									<p class="marco1y f5 py-2 text-center px-2">Lluvia dorada</p>
								</div>
							</div>
							<div class="row">
								<div class="col-6 col-sm d-none d-md-block">
									<p class="marco1y f5 py-2 text-center px-2">Lluvia dorada</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Sado duro</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Sado suave</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Squirting</p>
								</div>
								<div class="col-6 col-sm">
									<p class="marco1y f5 py-2 text-center px-2">Strap on</p>
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
					</div>
					
				</div>
				<div class="card-body ">
					
					<div class="row">
						<div class="col-lg-11 col-12">
							<div class="row">
								<div class="col-sm col-6">
								<p class="marco1y f5 py-2 text-center px-2">A domicilio</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Cena romantica</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Club intercambio</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Departamento propio</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Despedida de solteros</p>
								</div>
								<div class="col-sm col-6 d-block d-md-none">
									<p class="marco1y f5 py-2 text-center px-2">En un club</p>
								</div>
							</div>
							<div class="row">
								<div class="col-sm col-6 d-none d-md-block">
									<p class="marco1y f5 py-2 text-center px-2">En un club</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">En un hotel/Motel</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Eventos y fiestas</p>
								</div>
								<div class="col-sm col-6">
									<p class="marco1y f5 py-2 text-center px-2">Viajes</p>
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
						<button class="btn boton14 w-100 ">Publicar Anuncio</button>
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


 		<?php 
	include "modal.php";
	include "include/footer.php";
	
 ?>
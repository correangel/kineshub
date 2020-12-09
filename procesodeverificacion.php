<?php 
	include "include/header.php";
	
 ?>

<main>
	<div class="container-fluid">
				<!-- movil  -->
<div class="d-block d-md-none">
	<div class="container">
			<div class="input-group md-form form-sm form-1 pl-0">
 
  <input class="form-control my-0 py-1 buscador1" type="text" placeholder="Buscar 355 Anuncios" aria-label="Search">
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
					<div class="fondo1">
						<p class="pt-2 font-weight-bold text-center"><i class="fas fa-heart text-danger mr-3"></i> Favotiro <span class="ml-3">0</span></p>
					</div>
					

				</div>
			
			</div>
			
		</div>
	</div>
	</div>
	<div class="row d-flex justify-content-center mt-4">
		<div class="col-lg-5">
			<div class="card">
				<div class="card-body">
					<div class="row d-flex align-items-center">

						<div class="col-lg-8 col-6"><h2 class="f6 pt-2 color6 mb-4 mt-3">Proceso de verificación </h2></div>
						<div class="col-lg-4 col-6 text-right">
							<img src="img/Grupo 409.svg" alt="" height="17">
							<img src="img/Grupo 410.svg" height="20" alt="">
						</div>
					</div>
					
					<p class="font-weight-normal">Certificar tus fotos significa que el equipo de Kineshub las ha validado y que tu anuncio muestrael sello que lo acredita. Con tus fotos certificadas recibirás más llamadas porque los clientes se fían más de los anuncios que han sido certificados.Certificar tus fotos significa que el equipo de Kineshub las ha validado y que tu anuncio muestrael sello que lo acredita. Con tus fotos certificadas recibirás más llamadas porque los clientes se fían más de los anuncios que han sido certificados.</p>
					<p class="font-weight-normal">
						Para poder certificar tus fotos son necesarios dos requisitos:
					</p>
					<p class="font-weight-normal"><span class="color5 font-weight-bold">Requisito 1: </span> Foto casera con la cara visible</p>
					<p class="font-weight-normal">Necesitamos comprobar que tú eres realmente la persona que aparece en las fotos de tu anuncio. Para ello es necesario que nos facilites una foto casera hecha con el móvil, en la que se te vea la cara y sostengas una hoja de papel en la que se pueda ver el número de teléfono que aparece en tu anuncio. leer mas</p>

					<button class="btn boton21"  data-toggle="modal" data-target="#verificarfoto">Ejemplo de foto casera</button>

					<!-- problema con este modal  si cambio el id con otro si efe #Registro -->

					<p class="font-weight-normal mt-3"><span class="color5 font-weight-bold">Requisito 2: </span> Haber probado nuestros productos</p>
					<p class="font-weight-normal">La certificación es totalmente gratuita, puedes solicitar que certifiquemos tus fotos y te responderemos por email si han superado la revisión. No obstante, para mostrar el sello de fotos certificadas en tu anuncio es necesario que para ese anuncio hayas probado alguna vez uno de nuestros productos Top anuncio o Subir automático. <a href="#" class="text-dark"><u>Leer más</u></a></p>
					<div class="row d-flex justify-content-center">
						<div class="col-lg-6 col-12">
							<a href="verificarfotoconfirmada.php"><button class="btn boton20 w-100">Quiero certificar mis fotos</button></a>
							
						</div>
					</div>
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
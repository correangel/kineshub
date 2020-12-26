<?php
 session_start(); 
 if(isset($_SESSION['id'])){
	include "include/header2.php";
 }
else{
	include "include/header.php";
}
	
 ?>

<main>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
	<div class="container-fluid">
					<!-- movil  -->
<!-- <div class="d-block d-md-none">
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
		 -->
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
						<p class="pt-2 font-weight-bold text-center"><i class="fas fa-heart text-danger mr-3"></i> <a href="favoritos.php" class="text-dark">Favotiro <span class="ml-3">
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
	<div class="row d-flex justify-content-center mt-4">
		<div class="col-lg-9 col-12">
			<div class="card">
				<div class="card-body">
					El Sitio, en adelante “nosotros”, está comprometido a proteger su privacidad. De los datos desde los cuales usted puede ser identificado personalmente (PII) sólo recogemos, tratamos, cedemos y conservamos dicha información PII de acuerdo con la Ley de Protección de Datos y este documento de la política de privacidad. <br><br>

KINESHUB.COM es el responsable del tratamiento con la finalidad de tratar y proteger sus datos, para cualquier pregunta o solicitud referente a su PII, nuestro tratamiento de la misma y esta política de privacidad.  <br><br>

Para el objetivo de esta política de privacidad, «La legislación de Protección de Datos» se refiere al Reglamento General de Protección de Datos, cualquier ley local en su pais que implemente, complemente y aplique las excepciones acordadas y todos los códigos de práctica, las normas y las directrices emitidas por cualquier regulador aplicable con potestad conforme, junto con la normativa sobre conservación de datos del tráfico en las comunicaciones electrónicas o cualquier disposición que la modifique o la sustituya.
La Política de Privacidad, junto con los Términos de Uso en Términos y condiciones y cualquier otro documento mencionado en él, establece la base sobre la cual protegeremos y trataremos sus datos. <br>
Tenga en cuenta que, cuando contacta con un Usuario Anunciante (según se describe en los Términos de Uso), utilizando la información de contacto que figura en cualquier tipo de material insertado por un Usuario en el sitio, no nos hacemos responsables de esa información ni de cómo los terceros elijan procesar cualquier PII transferida a ellos. Los terceros se convierten en los controladores de datos con respecto a tales transferencias de datos y de ninguna manera somos capaces de controlar o ser responsables de su PII en sus manos.	<br>
Qué Información recogemos <br><br>
Recogemos la información que nos ha sido enviada por (1) Usuarios Anunciantes, los cuales desean poner anuncios o crear perfiles en el Sitio; y (2) Usuarios Finales, los cuales desean navegar por el Sitio y contactar con el Usuario Anunciante.	<br><br>
Con respecto a los Usuarios Anunciantes, la base legal para la recopilación de datos realizada por nosotros, es la necesaria para realizar un contacto entre el Sitio y el Usuario Anunciante. Con respecto a los Usuarios Finales, la base principal para la recopilación de datos es el consentimiento del Usuario Final. Además, el sitio tiene un interés legítimo en recoger y tratar datos, teniendo debidamente en cuenta los derechos y libertades de los interesados, fines comerciales adecuados y de conformidad con la prevención de fraudes.
Cómo Recogemos y Tratamos la Información  <br><br>

Archivos de Registro<br><br>

Cada vez que visita el Sitio, recogemos cierta información sobre el uso de nuestro sitio web para analizar tendencias, administrar el sitio, rastrear el movimiento de visitantes en conjunto y recopilar información demográfica para uso global. Por tanto, garantizamos que los datos tratados son adecuados, pertinentes y limitados a lo necesario para el fin. No vinculamos ninguna de la información de nuestros archivos de registro a ninguna otra información que nos permita determinar su identidad real. Esto significa que la sesión de un usuario será rastreada, pero el usuario será anónimo. No compartimos externamente sus archivos de registro.<br><br>

Otra Información que Tratamos<br><br>

Correo electrónico y llamadas telefónicas<br><br>

Para nuestros servicios, requerimos una dirección de correo electrónico en el momento del registro.
Condiciones adicionales para dispositivos móviles<br><br>

Dispositivo Móvil<br><br>

Si utiliza un dispositivo móvil para acceder a nuestro sitio o descargar cualquiera de nuestros servicios, es posible que recopilemos información sobre el dispositivo (como la identificación de su dispositivo móvil, el modelo y el fabricante), información sobre el sistema operativo y versión y la dirección IP.<br><br>

Información de Geolocalización<br><br>

En ningún momento le pedimos ni accedemos ni rastreamos ninguna información basada en la ubicación de su dispositivo móvil mientras descarga o utiliza nuestros servicios móviles.
Cesión de su Información a Terceros<br><br>

Cesión por Ley<br><br>

Usted reconoce y acepta que podemos ceder la información que usted nos proporciona si así lo requiere la ley a petición de un tercero o si nosotros, a nuestra entera discreción, creemos que la cesión es razonable para (1) cumplir con la ley, las solicitudes u órdenes de las fuerzas y cuerpos de seguridad o cualquier proceso legal (sea o no requerida dicha cesión por la ley aplicable); (2) proteger o defender nuestros derechos o propiedad o los de un tercero; o (3) proteger la salud o la integridad de alguien, como cuando se amenace con causar daños o actos de violencia en contra de cualquier persona (incluyéndolo a usted).<br><br>

Cesión para Proteger a las Víctimas de Abuso<br><br>

Sin perjuicio de cualquier otra disposición de esta política de privacidad o de nuestros Términos y Condiciones de Uso, nos reservamos el derecho, pero no tenemos la obligación, de revelar cualquier información que usted envíe a los servicios, si en nuestra opinión, sospechamos o tenemos razones para creer que la información involucra a una parte que pueda ser víctima de abuso en cualquier forma.<br><br> El abuso puede incluir, sin limitación, la trata o la coerción. Nosotros, a nuestra entera discreción, podremos divulgar a las autoridades la información que consideremos apropiada para tal comunicación. Una autoridad apropiada puede incluir, sin limitación, fuerzas y cuerpos de seguridad del estado, organismos de protección de la infancia o autoridades judiciales.<br><br>

Contacto con el Sitio Web<br><br>
Si tiene alguna pregunta sobre esta política de privacidad, las prácticas de este sitio o sus relaciones con el sitio, puede comunicarse a info@kineshub.com<br><br>

Cualquier modificación que podamos realizar en el futuro de nuestra política de privacidad se publicará en esta página. Su uso continuado de cualquier sección de nuestro sitio web después de la publicación de la política de privacidad actualizada, constituirá la aceptación de la política de privacidad en su versión actualizada
				</div>
			</div>
		</div>
	</div>

</main>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<script>

	</script>

 		<?php 
	include "modal.php";
	include "include/footer.php";
	
 ?>
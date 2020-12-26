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
					<h1>Condiciones de uso</h1>

				<p>El uso del servicio está regulado por los términos y las condiciones expuestas a continuación:</p>
				<br>
				<p>OBLIGACIONES Y COMPORTAMIENTO DEL USUARIO/S</p> <br>
				<p>En el ámbito de esta sección (Términos y condiciones de uso), con el término «Usuario/s» se hace referencia tanto a los usuarios demandantes como a los usuarios oferentes.
El servicio podrá ser usado exclusivamente por mayores de dieciocho años (18).
kineshub.com comunica que:</p> <br>
<p>1º Los anuncios no están controlados por kineshub.com, ya que al tratarse de un portal de anuncios clasificados dirigido a un público adulto, los anuncios pueden incluir contenidos e imágenes de carácter erótico y/o pornográfico no aptos a personas sensibles o que no soportan imágenes de carácter sexual explícito. <br>Por ello, kineshub.com previamente al acceso a la website, informa al usuario sobre dichas circunstancias exigiendo a éste que certifique que es una persona adulta.</p>
<p>2º Debido a la imposibilidad de controlar la publicación de los anuncios, kineshub.com no puede verificar si se trata de un anuncio real. En las condiciones de uso, kineshub.com informa que no puede garantizar la veracidad del contenido de los mismos.</p> <br>
<p>Siendo conocedores de ello, kineshub.com, facilita a los usuarios diferentes vías de contacto y establece de manera exclusiva el correo info@kineshub.com para las peticiones de violación de privacidad. kineshub.com es un portal que tiene como objetivo publicitar anuncios clasificados de calidad, por ello, establece todos los mecanismos posibles para lograr este fin, por lo que se agradece la colaboración de los usuarios.</p> <br>
<p>Publicando su anuncio en kineshub.com, el usuario autoriza a kineshub.com a utilizarlo con fines publicitarios para darle mayor visibilidad y que sea más accesible a los usuarios de la red incluso señalándolo en buscadores mediante publicaciones en otras páginas web con los que kineshub.com mantenga una relación de colaboración (como, por ejemplo, otras páginas de anuncios clasificados o buscadores verticales o generales) con la finalidad de promovor con mayor eficacia las insercciones de sus propios usuarios.</p> <br>
<p>El Usuario se compromete a no usar los servicios proporcionados por la página kineshub.com de manera impropia o contraria a las disposiciones de Ley y a las normas de Ética y de Buena conducta de los servicios en red. El usuario, en particular, se compromete a no transmitir, mediante kineshub.com, material de naturaleza ofensiva calumniosa, difamatoria, pornográfica, pedófila, vulgar, oscena, blasfema o que, de algún modo, sea contraria a los principios del orden público y de las buenas costumbres.</p>
<p>El anunciante es consciente que la dirección de correo electrónico que proporciona en kineshub.com podrá servir como medio de comunicación a distancia. Además, en el caso de las respuestas a los anuncios y/o la divulgación de los anuncios, el correo electrónico que se muestra podrá ser utilizado para enviar boletines informativos y material promocional</p>
<p>Por la presente confirma que tiene la edad legal conforme la jurisdicción aplicable y no ha sido forzado de ninguna manera a crear este perfil
Por la presente confirma que no ofrecerá ningún servicio contrario a la ley del país</p>
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
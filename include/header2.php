<?php
error_reporting(0);
$host= $_SERVER["HTTP_HOST"];
$url= $_SERVER["REQUEST_URI"];
$url_actual = "http://" . $host . $url;

if($url_actual == "http://localhost/kineshub/publicaranuncio.php"){
  session_start();
  $_SESSION['id_anuncio'] = "";
}
else{
  session_start();
  $_SESSION['id_anuncio'] = "";
}
session_start();

require_once "api.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Google Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
<!-- Bootstrap core CSS -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/estilo.css">

</head>
<body>
	<header>


<!-- pc  -->

<!--Navbar-->
<nav class="navbar navbar-expand-lg navbar-light menu1x d-none d-md-block">
<div class="container-fluid" id="menud1">



<!-- Basic dropdown -->
  <a class="navbar-brand" href="index.php"><img src="img/logo.png" width="180" alt=""></a>

  
  

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="basicExampleNav">

    <!-- Links -->
    <ul class="navbar-nav mr-auto flex-center">
      <li class="nav-item " style="width: 450px;">
        <div class="input-group md-form ml-3 form-sm form-1 pl-0">
 
  <input class="form-control my-0 py-1 buscador1" type="text" placeholder="Buscar <?= $num ?> Anuncios" autocomplete="off" autocomplete="nope" name="buscador_super_pro_idfjidfdfdfj" aria-label="Search" id="buscar_texto" value="<?php echo ""; ?>" onkeyup="filtrar_busqueda()">
   <div class="input-group-prepend">
    <span class="input-group-text text-dark" id="buscador" style="border-radius: 3px;"><i class="fas fa-search  pr-1"
        aria-hidden="true"></i> Buscar</span>
  </div>
</div>
      </li>
      <li class="nav-item">
        <p class="font-weight-bold ml-5 text-dark">LA MEJOR COMPA????A A SOLO UN CLICK</p>
      </li>
    </ul>
    <!-- Links -->
<?php if($_SESSION['tipo'] == 1){ ?>
  <ul class="navbar-nav ml-auto flex-center">
  	<!-- <li class="nav-item">
      <a href="publicaranuncio.php"><button class="boton11 font-weight-bolder btn pt-2">Publicar anuncio</button></a>
       
      </li> -->
       
      <li class="nav-item">
       <button onclick="$(location).attr('href','user.php');" class="boton12 font-weight-bolder btn pt-2">Mi cuenta</button>
      </li>

      <li class="nav-item">
       <a href="logout.php" class="text-dark"><i class="fas fa-sign-out-alt"></i></a>
      </li>
  </ul>
  </div>
<?php } ?>

<?php if($_SESSION['tipo'] == 2){ ?>
  <ul class="navbar-nav ml-auto flex-center">
  	<li class="nav-item">
      <a href="publicaranuncio.php"><button class="boton11 font-weight-bolder btn pt-2">Publicar anuncio</button></a>
       
      </li>
       
      <li class="nav-item">
       <button onclick="$(location).attr('href','kine.php');" class="boton12 font-weight-bolder btn pt-2">Mi cuenta</button>
      </li>

      <li class="nav-item">
       <a href="logout.php" class="text-dark"><i class="fas fa-sign-out-alt"></i></a>
      </li>
  </ul>
  </div>
<?php } ?>
  <!-- Collapsible content -->
</div>


</nav>
<!--/.Navbar-->
<!-- fin de pc  -->


























		<!--menu movil-->
<nav class="navbar navbar-light d-flex d-block d-md-none" >

  <!-- Collapse button -->
  <button class="navbar-toggler first-button" type="button" id="boton_menu" onclick="abrir_menu()">
    <div class="animated-icon1"><span></span><span></span><span></span></div>
  </button>

  <!-- Navbar brand -->
  
  	<div class="text-center ">
  		<div class="row d-flex align-items-center">

  			<div class="col-9 pl-0 pr-3 mx-0">
          <a class="navbar-brand" href="index.php">
  				<img src="img/logo.png" width="132" alt="">
  		<p class="f5 font-weight-bolder pb-0 mb-0">LA MEJOR COMPA????A A SOLO UN CLICK</p>
      </a>
        </div>
        <?php if($_SESSION['tipo'] == 1){ ?>
          <div class="col-3 pl-0 pr-2 mx-0 mt-2" >
           <a href="favoritos.php" class="text-dark">
              <div class="corazon1 px-1" onclick="ir_favoritos()">

             <i class="fas fa-heart text-danger"></i> <?php
              $sqlll = mysqli_query($enlace, "SELECT id FROM favoritos WHERE id_usuario = '". $_SESSION['id'] ."'");
              $nummm = mysqli_num_rows($sqlll);    
              
              echo $nummm;
            ?>
           
          </div>
           </a>
               
           

  			
        
  			</div>
    <?php } ?>
  		
  		</div>
  		
  	</div>
  	

  <!-- Collapsible content -->
  <div class="collapse navbar-collapse" id="navbarSupportedContent20">

    <!-- Links -->
    <ul class="navbar-nav ml-auto">
    <?php if($_SESSION['tipo'] == 1){ ?>
      <li class="nav-item ">
        <a class="nav-link" href="user.php"><i class="fas fa-user-circle"></i> Panel de usuario </a>
      </li>
      <li class="nav-item ml-5">  
      <a href="favoritos.php" class="nav-link"><i class="fas fa-heart"></i> Favoritas</a>
       
      </li>

      <li class="nav-item ml-5">
      <a href="promociones.php" class="nav-link"class="nav-link"><i class="fas fa-tag"></i> Promociones</a>
       
      </li>
    <?php } ?>
    <?php if($_SESSION['tipo'] == 2){ ?>
      <li class="nav-item ">
        <a class="nav-link" href="kine.php"><i class="fas fa-user-circle"></i> Panel de usuario </a>
      </li>

      <li class="nav-item">
      <a href="publicaranuncio.php" class="nav-link"class="nav-link"><i class="fas fa-tag"></i> Publicar Anuncio</a>
      </li>

      <li class="nav-item">
      <a href="promociones.php" class="nav-link"class="nav-link"><i class="fas fa-tag"></i> Promociones</a>
      </li>
    <?php } ?>
     
     <li class="nav-item">
        <a class="nav-link" href="privacidad.php"><i class="fas fa-address-book"></i> Politica de Privacidad</a>
      </li>

       <li class="nav-item">
        <a class="nav-link" href="terminos.php"><i class="fas fa-address-book"></i> Terminos de Uso</a>
      </li>
       
        
      <li class="nav-item">
        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Salir</a>
      </li>
      
    </ul>
    <!-- Links -->

  </div>
  <!-- Collapsible content -->

</nav>
<!--/.fin de menu movil-->
	</header>


  <script>
    function limpiar(){
      $("#buscar_texto").val();
    }

    function ir_favoritos(){
      window.location.href = "favoritos.php";
    }
  
   function abrir_menu(){
  $("#navbarSupportedContent20").addClass("show");
  $("#boton_menu").attr("onclick","retirar_menu()");
}

function retirar_menu(){
  $("#navbarSupportedContent20").removeClass("show");
  $("#boton_menu").attr("onclick","abrir_menu()");
}  
  </script>


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

@media (min-width: 576px) {
    .card-columns {
        column-count: 2;
    }
}

@media (max-width: 768px) {
    .card-columns {
        column-count: 3;
    }
}

@media (min-width: 992px) {
    .card-columns {
        column-count: 4;
    }
}

@media (min-width: 1200px) {
    .card-columns {
        column-count: 6;
    }
}
</style>
<body>
  
      
 <div class="container-fluid ">
  
   <div class="row mx-lg-2">
     <div class="card-columns">
      <!-- Aqui -->
       <div class="card">
           <img src="https://images.pexels.com/photos/3546429/pexels-photo-3546429.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="imagen1x" alt="">
        <div class="card-body">
          <div class="row ">
            <div class="col-8">
              <div class="row">
  <div class="col-12 "><p>Jenifer </p></div>
                
              </div>
            </div>
            <div class="col-4">

                        <i class="fas fa-heart f2"></i>
            
            

            </div>
          </div>
        <div >
          <span class="badge badge-pill badge-light">Lima</span>
          <span class="badge badge-pill badge-light">21 años</span>
          <span class="badge badge-pill badge-light">S/ 50</span>
          <span class="badge badge-pill badge-light"></span>
        </div>
        </div>
       </div>
      <!-- fin de aqui  -->
     </div>
   </div>

 </div>
<?php 
  include "modal/nube.php";
  include "cookies.php";
  include "modal.php";
  include "include/footer.php";
  
 ?>

<?php 

require_once "db.php";
mysqli_set_charset($enlace,"utf8");
$sql = mysqli_query($enlace, "SELECT anuncio.id AS ID, anuncio.verificado AS Verificado, anuncio.nombre AS Nombre, anuncio.edad AS Edad, anuncio.distrito, anuncio.provincia, anuncio.departamento, distritos.distrito AS Distrito, anuncio.pais AS Pais FROM anuncio INNER JOIN distritos ON anuncio.distrito = distritos.id WHERE estado = 1 ORDER BY orden DESC LIMIT 0, 30");
  if(!$sql){echo "error".mysqli_error($enlace);}
$sql2 = mysqli_query($enlace, "SELECT id FROM anuncio WHERE estado = 1");
$num = mysqli_num_rows($sql2);


session_start();
if(isset($_SESSION['id'])){
  include "include/header2.php";
}
else{
  include "include/header.php";
}
 ?>
<style>


</style>
<body>
  
      
 <div class="container-fluid ">
  <div class="d-block d-md-none">
  <div class="container ">
      <div class="input-group md-form form-sm form-1 pl-0">
 
  <input class="form-control my-0 py-1 buscador1" onkeyup="filtrar_busqueda2()" id="filtrar_busqueda2" type="text"  autocomplete="nope" name="buscador_super_pro_idfjifj" placeholder="Buscar <?= $num ?> Anuncios" aria-label="Search" value="">
   <div class="input-group-prepend">
    <span class="input-group-text text-dark" id="buscador" style="border-radius: 3px;"><i class="fas fa-search  pr-1"
        aria-hidden="true"></i> Buscar</span>
  </div>
</div>
  <div class="row">
    <div class="col-6 pl-2 pr-2">
      <button class="btn boton4 w-100 pt-2" data-toggle="modal" data-target="#ubicacion">Ubicación</button>
    </div>
    <div class="col-6 pl-2" id="boton_cono">
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
  </div>  </div>
 <div class="row movilinicio mt-2"> 
   <div class="row mx-1 mx-lg-2 w-100" id="filtrar">
     <div class="card-columns" style="height: 100%;" id="load_data">
<?php while($row = mysqli_fetch_array($sql)){
    $sqlq = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $row['ID'] ."' LIMIT 1");
    $rowq = mysqli_fetch_array($sqlq);
    $sqlp = mysqli_query($enlace, "SELECT min(costo) AS PrecioMinimo FROM tarifas WHERE id_anuncio = '". $row['ID']."'");
    $rowp = mysqli_fetch_array($sqlp);
    if(!$sqlp){
      echo "error";
    }
    ?>
      <!-- Aqui -->
       <div class="card">
           <img src="images/<?= $rowq['imagen'] ?>" class="card-img-top" alt="" onclick="mostrar_modal('<?= $row['ID'] ?>')">
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

            <i class="far fa-heart f2" onclick="agregar_favoritos('<?=  $id ?>')" id="id_<?=  $id ?>"></i>
            <?php } }
            elseif(isset($_SESSION['id'])){
             ?>
            <i class="far fa-heart f2"></i>
            <?php }
            else{?>
              <i class="far fa-heart f2" data-toggle="modal" data-target="#sesion"></i>
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
      <!-- fin de aqui  -->
<?php } ?>
     </div>

     <div class="row mt-4" id="load_data_message"></div>
   </div>
</div>
 </div>




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

    limpiar_buscasudjf();
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

    limpiar_buscasudjf();
  }

  function filtrar_busqueda(){
        var parametro = $("#buscar_texto").val();

                        $.ajax({ 
                          url:   '<?= $url_api ?>public/json/filtrar_texto.php?q=' + parametro, 
                          type:  'GET',
                          success:  function (response) 
                            { 
                                $("#filtrar").html("");
                                $("#filtrar").html(response);           
                            }
                                            
                      });

                        limpiar_buscasudjf();
    }

    function limpiar_modal_mayor(){
      var limit = 30;
 var start = 0;
$.ajax({
   url:"cargar_anuncio2.php",
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $("#filtrar").html("<div class='row mx-1 mx-lg-2 w-100' id='filtrar'> <div class='card-columns' style='height: 100%;' id='load_data'> </div>");
    $(".buscador1").val("");
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No hay mas anuncios</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning color3'>Espere Seguimos Cargando</button>");
     action = "inactive";
    }
   }
  });

                                /*$("#esta_webada_cierra").click(function(){console.log("esta haciendolo")});
                                $("#filtro").modal("hide");*/
                                $('.modal-backdrop').remove();
                                $("#filtro").removeClass("show");
                                /*$("#filtro").removeAttr( "role" );*/
                                $("#filtro").removeAttr( "style" );
                                $("#filtro").removeAttr( "aria-modal" );
                                $("#filtro").attr("aria-hidden", "true");
                                $("#filtro").css("display", "none");
                                $("body").removeClass("modal-open");
                                $("body").css("padding-right", "15px");
                                $("#filtrar").html("");
                                $("#in_verificado").val("verificado,0");
                                $("#boton_cono").html("<button class='btn boton5 w-100 mx-0 pt-2' onclick='mostrar_modal_filtro()'>Filtros</button>")


$("#in_a1").val("a1,0");
$("#in_baratas").val("baratas,0");
$("#in_tarjeta").val("tarjeta,0");
$("#in_a12").val("a1,0");
$("#in_baratas2").val("baratas,0");
$("#in_joven").val("joven,0");
$("#in_madura").val("madura,0");
$("#in_discapacitados").val("discapacitados,0");
$("#in_parejas").val("parejas,0");
$("#in_mujeres").val("mujeres,0");
$("#in_agencia").val("agencia,0");
$("#in_independiente").val("independiente,0");
$("#in_whatsapp").val("whatsapp,0");
$("#in_actriz").val("actriz,0");
$("#in_besos").val("besos,0");
$("#in_trio").val("trio,0");
$("#in_cuerpo").val("cuerpo,0");
$("#in_facial").val("facial,0");
$("#in_disfraces").val("disfraces,0");
$("#in_eroticos").val("eroticos,0");
$("#in_anal").val("anal,0");
$("#in_novia").val("novia,0");
$("#in_trio").val("trio,0");
$("#in_domicilio").val("domicilio,0");
$("#in_cena").val("cena,0");
$("#in_viajes").val("viajes,0");
$("#in_eventos").val("eventos,0");
$("#in_club_inter").val("club_inter,0");
$("#in_departamento").val("departamento,0");
$("#in_despedida").val("despedida,0");
$("#in_club").val("club,0");
$("#in_hotel").val("hotel,0");
$("#in_eventos").val("eventos,0");
$("#in_andina").val("andina,0");
$("#in_morena").val("morena,0");
$("#in_blanca").val("blanca,0");
$("#in_triguena").val("triguena,0");
$("#in_bajas").val("bajas,0");
$("#in_altas").val("altas,0");
$("#in_naturales").val("naturales,0");
$("#in_tetonas").val("tetonas,0");
$("#in_negro").val("negro,0");
$("#in_rojas").val("rojas,0");
$("#in_rubia").val("rubia,0");
$("#in_delgadas").val("delgadas,0");
$("#in_gorditas").val("gorditas,0");
$("#in_depiladas").val("depiladas,0");
$("#in_sin_depilar").val("sin_depilar,0");
$("#in_blanco").val("blanco,0");
$("#in_benegro").val("benegro,0");
$("#in_copro").val("copro,0");
$("#in_dorada").val("dorada,0");
$("#in_fetichismo").val("fetichismo,0");
$("#in_profunda").val("profunda,0");
$("#in_suave").val("suave,0");
$("#in_duro").val("duro,0");
$("#in_dorada").val("dorada,0");
$("#in_strap").val("strap,0");
$("#in_squirting").val("squirting,0");

$("#li_verificado").removeClass("filtro1_activo");
$("#li_a1").removeClass("filtro1_activo");
$("#li_baratas").removeClass("filtro1_activo");
$("#li_tarjeta").removeClass("filtro1_activo");
$("#li_a12").removeClass("filtro1_activo");
$("#li_baratas2").removeClass("filtro1_activo");
$("#li_joven").removeClass("filtro1_activo");
$("#li_madura").removeClass("filtro1_activo");
$("#li_discapacitados").removeClass("discapacitados,0");
$("#li_parejas").removeClass("filtro1_activo");
$("#li_mujeres").removeClass("filtro1_activo");
$("#li_agencia").removeClass("filtro1_activo");
$("#li_independiente").removeClass("filtro1_activo");
$("#li_whatsapp").removeClass("filtro1_activo");
$("#li_actriz").removeClass("filtro1_activo");
$("#li_besos").removeClass("filtro1_activo");
$("#li_trio").removeClass("filtro1_activo");
$("#li_cuerpo").removeClass("filtro1_activo");
$("#li_facial").removeClass("filtro1_activo");
$("#li_disfraces").removeClass("filtro1_activo");
$("#li_eroticos").removeClass("filtro1_activo");
$("#li_anal").removeClass("filtro1_activo");
$("#li_novia").removeClass("filtro1_activo");
$("#li_trio").removeClass("filtro1_activo");
$("#li_domicilio").removeClass("filtro1_activo");
$("#li_cena").removeClass("filtro1_activo");
$("#li_viajes").removeClass("filtro1_activo");
$("#li_eventos").removeClass("filtro1_activo");
$("#li_club_inter").removeClass("filtro1_activo");


$("#li_departamento").removeClass("filtro1_activo");
$("#li_despedida").removeClass("filtro1_activo");
$("#li_club").removeClass("filtro1_activo");
$("#li_hotel").removeClass("filtro1_activo");
$("#li_eventos").removeClass("filtro1_activo");
$("#li_andina").removeClass("filtro1_activo");
$("#li_morena").removeClass("filtro1_activo");
$("#li_blanca").removeClass("filtro1_activo");
$("#li_triguena").removeClass("filtro1_activo");
$("#li_bajas").removeClass("filtro1_activo");
$("#li_altas").removeClass("filtro1_activo");
$("#li_naturales").removeClass("filtro1_activo");
$("#li_tetonas").removeClass("filtro1_activo");
$("#li_negro").removeClass("filtro1_activo");
$("#li_rojas").removeClass("filtro1_activo");
$("#li_rubia").removeClass("filtro1_activo");
$("#li_delgadas").removeClass("filtro1_activo");
$("#li_gorditas").removeClass("filtro1_activo");
$("#li_depiladas").removeClass("filtro1_activo");
$("#li_sin_depilar").removeClass("filtro1_activo");
$("#li_blanco").removeClass("filtro1_activo");
$("#li_benegro").removeClass("filtro1_activo");
$("#li_copro").removeClass("filtro1_activo");
$("#li_dorada").removeClass("filtro1_activo");
$("#li_fetichismo").removeClass("filtro1_activo");
$("#li_profunda").removeClass("filtro1_activo");
$("#li_suave").removeClass("filtro1_activo");
$("#li_duro").removeClass("filtro1_activo");
$("#li_dorada").removeClass("filtro1_activo");
$("#li_strap").removeClass("filtro1_activo");
$("#li_squirting").removeClass("filtro1_activo");        
                            
      limpiar_buscasudjf();
    }


    function filtrar_busqueda2(){
        var parametro = $("#filtrar_busqueda2").val();

                        $.ajax({ 
                          url:   '<?= $url_api ?>public/json/filtrar_texto.php?q=' + parametro, 
                          type:  'GET',
                          success:  function (response) 
                            { 
                                $("#filtrar").html("");
                                $("#filtrar").html(response);           
                            }
                                            
                      });

                        limpiar_buscasudjf();
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

    limpiar_buscasudjf();
  }

function agregar_favoritos(anuncio){
              $("#id_"+anuncio).addClass("color3");
              $.ajax({
                              url:   'include/agregarfavoritos_.php?anuncio=' + anuncio, 
                              type:  'GET',
                              success:  function (response){}
                            });

              limpiar_buscasudjf();
}


function agregar_favoritos2(anuncio){
              $("#id_2"+anuncio).addClass("color3");
              $("#id_2"+anuncio).removeClass("far");
              $("#id_2"+anuncio).addClass("fas");
              $.ajax({
                              url:   'include/agregarfavoritos_.php?anuncio=' + anuncio, 
                              type:  'GET',
                              success:  function (response){}
                            });

              limpiar_buscasudjf();
}






function limpiar_buscasudjf(){
    $(".buscador1").val("");
  }

$(document).ready(function(){
  setTimeout('limpiar_buscasudjf()',1000);
  setTimeout('limpiar_buscasudjf()',2000);
  setTimeout('limpiar_buscasudjf()',3000);
 
 var limit = 30;
 var start = 31;
 var action = 'inactive';
 function load_country_data(limit, start)
 {
  $.ajax({
   url:"cargar_anuncio2.php",
   method:"POST",
   data:{limit:limit, start:start},
   cache:false,
   success:function(data)
   {
    $(".buscador1").val("");
    $('#load_data').append(data);
    if(data == '')
    {
     $('#load_data_message').html("<button type='button' class='btn btn-info'>No hay mas anuncios</button>");
     action = 'active';
    }
    else
    {
     $('#load_data_message').html("<button type='button' class='btn btn-warning color3'>Espere Seguimos Cargando</button>");
     action = "inactive";
    }
   }
  });

  limpiar_buscasudjf();
 }

 if(action == 'inactive')
 {
  $(".buscador1").val("");
  action = 'active';
  load_country_data(limit, start);

  limpiar_buscasudjf();
 }

 $(window).scroll(function(){
  if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
  {
   action = 'active';
   start = start + limit;
   setTimeout(function(){
    load_country_data(limit, start);
   }, 1000);
  }

  limpiar_buscasudjf();
 });
 
});

function modal_login_btn(){
  $("#sesion").modal("show");
  $("#perfilkine").modal("hide");

  limpiar_buscasudjf();
}


function mostrar_modal_filtro(){
  $("#filtro").modal("show");
}

</script>
<?php 
  include "modal/nube.php";
  include "cookies.php";
  include "modal.php";
  include "include/footer.php";
  include "modal/filtro.php";
 ?>

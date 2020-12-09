<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous"></script>









<?php 
  include "modal/filtro.php";
  include "modal/fotoverificada.php";
  include "modal/iniciarsesion.php";
  include "modal/olvidecontraseña.php";
  include "modal/perfil.php";
  include "modal/registrokinepc.php";
  include "modal/registropc.php";
  include "modal/registrousuariopc.php";
  include "modal/ubicacion.php";
  include "modal/eliminarcuenta.php";
    include "modal/cambiodecontraseña.php";
    include "modal/eliminaranuncio.php";

 ?>








<!-- Modal iniciar sesion -->
<div class="modal fade" id="sesion" tabindex="-1" role="dialog" aria-labelledby="sesion"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered " role="document">
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
       <p class="font-weight-bold mt-3 f2">Inicio de sesión</p>
     </div>
     <form id="frm_login">
        <div class="row">
        <div class="col-12" id="mensaje"></div>
            <div class="col-12">
              <input class="form-control form-control-lg campo3" type="text" placeholder="Correo Electronico" name="usuario" id="correoelectronico">
              <p style="color:red; font-size: 10px;" id="login_nombre"></p>
            </div>
            <div class="col-12 mt-3">
              <input class="form-control form-control-lg campo3" type="password" placeholder="Contraseña" name="clave" id="Contraseña">
              <p style="color:red; font-size: 10px;" id="login_clave"></p>
            </div>
            <div class="col-12">
              <div class="custom-control custom-checkbox mt-4 mb-3">
  <input type="checkbox" class="custom-control-input" id="recuerdame">
  <label class="custom-control-label f3 pt-1" for="recuerdame">Recuérdame</label>
</div>
            </div>

    
          </div>
            <div class="text-center">
        <a  class="btn boton1" type="buttom" onclick="login()" >Ingresar</a>
      </div>
     </form>
     <div class="mt-4">
      <p class="text-center font-weight-bold f1">¿Eres nuevo?<a  data-toggle="modal" data-target="#Registro" data-dismiss="modal"class="color1 ml-1">Regístrate</a></p>
    </div>
    <div class="mt-5">
      <a data-toggle="modal" data-target="#olvidecontraseña1" data-dismiss="modal"  class="text-dark"><p class="text-center font-weight-bold f1">
        <u>Olvidé mi contraseña</u>
      </p></a>
    </div>
          </div>
        </div>

     
      </div>
     
    </div>
  </div>
</div>


<!-- Modal registro kine pc -->
<div class="modal fade" id="registrok" tabindex="-1" role="dialog" aria-labelledby="registrok"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered    modal-lg" style="max-width: 800px;" role="document">
    <div class="modal-content fondocolor4">
       <div class="text-left mr-5">
         <button type="button" class="close cerrar1" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="row d-flex justify-content-center">
          <div class="col-10">
            <div class="text-center">
       <img src="img/logo.png" width="237" alt="">
       <p class="font-weight-bold mt-3 text-white f2">Regístrate para Kine</p>
     </div> 
     <form id="frm_add_kine">
        <div class="row">
            <div class="col-lg-6 col-12 mt-2">
               <input class="form-control form-control-lg campo4" type="text" placeholder="Nombre de Usuario" id="NombreUsuario" name="usuario">
               <p style="color:white; font-size: 10px;" id="reg_kine_nombre"></p>
            </div>
            <div class="col-lg-6 col-12 mt-2 ">
             <input class="form-control form-control-lg campo4" type="text" placeholder="Correo Electronico" id="CorreoElectronico" name="correo">
             <p style="color:white; font-size: 10px;" id="reg_kine_email"></p>
            </div>
            <div class="col-lg-6 col-12 mt-2">
              <input class="form-control form-control-lg campo4" type="password" placeholder="Contraseña" id="Contraseñakine" name="clave">
              <p style="color:white; font-size: 10px;" id="reg_kine_clave1"></p>
            </div>
            <div class="col-lg-6 col-12 mt-2 ">
              <input class="form-control form-control-lg campo4" type="password" placeholder="Confirmar contraseña" id="Confirmarcontraseñakine" name="clave2">
              <p style="color:white; font-size: 10px;" id="reg_kine_clave2"></p>
              <input type="hidden" value="2" name="tipo" required>
            </div>
            <div class="col-12">
              <div class="custom-control custom-checkbox mt-4 mb-3">
  <input type="checkbox" class="custom-control-input" id="recuerdame2">
  <label class="custom-control-label f3 pt-1 text-white" for="recuerdame2">Recuérdame</label>
</div>
            </div>

    
          </div>
          <div class="row mb-0 mb-md-5">
            <div class="col-lg-6 col-12">
                <div class="mt-4">
      <p class=" font-weight-bolder text-white f1">¿Ya tienes una cuenta? <a  data-toggle="modal" data-target="#sesion" data-dismiss="modal" class=" text-white font-weight-bold ml-1">Inicia Sesión</a></p>
    </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="text-right">
        <a  class="btn boton1" type="buttom" onclick="registrar_kine()" id="registro">Registrar</a>
      </div>
            </div>
          </div>
            
     </form>
     
   
          </div>
        </div>

     
      </div>
     
    </div>
  </div>
</div>



<!-- Modal registro usuario pc -->
<div class="modal fade" id="reg_usuario" tabindex="-1" role="dialog" aria-labelledby="reg_usuario"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered    modal-lg" style="max-width: 800px;" role="document">
    <div class="modal-content ">
       <div class="text-left mr-5">
         <button type="button" class="close cerrar1" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body ">
        <div class="row d-flex justify-content-center">
          <div class="col-10">
            <div class="text-center">
       <img src="img/logo.png" width="237" alt="">
       <p class="font-weight-bold mt-3 f2">Regístrate para Usuario</p>
     </div>
     <form id="frm_add_user">
        <div class="row">
            <div class="col-lg-6 col-12 mt-2">
               <input class="form-control form-control-lg campo4" type="text" placeholder="Nombre de Usuario" id="NombreU"  name="usuario" required>
                <p style="color:red; font-size: 10px;" id="reg_usr_nombre"></p>
            </div>
            <div class="col-lg-6 col-12 mt-2 ">
             <input class="form-control form-control-lg campo4" type="email" placeholder="Correo Electronico" id="CorreoE" name="correo" required>
             <p style="color:red; font-size: 10px;" id="reg_usr_correo"></p>
            </div>
            <div class="col-lg-6 col-12 mt-2">
              <input class="form-control form-control-lg campo4" type="password" placeholder="Contraseña" id="ContraseñaU" name="clave" required>
              <p style="color:red; font-size: 10px;" id="reg_usr_clave1"></p>
            </div>
            <div class="col-lg-6 col-12 mt-2 ">
              <input class="form-control form-control-lg campo4" type="password" placeholder="Confirmar contraseña" id="ConfirmarcontraseñaU" name="clave2" required>
              <input type="hidden" value="1" name="tipo" required>
              <p style="color:red; font-size: 10px;" id="reg_usr_clave2"></p>
            </div>
            </div>
            <div class="col-12">
              <div class="custom-control custom-checkbox mt-4 mb-3">
  <input type="checkbox" class="custom-control-input" id="recuerdame1">
  <label class="custom-control-label f3 pt-1" for="recuerdame1">Recuérdame</label>
</div>
            

    
          </div>
          <div class="row mb-0 mb-md-5">
            <div class="col-lg-6 col-12">
                <div class="mt-4">
      <p class=" font-weight-bolder  f1">¿Ya tienes una cuenta? <a href="#" class=" color1 font-weight-bold ml-1" data-toggle="modal" data-target="#sesion" data-dismiss="modal" >Inicia Sesión</a></p>
    </div>
            </div>
            <div class="col-lg-6 col-12">
              <div class="text-right">
        <a  class="btn boton1" type="submit" id="btn_reg_usuario" onclick="registrar()" id="registro">Registrar</a>
      </div>
            </div>
          </div>
            
     </form>
     
   
          </div>
        </div>

     
      </div>
     
    </div>
  </div>
</div>









<script>
//Registro de Usuario Normal
  function registrar(){
    var nombre = $("#NombreU").val().length;
    var correo = $("#CorreoE").val().length;
    var clave1 = $("#ContraseñaU").val().length;
    var clave2 = $("#ConfirmarcontraseñaU").val().length;
    userdevdata = 5;
    if(nombre == ''){
      $("#reg_usr_nombre").html("Introduzca un nombre");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }

    if(correo == ''){
      $("#reg_usr_correo").html("Introduzca un Correo");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }

    if(clave1 == ''){
      $("#reg_usr_clave1").html("Introduzca una clave valida");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }

    if(clave2 == ''){
      $("#reg_usr_clave2").html("Repita por favor su clave");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }

    if(clave1 == clave2){
      userdevdata = userdevdata-1; console.log(userdevdata)
    }
    else{
      $("#reg_usr_clave1").html("Las Claves no coinciden");
      $("#reg_usr_clave2").html("Las Claves no coinciden");
    }

    if(userdevdata == 0){
      var parametros=$( "#frm_add_user" ).serialize();
                       $.ajax({
                              data:  parametros, 
                              url:   '<?= $url_api ?>public/json/insert_user.php', 
                              type:  'POST',
                              beforeSend: function()
                              {
                                  toastr.info('Registrando..')
                              },
                              success:  function (response) 
                                          {

                                            if (response==3) 
                                            {
                                              swal("Usuario Registrado, verifique su correo.");  
                                              $("#reg_usuario").modal("hide");
                                              $("#frm_add_user")[0].reset()
                                            }
                                            if (response==2) 
                                            {
                                              swal("Este correo ya existe, use otro.");  
                                            }
                                            if (response==1) 
                                            {
                                              swal("Este usuario ya existe, use otro.");  
                                            }
                                          }
                              
                          });
    }
                       
  }






  //Registro de Usuario Kine
  function registrar_kine(){
    var nombre = $("#NombreUsuario").val().length;
    var correo = $("#CorreoElectronico").val().length;
    var clave1 = $("#Contraseñakine").val().length;
    var clave2 = $("#Confirmarcontraseñakine").val().length;
    userdevdata = 5;
    if(nombre == ''){
      $("#reg_kine_nombre").html("Introduzca un nombre");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }

    if(correo == ''){
      $("#reg_kine_email").html("Introduzca un Correo");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }

    if(clave1 == ''){
      $("#reg_kine_clave1").html("Introduzca una clave valida");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }

    if(clave2 == ''){
      $("#reg_kine_clave2").html("Repita por favor su clave");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }

    if(clave1 == clave2){
      userdevdata = userdevdata-1; console.log(userdevdata)
    }
    else{
      $("#reg_kine_clave1").html("Las Claves no coinciden");
      $("#reg_kine_clave2").html("Las Claves no coinciden");
    }

    if(userdevdata == 0){
      var parametros=$( "#frm_add_kine" ).serialize();
                       $.ajax({
                              data:  parametros, 
                              url:   '<?= $url_api ?>public/json/insert_user.php', 
                              type:  'POST',
                              beforeSend: function()
                              {
                                  toastr.info('Registrando..')
                              },
                              success:  function (response) 
                                          {

                                            if (response==3) 
                                            {
                                              swal("Usuario Registrado, verifique su correo.");  
                                              $("#registrok").modal("hide");
                                              $("#frm_add_user")[0].reset();
                                              setTimeout("location.href='index.php'", 5000);
                                            }
                                            if (response==2) 
                                            {
                                              swal("Este correo ya existe, use otro.");  
                                            }
                                            if (response==1) 
                                            {
                                              swal("Este usuario ya existe, use otro.");  
                                            }
                                          }
                              
                          });
    }
                       
  }


  function login(){
    var nombre = $("#correoelectronico").val().length;
    var clave = $("#Contraseña").val().length;
    userdevdata = 2;
    if(nombre == ''){
      $("#login_nombre").html("Introduzca usuario o correo valido");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }
    if(clave == ''){
      $("#login_clave").html("Introduzca una contraseña");
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata) }

    if(userdevdata == 0){
      var parametros=$( "#frm_login" ).serialize();
                       $.ajax({
                              data:  parametros, 
                              url:   '<?= $url_api ?>public/json/login_user.php', 
                              type:  'POST',
                              success:  function (response) 
                                          {
                                            if (response==1) 
                                            {
                                              $("#login_nombre").html("");
                                              $("#login_clave").html("");
                                              $("#mensaje").html("<div class='alert alert-danger' role='alert'>Su cuenta aun no se encuentra validada, revise su correo o contacte con soporte!</div>")  
                                            }
                                            if (response==2) 
                                            {
                                              $("#login_nombre").html("");
                                              $("#login_clave").html("");
                                              $("#mensaje").html("<div class='alert alert-danger' role='alert'>Ha solicitado un cambio de contraseña, revise su correo y estara el link o vuelva a solicitar para restablecer su contraseña!</div>")  
                                            }

                                            if (response==3) 
                                            {
                                              $("#login_nombre").html("");
                                              $("#login_clave").html("");
                                              $("#mensaje").html("<div class='alert alert-danger' role='alert'>Su cuenta se encuentra suspendida, contacte con soporte!</div>")  
                                            }

                                            if (response==4) 
                                            {
                                              swal("Inicio de sesion correcto, redirigiendo.");  
                                              url = "http://localhost/kineshub/";
                                              setTimeout("location.href='http://localhost/kineshub/'", 5000);
                                            }

                                            if (response==5) 
                                            {
                                              $("#login_nombre").html("");
                                              $("#login_clave").html("");
                                              $("#mensaje").html("<div class='alert alert-danger' role='alert'>Usuario o Contraseña erroneos!</div>")  
                                            }
                                           
                                          }
                              
                          });
    }
  }
	</script>

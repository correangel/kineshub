

<!-- Modal olvide contraseña -->
<div class="modal fade" id="olvidecontraseña1" tabindex="-1" role="dialog" aria-labelledby="olvidecontraseña1"
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
     <form id="recuperar_Contraseña">
        <div class="row mt-4">
            <div class="col-12">
             
              <input class="form-control form-control-lg campo3" type="text" placeholder="Correo Electronico" name="correo_electronico" id="correoelectronico2">
              <p id="correo_contacto" style="color: red;"></p>
            </div>
          
          

    
          </div>
            <div class="text-center my-3">
        <a  class="btn boton1" type="buttom" onclick="recuperar()">Recuperar Contraseña</a>
      </div>
     </form>
    
   
          </div>
        </div>

     
      </div>
     
    </div>
  </div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous"></script>
<script>

  function recuperar(){
    var correo = $("#correoelectronico2").val().length;
    userdevdata = 1;
    if(correo == ''){
      $("#correo_contacto").html("El correo electronico debe ser valido.");
	  $("#correoelectronico2").focus();
    }
    else{ userdevdata = userdevdata-1; console.log(userdevdata)  }

    if(userdevdata == 0){
      var parametros=$( "#recuperar_Contraseña" ).serialize();
                       $.ajax({
                              data:  parametros, 
                              url:   'http://localhost/api/public/json/validar_recuperacion.php', 
                              type:  'POST',
                              success:  function (response) 
                                          {
                                            if (response==1) 
                                            {
                                              swal("Hemos enviado un link de recuperacion a su correo electronico"); 
                                              setTimeout("location.href='kine.php'", 5000);
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
	</script>
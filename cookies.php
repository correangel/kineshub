 <!-- modal de cookies  -->

<div class="modal fade modal1x" id="cookies" tabindex="-1" role="dialog" aria-labelledby="cookies"
  aria-hidden="true" data-backdrop="true" >
  <div class="modal-dialog modal-frame  modal-notify modal-info" role="document" style="border-radius: 8px;">
    <!--Content-->
    <div class="modal-content">
      <!--Body-->
      <div class="modal-body">
        <div class="container">
          <div class="">
             <div class="text-left mt-3">
            <img src="img/Grupo 92.svg" width="40" height="40" alt="">
            <img src="img/logo.png" width="137" alt="">
          </div>
          </div>
        
           <div class=" mt-3">
          <h1  class=" font-weight-bold f8 pt-4">Contenido sólo para adutos  <?= $_COOKIE['modal']; ?></h1>

          <p class=" pr-2 mb-0 pb-1  f4 mt-3 font-weight-normal" >Para seguir navegando has de ser mayor de 18 años</p> 
           <h1  class=" font-weight-bold f8  mt-3" >Uso de cookies</h1>
             <p class=" pr-2 mb-0 pb-1  f4 font-weight-normal text-justify" >Utilizamos cookies propias para recordar tus preferencias y facilitarte la navegación. Las cookies de Google son anónimas y no compartimos los datos con terceros. Puedes obtener más información en nuestra <a href="#" class="text-dark"><u>Política de cookies</u></a></p>
         
         
        </div>
         <div class="mt-3">
            <div class="row">
              <div class="col-12">
                <button class="btn boton14 w-100" data-dismiss="modal" data-toggle="modal" onclick="cook_modal()" data-dismiss="modal">Acepto</button>
              </div>
            </div>
         
         
            
       
        
          </div>
        </div>
       
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!-- fin de modal de cookies  -->


<?php
  if(isset($_COOKIE['modal']) && $_COOKIE['modal'] == 'si'){}
  else{
?>
<script>
  window.onload = function primero(){
        $('#cookies').modal('show')
     }
</script>
<?php
}
?>

     
<script>
    function cook_modal(){
      $.ajax({
                              url:   'activar_cookie_modal.php', 
                              type:  'POST',
                              success:  function (response) 
                                          {
                                           console.log(response);
                                          }
                              
                          });
    }
</script>



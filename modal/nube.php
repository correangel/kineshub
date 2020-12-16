<?php
include "db.php";
    mysqli_set_charset($enlace,"utf8");
    $sql = mysqli_query($enlace, "SELECT * FROM nube WHERE id = 1");
    $row = mysqli_fetch_array($sql);

    $sql2= mysqli_query($enlace, "SELECT * FROM participar WHERE id_usuario = '". $_SESSION['id'] ."'");
    $num = mysqli_num_rows($sql2);
    if($num == 0){
?>

<div class="fixed-bottom" style="right: 0px;" id="nube" style="display: none;"> 
	<div class="row justify-content-lg-start">
	<div class="col-lg-4 col-10"><div class="alert  alert-dismissible fade show " role="alert" style="padding-left: 40px;max-width: 300px">




 <div class="view" id="nube2">
    <img src="img/Trazado 81.svg" class="img-fluid" width="" alt="">
    <div class="mask flex-center">
        <h2 class="f10 font-weight-bolder text-white f16" style="position: absolute;top: 30px; right: 32px;" id="countdown">05:00</h2>
        <div class="flex-center ml-4" style="position: relative;top: 35px;">
        	<p class="text-white f4" style="max-width: 185px;"><?= $row['texto'] ?> <u>
          <?php if(isset($_SESSION['id'])){ ?>
          <a onclick="procesar_anuncio()" class="text-white"><?= $row['texto_link'] ?></a>
          <?php }
            else{
          ?>
          <a data-toggle="modal" data-target="#sesion" class="text-white"><?= $row['texto_link'] ?></a>
            <?php } ?>
          </u></p>
        </div>
        
    </div>
</div>

  <button type="button" id="nube3" class="close cerrar3" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true" class="" style="    position: absolute;
    top: 10px;
    right: 13px;">&times;</span>
  </button>
</div></div>
</div>
</div>

<script>
  window.onload = updateClock;

var minutes = 5;
var seconds = 00;

function updateClock() {
  document.getElementById('countdown').innerHTML = (minutes + ":" + seconds);
  if(seconds == 0 && minutes == 0){
    $("#nube").hide();
    $("#nube2").hide();
    $("#nube3").hide();
	console.log("Se ha finalizado");
	$("#countdown").finish();
  }
  if(seconds == 0){
    minutes-=1;
    seconds=59;
    setTimeout("updateClock()",1000);
  }
  else{
    seconds-=1;
    setTimeout("updateClock()",1000);
  }
}
</script>

<?php } 

else{

  echo "hay en la lista.";

}?>
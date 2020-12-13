<?php
require_once 'db.php';
mysqli_set_charset($enlace,"utf8");
?>

<!-- Modal ubicacion -->
<div class="modal fade" id="ubicacion" tabindex="-1" role="dialog" aria-labelledby="ubicacion"
  aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered  modal-lg" role="document">
    <div class="modal-content">
       <div class="text-left mr-5">
         <button type="button" class="close cerrar1" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       <h2 class="color2 mt-4 f6 font-weight-bold text-center"><i class="fas fa-map-marker-alt"></i> Busca a las chicas por tu zona y en donde desees</h2>
       <div class="container mx-0 mx-md-5">
          <div class="row my-5">
         <div class="col-12 col-lg-4">
           <p class="f7 font-weight-bolder mt-3">Departamento</p>
           <select class="browser-default custom-select campo3" id="dep" onchange="select_dep()">
            <option selected>Selecciona un Departamento</option>
            <?php
								$sql_dep = mysqli_query($enlace, "SELECT * FROM departamentos");
								while($row_dep = mysqli_fetch_array($sql_dep)){
                  $sqlqq = mysqli_query($enlace, "SELECT * FROM anuncio WHERE departamento = '". $row_dep['id'] ."'");
                  $num2 = mysqli_num_rows($sqlqq);
							?>
								<option <?php if($num2 > 0){ } else {echo "disabled=''";} ?>value="<?= $row_dep['id'] ?>"><?= $row_dep['departamento'] ?></option>
							<?php } ?>
          </select>
         </div>
         
         <div class="col-12 col-lg-4">
         <div id="provincias">
							<p class="f7 font-weight-bolder mt-3">Provincias</p>
							<select class="browser-default custom-select campo3" id="pro">
								<option value="0" selected>Selecciona un Provincia</option>
							</select>
							</div>
							<span id="pro_text" style="color:red; font-size: 1em;"></span>
          </select>
         </div>

         <div class="col-12 col-lg-4">
         <div id="distritos">
							<p class="f7 font-weight-bolder mt-3">Distritos</p>
							<select class="browser-default custom-select campo3" id="dis">
								<option selected>Selecciona un Distrito</option>
							</select>
							<span id="dis_text" style="color:red; font-size: 1em;"></span>
							</div>
          </select>
         </div>


       </div>
       </div>
      <div class="text-center mb-3">
        <button class="btn boton13 btn-lg">Buscar</button>
      </div>
      </div>
     
    </div>
  </div>
</div>

<script>
function select_dep(){
		var parametro = $("#dep").val();

		$.ajax({ 
            url:   '<?= $url_api ?>public/json/mostrar_provincias2.php?departamento=' + parametro, 
            type:  'GET',
            success:  function (response) 
				{
						$("#provincias").html(response);						
				}
                              
        });
	}

	function select_pro(){
		var parametro = $("#pro").val();

		$.ajax({ 
            url:   '<?= $url_api ?>public/json/mostrar_distritos2.php?provincia=' + parametro, 
            type:  'GET',
            success:  function (response) 
				{
						$("#distritos").html(response);						
				}
                              
        });
	}
</script>

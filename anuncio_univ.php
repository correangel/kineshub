<!-- Aqui -->
                <div class="card">
           <img src="images/<?= $rowq['imagen'] ?>" class="card-img-top" alt="" onclick="mostrar_modal('<?= $rowfinal['ID'] ?>')">
        <div class="card-body">
          <div class="row ">
            <div class="col-8">
              <div class="row">
  <div class="col-12 " onclick="mostrar_modal('<?= $rowfinal['ID'] ?>')"><p><?= $rowfinal['Nombre'] ?> <?php if($rowfinal['Verificado'] == 1){  ?> <img src="img/Grupo 139.svg" alt="" class="ml-1"><?php } ?></p></div>
                
              </div>
            </div>
            <div class="col-4">

                       <?php if(isset($_SESSION['id']) && $_SESSION['tipo'] == 1){
              $id = $rowfinal['ID'];
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
       <div onclick="mostrar_modal('<?= $rowfinal['ID'] ?>')">
          <span class="badge badge-pill badge-light"><?= $rowfinal['Distrito'] ?></span>
          <span class="badge badge-pill badge-light"><?= $rowfinal['Edad'] ?> años</span>
          <span class="badge badge-pill badge-light">S/ <?= $rowp['PrecioMinimo'] ?></span>
          <span class="badge badge-pill badge-light"><?= $rowfinal['Pais'] ?></span>
        </div>
        </div>
       </div>
      <!-- fin de aqui  -->
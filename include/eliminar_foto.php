<?php
include "db.php";
$imagen = $_GET['imagen'];

$sql1 = mysqli_query($enlace, "SELECT * FROM imagenes WHERE imagen = '$imagen'");
$row1 = mysqli_fetch_array($sql1);
$id_anuncio = $row1['id_anuncio'];

$sql2 = mysqli_query($enlace, "DELETE FROM imagenes WHERE imagen = '$imagen'");

$sql2 = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $id_anuncio ."'");
                    $countmm = mysqli_num_rows($sql2);
                    while($row = mysqli_fetch_array($sql2)){
                        $imagen = $row['imagen'];?>
                        <div class='col-lg-2 col-4'>
                            <img src='images/$imagen' class='w-100 mt-2' alt=''>
                            <a onclick="eliminar_foto('<?= $imagen ?>')"> Eliminar </a>
                        </div>
                        <?php
                    }

?>
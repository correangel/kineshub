<?php
include "db.php";
/*$sql = mysqli_query($enlace, "SELECT * FROM anuncio");
$anuncios = mysqli_num_rows($sql);
$sql = mysqli_query($enlace, "SELECT * FROM anuncio WHERE estado = 1");
$publicados = mysqli_num_rows($sql);
$sql = mysqli_query($enlace, "SELECT * FROM anuncio WHERE estado = 0");
$sin_publicar = mysqli_num_rows($sql);
$i = 0;*/


//depurar Anuncios sin publicar
if($sin_publicar > 0){
	$i = 0;
	$imaganes_depuradas = 0;
	while ($row = mysqli_fetch_array($sql)) {
		$id = $row['id'];
		$sql_f = mysqli_query("DELETE FROM anuncio WHERE estado = 0 AND id = '$id'");
		if(!$sql_f){}
			else{ 
				$eliminados = $i++;
				$sqli = mysqli_query($enlace, "DELETE FROM imagenes WHERE id_anuncio = '$id'");
				$imaganes_depuradas = $imaganes_depuradas + mysqli_affected_rows($enlace); 
			 }
	}
}

echo "Anuncios Revisados: $anuncios <br>";
echo "Anuncios Eliminados: $eliminados <br>";
echo "Imagenes Depuradas DB: $imaganes_depuradas<br>";


$thefolder = "images/";
if ($handler = opendir($thefolder)) {
	$eli = 0;
    while (false !== ($file = readdir($handler))) {
        
        if($file != '.' OR $file != '..' OR $file != '...'){
        	$sql = mysqli_query($enlace, "SELECT * FROM imagenes WHERE imagen = '$file'");
        	$num = mysqli_num_rows($sql);

        	if($num > 0){echo "Archivo Existe";}
        	else{
        		unlink("images/".$file)?"":"Error";
        		$eli++
        	}
        }
    }
    closedir($handler);
}

echo "Imagenes Depuradas: ".$eli;
?>
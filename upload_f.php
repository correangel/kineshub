<?php
$ruta = 'images/'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
$mensage = '';//Declaramos una variable mensaje quue almacenara el resultado de las operaciones.
foreach ($_FILES as $key) //Iteramos el arreglo de archivos
{
	if($key['error'] == UPLOAD_ERR_OK )//Si el archivo se paso correctamente Ccontinuamos 
		{
            $rutaImagenOriginal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
            $rutaMarcaDeAgua = "marca_agua.png";    
            $filename = $key['name'];
            $extension = pathinfo($filename, PATHINFO_EXTENSION);

            switch ($extension) { 
            case 'jpg': 
            case 'jpeg': 
             $original = imagecreatefromjpeg($filename); 
            break; 
            case 'gif': 
             $original = imagecreatefromgif($filename); 
            break; 
            case 'png': 
             $original = imagecreatefrompng($filename); 
            break; 
        } 

            /*$original = imagecreatefrompng($rutaImagenOriginal);*/
            $marcaDeAgua = imagecreatefrompng($rutaMarcaDeAgua);

            # Como vamos a centrar  necesitamos sacar antes las anchuras y alturas
            $anchuraOriginal = imagesx($original);
            $alturaOriginal = imagesy($original);
            $alturaMarcaDeAgua = imagesy($marcaDeAgua);
            $anchuraMarcaDeAgua = imagesx($marcaDeAgua);
            # En d贸nde poner la marca de agua sobre la original
            $centroHorizontalDeOriginal = floor($anchuraOriginal / 2);
            $centroHorizontalDeMarcaDeAgua = floor($anchuraMarcaDeAgua / 2);
            $centroVerticalDeOriginal = floor($alturaOriginal / 2);
            $centroVerticalDeMarcaDeAgua = floor($alturaMarcaDeAgua / 2);
            $centroHorizontal = $centroHorizontalDeOriginal - $centroHorizontalDeMarcaDeAgua;
            $centroVertical = $centroVerticalDeOriginal - $centroVerticalDeMarcaDeAgua;

            $xOriginal = $centroHorizontal;
            $yOriginal = $centroVertical;
            # Desde d贸nde comenzar a cortar la marca de agua (si son 0, se comienza desde el inicio)
            $xMarcaDeAgua = 0;
            $yMarcaDeAgua = 0;
            # Hasta d贸nde poner la marca de agua sobre la original
            $alturaMarcaDeAgua = $alturaMarcaDeAgua - $yMarcaDeAgua;
            $anchuraMarcaDeAgua = $anchuraMarcaDeAgua - $xMarcaDeAgua;
            imagecopy($original, $marcaDeAgua, $xOriginal, $yOriginal, $xMarcaDeAgua, $yMarcaDeAgua, $anchuraMarcaDeAgua, $alturaMarcaDeAgua);

            # Guardar y liberar recursos
            # Segundo argumento de imagepng es la ruta de la imagen de salida
            $temp = explode(".", $key['name']); 
            $newfilename = date("YmdHis").$key['name'];
            $resultado = imagepng($original, "images/".$newfilename);
            imagedestroy($original);
            imagedestroy($marcaDeAgua);

            session_start();
            require_once 'db.php';

            $id_anuncio =  $_SESSION['id_anuncio'];
                $sql = mysqli_query($enlace, "INSERT INTO imagenes (id_anuncio, imagen) VALUES ('$id_anuncio', '". $newfilename ."')");

		}
        
        $rutaImagenOriginal = "";
        $rutaMarcaDeAgua = "";    

        $original = "";
        $marcaDeAgua = "";

        $newfilename = ""; 
        $resultado = "";
	
}


$sql2 = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $id_anuncio ."'");
                    $countmm = mysqli_num_rows($sql2);
                    while($row = mysqli_fetch_array($sql2)){
                        $imagen = $row['imagen'];?>
                        <div class='col-lg-2 col-4'>
                            <img src='images/<?= $imagen ?>' class='w-100 mt-2' alt=''>
                            <a onclick="eliminar_foto('<?= $imagen ?>')"> Eliminar </a>
                        </div>
                        <?php
                    }
?>
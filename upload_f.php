<?php
$ruta = 'images/'; //Decalaramos una variable con la ruta en donde almacenaremos los archivos
$mensage = '';//Declaramos una variable mensaje quue almacenara el resultado de las operaciones.
foreach ($_FILES as $key) //Iteramos el arreglo de archivos
{
	if($key['error'] == UPLOAD_ERR_OK )//Si el archivo se paso correctamente Ccontinuamos 
		{
            $rutaImagenOriginal = $key['tmp_name']; //Obtenemos la ruta Original del archivo
            $rutaMarcaDeAgua = "marca_agua.png";    

            $original = imagecreatefrompng($rutaImagenOriginal);
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
            $newfilename = round(microtime(true)) . '.' . end($temp); 
            $resultado = imagepng($original, "images/".$newfilename);
            imagedestroy($original);
            imagedestroy($marcaDeAgua);
	
		}

	if ($key['error']=='') //Si no existio ningun error, retornamos un mensaje por cada archivo subido
		{
			$mensage .= '-> Archivo <b>'.$newfilename.'</b> Subido correctamente. <br>';
		}
	if ($key['error']!='')//Si existio algún error retornamos un el error por cada archivo.
		{
			$mensage .= '-> No se pudo subir el archivo <b>'.$newfilename.'</b> debido al siguiente Error: n'.$key['error']; 
		}
	
}
echo $mensage;// Regresamos los mensajes generados al cliente
?>
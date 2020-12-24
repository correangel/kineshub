<?php
include "db.php";

include "consultas.php";



        $result = mysqli_query($enlace, $sql);
            if(!$result){
                echo "Aqui hay un error";
            }
            else{
                echo $sql;
                echo mysqli_num_rows($result);
            }



    $num = mysqli_num_rows($result);

    $sqlxx = "SELECT id_anuncio FROM caracteristicas WHERE id > 0 ";
    $ejexx = mysqli_query($enlace, $sqlxx);
    $numxx = mysqli_num_rows($ejexx);

    if($num != $numxx){
        echo "Entra aqui";
        echo " <div class='card-columns' style='height: 100%;' id='load_data2'>";
        while($row_re = mysqli_fetch_array($result)){
            $id = $row_re['id_anuncio'];

            $min_edad = $_POST['min_edad'];
            $max_edad = $_POST['max_edad'];

            $verificado = explode(",", $_POST['in_verificado']);

            //Cuando Esta verificado
            if($verificado[1] == 1){
                $sqlve = "SELECT * FROM anuncio WHERE id = '$id' AND verificado = 1 AND estado = 1";

                if($baratas[1] == "1"){
                    $sqlve .= " AND barata = '1'";
                }
                elseif($a1[1] == "1"){
                    $sqlve .= " AND a1 = '1'";
                }
                else{
                    if($max_precio > 0){ $sqlve .= " AND max_precio <= '$max_precio'"; }
                    if($min_precio > 0){ $sqlve .= " AND min_precio >= '$min_precio'"; }
                }

                if($joven[1]  == 0 && $madura[1] == 0){
                    if($min_edad > 0){ $sqlve .= " AND edad >= '$min_edad'"; }
                    if($max_edad > 0){ $sqlve .= " AND edad <= '$max_edad'"; }
                }
                else{
                    if($joven[1] > 0){ $sqlve .= " AND edad <= '35'"; }
                    else{ $sqlve .= " AND edad >= '35'"; }
                }

                $resultve = mysqli_query($enlace, $sqlve);
                $numve = mysqli_num_rows($resultve);

                if($numve > 0){
                    $sqlfinal = mysqli_query($enlace, "SELECT anuncio.id AS ID, anuncio.verificado AS Verificado, anuncio.nombre AS Nombre, anuncio.edad AS Edad, anuncio.distrito, anuncio.provincia, anuncio.departamento, distritos.distrito AS Distrito, anuncio.pais AS Pais FROM anuncio INNER JOIN distritos ON anuncio.distrito = distritos.id WHERE anuncio.id = '$id'");
                    $rowfinal = mysqli_fetch_array($sqlfinal);

                    $sqlq = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $rowfinal['ID'] ."' LIMIT 1");
                    $rowq = mysqli_fetch_array($sqlq);
                    $sqlp = mysqli_query($enlace, "SELECT min(costo) AS PrecioMinimo FROM tarifas WHERE id_anuncio = '". $rowfinal['ID']."'");
                    $rowp = mysqli_fetch_array($sqlp);

                    include 'anuncio_universal.php';
                }
                //No Verificado
                else{
                    
                }

            }
            //Cuando no esta verificado
            else{
                $sqlve = "SELECT * FROM anuncio WHERE id = '$id' AND estado = 1";

                if($baratas[1] == "1"){
                    $sqlve .= " AND barata = '1'";
                }
                elseif($a1[1] == "1"){
                    $sqlve .= " AND a1 = '1'";
                }
                else{
                    if($max_precio > 0){ $sqlve .= " AND max_precio <= '$max_precio'"; }
                    if($min_precio > 0){ $sqlve .= " AND min_precio >= '$min_precio'"; }
                }

                if($joven[1]  == 0 && $madura[1] == 0){
                    if($min_edad > 0){ $sqlve .= " AND edad >= '$min_edad'"; }
                    if($max_edad > 0){ $sqlve .= " AND edad <= '$max_edad'"; }
                }
                else{
                    if($joven[1] > 0){ $sqlve .= " AND edad <= '35'"; }
                    else{ $sqlve .= " AND edad >= '35'"; }
                }

                $resultve = mysqli_query($enlace, $sqlve);
                $numve = mysqli_num_rows($resultve);

                

                if($numve > 0){
                    echo "Estamos entrabndo aqui";
                    $sqlfinal = mysqli_query($enlace, "SELECT anuncio.id AS ID, anuncio.verificado AS Verificado, anuncio.nombre AS Nombre, anuncio.edad AS Edad, anuncio.distrito, anuncio.provincia, anuncio.departamento, distritos.distrito AS Distrito, anuncio.pais AS Pais FROM anuncio INNER JOIN distritos ON anuncio.distrito = distritos.id WHERE anuncio.id = '$id'");
                    $rowfinal = mysqli_fetch_array($sqlfinal);

                    $sqlq = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $rowfinal['ID'] ."' LIMIT 1");
                    $rowq = mysqli_fetch_array($sqlq);
                    $sqlp = mysqli_query($enlace, "SELECT min(costo) AS PrecioMinimo FROM tarifas WHERE id_anuncio = '". $rowfinal['ID']."'");
                    $rowp = mysqli_fetch_array($sqlp);

                    include "anuncio_universal.php";
                }
                else{ }
        }
        echo "</div>";
    }
    }
    else{
       
        $sql = mysqli_query($enlace, "SELECT anuncio.id AS ID, anuncio.verificado AS Verificado, anuncio.nombre AS Nombre, anuncio.edad AS Edad, anuncio.distrito, anuncio.provincia, anuncio.departamento, distritos.distrito AS Distrito, anuncio.pais AS Pais FROM anuncio INNER JOIN distritos ON anuncio.distrito = distritos.id WHERE estado = 1 ORDER BY orden DESC LIMIT 0, 30");
  if(!$sql){echo "error".mysqli_error($enlace);}
$sql2 = mysqli_query($enlace, "SELECT id FROM anuncio WHERE estado = 1");
$num = mysqli_num_rows($sql2);
echo " <div class='card-columns' style='height: 100%;' id='load_data'>";
 while($row = mysqli_fetch_array($sql)){
    $sqlq = mysqli_query($enlace, "SELECT * FROM imagenes WHERE id_anuncio = '". $row['ID'] ."' LIMIT 1");
    $rowq = mysqli_fetch_array($sqlq);
    $sqlp = mysqli_query($enlace, "SELECT min(costo) AS PrecioMinimo FROM tarifas WHERE id_anuncio = '". $row['ID']."'");
    $rowp = mysqli_fetch_array($sqlp);
    if(!$sqlp){
      echo "error";
    }
    
    include 'anuncio_univ.php';

    }
    echo "</div>";
}
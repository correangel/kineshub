<?php
include "db.php";

include "consultas.php";

    $result = mysqli_query($enlace, $sql);
    if(!$result){
        echo "Aqui hay un error";
    }

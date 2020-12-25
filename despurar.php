<?php
include "db.php";

$sql = mysqli_query()

$thefolder = "images/";
$i = 0;
if ($handler = opendir($thefolder)) {
    while (false !== ($file = readdir($handler))) {
            echo "$file<br>";
            $i++;
    }
    closedir($handler);

    echo "<br>$i";
}

?>
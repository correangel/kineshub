<?php
include "db.php";

$sql = mysqli_query()

$thefolder = "images/";
if ($handler = opendir($thefolder)) {
    while (false !== ($file = readdir($handler))) {
            echo "$file<br>";
    }
    closedir($handler);
}

?>
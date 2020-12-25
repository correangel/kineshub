<?php
include "db.php";

$sql = mysqli_query()

$thefolder = "images/";
$i = 0;
if ($handler = opendir($thefolder)) {
    while (false !== ($file = readdir($handler))) {
            echo "$file ".$i++."<br>";
    }
    closedir($handler);
}

?>
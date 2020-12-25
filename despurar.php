<?php
$thefolder = "images/";
if ($handler = opendir($thefolder)) {
    while (false !== ($file = readdir($handler))) {
            echo "$file<br>";
    }
    closedir($handler);
}

?>
<?php
include "db.php";
$min_precio = $_POST['min_precio'];
$max_precio = $_POST['max_precio'];

$baratas = explode(",", $_POST['in_baratas']);
$a1 = explode(",", $_POST['in_a1']);

$joven = explode(",", $_POST['in_joven']);
$madura = explode(",", $_POST['in_madura']);

echo "Hola Mundo";
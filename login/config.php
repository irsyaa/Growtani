<?php

// $db_host = "localhost";
// $db_user = "root";
// $db_pass = "";
// $db_name = "project";

// try {    
//     //create PDO connection 
//     $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
// } catch(PDOException $e) {
//     //show error
//     die("Terjadi masalah: " . $e->getMessage());
// }

$server="localhost";
$dbusername="root";
$dbpassword=""; //tanpa spasi

$dbname="growtani";
//date_default_timezone_set("Asia/Bangkok");

$koneksi = mysqli_connect($server,$dbusername,$dbpassword,$dbname);

if (!($koneksi)) 'koneksi gagal dilakukan';

?>
<?php
session_start();
if(empty($_SESSION['admin'])) header("location:login.php");

?>

ini adalah halaman admin
<a href="logout.php"> logout </a> 
<body>
    <tr></tr>
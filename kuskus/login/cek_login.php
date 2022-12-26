<?php

//panggil koneksi databse
include "koneksi.php";

$pass = md5($_POST['password']);
$username = mysqli_escape_string($koneksi,$_POST['username']);
$password = mysqli_escape_string($koneksi, $pass);
$status = mysqli_escape_string($koneksi,$_POST['status']);

//cek username, terdaftar atau tidak
$cek_user = mysqli_query($koneksi, "SELECT * FROM tuser WHERE username ='$username' and status='$status'");
// echo "SELECT * FROM tuser WHERE username ='$username' and status='$status'";
$user_valid = mysqli_fetch_array($cek_user);
//uji jika username terdaftar
if ($user_valid) {
    //jika username terdaftar
    //cek password sesuai atau tidak
    if($password == $user_valid['password']) {
         //jika password sesuai
        //buat session
        session_start();
        $_SESSION['username'] = $user_valid['username'];
        $_SESSION['nama_lengkap'] = $user_valid['nama_lengkap'];
        $_SESSION['status'] = $user_valid['status'];

        //uji status user
        if($status == "Admin") {
           header('location:home_admin.php');
        }else if ($status == "User") {
            header('location:home_user.php');
        }    
    } else {
        echo"<script>alert('Maaf, Login Gagal, Password anda tidak sesuai!');
        document.location='index.php'</script>";
    }    
} else {
    echo"<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!');
    document.location='index.php'</script>";
}    
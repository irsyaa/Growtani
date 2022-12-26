<?php

//panggil koneksi databse
include "config.php";

//enkripsi inputan password lama
$password_lama = md5($_POST['pass_lama']);

//panggil username
$username = $_POST['username'];

//uji jika password lama sesuai
$tampil = mysqli_query($koneksi, "SELECT * FROM email WHERE
                                username = '$username' and password =
                                '$password_lama'");
$data = mysqli_fetch_array($tampil);
//jika data ditemukan, maka password sesuai
if ($data) {
    //uji jika password baru dan konfifrmasi password sama
    $password_baru = $_POST['pass_baru'];
    $konfirmasi_password = $_POST['konfirmasi_pass'];

    if ($password_baru == $konfirmasi_password) {
        //proses ganti password
        //enkripsi passowrd baru
        $pass_ok = md5($konfirmasi_password);
        $ubah = mysqli_query(koneksi, "UPDATE admin set password = '$pass_ok'
                                       WHERE id = '$data[id]' ");
        if ($ubah) {                  
            echo "<script>alert('Password anda berhasil diubah, silahkan logout 
            untuk menguji password baru anda.!') ;document.location='forgot-password2.php'
            </script>";
        }
    } else {
        echo "<script>alert('Maaf, Password password baru & konfirmasi password yang anda 
              inputkan tidak sama!');document.location='forgot-password2.php'</script>";        
                             
    }
}  else {
    echo "<script>alert('Maaf, Password lama anda tidak sesuai/tidak terdaftar!') 
    ;document.location='forgot-password2.php'</script>";
}                              
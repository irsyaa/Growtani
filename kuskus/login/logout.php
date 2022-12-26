<?php

session_start();
unset($_SESSION['username']);
unset($_SESSION['password']);
unset($_SESSION['nama_lengkap']);
unset($_SESSION['status']);

session_destroy();
echo "<script>alert('anda telah keluar dari halaman');document.
location='index.php'</script>";

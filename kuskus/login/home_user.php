<?php
session_start();
if(empty($_SESSION['username']) or empty($_SESSION['status'])) {
    echo"<script>alert('Maaf, untuk mengakses halaman ini , anda harus login terlebih dahulu, terima kasih ');
document.location='index.php'</script>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard User | Kelasku</title>
     <!-- Bootstrap core CSS -->
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
      <div class="container">
        <div class="jumbotron bg-info text-white">
          <h1 class="display-4">Hello, <b><?= $_SESSION['nama_lengkap'] ?></b></
          <h1>
          <p class="lead"> Selamat Datang, Anda berhasil login sebagai <b><?=
          $_SESSION['status']?></b> </p>
          <hr class="my-4">
          <a class="btn btn-danger btn-lg" href="logout.php"
          role="button">logout</a>
      </div>

      <div class="card">
      <div class="card-header bg-primary text-white">
        Ganti Password (*abaikan jika tidak ingin ganti password)
      </div>
      <div class="card-body">
      <form method="post" action="ganti_password2.php">
        <input type="hidden" name= "username" value="<?= $_SESSION
        ['username'] ?>">
            <div class="form-group">
              <label>Masukkan Password Lama Anda!</label>
              <input type="password" class="form-control" name="pass_lama"
              required>
          </div>

          <div class="form-group">
              <label>Masukkan Password Baru Anda!</label>
              <input type="password" class="form-control" name="pass_baru"
              required>
          </div>

          <div class="form-group">
              <label>Konfirmasi Password Baru Anda!</label>
              <input type="password" class="form-control" name="konfirmasi_pass"
              required>
          </div>
            
            <button type="submit" class="btn btn-primary">Proses</button>
            <button type="reset" class="btn btn-danger">Batal</button>
          </form>
      </div>
    </div>
      
    </div>   
    <!-- Penutup container -->
</body>

</html>
<?php
require 'koneksi.php';

if(isset($_POST['register'])) {
    $user = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

$input = mysqli_query($koneksi, "INSERT INTO tuser VALUES ('','$user','$email','$password')");
   // echo "SELECT * FROM users WHERE username= '$user' and  password='$pass' ";

//echo $sql;
if($input){
    echo "<script>
    window.alert ('Berhasil Membuat Akun');
    window.location.href = '';
    </script>";
} else {
    echo "<script>
    window.alert ('Koneksi Anda Kurang Stabil!');
    windows.location.href = '';
    </script>";
}

}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/style1.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">


        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col mx-auto">>
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form action="" class="user" method="POST">
                            <form class="user">
                                <div class="form-group row">
                                    <div class="col-sm-12 sm-4 mb-sm-0">
                                        <input name="username" type="text" class="form-control form-control-user" id="exampleFirstName"
                                            placeholder="Ussername">
                                    </div>

                                </div>
                                <div class="form-label-group">
                                    <!-- <input name="email" type="email" class="form-control form-control-user" id="exampleInputEmail"
                                        placeholder="Email Address"> -->
                                        <select class="form-control" name="status">
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>                                        
                                </div>
                                

                                <div class="form-group row">
                                    <div class="col-sm-12 mb-4 mb-sm-0">
                                        <input name="password"type="password" class="form-control form-control-user"
                                            id="exampleInputPassword" placeholder="Password">
                                    </div>
                                    
                                    <!-- <div class="form-label-group">
                                        <select class="form-control" name="status">
                                        <option value="Admin">Admin</option>
                                        <option value="User">User</option>
                                    </div> -->
                                
                                            
                                
                                <button type="submit" name="register" class="btn btn-primary btn-user btn-block"> Register </button>
                                
                                
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="ganti_password.php">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="login.php">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/2.js"></script>

</body>

</html>
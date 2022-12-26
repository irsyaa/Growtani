<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kelasku.com</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/style2.css" rel="stylesheet">
    <link href="../assets/css-bootstrap/bootstrap.css" rel="stylesheet">
    

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-lg-6 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col mx-auto">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome to Kuskus !</h1>
                                    </div>
                                    <form method="POST" action="ceklogin.php" class="user">
                                        <?php if (isset($_GET['error']))
                                        {?>
                                        <div class="alert alert-danger" role="alert">
                                        <?=$_GET['error']?> 
                                        </div>
                                        
                                        <?php } ?>
                                        
                                    
                                    
                                        <!-- <input type="hidden" name="Login" value="true"></input> -->

                                        <div class="form-group">
                                            <input 
                                            name="username" type="text" 
                                            class="form-control form-control-user"
                                            id="username" aria-describedby="emailHelp"
                                            placeholder="Enter Your Ussername...">
                                        </div>
                                        <div class="form-group">
                                            <input name="password" type="password" class="form-control form-control-user"
                                                id="password" placeholder="Password">
                                        </div>

                                        <div class="form-group">
                                        <select class="form-select mb-3" 
                                        id="floatingSelect" aria-label="Floating label select example"
                                        name="role">
                                            <option selected value="pendana">Pendana</option>
                                            <option value="pengusaha">Pengusaha</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-user btn-block"> <a href="ceklogin.php" class=""></a> Login </button>
                                       
                                        <!-- <a href="../index.html" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </a> -->
                                        <hr>
                                        
                                    </form>
                                    
                                    <div class="text-center">
                                    </div>
                                    <div class="text-center">
                                    <a class="small" href="ganti_password.php">Forgot Password?</a>
                                    </div>
                                    <div class="text-center">
                                        <a class="small" href="register.php">Create an Account!</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    Core plugin JavaScript-->
    <!-- <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    Custom scripts for all pages-->
    <!-- <script src="js/sb-admin-2.min.js"></script> -->

</body>

</html>

<?php 

include ("config.php");

if(isset($_POST['username']) && isset($_POST['password']) )
{
    $username = $_POST['username'];
    $password = md5($_POST['password']);
    
    $ceklogin = mysqli_query($koneksi, "select * from admin where ussername = '$username' and password = '$password'");
    $cek = mysqli_fetch_array($ceklogin);
    //echo $cek; 
    if(!empty($cek[0])){
        // $rec = mysqli_fetch_array($ceklogin);
        $_SESSION['username'] = $user;
        

        header("location: ../Menu1.php");
        // header("location: login.php?msg=ok");
        
    }
    else {
        header("location:login.php?err=1;");
    }
}
?>
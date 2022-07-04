<?php 
    session_start();
    include 'koneksi.php';
    $username = $_POST['email'];
    $password = $_POST['password'];
    $data = mysqli_query($koneksi,"select * from tb_user where email='$username' and password='$password'");
    $cek = mysqli_num_rows($data);
    if($cek > 0){
    $_SESSION['email'] = $username;
    $_SESSION['status'] = "login";
    header("location:index2.php");
    }
    else{
    header("location:index.php?pesan=gagal");
    }
?>


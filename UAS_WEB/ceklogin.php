<?php
   include 'koneksi.php';
   $email = $_POST['email'];
   $password = $_POST['password'];

   $sql_login = "SELECT * FROM tb_user WHERE email='".$_POST['email']."' AND password='".$_POST['password']."'";
   $query_login = mysqli_query($koneksi, $sql_login);
   $jumlah_login = mysqli_num_rows($query_login);
 
   if ($jumlah_login >= 1 ){
      $data = mysqli_fetch_assoc($query_login);
      session_start();
      if ($data['Status']=="Admin"){
      $_SESSION['username']=$email;
      $_SESSION['status']= "admin";
      echo "<script>alert('Login Berhasil')</script>";
      echo "<meta http-equiv='refresh' content='0; url=index.php'>";
      }
      else{
      echo "<script>alert('Login Gagal')</script>";
      echo "<meta http-equiv='refresh' content='0; url=index.php'>";
      }
   }
?>
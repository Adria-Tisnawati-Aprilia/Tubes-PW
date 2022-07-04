<?php
   if (isset ($_POST['btnSIMPAN'])){
   //mulai proses simpan
   $sql_simpan = "INSERT INTO tb_resi 
   (Resi,Kd_Paket,Pengirim,Penerima) VALUES (
   '".$_POST['txtkd_barang']."',
   '".$_POST['txtnama_barang']."',
   '".$_POST['txtharga']."',
   '".$_POST['txtfoto']."')";
   $query_simpan = mysqli_query($koneksi, $sql_simpan);
   if ($query_simpan) {
      echo "<script>alert('Simpan Berhasil')</script>";
      echo "<meta http-equiv='refresh' content='0; url=index2.php?halaman=data-resi'>";
   }
   else{
      echo "<script>alert('Simpan Gagal')</script>";
      echo "<meta http-equiv='refresh' content='0; url=index2.php?halaman=data-resi'>";
   }
    //selesai proses simpan
   }
   else if (isset ($_POST['btnUBAH'])){
   //mulai proses ubah
      $sql_ubah = "UPDATE tb_resi SET
      nama_barang='".$_POST['txtnama_barang']."',
      harga='".$_POST['txtharga']."',
      foto='".$_POST['txtfoto']."'
      WHERE kd_barang='".$_POST['txtkd_barang']."'";
      $query_ubah = mysqli_query($koneksi, $sql_ubah);
      if ($query_ubah) {
         echo "<script>alert('Ubah Berhasil')</script>";
         echo "<meta http-equiv='refresh' content='0; url=index2.php?halaman=data-resi'>";
         }
      else{
         echo "<script>alert('Ubah Gagal')</script>";
         echo "<meta http-equiv='refresh' content='0; url=index2.php?halaman=data-resi'>";
         }
      //selesai proses ubah
      }
      else{
      //mulai proses hapus
      if(isset($_GET['kode'])){
      $sql_hapus = "DELETE FROM tb_resi WHERE
      resi='".$_GET['kode']."'";
      $query_hapus = mysqli_query($koneksi, $sql_hapus);
      if ($query_hapus) {
         echo "<script>alert('Hapus Berhasil')</script>";
         echo "<meta http-equiv='refresh' content='0; url=index2.php?halaman=data-resi'>";
         }
      else{
         echo "<script>alert('Hapus Gagal')</script>";
         echo "<meta http-equiv='refresh' content='0; url=index2.php?halaman=data-resi'>";
         }
      }
      //selesai proses hapus
   }
   ?>
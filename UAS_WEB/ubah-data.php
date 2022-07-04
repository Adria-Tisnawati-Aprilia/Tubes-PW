<div id="layoutSidenav_content">
<main>
<div class="container-fluid px-4">
<?php
//perintah untuk menampilkan data dari tb_resi ke komponen input form dengan acuan kode yang didapat dari halaman buku_tampil
if(isset($_GET["kode"])){    
    $sql_cek = "SELECT * FROM tb_resi WHERE kd_barang='".$_GET["kode"]."'";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
}
?>
<form action="?halaman=aksi_data " method="post" enctype="multipart/formdata">
<center><h2>UBAH DATA BARANG</h2></center>
<div class="form-group">
<label>Kode Barang :</label>
<input type="text" class="form-control" placeholder="Ketikkan Kode Barang" name="txtkd_barang" value="<?php echo $data_cek['kd_barang']; ?>" required="" readonly="">
</div>
<div class="form-group">
<label>Nama Barang :</label>
<input type="text" class="form-control" placeholder="Masukkan Nama Barang" name="txtnama_barang" value="<?php echo $data_cek['nama_barang']; ?>" required="">
</div>
<div class="form-group">
<label>Harga Barang :</label>
<input type="double" class="form-control" placeholder="Masukkan Harga Barang" name="txtharga" value="<?php echo $data_cek['harga']; ?>" required="">
</div>
<div class="form-group">
<label>Foto :</label>
<input type="file" class="form-control" placeholder="Masukkan Foto" name="txtfoto" value="<?php echo $data_cek['foto']; ?>" required="">
</div>
<div class="form-group">
<button type="submit" class="btn btn-warning btn-sm" name="btnUBAH">UBAH</button>
<a href="?halaman=data-resi" class='btn btn-dark btnsm'>BATAL</a>
</div>
</form>
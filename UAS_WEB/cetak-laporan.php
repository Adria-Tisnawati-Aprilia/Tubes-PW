<?php
include 'koneksi.php'; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="">
<meta name="author" content="">
<title>Aku 060402 REPORT - 2022</title>
<!-- Bootstrap core CSS -->
<link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<center>
<br>
<h2>LAPORAN DATA BARANG</h2>
<br>
<table class="table table-bordered">
<thead>
<tr>
<th>NO</th>
<th>Kode Barang</th>
<th>Nama Barang</th>
<th>Harga Barang</th>
<th>Foto</th>
</tr>
</thead>
<tbody>
<?php
$sql_tampil = "SELECT * FROM tb_resi";
$query_tampil = mysqli_query($koneksi, $sql_tampil);
$no=1;
while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
    ?>
    <tr> 
    <td><?php echo $no; ?></td>
    <td><?php echo $data['kd_barang']; ?></td>
    <td><?php echo $data['nama_barang']; ?></td>
    <td><?php echo $data['harga']; ?></td>
    <td><?php echo $data['foto']; ?></td>
    </tr>
    <?php
    $no++;
}
?>
</tbody>
</table>
</center>
<br>
<div>
<b>Indramayu, <?php echo date("d-m-Y"); ?></b>
<br><br><br><br>
<div>
<script>
//perintah untuk cetak di browser
window.print();
</script>
</body>
</html>

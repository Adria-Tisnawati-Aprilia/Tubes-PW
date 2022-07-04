<div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
                        <h1 class="mt-4">Data Barang</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Informasi Barang</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Data Barang
                            </div>
                            <div class="card-body">
                                <br>
                                <table id="datatablesSimple" class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                            <th>No</th>
                                            <th>Kode Barang</th>
                                            <th>Nama Barang</th>
                                            <th>Harga Barang</th>
                                            <th>Foto</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php
                                        //perintah untuk mengambil data dari tb_buku
                                        $sql_tampil = "SELECT * FROM tb_resi";
                                        $query_tampil = mysqli_query($koneksi, $sql_tampil);
                                        $no=1; //nilai awal no
                                        while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
                                    ?>
                                        <tr> 
                                            <!--
                                                perintah menampilkan data sesuai nama field
                                                jumlah td sesuai dengan jumlah th diatas
                                            -->
                                        <td><?php echo $no; ?></td>
                                        <td><?php echo $data['kd_barang']; ?></td>
                                        <td><?php echo $data['nama_barang']; ?></td>
                                        <td><?php echo $data['harga']; ?></td>
                                        <td><?php echo $data['foto']; ?></td>
                                        <td>
                                            <!--
                                                perintah Ubah Data menuju file buku_ubah.php dengan 
                                                acuan kode yang berisi data kode_buku
                                                perintah Hapus Data menuju file buku_hapus.php dengan 
                                                acuan kode yang berisi data kode_buku
                                            -->
                                        <a href="?halaman=ubah_data&kode=<?php echo
                                        $data['kd_barang']; ?>" class='btn btn-warning rounded-pill'>Ubah</a>
                                        <a href="?halaman=aksi_data&kode=<?php echo
                                        $data['kd_barang']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')" 
                                        class='btn btn-danger rounded-pill'>Hapus</a>
                                        </td>
                                        </tr>
                                        <?php
                                        //auto increment no
                                        $no++;
                                        }
                                    ?>
                                    </tbody>
                                </table>
                                <a href="?halaman=tambah-resi" class="btn btn-warning btn-sm">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                </main>
</div>
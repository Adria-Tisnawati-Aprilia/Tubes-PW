<div id="layoutSidenav_content">
<main>
    <div class="container-fluid px-4">
        <form action="?halaman=aksi_data " method="post" enctype="multipart/formdata">
            <center><h2>TAMBAH DATA BARANG</h2></center>
            <div class="form-group">
            <label>Kode Barang :</label>
            <input type="text" class="form-control" placeholder="Ketikkan Kode Barang" name="txtkd_barang" required="">
            </div>
            <div class="form-group">
            <label>Nama Barang :</label>
            <input type="text" class="form-control" placeholder="Ketikkan Nama Barang" name="txtnama_barang" required="">
            </div>
            <div class="form-group">
            <label>Harga Barang</label> :</label>
            <input type="text" class="form-control" placeholder="Ketikkan Nama Harga Barang" name="txtharga" required="">
            </div>
            <div class="form-group">
            <label>Foto </label>
            <input type="file" class="form-control" placeholder="Ketikkan Harga Barang" name="txtfoto" required="">
            </div>
            <div class="form-group">
            <button type="submit" class="btn btn-success btn-sm"
            name="btnSIMPAN">SIMPAN</button>
            <a href="?halaman=data-resi" class='btn btn-dark btnsm'>BATAL</a>
            </div>
        </form>
    </div>
</main>
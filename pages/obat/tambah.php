<!--Page content-->
<!--===================================================-->

<script>
function sum() {
    var harga_dasar = document.getElementById('harga_dasar').value;
    var a = parseInt(harga_dasar) + (parseInt(harga_dasar) * 10/100);
    var b = parseInt(harga_dasar) + (parseInt(harga_dasar) * 20/100);
    var c = parseInt(harga_dasar) + (parseInt(harga_dasar) * 50/100);
    var d = parseInt(harga_dasar) + (parseInt(harga_dasar) * 100/100);
    if (!isNaN(a)) {
        document.getElementById('hlokal').value = a;
    } 
    if (!isNaN(b)) {
        document.getElementById('hexpat').value = b;
    } 
    if (!isNaN(c)) {
        document.getElementById('hasing').value = c;
    } 
    if (!isNaN(d)) {
        document.getElementById('hasu').value = d;
    } 
}
</script>
<style>
.table, th, td {
    text-align: center;
}
</style>

<?php

$data = $_GET['id'];

$sql = $koneksi->query("SELECT * FROM tb_obat WHERE kode = '$data'");
$tampil = $sql->fetch_assoc();
$level = $tampil['jenis']

?>

<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Tambah Obat </h3>
        <div class="breadcrumb-wrapper">
            <span class="label">You are here:</span>
                <ol class="breadcrumb">
                <li> <a href="?home"> Home </a> </li>
                <li> <a href="?pages=obat"> Daftar Obat </a> </li>
                <li class="active"> Tambah Obat </li>
                </ol>
        </div>
    </div>

<div id="page-content">
    <div class="row">
        <div class="col-md-12">
            <section class="panel">
                <form method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" action="#">
                    <div class="panel-heading">
                        <div class="panel-control">
                            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                        </div>
                            <h3 class="panel-title">   
                            </h3>
                    </div>
                    <div class="panel-body np">
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="demo-text-input">Nama Obat</label>
                            <div class="col-md-6">
                                <input name="nama" type="text" id="demo-text-input" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="demo-text-input">Jenis Obat</label>
                            <div class="col-md-4">
                                <select name="jenis" class="form-control">
                                    <option value="Tablet"> Tablet</option>
                                    <option value="Injeksi">>Injeksi</option>
                                    <option value="Sirup">Sirup</option>
                                    <option value="Lain">Lain</option>
                                </select>
                            </div>
                            <label class="col-md-1 control-label" for="">Stok</label>
                            <div class="col-md-3">
                                <input name="stok" type="number" class="form-control">
                                <!-- <small class="help-block">This is a help text</small> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">Harga Dasar</label>
                            <div class="col-md-4">
                                <input name="hdasar" type="number" id="harga_dasar" onkeyup="sum()" class="form-control">
                                <!-- <small class="help-block">This is a help text</small> -->
                            </div>
                            <label class="col-md-1 control-label" for="">Expired</label>
                            <div class="col-md-3">
                                <input name="expired" type="date" class="form-control">
                                <!-- <small class="help-block">This is a help text</small> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="">Harga Obat</label>
                            <div class="col-md-2">
                                <input name="hlokal" type="number" id="hlokal" class="form-control" readonly> 
                                <small class="help-block">Harga Lokal</small>
                            </div>
                            <div class="col-md-2">
                                <input name="hexpat" type="number" id="hexpat" class="form-control" readonly>
                                <small class="help-block">Harga Expat</small>
                            </div>
                            <div class="col-md-2">
                                <input name="hasing" type="number" id="hasing" class="form-control" readonly>
                                <small class="help-block">Harga Asing</small>
                            </div>
                            <div class="col-md-2">
                                <input name="hasu" type="number" id="hasu" class="form-control" readonly>
                                <small class="help-block">Harga Asuransi</small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-footer">
                        <div class="">
                            <input type="submit" name="simpan" value="Simpan" class="btn btn-success btn-xs">
                        </div>
                    </div>
                </form>
                <?php 
                    if (isset($_POST['simpan'])) {
                        $nama = $_POST['nama'];
                        $jenis = $_POST['jenis'];
                        $hdasar = $_POST['hdasar'];
                        $hlokal = $_POST['hlokal'];
                        $hexpat = $_POST['hexpat'];
                        $hasing = $_POST['hasing'];
                        $hasu = $_POST['hasu'];
                        $stok = $_POST['stok'];
                        $expired = $_POST['expired'];

                        $sql = $koneksi->query("INSERT INTO tb_obat (nama, jenis, hdasar, hlokal, hexpat, hasing, hasu, stok, expired) VALUES ('$nama', '$jenis', '$hdasar', '$hlokal', '$hexpat', '$hasing', '$hasu', '$stok', '$expired')");
                        if ($sql) {
                            ?>
                                <script type="text/javascript">
                                    alert("Data Berhasil Disimpan");
                                    window.location.href="?pages=obat";
                                </script>
                            <?php
                        } else {
                            ?>
                            Data gagal di input;
                            <?php
                        } 
                    }
                ?>
            </section>
        </div>
    </div>
</div>



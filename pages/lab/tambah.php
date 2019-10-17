<!--Page content-->
<!--===================================================-->
<style>
.table, th, td {
    text-align: center;
}
</style>

<?php

$data = $_GET['id'];

$sql = $koneksi->query("SELECT * FROM tb_pxa WHERE kode = '$data'");
$tampil = $sql->fetch_assoc();

?>

<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Tambah Prosedur </h3>
        <div class="breadcrumb-wrapper">
            <span class="label">You are here:</span>
                <ol class="breadcrumb">
                <li> <a href="?home"> Home </a> </li>
                <li> <a href="?pages=prosedur"> Daftar Prosedur </a> </li>
                <li class="active"> Tambah Prosedur </li>
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
                            <label class="col-md-2 control-label" for="demo-text-input">Nama Prosedur</label>
                            <div class="col-md-6">
                                <input name="nama" type="text" id="demo-text-input" class="form-control" placeholder="">
                                <!-- <small class="help-block">This is a help text</small> -->
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="demo-text-input">Jenis Prosedur</label>
                            <div class="col-md-6">
                                <select name="jenis" class="form-control">
                                    <option value="">-- Pick One --</option>
                                    <option value="Administratif">Administratif</option>
                                    <option value="Laboratori">Laboratori</option>
                                    <option value="Non-Laboratori">Non-Laboratori</option>
                                    <option value="Terapi">Terapi</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="demo-text-input">Harga Prosedur</label>
                            <div class="col-md-4">
                                <input name="hlokal" type="number" id="demo-text-input" class="form-control" placeholder="Lokal">
                                <!-- <small class="help-block">This is a help text</small> -->
                            </div>
                            <div class="col-md-4">
                                <input name="hexpat" type="number" id="demo-text-input" class="form-control" placeholder="Expat">
                                <!-- <small class="help-block">This is a help text</small> -->
                            </div>
                            <div class="col-md-4">
                                <input name="hasing" type="number" id="demo-text-input" class="form-control" placeholder="Asing">
                                <!-- <small class="help-block">This is a help text</small> -->
                            </div>
                            <div class="col-md-4">
                                <input name="hasu" type="number" id="demo-text-input" class="form-control" placeholder="Asuransi">
                                <!-- <small class="help-block">This is a help text</small> -->
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
                        $hlokal = $_POST['hlokal'];
                        $hexpat = $_POST['hexpat'];
                        $hasing = $_POST['hasing'];
                        $hasu = $_POST['hasu'];

                        $sql = $koneksi->query("INSERT INTO tb_prosedur (nama, jenis, hlokal, hexpat, hasing, hasu) VALUES ('$nama', '$jenis', '$hlokal', '$hexpat', '$hasing', '$hasu')");
                        if ($sql) {
                            ?>
                                <script type="text/javascript">
                                    alert("Data Berhasil Disimpan");
                                    window.location.href="?pages=prosedur";
                                </script>
                            <?php
                        }
                    }
                ?>
            </section>
        </div>
    </div>
</div>



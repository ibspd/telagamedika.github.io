<!--Page content-->
<!--===================================================-->
<?php

$data = $_GET['id'];
$sql = $koneksi->query("SELECT * FROM tb_pla INNER JOIN tb_plb WHERE tb_pla.kode = tb_plb.kode AND tb_plb.kode='$data'");
$tampil = $sql->fetch_assoc();
$jns = $tampil['jns'];


?>

<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Pendaftaran Pasien </h3>
        <div class="breadcrumb-wrapper">
            <span class="label">You are here:</span>
                <ol class="breadcrumb">
                <li> <a href="?home"> Home </a> </li>
                <li class="active"> Rekam Medis </li>
                </ol>
        </div>
    </div>
<?php 
    // $carikode = $koneksi->query("SELECT max(kode) as maxKode FROM tb_pla");
    // // menjadikannya array
    // $datakode = $carikode->fetch_assoc(); 
    // $kodepx = $datakode['maxKode'];
    // // jika $datakode
    // if ($datakode) {
    // // membuat variabel baru untuk mengambil kode barang mulai dari 1
    // $nilaikode = substr($kodepx, 2, 4);
    // // menjadikan $nilaikode ( int )
    // $kode = (int) $nilaikode;
    // // setiap $kode di tambah 1
    // $kode++;
    // // hasil untuk menambahkan kode 
    // // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
    // // atau angka sebelum $kode
    // // $hasilkode = "PA".str_pad($kode, 4, "0", STR_PAD_LEFT);
    // $hasilkode = "PL" . sprintf("%04s", $kode);
    // } else {
    // $hasilkode = "PL0001";
    // }
?>
<section id="page-content">
<form class="form-horizontal" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" id="">
<div class="row">
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-control">
                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                </div>
                <h3 class="panel-title">Identitas Pasien (<?=$tampil['kode']?>)</h3>
                <input type="hidden" name="stat" value="0">
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table" width="100%">
                        <tbody>
                            <tr>
                                <td width="20%">NIK</td>
                                <td width="2%">:</td>
                                <td><input type="number" name="nik" id="demo-text-input" class="form-control" placeholder=""></td>
                            </tr>
                            <tr>
                                <td>Nama Pasien</td>
                                <td>:</td>
                                <td>
                                    <input type="hidden" name="kat" id="demo-text-input" class="form-control" value="Lokal">
                                    <input type="text" name="nama" id="demo-text-input" class="form-control" placeholder="">
                                </td>
                            </tr>
                            <tr>
                                <td>Tempat, Tgl Lahir, JK</td>
                                <td>:</td>
                                <td>
                                    <div class="col-md-4">
                                        <input type="text" name="tl" id="demo-text-input" class="form-control" placeholder="Tempat Lahir">
                                        <!-- <small class="help-block">This is a help text</small> -->
                                    </div>
                                    <div class="col-md-4">
                                        <input type="date" name="tgl" id="demo-text-input" class="form-control" placeholder="">
                                    </div>
                                    <div class="col-md-4">
                                        <select name="jk" class="form-control">
                                            <option value="">-- Pilih JK --</option>
                                            <option value="Laki-laki">Laki-laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                        </select>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td> <input type="text" name="alamat" id="demo-text-input" class="form-control" placeholder=""></td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td>:</td>
                                <td><input type="text" name="telp" id="demo-text-input" class="form-control" placeholder=""></td>
                            </tr>
                            <tr>
                                <td align="center" colspan="3"><strong>PENANGGUNG JAWAB</strong> </td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><input type="text" name="penanggung" id="demo-text-input" class="form-control" placeholder=""></td>
                            </tr>
                            <tr>
                                <td>Hubungan</td>
                                <td>:</td>
                                <td><input type="text" name="hub" id="demo-text-input" class="form-control" placeholder=""></td>
                            </tr>
                            <tr>
                                <td>No. Telp</td>
                                <td>:</td>
                                <td><input type="text" name="ptelp" id="demo-text-input" class="form-control" placeholder=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>        
            </div>
        </div>
    </div>

    <!-- STATUS MEDIS -->
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-control">
                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                </div>
                <h3 class="panel-title">Status Medis</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table" width="100%">
                        <tbody>
                            <tr>
                                <td width="20%">Riwayat Penyakit</td>
                                <td width="2%">:</td>
                                <td><textarea name="rpd" id="demo-text-input" class="form-control" placeholder=""></textarea></td>
                            </tr>
                            <tr>
                                <td><strong>Alergi</strong> </td>
                                <td>:</td>
                                <td><input type="text" name="alergi" id="demo-text-input" class="form-control" placeholder=""></td>
                            </tr>
                        </tbody>
                    </table>
                </div>        
            </div>
        </div>
    </div>

    <!-- REKAM MEDIS -->
    <?php 
        // $carikode = $koneksi->query("SELECT max(kode_px) as maxKode FROM tb_pxa");
        // // menjadikannya array
        // $datakode = $carikode->fetch_assoc(); 
        // $kodepx = $datakode['maxKode'];
        // // jika $datakode
        // if ($datakode) {
        // // membuat variabel baru untuk mengambil kode barang mulai dari 1
        // $nilaikode = substr($kodepx, 0, 3);
        // // menjadikan $nilaikode ( int )
        // $kode = (int) $nilaikode;
        // // setiap $kode di tambah 1
        // $kode++;
        // // hasil untuk menambahkan kode 
        // // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
        // // atau angka sebelum $kode
        // // $hasilkode = "PA".str_pad($kode, 4, "0", STR_PAD_LEFT);
        // $hasilmr = sprintf("%03s", $kode);
        // } else {
        // $hasilmr = "001";
        // }
        // $sql2 = $koneksi->query("SELECT * FROM tb_plb WHERE kode_mr = '$kode_mr'");
        // $tampil2 = $sql2->fetch_assoc();
        // $jns = $tampil2['jns'];
        // $kode_mr = $data.$hasilmr
    ?>
    <div class="col-md-6">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-control">
                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                </div>
                <h3 class="panel-title">Rekam Medis (<?=$tampil['kode_mr']?>)</h3>
                <input type="hidden" name="kode_mr" value="<?=$tampil['kode_mr']?>">
                <?php $kode_mr=$tampil['kode_mr'];?>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table" width="100%">
                        <tbody>
                            <tr>
                                <td width="20%">Hamil/Menyusui</td>
                                <td width="2%">:</td>
                                <td>
                                    <select name="busui" class="form-control" id="source">
                                        <option value="Tidak">Tidak</option>
                                        <option value="Menyusui">Menyusui</option>
                                        <option value="Hamil">Hamil</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Keluhan</td>
                                <td>:</td>
                                <td><input type="text" name="keluhan" id="demo-text-input" class="form-control" placeholder=""></td>
                            </tr>
                            <tr>
                                <td>Pelayanan</td>
                                <td>:</td>
                                <td>
                                    <select name="jns" class="form-control">
                                    <option value="Clinic Visit" <?php if ($jns=='Clinic Visit') echo "selected";?>>Clinic Visit</option>
                                        <option value="Home Visit" <?php if ($jns=='Home Visit') echo "selected";?>>Home Visit</option>
                                        <option value="Review Clinic Visit" <?php if ($jns=='Review Clinic Visit') echo "selected";?>>Review Clinic Visit</option>
                                        <option value="Review Home Visit" <?php if ($jns=='Review Home Visit') echo "selected";?>>Review Home Visit</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Tanggungan</td>
                                <td>:</td>
                                <td>
                                    <select name="tgg" class="form-control">
                                        <option value="Umum">Umum</option>
                                        <option value="BPJS">BPJS</option>
                                    </select>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>        
                <input type="hidden" name="stat" value="1">
                <input type="hidden" name="jenis" value="Lokal">
                <!-- <button type="submit" name="simpan" class="btn btn-success pull-right">
                    <i class="fa fa-edit"></i> Simpan
                </button> -->
                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary pull-right"> 

            </div>
        </div>
    </div>


</div>

</form>
    <?php 
    if (isset($_POST['simpan'])) {
        $kode = $_POST['kode'];
        $kode_mr = $_POST['kode_mr'];
        $nik = $_POST['nik'];
        $kat = $_POST['kat'];
        $nama = $_POST['nama'];
        $tl = $_POST['tl'];
        $tgl = $_POST['tgl'];
        $jk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $telp = $_POST['telp'];
        $penanggung = $_POST['penanggung'];
        $hub = $_POST['hub'];
        $ptelp = $_POST['ptelp'];
        $jenis = $_POST['jenis'];
        $rpd = $_POST['rpd'];
        $alergi = $_POST['alergi'];
        $busui = $_POST['busui'];
        $keluhan = $_POST['keluhan'];
        $stat = $_POST['stat'];

        $sql = $koneksi->query("UPDATE tb_pla, tb_plb SET  
                                tb_pla.nik='$nik', 
                                tb_pla.kat='$kat',
                                tb_pla.nama='$nama',
                                tb_pla.tl='$tl',
                                tb_pla.tgl='$tgl',
                                tb_pla.jk='$jk',
                                tb_pla.alamat='$alamat',
                                tb_pla.telp='$telp',
                                tb_pla.penanggung='$penanggung',
                                tb_pla.hub='$hub',
                                tb_pla.ptelp='$ptelp',
                                tb_pla.jenis='$jenis',
                                tb_pla.rpd='$rpd',
                                tb_pla.alergi='$alergi',
                                tb_plb.kode_mr='$kode_mr',
                                tb_plb.keluhan='$keluhan',
                                tb_plb.tgg='$tgg',
                                tb_plb.stat='$stat'
                                WHERE tb_pla.kode = tb_plb.kode AND tb_plb.kode_mr='$kode_mr'"); 
       
        if ($sql) {
            ?>
                <script type="text/javascript">
                    alert("Data Identitas Berhasil Disimpan");
                    window.location.href="?page=home";
                </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                 alert("Data Identitas Gagal Diinput");
                 window.history.back();
            </script>
        <?php
        }

    }
    
    ?>
</section>



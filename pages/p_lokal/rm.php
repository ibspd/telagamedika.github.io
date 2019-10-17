<!--Page content-->
<!--===================================================-->


<?php

$data = $_GET['id'];
$sql = $koneksi->query("SELECT * FROM tb_pla INNER JOIN tb_plb WHERE tb_pla.kode = tb_plb.kode AND tb_plb.kode_mr='$data'");
$tampil = $sql->fetch_assoc();
$jk = $tampil['jk'];
$jenis = $tampil['jenis'];
$busui = $tampil['busui'];
$reg = $tampil['reg'];
$nyeri = $tampil['nyeri'];
?>

<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Rekam Medis </h3>
        <div class="breadcrumb-wrapper">
            <span class="label">You are here:</span>
                <ol class="breadcrumb">
                <li> <a href="?home"> Home </a> </li>
                <li class="active"> Rekam Medis </li>
                </ol>
        </div>
    </div>
<section id="page-content">
<form class="form-horizontal" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" id="">
<div class="row">
    <div class="col-md-6 grid">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-control">
                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                </div>
                <h3 class="panel-title">Identitas Pasien (<?=$tampil['kode']?>)</h3>
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-condensed">
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td><?=$tampil['nama']?></td>
                            </tr>
                            <tr>
                                <td>Umur</td>
                                <td>:</td>
                                <td><?=tgl_indo($tampil['tgl'])?> <?=umur($tampil['tgl'])?></td>
                            </tr>
                            <tr>
                                <td>Jenis kelamin</td>
                                <td>:</td>
                                <td><?=$tampil['jk']?></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td><?=$tampil['alamat']?></td>
                            </tr>
                            <tr>
                                <td>Jenis Pasien</td>
                                <td>:</td>
                                <td>
                                <?=$tampil['kat']?> - <?=$tampil['tgg']?>
                                </td>
                            </tr>
                            <?php
                            if ($tampil['jk'] == 'Perempuan') { ?>
                            <tr>
                                <td>Menyusui/hamil</td>
                                <td>:</td>
                                <td>
                                <select name="busui" class="form-control" id="source">
                                    <option value="Tidak" <?php if ($busui=='busui') {echo "selected";}?>>Tidak</option>Tidak</option>
                                    <option value="Menyusui" <?php if ($busui=='busui') {echo "selected";}?>>Menyusui</option>
                                    <option value="Hamil" <?php if ($busui=='busui') {echo "selected";}?>>Hamil</option>
                                </select>
                                </td>
                            </tr> 
                            <?php } 
                            ?>
                        </tbody>
                    </table>
                </div>        
            </div>
        </div>
    </div>

    <!-- STATUS MEDIS -->
    <div class="col-md-6 grid">
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
                    <table class="table table-condensed">
                        <tbody>
                            <tr>
                                <td>Dokter</td>
                                <td>:</td>
                                <td>
                                <select name="dr" class="demo-chosen-select" id="source">
                                <?php
                                    $dr = $koneksi->query("SELECT * FROM tb_staf WHERE posisi = 'dokter' ORDER BY id ASC") or $koneksi->error;
                                    while ($row = mysqli_fetch_array($dr)) {
                                        $nama=$row['nama'];
                                    echo "<option value='".$nama."'>".$nama."</option>";
                                    } 
                                ?>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Perawat</td>
                                <td>:</td>
                                <td>
                                <select name="ns" class="demo-chosen-select" id="source">
                                <?php
                                    $ns = $koneksi->query("SELECT * FROM tb_staf WHERE posisi = 'perawat' ORDER BY id ASC") or $koneksi->error;
                                    while ($row = mysqli_fetch_array($ns)) {
                                        $nama=$row['nama'];
                                    echo "<option value='".$nama."'>".$nama."</option>";
                                    } 
                                ?>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Keluhan</td>
                                <td>:</td>
                                <td><?=$tampil['keluhan']?></td>
                            </tr>
                            <tr>
                                <td>Riwayat Penyakit</td>
                                <td>:</td>
                                <td><textarea name="rpd" id="demo-text-input" class="form-control"><?=$tampil['rpd']?></textarea></td>
                            </tr>
                            <tr>
                                <td>Alergi</td>
                                <td>:</td>
                                <td><textarea name="alergi" id="demo-text-input" class="form-control" ><?=$tampil['alergi']?></textarea></td>
                            </tr>
                        </tbody>
                    </table>
                </div>    
            </div>
        </div>
    </div>

    <!-- REKAM MEDIS -->
    <div class="col-md-12 grid">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-control">
                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                </div>
                <?php 
                    $month = date('m');
                    $day = date('d');
                    $year = date('Y');
                    $today = $year . '-' . $month . '-' . $day;
                    $jam = date('H');
                    $mnt = date('i');
                    $wkt = $jam . ':' . $mnt;
                ?>
                <input type="hidden" value="<?php echo $today?>" id="date" name="tgl_prk">
                <input type="hidden" value="<?php echo date('H:i')?>" id="time" name="wkt_prk">
                <h3 class="panel-title">Rekam Medis (<?=$tampil['kode_mr']?>) | <?=tgl_indo($today)?> - <?=date('H:i')?></h3>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-md-6">
                        <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Anamnesis Details </h4>
                        <textarea name="anamnesis" id="demo-textarea-input" rows="9" class="form-control"><?=$tampil['anamnesis']?></textarea>
                    </div>
                    <!-- VS -->
                    <div class="col-md-6">
                        <div class="row col-md-12">
                            <h4 class="text-primary"> <i class="fa fa-sign-in"></i> General Condition, Vital Sign, VAS </h4>
                            <div class="col-md-3">
                                <h5>Keadaan Umum</h5>
                                <input name="ku" type="text" class="col-md-8" value="<?=$tampil['ku']?>"> 
                            </div>
                            <div class="col-md-3">
                                <h5>GCS</h5>
                                <input name="gcs" type="text" class="col-md-8" value="<?=$tampil['gcs']?>"> 
                            </div>
                            <div class="col-md-3">
                                <h5>Saturasi Oksigen</h5>
                                <input name="o2" type="text" class="col-md-6" value="<?=$tampil['o2']?>"> 
                                <div class="col-md-2">%</div>
                            </div>
                            <div class="col-md-3">
                                <h5>Berat Badan</h5>
                                <input name="bb" type="text" class="col-md-5" value="<?=$tampil['bb']?>"> 
                                <div class="col-md-2"><small>kgs</small> </div>
                            </div>
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-3">
                                <h5>Tekanan Darah</h5>
                                <input name="td" type="text" class="col-md-8" value="<?=$tampil['td']?>"> 
                                <div class="col-md-2"><small>mmHg</small> </div>
                            </div>
                            <div class="col-md-3">
                                <h5>Nadi</h5>
                                <input name="hr"  type="text" class="col-md-6" value="<?=$tampil['hr']?>"> 
                                <div class="col-md-2"><small>x/mnt</small> </div>
                                <small>
                                    <select name="reg" class="col-md-8" id="source">
                                    <option value="Reguler" <?php if ($reg=='Reg') {echo "selected";}?>>Reg</option>
                                    <option value="Ireguler" <?php if ($reg=='Ireg') {echo "selected";}?>>Ireg</option>
                                    </select>
                                </small>
                            </div>
                            <div class="col-md-3"> 
                                <h5>Temperatur</h5>
                                <input name="temp"  type="text" class="col-md-6" value="<?=$tampil['temp']?>"> 
                                <div class="col-md-2"><small>&#8451;</small> </div>
                            </div>
                            <div class="col-md-3">
                                <h5>Respirasi</h5>
                                <input name="rr" type="text" class="col-md-6" value="<?=$tampil['rr']?>"> 
                                <div class="col-md-2"><small>x/mnt</small></div>
                            </div>
                        </div>
                        <div class="row col-md-12">
                            <div class="col-md-3">
                                <h5>Nyeri</h5>
                                <select name="nyeri" class="col-md-8" id="source">
                                    <option value="Tidak" <?php if ($nyeri=='Tidak') {echo "selected";}?>>Tidak</option>
                                    <option value="Ya" <?php if ($nyeri=='Ya') {echo "selected";}?>>Ya</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <h5>Lokasi</h5>
                                <input name="lokasi" type="text" class="col-md-8" value="<?=$tampil['lokasi']?>">
                            </div>
                            <div class="col-md-3">
                                <h5>VAS</h5>
                                <input name="vas" type="text" class="col-md-8" value="<?=$tampil['vas']?>">
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="form-group">
                    <div class="row col-md-12">
                        <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Physical Examination, Diagnosis </h4>
                        <div class="col-md-4">
                            <h5>Head, Neck:</h5>
                            <textarea name="head" id="demo-textarea-input" rows="9" class="form-control"><?=$tampil['head']?></textarea> 
                        </div>
                        <div class="col-md-4">
                            <h5>Chest:</h5>
                            <textarea name="chest" id="demo-textarea-input" rows="9" class="form-control" placeholder=""><?=$tampil['chest']?></textarea> 
                        </div>
                        <div class="col-md-4">
                            <h5>Abdomen</h5>
                            <textarea name="abd" id="demo-textarea-input" rows="9" class="form-control" placeholder=""><?=$tampil['abd']?></textarea> 
                        </div>
                        <div class="col-md-4">
                            <h5>Extremities:</h5>
                            <textarea name="ext" id="demo-textarea-input" rows="9" class="form-control"><?=$tampil['ext']?></textarea> 
                        </div>
                        <div class="col-md-4">
                            <h5>Pemeriksaan lain:</h5>
                            <textarea name="lain" id="demo-textarea-input" rows="9" class="form-control"><?=$tampil['lain']?></textarea> 
                        </div>
                        <div class="col-md-4">
                            <h5><strong>DIAGNOSIS</strong> :</h5>
                            <textarea name="dx" id="demo-textarea-input" rows="9" class="form-control"><?=$tampil['dx']?></textarea> 
                        </div>
                    </div> 
                </div>

                <!-- <button type="submit" name="simpan" class="btn btn-success pull-right" href="?pages=p_lokal&aksi=rm2">
                    <i class="fa fa-edit"></i> Simpan
                </button> -->
                
                <input type="hidden" name="adm" value="10000">
                <input type="submit" name="simpan" value="Terapi" class="btn btn-primary btn-block"> 
            </div>
        </div>
    </div>


</div>

</form>
    <?php 
    if (isset($_POST['simpan'])) {
        $tgl_prk = $_POST['tgl_prk'];
        $wkt_prk = $_POST['wkt_prk'];
        $rpd = $_POST['rpd'];
        $alergi = $_POST['alergi'];
        $busui = $_POST['busui'];
        $dr = $_POST['dr'];
        $ns = $_POST['ns'];
        $anamnesis = $_POST['anamnesis'];
        $ku = $_POST['ku'];
        $gcs = $_POST['gcs'];
        $o2 = $_POST['o2'];
        $bb = $_POST['bb'];
        $td = $_POST['td'];
        $hr = $_POST['hr'];
        $reg = $_POST['reg'];
        $temp = $_POST['temp'];
        $rr = $_POST['rr'];
        $nyeri = $_POST['nyeri'];
        $lokasi = $_POST['lokasi'];
        $vas = $_POST['vas'];
        $head = $_POST['head'];
        $chest = $_POST['chest'];
        $abd = $_POST['abd'];
        $ext = $_POST['ext'];
        $lain = $_POST['lain'];
        $dx = $_POST['dx'];
        $adm = $_POST['adm'];


        $sql = $koneksi->query("UPDATE tb_pla, tb_plb SET  
                                tb_pla.rpd='$rpd', 
                                tb_pla.alergi='$alergi',
                                tb_plb.tgl_prk='$tgl_prk',
                                tb_plb.wkt_prk='$wkt_prk',
                                tb_plb.busui='$busui',
                                tb_plb.dr='$dr',
                                tb_plb.ns='$ns',
                                tb_plb.anamnesis='$anamnesis',
                                tb_plb.ku='$ku',
                                tb_plb.gcs='$gcs',
                                tb_plb.o2='$o2',
                                tb_plb.bb='$bb',
                                tb_plb.td='$td',
                                tb_plb.hr='$hr',
                                tb_plb.reg='$reg',
                                tb_plb.temp='$temp',
                                tb_plb.rr='$rr',
                                tb_plb.nyeri='$nyeri',
                                tb_plb.lokasi='$lokasi',
                                tb_plb.vas='$vas',
                                tb_plb.head='$head',
                                tb_plb.chest='$chest',
                                tb_plb.abd='$abd',
                                tb_plb.ext='$ext',
                                tb_plb.lain='$lain',
                                tb_plb.dx='$dx'
                                WHERE tb_pla.kode = tb_plb.kode AND tb_plb.kode_mr='$data'"); 
        
                        
        if ($sql) {
            ?>
                <script type="text/javascript">
                    window.location.href="?pages=p_lokal&aksi=rm2&id=<?=$tampil['kode_mr']?>";
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



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

<?php 
    $tgl = date("ymd");

    $carikode = $koneksi->query("SELECT max(pj) as maxKode FROM tb_penjualan");

    // menjadikannya array
    $datakode = $carikode->fetch_assoc(); 
    $kodepx = $datakode['maxKode'];
    // jika $datakode
    if ($datakode) {
        $nilaikode = substr($kodepx, 2, 4); // membuat variabel baru untuk mengambil kode barang mulai dari 1
        $kode = (int) $nilaikode; // menjadikan $nilaikode ( int )
        $kode++; // setiap $kode di tambah 1
        // hasil untuk menambahkan kode 
        // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
        // atau angka sebelum $kode
        // $hasilkode = "PA".str_pad($kode, 4, "0", STR_PAD_LEFT);
        $hasilkode = sprintf("%02s", $kode);
    } 
?>

<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Planning Observasi, Rawat Jalan, Rujuk</h3>
        <div class="breadcrumb-wrapper">
            <span class="label">You are here:</span>
                <ol class="breadcrumb">
                <li> <a href="?home"> Home </a> </li>
                <li> <a href="?pages=p_lokal&aksi=rm&id=<?=$tampil['kode_mr']?>"> Rekam Medis </a> </li>
                <li class="active"> Rencana </li>
                </ol>
        </div>
    </div>

    <section id="page-content">
<form class="form-horizontal form-bordered" id="" method="POST" enctype="multipart/form-data"  >
    
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
                                    <td>Berat Badan</td>
                                    <td>:</td>
                                    <td><?=$tampil['bb']?> kg</td>
                                </tr>
                                <tr>
                                    <td>Jenis Pasien</td>
                                    <td>:</td>
                                    <td>
                                    <?=$tampil['jenis']?> - <?=$tampil['tgg']?>
                                    </td>
                                </tr>
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
                                <select name="dr" class="form-control" id="source">
                                    <option value="dr. I.B. Suryadi Putra Dwipayana" <?php if ($busui=='busui') {echo "selected";}?>>dr. I.B. Suryadi Putra Dwipayana</option>
                                    <option value="dr. Cindy Amanda Shandy" <?php if ($busui=='busui') {echo "selected";}?>>dr. Cindy Amanda Shandy</option>
                                    <option value="dr. Pinky" <?php if ($busui=='busui') {echo "selected";}?>>dr. Pinky</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Perawat</td>
                                <td>:</td>
                                <td>
                                <select name="ns" class="demo-chosen-select">
                                    <option value="Arya" <?php if ($busui=='busui') {echo "selected";}?>>Arya</option>
                                    <option value="Mia" <?php if ($busui=='busui') {echo "selected";}?>>Mia</option>
                                    <option value="dr. Pinky" <?php if ($busui=='busui') {echo "selected";}?>>Wahyu</option>
                                </select>
                                </td>
                            </tr>
                            <tr>
                                <td>Diagnosis</td>
                                <td>:</td>
                                <td><?=$tampil['dx']?></td>
                            </tr>
                            <tr>
                                <td>Riwayat Penyakit</td>
                                <td>:</td>
                                <td><?=$tampil['rpd']?></td>
                            </tr>
                            <tr>
                                <td>Alergi</td>
                                <td>:</td>
                                <td><?=$tampil['alergi']?></td>
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

    
    <!-- REKAM MEDIS -->
    <div class="col-md-12 grid">
        <div class="panel">
            <div class="panel-heading">
                <div class="panel-control">
                    <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
                    <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
                    <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
                </div>
                <h3 class="panel-title">Rekam Medis (<?=$tampil['kode_mr']?>) - Rencana Terapi | <?=tgl_indo($tampil['tgl_prk'])?> - <?=$tampil['wkt_prk']?> <?=$hasilkode?></h3>
            </div>

        <div class="panel-body">
            <!-- INPUT DATA -->
            <div class="col-md-4">
                <?php include ('inputlab.php')?>
                <?php include ('inputpros.php')?>
                <?php include ('inputobat.php')?>
                <?php include ('inputdisp.php')?>
                <div class="form-group">
                    <div class="col-md-12">
                        <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Rekomendasi </h4>
                        <textarea name="rekom" id="" cols="55" rows="10"></textarea>
                    </div> 
                </div>
            </div>                 
            <!-- INVOICE -->
            <div class="col-lg-8">
                <div class="table-responsive">
                    Invoice : <input name="inv" type="text" value="<?=$tgl,$hasilkode,'-',$tampil['kode']?>" readonly>
                    <input name="pj" type="hidden" value="<?=$hasilkode?>">
                </div>
            </div>            
            <div class="col-lg-8">
            <?php include ('invadm.php')?>
            <?php include ('invlab.php')?>
            <?php include ('invpros.php')?>
            <?php include ('invobat.php')?>
            <?php include ('invdisp.php')?>
            <?php $total = $total_adm + $total_lab + $total_pros + $total_obat + $total_disp?>

            <?php $data = $_GET['id'];?>
                <div class="table-responsive">
                    <table class="table table-hover" id="">
                        <thead>
                            <tr>
                                <th width="70%">Total</th>
                                <th>Rp. <?=number_format($total, 2, ",", ".")?></th>
                                <input type="text" name="total" value="<?=$total?>" hidden>
                                <input type="text" name="kode" value="<?=$tampil['kode']?>" hidden>
                                <input type="text" name="kode_mr" value="<?=$tampil['kode_mr']?>" hidden>
                                <input type="text" name="stat" value="2" hidden>
                            </tr>
                        </thead>
                    </table>
                </div>
            <button type="submit" class="btn btn-primary btn-block pull-right" name="print" >
            <i class="fa fa-edit"></i> Print
            <!-- <input type="submit" name="print" value="Print" class="btn btn-primary btn-block"> -->
            </button>
</form>            
            <?php
            if (isset($_POST['print'])) {
                $kode = $_POST['kode'];
                $kode_mr = $_POST['kode_mr'];
                $inv = $_POST['inv'];
                $pj = $_POST['pj'];
                $jp = $_POST['jp'];
                $lab = $_POST['lab'];
                $pros = $_POST['pros'];
                $obat = $_POST['obat'];
                $total = $_POST['total'];
                $stat = $_POST['stat'];
                $tgl_prk = $_POST['tgl_prk'];
                $bb = $_POST['bb'];
                $rpd = $_POST['rpd'];
                $alergi = $_POST['alergi'];

                $sql = $koneksi->query("INSERT INTO tb_penjualan
                                        (kode, kode_mr, inv, pj, jp, lab, pros, total) VALUES 
                                        ('$kode', '$kode_mr', '$inv', '$pj', '$jp', '$lab', '$pros', '$total')");
                
                // $sql = $koneksi->query("UPDATE tb_pla, tb_plb SET 
                //                         -- tb_pla.rpd='$rpd', 
                //                         -- tb_pla.alergi='$alergi',
                //                         tp_plb.stat='$stat'
                //                         -- tb_plb.bb='$bb' 
                //                         WHERE tb_pla.kode = tb_plb.kode AND tb_plb.kode_mr='$data'");
                
                $sql = $koneksi->query("UPDATE tb_plb SET stat='$stat'
                                        WHERE kode_mr='$data'");



                if ($sql) {
                    ?>
                        <script type="text/javascript">
                        window.open('print/print_mr.php?id=<?=$tampil['kode_mr']?>');
                        // window.location.href="?page=home";
                        window.history.back();
                        </script>
                    <?php
                } else {
                    ?>
                    <script type="text/javascript">
                         alert("Data RM Gagal Diinput");
                         window.history.back();
                    </script>
                <?php
                }
            }
            ?>
    </div>
</div>




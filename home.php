<!--Page content-->
<!--===================================================-->
<style>
.table, th, td {
    text-align: center;
}
</style>


<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Dashboard </h3>
        <div class="breadcrumb-wrapper">
            <span class="label">You are here:</span>
                <ol class="breadcrumb">
                <li> <a href="?home"> Home </a> </li>
                <li class="active"> Dashboard </li>
                </ol>
        </div>
    </div>


<div id="page-content">

    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-10">
                            <h3 class="mar-no"> <span class="counter">50.5 GB</span></h3>
                            <p class="mar-ver-5"> Traffic this month </p>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-shopping-cart fa-3x text-danger"></i> </div>
                    </div>
                    <div class="progress progress-striped progress-xs">
                        <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-danger"> <span class="sr-only">60% Complete</span> </div>
                    </div>
                    <p> 4% higher than last month </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-10">
                            <h3 class="mar-no"> <span class="counter">50.5 GB</span></h3>
                            <p class="mar-ver-5"> Traffic this month </p>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-shopping-cart fa-3x text-success"></i> </div>
                    </div>
                    <div class="progress progress-striped progress-xs">
                        <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-success"> <span class="sr-only">60% Complete</span> </div>
                    </div>
                    <p> 4% higher than last month </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-10">
                            <h3 class="mar-no"> <span class="counter">50.5 GB</span></h3>
                            <p class="mar-ver-5"> Traffic this month </p>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-shopping-cart fa-3x text-primary"></i> </div>
                    </div>
                    <div class="progress progress-striped progress-xs">
                        <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-primary"> <span class="sr-only">60% Complete</span> </div>
                    </div>
                    <p> 4% higher than last month </p>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-9 col-sm-9 col-xs-10">
                            <h3 class="mar-no"> <span class="counter">50.5 GB</span></h3>
                            <p class="mar-ver-5"> Traffic this month </p>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-2"> <i class="fa fa-shopping-cart fa-3x text-primary"></i> </div>
                    </div>
                    <div class="progress progress-striped progress-xs">
                        <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-primary"> <span class="sr-only">60% Complete</span> </div>
                    </div>
                    <p> 4% higher than last month </p>
                </div>
            </div>
        </div>
    </div>

    <div class="panel">
        <!-- head -->
        <div class="panel-heading">
            <div class="panel-control"> 
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <div class="btn-group">
                    <!-- <button class="btn btn-success" data-toggle="modal" data-target="#tambah">Tambah Pasien</button> -->
                    <!-- <a href="?pages=pasien&aksi=tambah" class="btn">
                        <i class="fa fa-edit"></i> Tambah
                    </a> -->
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
                        <i class="fa fa-edit"></i> Tambah
                    </button>
                    <button class="btn btn-success dropdown-toggle dropdown-toggle-icon" data-toggle="dropdown" type="button">
                        <i class="dropdown-caret fa fa-caret-down"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#">Tambah Pasien</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                    
                </div>
            </div>
            <h3 class="panel-title">Antrian Pasien</h3>
        </div>
        <!-- body -->
        <div class="panel-body">
            <table id="demo-dt-selection" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="padding: 8px;">No.</th>
                        <th>Id Pasien</th>
                        <th>Nama Pasien</th>
                        <th>Keterangan</th>
                        <th>Keluhan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $pxa = $koneksi->query("SELECT * from tb_pxa");
                        while ($datapxa = $pxa->fetch_assoc()) {
                    ?>
                    <!-- List Asing -->
                    <tr>
                        <td><?=$no++;?></td>
                        <td></td>
                        <td><?=$datapxa['fname']?> <?=$datapxa['lname']?></td>
                        <td><?=$datapxa['kat']?></td>
                        <td><?=$datapxa['keluhan']?></td>
                        <td> 
                            <a type="button" class="btn" data-toggle="modal" data-target="#profil" value="<?=$datapxa['fname']?>">
                                <i class="fa fa-user" ></i> Profile 
                            </a>
                            <a href="?pages=p_asing&aksi=mrasing&id=<?=$datapxa['kode and kode_mr']?>" class="btn">
                                <i class="fa fa-edit"></i> Medical Report
                            </a>
                            <a onclick="return confirm('Apakah anda yakin menghapus barang?')" href="?home&aksi=hapus&id=<?=$datapxa['kode']?>" class="btn">
                                <i class="fa fa-trash-o"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    <?php } ?>




                    <!-- List Lokal -->
                    <?php
                    $query2 = "SELECT * FROM tb_pla INNER JOIN tb_plb ON tb_pla.kode = tb_plb.kode";
                    $sql2 = mysqli_query($koneksi, $query2) or die (mysqli_error($koneksi));
                    while ($data = mysqli_fetch_array($sql2)) { ?>
                    <?php if ($data['stat'] == "1") { ?> 
                        <tr>
                            <td><?=$no++;?></td>
                            <td><?=$data['kode'];?></td>
                            <td><?=$data['nama'];?></td>
                            <td><?=$data['kat'];?><br>MR: <?=$data['kode_mr'];?></td>
                            <td><?=$data['keluhan'];?></td>
                            <td> 
                            <a type="button" class="btn" data-toggle="modal" data-target="#profil" value="<?=$data['fname']?>">
                                <i class="fa fa-user" ></i> Profile 
                            </a>
                            <a href="?pages=p_lokal&aksi=edit&id=<?=$data['kode']?>" class="btn">
                                <i class="fa fa-pencil"></i> Edit Data Pasien
                            </a>
                            <a href="?pages=p_lokal&aksi=rm&id=<?=$data['kode_mr']?>" class="btn">
                                <i class="fa fa-edit"></i> Medical Report
                            </a>
                            <a onclick="return confirm('Apakah anda yakin menghapus barang?')" href="?home&aksi=hapus&id=<?=$data['kode']?>" class="btn">
                                <i class="fa fa-trash-o"></i> Hapus
                            </a>
                        </td>
                        </tr>
                        <?php } ?>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <?php include "pages/pasien/profil.php";?> 
        <!-- end body -->
        
    </div>

</div>
<!--===================================================-->
<!--End page content-->

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pilih Jenis Pasien</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    <form method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" action="#">
    <div class="modal-body">
        <div class="row">
        <table align="center" width="100%" border="0" cellpadding="">
            <tbody>
            <tr>
                <td colspan="3">
                <div class="">
                    <select name="jns" class="demo-chosen-select" id="source">
                        <option value="Clinic Visit">Clinic Visit</option>
                        <option value="Review Clinic Visit">Review Clinic Visit</option>
                        <option value="Home Visit">Home Visit</option>
                        <option value="Review Home Visit">Review Home Visit</option>
                    </select>
                </div> 
                </td>
            </tr>

            <tr>
                <td width="8%"></td>
                <td>
                    <div class="checkbox" align="left">
                        <label class="form-checkbox form-icon">
                        <input type="checkbox" name="pa" value="Pasien Asing">Pasien Asing</label>
                        <label class="form-checkbox form-icon">
                        <input type="checkbox" name="pl" value="Pasien Lokal">Pasien Lokal</label>
                    </div>
                </td>
                <td >
                    <div class="checkbox" align="left">
                        <label class="form-checkbox form-icon">
                        <input type="checkbox" name="pba" value="Pasien Baru">Pasien Baru</label>
                        <label class="form-checkbox form-icon">
                        <input type="checkbox" name="pla" value="Pasien Lama">Pasien Lama</label>
                    </div>
                </td>
            </tr>
            </tbody>
            
            
            
        </table>
            
        </div>
    </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" name="simpan" class="btn btn-primary">Simpan</button>
      </div>
    </div>
    </form>
    <?php
    if(isset($_POST['simpan'])) {
    $pa = $_POST['pa'];
    $pl = $_POST['pl'];
    $pba = $_POST['pba'];
    $pla = $_POST['pla'];
    $jns = $_POST['jns']; 
        if($pa and $pba) {
            ?>
            <script type="text/javascript">
                window.location.href="?pages=p_asing&aksi=tambah";
            </script>
            <?php
        } else if ($pa and $pla) {
            ?>
            <script type="text/javascript">
                window.location.href="?pages=p_asing&aksi=tambah";
            </script>
            <?php
        } else if ($pl and $pba) {
            $carikode = $koneksi->query("SELECT max(kode) as maxKode FROM tb_pla");
            // menjadikannya array
            $datakode = $carikode->fetch_assoc(); 
            $kodepx = $datakode['maxKode'];
            // jika $datakode
            if ($datakode) {
            // membuat variabel baru untuk mengambil kode barang mulai dari 1
            $nilaikode = substr($kodepx, 2, 4);
            // menjadikan $nilaikode ( int )
            $kode = (int) $nilaikode;
            // setiap $kode di tambah 1
            $kode++;
            // hasil untuk menambahkan kode 
            // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
            // atau angka sebelum $kode
            // $hasilkode = "PA".str_pad($kode, 4, "0", STR_PAD_LEFT);
            $hasilkode = "PL" . sprintf("%04s", $kode);
            } else {
            $hasilkode = "PL0001";
            }
            $kode = $hasilkode;
            $kode_mr = $hasilkode.'001';
            $sql = $koneksi->query("INSERT INTO tb_pla (kode) 
                                    VALUES ('$kode')");
            $sql2 = $koneksi->query("INSERT INTO tb_plb (kode, kode_mr, jns)
            VALUES ('$kode', '$kode_mr', '$jns')");
            ?>
            <script type="text/javascript">
                window.location.href="?pages=p_lokal&aksi=tambah&id=<?=$kode?>";
            </script>
            <?php
        } else if ($pl and $pba) {
            ?>
            <script type="text/javascript">
                window.location.href="?pages=p_lokal&aksi=tambah";
            </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert("Salah menginput, ulangi kembali");
                window.location.href="?home";
            </script>
            <?php
        }
    }
    ?>
    
  </div>
  
</div>
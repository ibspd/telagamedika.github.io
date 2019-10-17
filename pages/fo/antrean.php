<!--Page content-->
<!--===================================================-->
<style>
.table, th, td {
    text-align: center;
}
</style>


<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Administrasi (Front Office) </h3>
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
                            <h3 class="mar-no"> <span class="counter">300 orang</span></h3>
                            <p class="mar-ver-5"> Total Pasien Terdaftar </p>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-2"> 
                            <!-- <button class="btn btn-default add-tooltip" data-placement="bottom" data-toggle="tooltip" data-original-title="Tooltip on bottom"> </button> -->
                            <a href="" class="fa fa-leanpub fa-3x text-danger add-tooltip" data-placement="bottom" data-toggle="tooltip" data-original-title="Lihat Daftar Pasien" value="">
                            </a> 
                        </div>
                    </div>
                    <div class="progress progress-striped progress-xs">
                        <!-- <div style="width: 60%;" aria-valuemax="100" aria-valuemin="0" aria-valuenow="60" role="progressbar" class="progress-bar progress-bar-danger"> <span class="sr-only">60% Complete</span> </div> -->
                    </div>
                    <p> 100 Pasien Asing | 100 Pasien Expat | 100 Pasien Lokal</p>
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

    <div class="col-md-6 grid panel ">
        <!-- head -->
        <div class="panel-heading">
            <div class="panel-control"> 
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            </div>
            <h3 class="panel-title">Antrian Pasien</h3>
        </div>
        <!-- body -->
        <div class="panel-body">
            <table id="demo-dt-selection" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="padding: 8px;">No.</th>
                        <th>Nama Pasien</th>
                        <th>Keterangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no = 1;
                        $sql = $koneksi->query("SELECT * from tb_pxa");
                        while ($data = $sql->fetch_assoc()) {
                    ?>
                    <tr>
                    <td><?=$no++;?></td>
                    <td><?=$data['fname']?> <?=$data['lname']?></td>
                    <td>
                        buat page pilihan di tambah pasien => pasien baru (yes/no), asing/lokal 
                    </td>
                    <td> 
                        <a type="button" class="btn" data-toggle="modal" data-target="#profil" value="<?=$data['fname']?>">
                            <i class="fa fa-user" ></i> Profile 
                        </a>
                        <a href="?pages=p_asing&aksi=mrasing&id=<?=$data['kode']?>" class="btn">
                            <i class="fa fa-edit"></i> Medical Report
                        </a>
                        <a onclick="return confirm('Apakah anda yakin menghapus barang?')" href="?home&aksi=hapus&id=<?=$data['kode']?>" class="btn">
                            <i class="fa fa-trash-o"></i> Hapus
                        </a>
                    </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
        <?php include "pages/pasien/profil.php";?> 
        <!-- end body -->
        
    </div>
    
    <div class="col-md-6 grid panel pull-right">
        <!-- head -->
        <div class="panel-heading">
            <div class="panel-control"> 
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
            </div>
            <h3 class="panel-title">Pembayaran</h3>
        </div>
        <!-- body -->
        <div class="panel-body">
            <table id="demo-dt-selection" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th style="padding: 8px;">No.</th>
                        <th>Tanggal Periksa</th>
                        <th>Nama Pasien</th>
                        <th>Pembayaran</th>
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
                   
                </tr>
                <?php } ?>
                <!-- List Lokal -->
                <?php
                $sql2 = $koneksi->query("SELECT DISTINCT 
                                        tb_penjualan.kode, tb_penjualan.kode_mr, tb_penjualan.total, tb_pla.kode, tb_pla.nama, tb_plb.kode_mr, tb_plb.stat, tb_plb.tgl_prk
                                        FROM tb_penjualan
                                        INNER JOIN tb_pla ON tb_penjualan.kode = tb_pla.kode
                                        INNER JOIN tb_plb ON tb_penjualan.kode_mr = tb_plb.kode_mr
                                        ") or $koneksi->error;
                while ($data = mysqli_fetch_array($sql2)) { ?>
                <?php if ($data['stat'] == "2") { ?> 
                    <tr>
                        <td><?=$no++;?></td>
                        <td><?=tgl_indo($data['tgl_prk']);?></td> 
                        <td><?=$data['kode_mr'];?>-<?=$data['nama'];?></td>
                        <td>Rp. <?=number_format($data['total'], 2, ",", ".");?></td> 
                        <td> 
                        <a href="?pages=p_lokal&aksi=edit&id=<?=$data['kode']?>" class="btn">
                            <i class="fa fa-pencil"></i> Edit
                        </a> 
                        <a href="print_inv/print_inv.php?id=<?=$data['kode_mr']?>" class="btn" target="_blank">
                            <i class="fa fa-print"></i> Print
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
    <div class="row justify-content-center">

        <div class="col-md-6">
            <div class="checkbox">
                <label class="form-checkbox form-icon">
                <input type="checkbox" name="pa" value=" Pasien Asing">Pasien Asing</label>
            </div>
            <div class="checkbox">
                <label class="form-checkbox form-icon">
                <input type="checkbox" name="pl" value=" Pasien Lokal">Pasien Lokal</label>
            </div>
        </div>
        <div class="col-md-6">
            <div class="checkbox">
                <label class="form-checkbox form-icon">
                <input type="checkbox" name="pba" value=" Pasien Baru">Pasien Baru</label>
            </div>
            <div class="checkbox">
                <label class="form-checkbox form-icon">
                <input type="checkbox" name="pla" value=" Pasien Lama">Pasien Lama</label>
            </div>
        </div>
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
    $pa= $_POST['pa'];
    $pl= $_POST['pl'];
    $pba= $_POST['pba'];
    $pla= $_POST['pla'];
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
            ?>
            <script type="text/javascript">
                window.location.href="?pages=p_lokal&aksi=tambah";
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
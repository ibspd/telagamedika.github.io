<!--Page content-->
<!--===================================================-->
<style>
.table, th {
    text-align: center;
}
</style>


<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Disposabel </h3>
        <div class="breadcrumb-wrapper">
            <span class="label">You are here:</span>
                <ol class="breadcrumb">
                <li> <a href="?home"> Home </a> </li>
                <li class="active"> Daftar Disposabel </li>
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
                            <h3 class="mar-no"> <span class="counter">12 Hotel</span></h3>
                            <p class="mar-ver-5"> Laporan Sanur Kaja </p>
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


<div class="row">
        <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        
          <h3 class="panel-title">Daftar Disposabel
          
            <div class="pull-right">
              <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
              <a href="?pages=disp&aksi=tambah" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Disposabel</a>
              <a href="?pages=disp&aksi=import" class="btn btn-info btn-xs"><i class="glyphicon glyphicon-import"></i>Import Disposabel</a>
            </div>
            </h3>
      </div>

      <!-- tabel -->
      <div class="panel-body">
        <table id="demo-dt-selection" class="table table-striped table-bordered">
            <thead>
            <tr>
              <th style="padding: 8px;">No.</th>
              <!-- <th>Kode</th> -->
              <th>Nama Disposabel</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tfoot>
            <tr >
              <th style="padding: 8px;">No.</th>
              <!-- <th>Kode</th> -->
              <th>Nama Disposabel</th>
              <th>Harga</th>
              <th>Aksi</th>
            </tr>
          </tfoot>
          <tbody>
            <?php
                $no = 1;
                $sql = $koneksi->query("SELECT * from tb_disp");
                while ($data = $sql->fetch_assoc()) {
            ?>
            <tr>
              <td><?=$no++;?></td>
              <!-- <td></td> -->
              <td><?=$data['nama']?></td>
              <td align="left";>
                
                <label class="control-label">Harga Lokal: Rp</label>
                    <?php echo number_format($data['hlokal'], 2, ",", "."); ?>
                <br>
                <label class="control-label">Harga Expat: Rp</label>
                    <?php echo number_format($data['hexpat'], 2, ",", "."); ?>
                <br>
                <label class="control-label">Harga Asing: Rp</label>
                    <?php echo number_format($data['hasing'], 2, ",", "."); ?>
                <br>
                <label class="control-label">Harga Asuransi: Rp</label>
                    <?php echo number_format($data['hasu'], 2, ",", "."); ?>
              </td>
              <td align=""> 
                <a href="" class="btn">
                    <i class="fa fa-cab"></i> Laporan
                </a>
                <a href="?pages=disp&aksi=update&id=<?=$data['kode']?>" class="btn">
                    <i class="fa fa-edit"></i> Update
                </a>
                <a onclick="return confirm('Apakah anda yakin menghapus barang?')" href="?pages=disp&aksi=hapus&id=<?=$data['kode']?>" class="btn">
                    <i class="fa fa-trash-o"></i> Hapus
                </a>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
      </div>
    </div>
</div>
      
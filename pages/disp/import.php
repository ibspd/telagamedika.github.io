<!--Page content-->
<!--===================================================-->
<?php
    require "libs/vendor/autoload.php";
?>


<style>
.table, th, td {
    text-align: center;
}
</style>


<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Import Disposabel </h3>
        <div class="breadcrumb-wrapper">
            <span class="label">You are here:</span>
                <ol class="breadcrumb">
                <li> <a href="?home"> Home </a> </li>
                <li> <a href="?pages=obat"> Daftar Disposabel </a> </li>
                <li class="active"> Import Disposabel </li>
                </ol>
        </div>
    </div>

<div id="page-content">

<div class="row">
        <div class="col-md-12">
    <div class="panel">
      <div class="panel-heading">
        
          <h3 class="panel-title">Import Disposabel
          
          <div class="pull-right">
            <a href="_file/sample/prosedur.xlsx" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-download-alt"></i>Download Format Excels</a>
            <a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
            </h3>
      </div>

    <!-- body -->
    <div class="panel-body">
        <div class="row">
            <div class="col-lg-6 col-lg-6-offsett-3">
                <form method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="file">File Excel</label>
                        <input type="file" name="file" id="file" class="form-control" required>
                    </div>
                    
                    <div class="form-group pull-right">
                        <input type="submit" name="import" value="Import" class="btn btn-success">
                    </div>
                </form>
                <?php
                if(isset($_POST['import'])) {
                    $file = $_FILES['file']['name'];
                    $ekstensi = explode(".", $file);
                    $file_name = "file-".round(microtime(true)).".".end($ekstensi);
                    $sumber = $_FILES['file']['tmp_name'];
                    $target_dir = "_file/disp";
                    $target_file = $target_dir.$file_name;
                    
                    // $upload = move_uploaded_file($sumber, $target_file);
                    // if ($upload) {
                    //     echo "upload sukses";
                    // } else {
                    //     echo "upload gagal";
                    // }
                    // echo $file_name;
                    
                    
                    move_uploaded_file($sumber, $target_file);
                
                    $obj = PHPExcel_IOFactory::load($target_file);
                    $all_data = $obj->getActiveSheet()->toArray(null, true, true, true);
                
                    $sql = "INSERT INTO tb_disp (nama, hdasar, hlokal, hexpat, hasing, hasu) VALUES";
                    for ($i=3; $i <= count($all_data); $i++) { 
                        $nama = $all_data[$i]['A'];
                        $hdasar = $all_data[$i]['B'];
                        $hlokal = $all_data[$i]['C'];
                        $hexpat = $all_data[$i]['D'];
                        $hasing = $all_data[$i]['E'];
                        $hasu = $all_data[$i]['F'];
                        $sql .= " ('$nama', '$hdasar', '$hlokal', '$hexpat', '$hasing', '$hasu'),";
                    }
                    $sql = substr($sql, 0, -1);
                    mysqli_query($koneksi, $sql) or die (mysqli_error($koneksi));
                    unlink($target_file);
                    echo "<script>window.location='?pages=disp';</script>"; 
                }
                ?>
            </div>
        </div>
</div>
    
      
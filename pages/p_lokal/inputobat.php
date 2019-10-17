<!-- List obat -->
<form class="form-horizontal" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" id="">
    <div class="form-group">
        <div class="col-md-12">
            <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Rencana Obat </h4>
            <!-- Default choosen -->
            <!--===================================================-->
            <select multiple name="barang[]" class="demo-cs-multiselect" data-placeholder="Choose a Procedure" multiple tabindex="4">
            <?php
                $obat = $koneksi->query("SELECT * FROM tb_obat ORDER BY kode ASC") or $koneksi->error;
                while ($data = mysqli_fetch_array($obat)) {
                echo "<option value='".$data['nama']."'>".$data['nama']." - ".$data['generik']."| Stok: ".($data['stok'])." | IDR ".number_format($data['hlokal'])."</option>";
                }
            ?>
            </select>
            <input type="submit" name="obat" value="Tambah" class="btn btn-primary btn-block"/>
            <?=$tampil['inv'];?>

        </div> 
    </div>
</form>
<?php
if (isset($_POST['obat'])) {
    $inv = $tampil['inv'];
    $kode = $tampil['kode'];
    $kode_mr = $tampil['kode_mr'];
    $barang = $_POST['barang'];    
    $jml = 1;                
    foreach ($barang as $br) {
        mysqli_query($koneksi, "INSERT INTO tb_pjobat (inv, kode, kode_mr, barang, jml) VALUES ('$inv', '$kode', '$kode_mr', '$br', '$jml')") or die(mysqli_error($koneksi));
    }
}
?>
<script>
    function hitung() {
        var total_bayar = document.getElementById('total_obat').value;
    }
</script>
<form class="form-horizontal" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" id="">
    <!-- list lab -->
    <div class="form-group">
        <div class="col-md-12">
            <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Pemeriksaan Penunjang </h4>
            <input type="text" name="inv" value="<?=$hasilkode?>" hidden>
            <!-- Default choosen -->
            <!--===================================================-->
            <select multiple name="barang[]" class="demo-cs-multiselect" data-placeholder="Choose a Procedure" multiple tabindex="4">
            <?php
                $pros = $koneksi->query("SELECT * FROM tb_lab ORDER BY kode ASC") or $koneksi->error;
                while ($row = mysqli_fetch_array($pros)) {
                    $nama=$row['nama'];
                    $hlokal=$row['hlokal'];
                echo "<option value='".$nama."'>".$nama." (IDR ".number_format($hlokal).")</option>";
                } 
            ?>
            </select>
            <input type="text" name="kode" value="<?=$tampil['kode']?>" hidden>
            <input type="text" name="kode_mr" value="<?=$tampil['kode_mr']?>" hidden>
            <input type="submit" name="lab" value="Tambah" class="btn btn-primary btn-block"/>
        </div> 
        <?=$tampil['kode']?>
    </div>
</form>
<?php
if (isset($_POST['lab'])) {
    $inv = $_POST['inv'];
    $kode = $_POST['kode'];
    $kode_mr = $_POST['kode_mr'];
    $barang = $_POST['barang'];                        
    foreach ($barang as $br) {
        mysqli_query($koneksi, "INSERT INTO tb_pjlab (inv, kode, kode_mr, barang) VALUES ('$inv', '$kode', '$kode_mr', '$br')") or die(mysqli_error($koneksi));
    }
}
?>
<script>
    function hitung() {
        var total_bayar = document.getElementById('total_lab').value;
    }
</script>
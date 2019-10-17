<!-- List Tindakan -->
<form class="form-horizontal" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" id="">
    <div class="form-group">
        <div class="col-md-12">
            <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Tindakan </h4>
            <!-- Default choosen -->
            <!--===================================================-->
            <select multiple name="barang[]" class="demo-cs-multiselect" data-placeholder="Choose a Procedure" multiple tabindex="4">
            <?php
                $pros = $koneksi->query("SELECT * FROM tb_prosedur WHERE jenis='terapi' ORDER BY kode ASC") or $koneksi->error;
                while ($data = mysqli_fetch_array($pros)) {
                echo "<option value='".$data['nama']."'>".$data['nama']." (IDR ".number_format($data['hlokal']).")</option>";
                }
            ?>
            <input type="submit" name="pros" value="Tambah" class="btn btn-primary btn-block"/>
        </div> 
    </div>
</form>
<?php
if (isset($_POST['pros'])) {
    $inv = $tampil['inv'];
    $kode = $tampil['kode'];
    $kode_mr = $tampil['kode_mr'];
    $barang = $_POST['barang'];                    
    foreach ($barang as $br) {
        mysqli_query($koneksi, "INSERT INTO tb_pjpros (inv, kode, kode_mr, barang) VALUES ('$inv', '$kode', '$kode_mr', '$br')") or die(mysqli_error($koneksi));
    }
}
?>
<script>
    function hitung() {
        var total_bayar = document.getElementById('total_pros').value;
    }
</script>
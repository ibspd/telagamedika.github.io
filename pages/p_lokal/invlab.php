<!-- Penunjang -->    
<?php $data = $_GET['id'];?>
<form class="form-horizontal form-bordered" id="" method="POST" enctype="multipart/form-data" >    
    <div class="table-responsive">
        <table class="table table-hover" id="lab">
            <thead>
            <tr>
                <th width="5%">#</th>
                <th width="60%">Pemeriksaan Penunjang</th>
                <th>Harga</th>
                <th width="10%">
                    <center>
                        <input type="checkbox" id="select_all" value="">
                    </center>
                </th>
            </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                $sql = $koneksi->query("SELECT DISTINCT 
                                        tb_pjlab.barang, tb_lab.hlokal
                                        FROM tb_pjlab  
                                        INNER JOIN tb_plb ON tb_pjlab.kode_mr = '$data'
                                        INNER JOIN tb_lab ON tb_pjlab.barang= tb_lab.nama
                                        ") or $koneksi->error;
                if(mysqli_num_rows($sql) > 0) {
                    while ($data = $sql->fetch_assoc()) { ?>
                    <tr>
                        <td><?=$no++;?>.</td>
                        <td align="left";><?=$data['barang']?></td>
                        <td>Rp. <?= number_format($data['hlokal'], 2, ",", ".");?></td>
                        <td align="center";>
                            <input type="checkbox" class="check" name="checked[]" value="<?=$data['barang']?>">
                        </td>
                    </tr>
                    <?php
                    $total_lab = $total_lab + $data['hlokal'];    
                    } 
                } else {
                    echo "<tr><td colspan=\"4\" align=\"center\">Belum input lab</td></tr>";
                } 
            ?>
            </tbody>
            <tfoot>
            <tr>
                <th width="5%"></th>
                <th width="60%">Sub Total</th>
                <th>Rp. <?=number_format($total_lab, 2, ",", ".")?></th>
                <th width="10%">
                <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus barang?')">Hapus</button>
                </th>
            </tr>
            </tfoot>
        </table>
    </div>
</form>
<?php
    $inv = $_POST['inv'];
    $checked = $_POST['checked'];
    if(!isset($checked)) { ?>
        <script type="text/javascript">
        </script> 
        <?php
    } else {
        foreach ($checked as $ck) {
            $sql = mysqli_query($koneksi, "DELETE FROM tb_pjlab WHERE barang='$ck'") or die(mysqli_error($koneksi));
        }
        if($sql) { ?>
            <script>
            window.location.href="?pages=p_lokal&aksi=rm2&id=<?=$tampil['kode_mr']?>";
            </script>
        <?php
        } else { ?>
            <script>
            </script>
        <?php
        }
    } 
?>
<script>
                $(document).ready(function() {
                    $('#select_all').on('click', function() {
                        if(this.checked) {
                            $('.check').each(function() {
                                this.checked = true;
                            })
                        } else {
                            $('.check').each(function() {
                                this.checked = false;
                            })
                        }
                    });
                    $('.check').on('click', function() {
                        if($('.check:checked').length == $('.check').length) {
                            $('#select_all').prop('checked', true);
                        } else {
                            $('#select_all').prop('checked', false);
                        }
                    })
                })
            </script>
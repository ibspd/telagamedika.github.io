<!-- Tindakan -->
<?php $data = $_GET['id'];?>
<form class="form-horizontal" method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" id="">
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th>#</th>
                <th width="60%">Tindakan</th>
                <th>Harga</th>
                <th width="10%">Option</th>
            </tr>
            </thead>
            <tbody>
            <?php
                $no = 1;
                $sql = $koneksi->query("SELECT DISTINCT 
                                        tb_pjpros.barang, tb_prosedur.hlokal
                                        FROM tb_pjpros
                                        INNER JOIN tb_plb ON tb_pjpros.kode_mr = '$data'
                                        INNER JOIN tb_prosedur ON tb_pjpros.barang= tb_prosedur.nama
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
                    $total_pros = $total_pros + $data['hlokal'];
                    }

                } else {
                    echo "<tr><td colspan=\"4\" align=\"center\">Belum input tindakan</td></tr>";
                } 
            ?>
            </tbody>
            <tfoot>
            <tr>
                <th width="5%"></th>
                <th width="60%">Sub Total</th>
                <th>Rp. <?=number_format($total_pros, 2, ",", ".")?></th>
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
            $sql = mysqli_query($koneksi, "DELETE FROM tb_pjpros WHERE barang='$ck'") or die(mysqli_error($koneksi));
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
<?php $data = $_GET['id'];?>
<form class="form-horizontal form-bordered" method="POST" enctype="multipart/form-data">  
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
            <tr>
                <th width="5%">#</th>
                <th width="40%">Pengobatan</th>
                <th width="20%" align="center";>
                    Jumlah
                </th>
                <th width="20%" align="center";> 
                    <button class="btn btn-default btn-labeled fa fa-calculator" type="submit" name="pjobat" value=""> Hitung Total
                    </button>
                </th>
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
                                        tb_pjobat.jml, tb_pjobat.ket, tb_pjobat.total, tb_pjobat.barang, tb_obat.nama, tb_obat.hlokal
                                        FROM tb_pjobat
                                        INNER JOIN tb_plb ON tb_pjobat.kode_mr = '$data'
                                        INNER JOIN tb_obat ON tb_pjobat.barang= tb_obat.nama
                                        ") or $koneksi->error;
                if(mysqli_num_rows($sql) > 0) {
                    while ($data = $sql->fetch_assoc()) { ?>
                    <tr>
                        <td><?=$no++;?>.</td>
                        <input type="hidden" name="id[]" value="<?=$data['barang']?>">
                        <td>
                            <?=$data['barang']?> - <?=$data['generik']?>
                            <input class="col-md-12" type="text" name="ket[]" value="<?=$data['ket']?>">
                        </td>
                        <td class="align-middle">
                            <input class="col-md-6 align-middle" type="number" name="jml[]" value="<?=$data['jml']?>"> 
                            <div class="col-md-12">
                            @ Rp. <?= number_format($data['hlokal'], 2, ",", ".");?>
                            <input class="col-md-12" type="text" name="hlokal[]" value="<?=$data['hlokal']?>" hidden>
                            </div> 
                        </fieldset>
                        </td>
                        <td class="align-middle">
                            <?=number_format($data['total'], 2, ",", ".")?>
                        </td>
                        <td align="center";>
                            <input type="checkbox" class="check" name="checked[]" value="<?=$data['barang']?>">
                        </td>
                    </tr>
                    <?php
                        $total_obat = $total_obat + $data['jml'] * $data['hlokal'];
                    }
                    
                } else {
                    echo "<tr><td colspan=\"6\" align=\"center\">Belum input obat</td></tr>";
                } 
            
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <th></th>
                    <th>Sub Total</th>
                    <th>
                        
                    </th>
                    <th>Rp. <?=number_format($total_obat, 2, ",", ".")?></th>
                    <th>
                    <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus barang?')">Hapus</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </div>    
</form>
<?php
if (isset($_POST['pjobat'])) {
    for ($i=0; $i<count($_POST['id']); $i++) {
    $id = $_POST['id'][$i];
    // $inv = $_POST['inv'];
    // $barang = $_POST['barang'];    
    $jml = $_POST['jml'][$i];
    $total = $_POST['jml'][$i] * $_POST['hlokal'][$i];
    $ket = $_POST['ket'][$i];
    
    

    $sql = $koneksi->query("UPDATE tb_pjobat SET
        jml='$jml', 
        total = '$total',
        ket='$ket'
        WHERE tb_pjobat.barang='$id' ");
    }
    if ($sql) {
            ?>
                <script type="text/javascript">
                    
                    window.location.href="?pages=p_lokal&aksi=rm2&id=<?=$tampil['kode_mr']?>";
                </script>
            <?php
        } else {
            ?>
            <script type="text/javascript">
                alert("Gagal");
                window.location.href="?pages=p_lokal&aksi=rm2&id=<?=$tampil['kode_mr']?>";
            </script>
        <?php
        }
    }
    ?>


    <!-- hapus multipel -->
    <?php
        $inv = $_POST['inv'];
        $checked = $_POST['checked'];
        if(!isset($checked)) { ?>
            <script type="text/javascript">
            </script> 
            <?php
        } else {
            foreach ($checked as $ck) {
                $sql = mysqli_query($koneksi, "DELETE FROM tb_pjobat WHERE barang='$ck'") or die(mysqli_error($koneksi));
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
    
<!-- Penunjang -->    
<?php $data = $_GET['id'];?>
<form class="form-horizontal form-bordered" id="" method="POST" enctype="multipart/form-data" >    
    <div class="table-responsive">
        <table class="table table-hover" id="lab">
            <thead>
            <tr>
                <th width="5%">#</th>
                <th width="60%">Konsultasi dan Adminitrasi</th>
                <th>Harga</th>
                <th width="10%">
                    <center>
                    </center>
                </th>
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td align="left";>Konsultasi Dokter</td>
                    <td>Rp. <?= number_format(40000, 2, ",", ".");?></td>
                    <td align="center";>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td align="left";>Administrasi</td>
                    <td>Rp. <?= number_format(10000, 2, ",", ".");?></td>
                    <td align="center";>
                    </td>
                </tr>
                <?php
                $total_adm = 40000 + 10000;
                ?>
            </tbody>
            <tfoot>
            <tr>
                <th width="5%"></th>
                <th width="60%">Sub Total</th>
                <th>Rp. <?=number_format($total_adm, 2, ",", ".")?></th>
                <th width="10%">
                <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin menghapus barang?')">Hapus</button>
                </th>
            </tr>
            </tfoot>
        </table>
    </div>
</form>
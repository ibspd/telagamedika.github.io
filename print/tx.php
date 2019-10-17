<?php $data = $_GET['id'];?>
<table width="100%" style="border-top: 2px solid #ddd; border-bottom: 2px solid #ddd; border-collapse: collapse;">
<tr>
    <td colspan="" valign="top" align="justify">
        <table width="100%" >
        <th align="left" width="40%" style="border-bottom: 1px solid #ddd;">Terapi/Prosedur</th>
        <th align="left" width="60%" style="border-bottom: 1px solid #ddd;">Pengobatan</th>
        <tr>
        <td valign="top" align="justify">
        <?php
            $no = 1;
            $sql = $koneksi->query("SELECT * FROM tb_pjpros WHERE kode_mr = '$data'") or $koneksi->error;
            if(mysqli_num_rows($sql) > 0) {
                while ($data = $sql->fetch_assoc()) { ?>
                    <?=$no++;?>. <?=$data['barang']?> <br>
                <?php
                }

            } else {
                echo "Tidak ada tindakan";
            } 
        ?>
        
        
        </td>
        <?php $data = $_GET['id'];?>
        <td valign="top" align="left justify">
        <?php
            $no = 1;
            $sql = $koneksi->query("SELECT DISTINCT *  FROM tb_pjobat INNER JOIN tb_obat WHERE tb_pjobat.barang=tb_obat.nama AND tb_pjobat.kode_mr = '$data' ") or $koneksi->error;
            if(mysqli_num_rows($sql) > 0) {
                while ($data = $sql->fetch_assoc()) { ?>
                    <table width="100%" style="border-bottom: 1px solid #ddd;">
                    <tr>
                        <td valign="top" width="3%"><?=$no++;?>.</td>
                        <td valign="top"><?=$data['barang']?> - <?=$data['generik']?> | <?=$data['jml']?> tab</td>
                    </tr>
                    <tr>
                    <td></td>
                    <td><?=$data['ket']?></td>
                    </tr>
                    </table>
                    
                <?php
                }

            } else {
                echo "Tidak ada obat";
            } 
        ?>
        </td>
        </tr>
        </table>
    </td>
</tr>
</table>
<table width="100%" style="border-top: 2px solid #ddd; border-collapse: collapse;">
<tr>
    <td colspan="" valign="top" align="justify">
        <table width="100%" >
        <th align="left" width="40%" style="border-bottom: 1px solid #ddd;">Pemeriksaan Lab</th>
        <th align="left" width="60%" style="border-bottom: 1px solid #ddd;">Diagnosis</th>
        <tr>
        <td valign="top" align="left"> 
        <?php
            $no = 1;
            $sql = $koneksi->query("SELECT * FROM tb_pjlab INNER JOIN tb_lab WHERE tb_pjlab.barang = tb_lab.nama") or $koneksi->error;
            if(mysqli_num_rows($sql) > 0) {
                while ($data = $sql->fetch_assoc()) { ?>
                    <?=$data['barang']?>,
                <?php 
                } 
            } 
        ?>
        </td>
        <td valign="top" align="left justify">
        <?=$tampil['dx']?>
        </td>
        </tr>
        </table>
    </td>
</tr>
</table>
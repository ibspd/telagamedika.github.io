<table width="100%" style="border-top: 2px solid #ddd; border-collapse: collapse;">
<tr>
    <td colspan="" valign="top" align="justify">
        <table width="100%" style="border-collapse: collapse;">
            <th align="center" colspan="" width="" style="border-bottom: 1px solid #ddd;">Prosedur dan Pemeriksaan Lab</th>
            <th align="center" colspan="" width="" style="border-bottom: 1px solid #ddd;"></th>
            <th align="center" colspan="2" width="" style="border-bottom: 1px solid #ddd;"></th>
            <th align="center" colspan="2" width="" style="border-bottom: 1px solid #ddd;">Total</th>
            <tr>
                <td valign="top" align="" style="border-collapse: collapse;">
                    <?php
                        $data = $_GET['id'];
                        $no = 1;
                        $sql = $koneksi->query("SELECT * from tb_pjlab INNER JOIN tb_lab WHERE tb_pjlab.barang = tb_lab.nama") or $koneksi->error;
                        if(mysqli_num_rows($sql) > 0) {
                            while ($data = $sql->fetch_assoc()) { ?>
                                <tr>
                                    <td style="border-bottom: 1px solid #ddd;" width="35%" >
                                        00908. <?=$data['barang']?>
                                    </td>
                                    <td align="center" style="border-bottom: 1px solid #ddd;" width="5%" ></td>
                                    <td align="center" style="border-bottom: 1px solid #ddd;" width="5%"></td>
                                    <td align="right" style="border-bottom: 1px solid #ddd;" width="10%" ></td>
                                    <td align="center" style="border-bottom: 1px solid #ddd;" width="5%">Rp. </td>
                                    <td style="border-bottom: 1px solid #ddd;" width="10%" align="right">
                                        <?= number_format($data['hlokal'], 2, ",", ".");?>
                                    </td>
                                </tr>
                            <?php
                            $total_pros = $total_pros + $data['hlokal'];
                            }

                        } else {
                            echo "<tr><td colspan=\"4\" align=\"center\">Belum input tindakan</td></tr>";
                        } 
                    ?>
                     <tr>
                        <td></td>
                        <td></td>
                        <td colspan="2" align="right"><b>Sub total</b></td>
                        <td align="center" width="%"><b>Rp. </b></td>
                        <td colspan="2" align="right"><b><?=number_format($total_pros, 2, ",", ".")?></b></td>
                    </tr>
                </td>
            </tr>
        </table>
    </td>
</tr>
</table>
<table width="100%" style="border-top: 2px solid #ddd; border-collapse: collapse;">
<tr>
    <td colspan="" valign="top" align="justify">
        <table width="100%" style="border-collapse: collapse; border-bottom: 2px solid #ddd;">
            <th align="center" colspan="" width="" style="border-bottom: 1px solid #ddd;">Disposabel</th>
            <th align="center" colspan="" width="" style="border-bottom: 1px solid #ddd;">Jumlah</th>
            <th align="center" colspan="2" width="" style="border-bottom: 1px solid #ddd;">Harga Satuan</th>
            <th align="center" colspan="2" width="" style="border-bottom: 1px solid #ddd;">Total</th>

            <tr>
                <td valign="top" align="">
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
                                    <td align="center" style="border-bottom: 1px solid #ddd;" width="5%" ><?=$data['jml']?></td>
                                    <td align="center" style="border-bottom: 1px solid #ddd;" width="5%">Rp. </td>
                                    <td align="right" style="border-bottom: 1px solid #ddd;" width="10%" >
                                        <?= number_format($data['hlokal'], 2, ",", ".");?></div>
                                    </td>
                                    <td align="center" style="border-bottom: 1px solid #ddd;" width="5%">Rp. </td>
                                    <td style="border-bottom: 1px solid #ddd;" width="10%" align="right">
                                        <?= number_format($data['total'], 2, ",", ".");?>
                                    </td>   
                                </tr>
                            <?php
                                $total_disp = $total_disp + $data['total'];
                            }

                        } else {
                            echo "<tr><td colspan=\"4\" align=\"center\">Belum input tindakan</td></tr>";
                        } 
                    ?>
                     <tr>
                        <td style="border-bottom: 2px solid #ddd;"></td>
                        <td style="border-bottom: 2px solid #ddd;"></td>
                        <td colspan="2" align="right" style="border-bottom: 2px solid #ddd;"><b>Sub total</b></td>
                        <td align="center" width="%" style="border-bottom: 2px solid #ddd;"><b>Rp. </b></td>
                        <td colspan="2" align="right" style="border-bottom: 2px solid #ddd;"><b><?=number_format($total_disp, 2, ",", ".")?></b></td>
                    </tr>
                </td>
            </tr>
                <?php
                    $total_grand = $total_adm + $total_pros + $total_obat + $total_disp;
                ?>
            <th align="left" colspan="" width="" style="border-bottom: 1px solid #ddd;">
                Referensi: <br> Tujuh ratus sembilan puluh tiga ribu rupiah
            </th>
            <th align="center" colspan="" width="" style="border-bottom: 1px solid #ddd;"></th>
            <th align="center" colspan="2" width="" style="border-bottom: 1px solid #ddd;">Grand Total</th>
            <th align="center" width="%" style="border-bottom: 2px solid #ddd;">Rp.</th>
            <th align="right" colspan="2" width="" style="border-bottom: 1px solid #ddd;">
                <b><?=number_format($total_grand, 2, ",", ".")?></b>
            </th>
        </table>
    </td>
</tr>
</table>
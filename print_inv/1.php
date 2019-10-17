<?php
$sql = $koneksi->query("SELECT * FROM tb_pla INNER JOIN tb_plb WHERE tb_pla.kode = tb_plb.kode AND tb_plb.kode_mr='$data'");
$tampil = $sql->fetch_assoc();
$jk = $tampil['jk'];
$jenis = $tampil['jenis'];
$busui = $tampil['busui'];
$reg = $tampil['reg'];
$nyeri = $tampil['nyeri'];
?>

<table width="100%">
<th colspan="6" style="border-bottom: 2px solid #ddd;">
KWITANSI/BUKTI BAYAR
</th>
<tr>
        <th width="50%" align="left" style=""></th>
        <th width="50%" align="left" style=""></th>
    </tr>
<tr>
        <td valign="top">
            <table width="100%" >
            <tr>
                <td width="30%">No. RM</td>
                <td width="1%">:</td>
                <td><?=$tampil['kode_mr']?></td>
                
            </tr>
            </table>
        </td>
        <td valign="top">
            <table width="100%" table-layout="">
            <?php
            $sql = $koneksi->query("SELECT * FROM tb_penjualan WHERE kode_mr='$data'");
            $tampil2 = $sql->fetch_assoc();
            ?>
            <tr>
                <td width="30%">No. Invoice</td>
                <td width="1%">:</td>
                <td><?=$tampil2['inv']?></td>
            </tr>
            </table>
        </td>
    </tr>
</table>
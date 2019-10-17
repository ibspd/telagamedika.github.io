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
Confidential Medical Report <br>
Tanggal: <?=tgl_indo($tampil['tgl_prk'])?> Waktu: <?=$tampil['wkt_prk']?>
</th>
<tr>
    <td width="15%" >No. RM </td>
    <td width="1%">:</td>
    <td width="30%"><?=$tampil['kode_mr']?></td>
</tr>
<tr>
    <td>Dokter</td>
    <td>:</td>
    <td>dr. Suryadi Putra Dwipayana</td>
    <td>Perawat</td>
    <td>:</td>
    <td>Mia</td>
</tr>
<tr>
    <td>Nama Pasien</td>
    <td>:</td>
    <td><?=$tampil['nama']?></td>
    <td>Alamat</td>
    <td>:</td>
    <td><?=$tampil['alamat']?></td>
</tr>
<tr>
    <td>JK</td>
    <td>:</td>
    <td><?=$tampil['jk']?></td>
    <td>Telepon</td>
    <td>:</td>
    <td><?=$tampil['telp']?></td>
</tr>
<tr>
    <td>Umur</td>
    <td>:</td>
    <td>28 th</td>
    <td>Alergi</td>
    <td>:</td>
    <td><?=$tampil['alergi']?></td>
</tr>
<tr>
</tr>

</table>
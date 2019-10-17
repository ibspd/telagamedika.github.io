

<table width="100%" style="border-top: 2px solid #ddd; border-collapse: collapse;">
    <tr>
        <th width="50%" align="left" style="border-bottom: 1px solid #ddd;">Patient Detail</th>
        <th width="50%" align="left" style="border-bottom: 1px solid #ddd;"></th>
    </tr>
    <tr>
        <td valign="top">
            <table width="100%" >
            <tr>
                <td width="30%">Nama Pasien</td>
                <td width="1%">:</td>
                <td><?=$tampil['nama']?></td>
                
            </tr>
            <tr>
                <td>JK</td>
                <td>:</td>
                <td><?=$tampil['jk']?></td>
                
            </tr>
            <tr>
                <td>Tgl Lahir </td>
                <td>:</td>
                <td><?=tgl_indo($tampil['tgl'])?></td>
                
            </tr>
            </table>
        </td>
        <td valign="top">
            <table width="100%" table-layout="">
            <tr>
                <td width="30%">Tanggal Periksa</td>
                <td width="1%">:</td>
                <td><?=tgl_indo($tampil['tgl_prk'])?></td>
            </tr>
            <tr>
            <td>Alamat</td>
                <td>:</td>
                <td><?=$tampil['alamat']?></td>
            </tr>
            </table>
        </td>
    </tr>
</table>


<table width="100%" style="border-top: 2px solid #ddd; border-collapse: collapse;">
    <tr>
        <th width="40%" align="left" style="border-bottom: 1px solid #ddd;">Vital Sign</th>
        <th width="60%" align="left" style="border-bottom: 1px solid #ddd;">Pemeriksaan Fisik</th>
    </tr>
    <tr>
        <td>
            <table width="100%">
                <tr>
                <td width="2%">KU/GCS</td><td>:</td><td><?=$tampil['ku'],' / ', $tampil['gcs']?></td>
                </tr>
                <tr>
                <td>TD</td><td>:</td><td><?=$tampil['td']?></td>
                </tr>
                <tr>
                <td>N</td><td>:</td><td><?=$tampil['hr']?> x/mnt, <?=$tampil['reg']?></td>
                </tr>
                <tr>
                <td>RR</td><td>:</td><td><?=$tampil['rr']?> x/mnt</td>
                </tr>
                <tr>
                <td>Tax</td><td>:</td><td><?=$tampil['temp']?> &#8451;</td>
                </tr>
                <tr>
                <td>SaO2</td><td>:</td><td><?=$tampil['o2']?> %</td>
                </tr>
                <tr>
                <td>BB</td><td>:</td><td><?=$tampil['bb']?></td>
                </tr>
            </table>
        </td>
        <td>
            <table width="100%" table-layout="">
            <tr>
            <td width="2%">Kepala</td><td width="2%">:</td><td><?=$tampil['head']?></td>
            </tr>
            <tr>
            <td>Thoraks</td><td>:</td><td><?=$tampil['chest']?></td>
            </tr>
            <tr>
            <td>Abdomen</td><td>:</td><td><?=$tampil['abd']?></td>
            </tr>
            <tr>
            <td>Ekstrimitas</td><td>:</td><td><?=$tampil['ext']?></td>
            </tr>
            <tr>
            <td>Pemeriksaan lain</td><td>:</td><td><?=$tampil['lain']?></td>
            </tr>
            </table>
        </td>
    </tr>
</table>
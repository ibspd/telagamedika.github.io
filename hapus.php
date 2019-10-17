<?php

    $id = $_GET['id'];

    $pxa = $koneksi->query("DELETE FROM tb_pxa and tb_pla WHERE kode = '$id'");
    $pla = $koneksi->query("DELETE FROM tb_pla WHERE kode = '$id'");

if ($pxa) {
    ?>
    <script type="text/javascript">
    alert("Data Berhasil Dihapus");
    window.location.href="?home";
    </script>
    <?php
}
if ($pla) {
    ?>
    <script type="text/javascript">
    alert("Data Berhasil Dihapus");
    window.location.href="?home";
    </script>
    <?php
}
?>
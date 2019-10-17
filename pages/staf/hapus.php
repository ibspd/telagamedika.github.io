<?php

    $id = $_GET['id'];

    $sql = $koneksi->query("DELETE FROM tb_staf WHERE kode = '$id'");

if ($sql) {
    ?>
    <script type="text/javascript">
    alert("Data Berhasil Dihapus");
    window.location.href="?pages=prosedur";
    </script>

    <?php
}
?>
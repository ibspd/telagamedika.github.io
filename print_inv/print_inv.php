<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$koneksi = new mysqli("localhost", "root", "", "telagamedika");
$data = $_GET['id'];
function tgl_indo($tgl) {
  $tanggal = substr($tgl, 8, 2);
  $bulan = substr($tgl, 5, 2);
  $tahun = substr($tgl, 0,4);
  return $tanggal."/".$bulan."/".$tahun;
}

function umur2($tanggal_lahir) {
  list($year, $month, $day) = explode("-", $tanggal_lahir);
  $year_diff = date("Y") - $year;
  $month_diff = date("m") - $month;
  $day_diff = date("d") - $day;
  if ($month_diff < 0) $year_diff--;
      elseif (($month_diff==0) && ($day_diff < 0)) $year_diff--;
  return $year_diff;
}

function umur($tgl_lahir) {
  $lahir = new DateTime($tgl_lahir);
  $hari_ini = new DateTime();
  $diff = $hari_ini->diff($lahir);
  echo '<br/>';
  echo " ". $diff->y ." Tahun";
  echo " ". $diff->m ." Bulan";
  echo " ". $diff->d ." Hari";
}

function umr($tgl_lahir) {
  $lahir = new DateTime($tgl_lahir);
  $hari_ini = new DateTime();
  $diff = $hari_ini->diff($lahir);
  echo '<br/>';
  echo " ". $diff->y ." th";
}

?>


<style type="text/css">
.page-header, .page-header-space {
  height: 100px;
}

.page-footer, .page-footer-space {
  height: 50px;

}

.page-footer {
  position: fixed;
  bottom: -20;
  width: 100%;
}

.page-header {
  position: fixed;
  top: 0mm;
  width: 100%;
  
}

.page {
  page-break-after: always;
  background: white;
  display: block;
  margin: 0 auto;
  margin-bottom: 0.5cm;
  /* margin-top: 2cm; */
  
}

@page {
}

@media print {
   thead {display: table-header-group;} 
   tfoot {display: table-footer-group;}
   
   button {display: none;}
   
   body {margin: 0;}
}

</style>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Telaga Medika Clinic</title>
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>


    <body>
      <div class="page-header" style="text-align: center">
        <img src="../img/kop1.jpg" alt="" width="100%" >
        <br/>
        <button type="button" onClick="window.print()" style="background: pink">
        PRINT ME!
        </button>
      </div>
      <div class="page-footer" style="text-align: center">
          <img src="../img/kop2.jpg" alt="" width="50%" >
      </div>

  <table>
    <thead>
      <tr>
        <td>
          <!--place holder for the fixed-position header-->
          <div class="page-header-space"></div>
        </td>
      </tr>
    </thead>

    <tbody>
      <!--*** CONTENT GOES HERE ***-->
      <!-- <div class="page" style="line-height:;">  -->
       
      <?php include ('1.php')?>
      <?php include ('2.php')?>
      <?php include ('3.php')?>
      <?php include ('4.adm.php')?>
      <?php include ('5.pros.php')?>
      <?php include ('6.obat.php')?>
      <?php include ('7.disp.php')?>
      <?php include ('8.rek.php')?>
    </tbody>
    <tfoot>
      <tr>
        <td>
          <!--place holder for the fixed-position footer-->
          <div class="page-footer-space"></div>
        </td>
      </tr>
    </tfoot>
  </table>
</body>
</html>
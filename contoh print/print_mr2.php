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
  
}

@page {
  margin: 
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
        <title> Telaga Medika Clinic</title>
        <link rel="shortcut icon" href="img/favicon.ico">
    </head>


    <body>
      <div class="page-header" style="text-align: center">
        <!-- <img src="../../img/kop1.jpg" alt="" width="100%" > -->
        <br/>
        <button type="button" onClick="window.print()" style="background: pink">
        PRINT ME!
        </button>
      </div>
      <div class="page-footer" style="text-align: center">
          <img src="img/kop2.jpg" alt="" width="50%" >
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
      <tr>
        <td>
          <!--*** CONTENT GOES HERE ***-->
          <div class="page" style="line-height: 1;">
          <div style="width:50%; float:left; text-align: right;">
            <h3>CONFIDENTIAL MEDICAL REPORT</h3>
          </div>
          <div>
          Confidential Medical Report 
          Tanggal: 23 Juli 2019 Waktu: 14.00
          
          <div class="row">
            <div class="col-md-6 grid">
              <div class="panel">
              <div class="panel-body">
              <div class="table-responsive">
              <table class="table table-condensed">
                <thead></thead>
                <tbody>
                <tr>
                <td>No. RM </td>
                <td>:</td>
                <td>PL001</td>
                </tr>
                <tr>
                <td>Dokter Pemeriksa</td>
                <td>:</td>
                <td>dr. Suryadi Putra Dwipayana</td>
                </tr>
                <tr>
                <td>Nama Pasien</td>
                <td>:</td>
                <td>Wayan Alex</td>
                </tr>
                <tr>
                <td>JK</td>
                <td>:</td>
                <td>Laki-laki</td>
                </tr>
                <tr>
                <td>Umur</td>
                <td>:</td>
                <td>28 th</td>
                </tr>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
              </div>
              </div>
              </div>
            </div>
            <div class="col-md-6 grid">
              <div class="panel">
              <div class="panel-body">
              <div class="table-responsive">
              <table class="table table-condensed">
                <thead></thead>
                <tbody>
                <tr>
                <td>File No.</td>
                <td>:</td>
                <td>001</td>
                </tr>
                <tr>
                <td>Perawat</td>
                <td>:</td>
                <td>Mia</td>
                </tr>
                <tr>
                <td>Alamat</td>
                <td>:</td>
                <td>Sanur</td>
                </tr>
                <tr>
                <td>Telepon</td>
                <td>:</td>
                <td>08091029450</td>
                </tr>
                <tr>
                <td>Alergi</td>
                <td>:</td>
                <td>Gin</td>
                </tr>
                </tbody>
                <tfoot>
                </tfoot>
              </table>
              </div>
              </div>
              </div>
            </div>
          </div>

          
        </td>
      </tr>
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
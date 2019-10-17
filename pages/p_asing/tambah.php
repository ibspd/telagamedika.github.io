<!--Page content-->
<!--===================================================-->
<style>
.table, th, td {
    text-align: center;
}
</style>

<?php

$data = $_GET['id'];

$sql = $koneksi->query("SELECT * FROM tb_pxa WHERE kode = '$data'");
$tampil = $sql->fetch_assoc();

?>

<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Registration </h3>
        <div class="breadcrumb-wrapper">
            <span class="label">You are here:</span>
                <ol class="breadcrumb">
                <li> <a href="?home"> Home </a> </li>
                <li class="active"> Medical Report </li>
                </ol>
        </div>
    </div>

<div id="page-content">
  <div class="row">
    <div class="col-md-12">
      <section class="panel">
        <div class="panel-heading">
        <div class="panel-control">
            <button class="btn btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></button>
            <button class="btn btn-default" data-click="panel-reload"><i class="fa fa-refresh"></i></button>
            <button class="btn btn-default" data-click="panel-collapse"><i class="fa fa-chevron-down"></i></button>
        </div>
           
            <h3 class="panel-title">
            
            </h3>
            
        </div>
        <div class="panel-body np">
        
          <!-- START Form Wizard -->
          <form method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" action="#" id="wizard">
            <!-- Wizard Container 1 -->
            <div class="wizard-title"> Identity Detail  </div>
                <div class="wizard-container">
                    <div class="form-group">
                        <div class="col-md-12">
                        <?php 
                            $carikode = $koneksi->query("SELECT max(kode_px) as maxKode FROM tb_pxa");
                            // menjadikannya array
                            $datakode = $carikode->fetch_assoc(); 
                            $kodepx = $datakode['maxKode'];
                            // jika $datakode
                            if ($datakode) {
                            // membuat variabel baru untuk mengambil kode barang mulai dari 1
                            $nilaikode = substr($kodepx, 2, 4);
                            // menjadikan $nilaikode ( int )
                            $kode = (int) $nilaikode;
                            // setiap $kode di tambah 1
                            $kode++;
                            // hasil untuk menambahkan kode 
                            // angka 3 untuk menambahkan tiga angka setelah B dan angka 0 angka yang berada di tengah
                            // atau angka sebelum $kode
                            // $hasilkode = "PA".str_pad($kode, 4, "0", STR_PAD_LEFT);
                            $hasilkode = "PA" . sprintf("%04s", $kode);
                            } else {
                            $hasilkode = "PA0001";
                            }
                        ?>
                            <h4 class="text-primary"> <i class="fa fa-user"></i> Identity Detail 
                            
                            </h4> 
                            <input class="form-control-static" type="text" name="kode_px" value="<?php echo $hasilkode;?>" readonly hidden/>
                            <!-- <p class="text-muted"> General information about applicant </p> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>First Name: <span class="text-danger">*</span> </label>
                                <input type="text" name="fname" class="form-control" placeholder="First Name" data-parsley-group="information" data-parsley-required />
                            </div>
                            <div class="col-md-6">
                                <label>Last Name: <span class="text-danger">*</span> </label>
                                <input type="text" name="lname" class="form-control" placeholder="Last Name" data-parsley-group="information" data-parsley-required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Gender #:</label>
                                <select name="sex" class="form-control">
                                    <option value="">-- Pick One --</option>
                                    <option value="M">Male</option>
                                    <option value="F">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Date of birth:</label>
                                <input name="dob" type="text" placeholder="99/99/9999" data-mask="99/99/9999" class="form-control" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Address in Bali:</label>
                                <input name="alamat" type="text" placeholder="Hotel/Guest house Name" class="form-control" />
                            </div>
                            <div class="col-md-6">
                                <label>Passport:</label>
                                <input name="passport" type="text" placeholder="Passport number" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Wizard Container 1 -->

            <!-- Wizard Container 2 -->
            <div class="wizard-title"> Contact Information </div>
                <div class="wizard-container">
                    <div class="form-group">
                        <div class="col-md-12">
                            <h4 class="text-primary"> <i class="fa fa-user"></i> Contact Information </h4>
                            <!-- <p class="text-muted"> General information about applicant </p> -->
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Phone number:</span> </label>
                                <input name="phone" type="nu,ber"  class="form-control" placeholder="Local number/WA" data-parsley-group="information" data-parsley-required />
                            </div>
                            <div class="col-md-6">
                                <label>Email address</span> </label>
                                <input name="email" type="text"  class="form-control" placeholder="Email address" data-parsley-group="information" data-parsley-required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-6">
                                <label>Emergency Contact Name:</span> </label>
                                <input name="emergency_name" type="text"  class="form-control" placeholder="Name" data-parsley-group="information" data-parsley-required />
                            </div>
                            <div class="col-md-6">
                                <label>Emergency Contact:</label>
                                <input name="emergency_no" type="text" placeholder="Number" class="form-control" />
                            </div>
                        </div>
                    </div>
                </div>
            <!--/ Wizard Container 2 -->
            <!-- Wizard Health Information -->
            <div class="wizard-title"> Health Information </div>
                <div class="wizard-container">
                    <div class="form-group">
                        <div class="col-md-12">
                            <h4 class="text-primary"> <i class="fa fa-user"></i> Health Information </h4>
                            
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3">
                                <label>Pregnancy:</label>
                                <select class="form-control" id="source">
                                    <option value="N">No</option>
                                    <option value="Y">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <label>Breastfeeding:</label>
                                <select class="form-control" id="source">
                                    <option value="N">No</option>
                                    <option value="Y">Yes</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label>Allergy:</span> </label>
                                <input type="text" name="allergy" class="form-control" placeholder="e.g Penicillin, peanut, cold" data-parsley-group="information" data-parsley-required />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            
                            <div class="col-md-6">
                            <label>Complaint:</span> </label>
                                <input type="text" name="complaint" class="form-control" placeholder="Describe your main symptom" data-parsley-group="information" data-parsley-required />
                            </div>
                            <div class="col-md-6">
                                <label>Past Medical History:</label>
                                <textarea name="pmh" id="demo-textarea-input" rows="9" class="form-control" placeholder="e.g. disease (date/year), ..."></textarea>
                            </div>
                        </div>
                    </div>
                    <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                </div>
            <!--/ Wizard Health Information-->
          </div>
          
          </form>
          <?php 
            if (isset($_POST['simpan'])) {
                $kode_px = $_POST['kode_px'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $sex = $_POST['sex'];
                $dob = $_POST['dob'];
                $alamat = $_POST['alamat'];
                $passport = $_POST['passport'];
                $phone = $_POST['phone'];
                $email = $_POST['email'];
                $emergency_name = $_POST['emergency_name'];
                $emergency_no = $_POST['emergency_no'];
                $allergy = $_POST['allergy'];
                $pmh = $_POST['pmh'];

                $sql = $koneksi->query("INSERT INTO tb_pxa (kode_px, fname, lname, sex, dob, alamat, passport, phone, email, emergency_name, emergency_no, allergy, pmh) VALUES ('$kode_px', '$fname', '$lname', '$sex', '$dob', '$alamat', '$passport', '$phone', '$email', '$emergency_name', '$emergency_no', '$allergy', '$pmh')");
                if ($sql) {
                    ?>
                        <script type="text/javascript">
                            alert("Data Berhasil Disimpan");
                            window.location.href="?page=home";
                        </script>
                    <?php
                }
            }
          ?>
</div>



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
      <h3><i class="fa fa-home"></i> Medical Report Awal (PA001MR001)</h3>
      <div class="breadcrumb-wrapper">
          <span class="label">You are here:</span>
              <ol class="breadcrumb">
              <li> <a href="?home"> Home </a> </li>
              <li class="active"> Medical Report </li>
              </ol>
      </div>
  </div>

  <div id="page-content">
    <div class="col-md-12">
    <form method="POST" enctype="multipart/form-data" class="form-horizontal form-bordered" >
      <div class="tab-base">
        <!--Nav tabs-->
        <ul class="nav nav-tabs tabs-right">
            <li class="active">
                <a data-toggle="tab" href="#demo-righticon-tab-1">
                  <i class="fa fa-home fa-lg"></i> 
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#demo-righticon-tab-2">
                  <i class="fa fa-user fa-lg"></i>
                </a>
            </li>
        </ul>
      <form action="POST" enctype="multipart/form-data" class="form-horizontal form-bordered">
        <div class="tab-content">
           <!--Anamnesis Content-->
          <div id="demo-righticon-tab-1" class="tab-pane fade active in">
            <h3 class="panel-title">Clinical History</h3>
            <div class="form-group">
              <div class="row">
                <!-- History -->
                <div class="col-md-4">
                  <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Profile </h4>
                    <label class="col-md-3">Name:</label>  
                    <div class="col-md-9">                
                      <input type="text" name="fnmae" value="<?=$tampil['fname'];?> <?=$tampil['lname'];?>" class="form-control" readonly/>
                    </div>
                    <label class="col-md-3">Sex:</label>  
                    <div class="col-md-9">                
                      <input type="text" name="sex" value="<?=$tampil['sex'];?>" class="form-control" readonly/>
                    </div>
                    <label class="col-md-3">D.O.B:</label>  
                    <div class="col-md-9">                
                      <input type="text" name="dob" value="<?=$tampil['dob'];?>" class="form-control" readonly/>
                    </div>
                    <label class="col-md-3">Allergy:</label>  
                    <div class="col-md-9">                
                      <input type="text" name="allergy" value="<?=$tampil['allergy'];?>" class="form-control"/>
                    </div>
                    <label class="col-md-3">Pregnancy:</label>  
                    <div class="col-md-2">                
                      <input type="text" name="" value="<?=$tampil[''];?>" class="form-control" readonly/>
                    </div>
                    <label class="col-md-3">Breastfeeding:</label>  
                    <div class="col-md-2">                
                      <input type="text" name="" value="<?=$tampil[''];?>" class="form-control" readonly/>
                    </div>
                </div>  
                <div class="col-md-3">
                    <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Medical History </h4>
                      <textarea id="demo-textarea-input" rows="9" class="form-control" value=""><?=$tampil['pmh'];?></textarea>
                </div> 
                <div class="col-md-5">
                    <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Anamnesis Details </h4>
                      <textarea name="anamnesis" id="demo-textarea-input" rows="9" class="form-control" placeholder="Enter Your Anamnesis Details"></textarea>
                </div>
                <!--\ History -->
                <!-- VS -->
                <div class="col-md-4">
                <div class="row col-md-12">
                  <h4 class="text-primary"> <i class="fa fa-sign-in"></i> General Condition, Vital Sign, VASS </h4>
                  <div class="col-md-4">
                    <h5>Blood Pressure</h5>
                    <input name="bp" type="text" class="col-md-8"> 
                    <div class="col-md-2"><small>mmHg</small> </div>
                  </div>
                  <div class="col-md-4">
                    <h5>Heart Rate</h5>
                    <input name="hr"  type="text" class="col-md-8"> 
                    <div class="col-md-2"><small>x/mnt</small></div>
                  </div>
                  <div class="radio col-md-4">
                      <label class="form-radio form-icon active">
                      <input value="regular" type="radio" checked="" name="ico-blk"> regular</label>
                      <label class="form-radio form-icon">
                      <input value="irregular" type="radio" name="ico-blk"> irregular</label>
                  </div> 
                </div>
                <div class="row col-md-12">
                  <div class="col-md-4"> 
                    <h5>Temperature</h5>
                    <input name="temp"  type="text" class="col-md-8"> 
                    <div class="col-md-2"><small>&#8451;</small> </div>
                  </div>
                  <div class="col-md-4">
                    <h5>Respiration Rate</h5>
                    <input name="resp" type="text" class="col-md-8"> 
                    <div class="col-md-2"><small>x/mnt</small></div>
                  </div>
                  <div class="col-md-4">
                    <h5>O2 Saturation</h5>
                    <input name="o2" type="text" class="col-md-8"> 
                    <div class="col-md-2">%</div>
                  </div>
                </div>
                <div class="row col-md-12">
                  <div class="col-md-4">
                    <h5>Body Weight</h5>
                    <input name="bw" type="text" class="col-md-8"> 
                    <div class="col-md-2"><small>kgs</small> </div>
                  </div>
                </div>
                </div>  
                <!--/ VS -->
                <!-- PE -->
                <div class="col-md-8">
                  <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Physical Examination, Diagnosis </h4>
                  <div class="col-md-4">
                    <h5>Head, Neck:</h5>
                    <textarea name="head" id="demo-textarea-input" rows="9" class="form-control" placeholder="prosude admin + terapi, laboratori + non-laboratori, obat, disposable"></textarea> 
                  </div>
                  <div class="col-md-4">
                    <h5>Chest:</h5>
                    <textarea name="chest" id="demo-textarea-input" rows="9" class="form-control" placeholder=""></textarea> 
                  </div>
                  <div class="col-md-4">
                    <h5>Abdomen</h5>
                    <textarea name="abd" id="demo-textarea-input" rows="9" class="form-control" placeholder=""></textarea> 
                  </div>
                  <div class="col-md-4">
                    <h5>Extremities:</h5>
                    <textarea name="ext" id="demo-textarea-input" rows="9" class="form-control" placeholder="ada pilihan template harga2 penyakit, STD tes, treatment rabies, treatment diare"></textarea> 
                  </div>
                  <div class="col-md-4">
                    <h5>Other:</h5>
                    <textarea name="other" id="demo-textarea-input" rows="9" class="form-control" placeholder="di page gabungan klinis+plan ada template harge penyakit"></textarea> 
                  </div>
                  <div class="col-md-4">
                    <h5><strong>DIAGNOSIS</strong> :</h5>
                    <textarea name="other" id="demo-textarea-input" rows="9" class="form-control" placeholder="FORM MR 1 page, submit ke gabungan klinis + plan treatment, procedure."></textarea> 
                  </div>
                </div>  
                <!--/ PE -->
              </div>
            </div>
          </div>
          <!--/Anamnesis Content-->

          <!-- Plan Content -->
          <div id="demo-righticon-tab-2" class="tab-pane fade">
            <h3 class="panel-title">Plan
              <div class="pull-right">
                <a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
                <a data-toggle="tab" href="#demo-righticon-tab-2" class="btn btn-success btn-xs"><i class=""></i>Save</a>
                <input type="submit" name="simpan" value="Simpan" class="btn btn-success btn-xs">
              </div>
            </h3>
            <!-- content -->
            <div class="form-group">
              <div class="row">
                <div class="col-md-6">
                    <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Laboratory </h4>
                    <!-- Default choosen -->
                    <!--===================================================-->
                    <select class="demo-cs-multiselect" data-placeholder="Choose a Procedure" multiple tabindex="4">
                        <option value="United States">CBC (IDR 175.000)</option>
                        <option value="United Kingdom">ESR (IDR 75.000)</option>
                        <option value="Afghanistan">NS-1 Antigen Dengue (Rp 525.000)</option>
                        <option value="Aland Islands">Aland Islands</option>
                    </select>
                    <!--===================================================-->
                    <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Treatment </h4>
                      <select class="form-control" id="source" data-placeholder="Choose a Procedure">
                        <option value="Observation">Observation</option>
                        <option value="Outpatient">Outpatient</option>
                      </select>
                    <!--===================================================-->
                </div>
                <div class="col-md-6">
                    <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Diagnosis </h4>
                      <textarea id="demo-textarea-input" rows="9" class="form-control" placeholder="Enter Your Anamnesis Details"></textarea>
                </div>
              </div>
            </div>
            <!--/ content -->
          </div>
          <!--/ Plan Content -->
        </div>
      </form>
      </div>

    
    </form>
    <?php 
      if (isset($_POST['simpan'])) {
          $anamnesis = $_POST['anamnesis'];
          $bp = $_POST['bp'];
          $hr = $_POST['hr'];
          $reg = $_POST['reg'];
          $temp = $_POST['temp'];
          $resp = $_POST['resp'];
          $o2 = $_POST['o2'];
          $bw = $_POST['bw'];
          $head = $_POST['head'];
          $chest = $_POST['chest'];
          $abd = $_POST['abd'];
          $ext = $_POST['ext'];
          $other = $_POST['other'];

          $sql = $koneksi->query("INSERT INTO tb_pxa (anamnesis, bp, reg, temp, resp, o2, bw, head, chest, abd, ext, other) VALUES ('$anamnesis', '$bp', '$reg', '$temp', '$resp', '$o2', '$bw', '$head', '$chest', '$abd', '$ext', '$other')");
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
  
</div>



  
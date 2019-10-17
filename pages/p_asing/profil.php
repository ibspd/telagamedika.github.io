<!-- Modal Profil Pasien -->
<!-- <div class="modal fade" id="profil" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Profile Pasien</h4>
      </div>

<div class="modal-body">
    <div class="row">
        <div class="box-body" align="center"> 
            <dl class="">
            <dt>Patient Code</dt>
            <dd>PA001</dd>
        </div> 
        <div class="col-md-7">
            <div class="">
                <div class="box-body">
                    <dl class="dl-horizontal">
                        <dt>Nama Pasien</dt>
                        <dd>Alexander Freeman</dd>
                        <dt>Jenis Kelamin</dt>
                        <dd>Laki-laki</dd>
                        <dt>Tanggal Lahir</dt>
                        <dd>10/03/1991 (21 th)</dd>
                        <dt>Alamat di Bali</dt>
                        <dd>Starla Hotel #331</dd>
                        <dt>Nomer Telepon</dt>
                        <dd>087898765</dd>
                        <dt>Personal Number WA</dt>
                        <dd>+97891865456</dd>
                        <dt>Email</dt>
                        <dd>jhust_they@gmail.com</dd>
                        <br> 
                        <dt>Emergency Contact</dt>
                        <dd>Mr. Freemanson (098789087654)</dd>
                    </dl>
                </div>
            </div>
        </div>
    <div class="row">
        <div class="col-md-4">
            <div class="">
                <div class="box-body">
                    <dl>
                        <dt>Alergy</dt>
                        <dd>None</dd>
                        <dt>Pregnancy</dt>
                        <dd>No</dd> 
                        <dt>Breastfeeding</dt>
                        <dd>No</dd>
                        <dt>Past Medical Condition</dt>
                        <dd>No</dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default pull-right" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div> -->

<!-- Default Size -->
<div class="modal fade" id="profil" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="box-body" align="center"> 
                        <dl class="">
                        <dt>Patient Code</dt>
                        <dd>PA001</dd>
                    </div> 
                    <div class="col-md-7">
                        <div class="">
                            <div class="box-body">
                                <?php
                                $no = 1;
                                $sql = $koneksi->query("SELECT * FROM tb_pxa");
                                while ($data = $sql->fetch_assoc()) {
                                ?>
                                <dl class="dl-horizontal">
                                    <dt>Nama Pasien</dt>
                                    <dd><?=$data['fname']?> <?=$data['lname']?></dd>
                                    <dt>Jenis Kelamin</dt>
                                    <dd><?=$data['sex']?></dd>
                                    <dt>Tanggal Lahir</dt>
                                    <dd><?=$data['dob']?></dd>
                                    <dt>Alamat di Bali</dt>
                                    <dd><?=$data['alamat']?></dd>
                                    <dt>Nomer Telepon</dt>
                                    <dd><?=$data['phone']?></dd>
                                    <dt>Email</dt>
                                    <dd><?=$data['email']?></dd>
                                    <br> 
                                    <dt>Emergency Contact</dt>
                                    <dd><?=$data['emergency_name']?> (<?=$data['emergency_no']?>)</dd>
                                </dl>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="">
                            <div class="box-body">
                                <dl>
                                    <dt>Alergy</dt>
                                    <dd>None</dd>
                                    <dt>Pregnancy</dt>
                                    <dd>No</dd> 
                                    <dt>Breastfeeding</dt>
                                    <dd>No</dd>
                                    <dt>Past Medical Condition</dt>
                                    <dd>No</dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-link waves-effect">SAVE CHANGES</button>
                <button type="button" class="btn btn-link waves-effect" data-dismiss="modal">CLOSE</button>
            </div>
        </div>
    </div>
</div>


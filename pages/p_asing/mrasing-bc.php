<!--Page content-->
<!--===================================================-->
<style>
.table, th, td {
    text-align: center;
}
</style>


<div id="content-container">
    <div class="pageheader hidden-xs">
        <h3><i class="fa fa-home"></i> Medical Report </h3>
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

            <h3 class="panel-title"> Simple Form wizard  </h3>
            
        </div>
        <div class="panel-body np">

          <!-- START Form Wizard -->
          <form class="form-horizontal form-bordered" action="#" id="wizard">
            <!-- Wizard Container 1 -->
            <div class="wizard-title"> Clinical History </div>
            <div class="wizard-container">
              <div class="form-group">
                <div class="row">
                  <div class="col-md-3">
                      <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Medical History </h4>
                        <textarea id="demo-textarea-input" rows="9" class="form-control" placeholder="Your content here.."></textarea>
                  </div>
                  <div class="col-md-4">
                      <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Anamnesis Details </h4>
                        <textarea id="demo-textarea-input" rows="9" class="form-control" placeholder="Enter Your Anamnesis Details"></textarea>
                  </div>
                  <div class="col-md-5">
                      <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Physical Examination </h4>
                        <textarea id="demo-textarea-input" rows="9" class="form-control" placeholder="Enter Your Physical Examination Details"></textarea>
                  </div> 
                </div>
                <!-- end row -->
              </div>
            </div>
            <!-- Wizard Container 2 -->
            <div class="wizard-title"> Plan </div>
                <div class="wizard-container">
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
                              <option value="Albania">Albania</option>
                              <option value="Algeria">Algeria</option>
                              <option value="American Samoa">American Samoa</option>
                              <option value="Andorra">Andorra</option>
                              <option value="Angola">Angola</option>
                              <option value="Anguilla">Anguilla</option>
                              <option value="Antarctica">Antarctica</option>
                              <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                              <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                              <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                              <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                              <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                              <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                              <option value="French Polynesia">French Polynesia</option>
                              <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                              <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                              <option value="Honduras">Honduras</option>
                              <option value="Hong Kong">Hong Kong</option>
                          </select>
                          <!--===================================================-->

                      </div>
                      <div class="col-md-6">
                          <h4 class="text-primary"> <i class="fa fa-sign-in"></i> Diagnosis </h4>
                            <textarea id="demo-textarea-input" rows="9" class="form-control" placeholder="Enter Your Anamnesis Details"></textarea>
                      </div>
                    </div>
                    <!-- end row -->
                    </div>
                  </div>
                  <!-- Wizard Container 4 -->
                  <div class="wizard-title"> Treatment </div>
                  
                    <div class="wizard-container">
                        <div class="form-group">
                            <div class="col-md-6">
                              <h4 class="semibold text-primary"> <i class="fa fa-book"></i> Medication </h4>
                              <!-- Default choosen -->
                                <!--===================================================-->
                                <select data-placeholder="Choose a Country..." class="demo-chosen-select">
                                    <option value="United States">United States</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="Afghanistan">Afghanistan</option>
                                    <option value="Aland Islands">Aland Islands</option>
                                    <option value="Albania">Albania</option>
                                    <option value="Algeria">Algeria</option>
                                    <option value="American Samoa">American Samoa</option>
                                    <option value="Andorra">Andorra</option>
                                    <option value="Angola">Angola</option>
                                    <option value="Anguilla">Anguilla</option>
                                    <option value="Antarctica">Antarctica</option>
                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                    <option value="Bolivia, Plurinational State of">Bolivia, Plurinational State of</option>
                                    <option value="Bonaire, Sint Eustatius and Saba">Bonaire, Sint Eustatius and Saba</option>
                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                    <option value="French Polynesia">French Polynesia</option>
                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                    <option value="Honduras">Honduras</option>
                                    <option value="Hong Kong">Hong Kong</option>
                                </select>
                                <!--===================================================-->
                                <label class="col-sm-3 control-label" for="demo-is-inputsmall">Small Input</label>
                            <div class="col-sm-6">
                                <input type="text" placeholder=".input-sm" class="form-control input-sm" id="demo-is-inputsmall">
                            </div>
                            
                            <a href="?pages=pasien&aksi=mrasing_f" class="btn btn-primary">Submit</a>

                            </div>
                            <div class="col-md-6">
                              <h4 class="semibold text-primary"> <i class="fa fa-book"></i> Education </h4>
                              <p class="text-muted"> Where and when did you get your degree </p>
                            </div>
                        </div>
                      </div>
          </div>
          
          </form>
          
</div>
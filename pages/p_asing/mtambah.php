<!-- Large Size -->

<div class="modal fade" id="tambah" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="largeModalLabel">Registration</h4>
            </div>
            <div class="modal-body">
               
<!-- START Form Wizard -->
<form class="form-horizontal form-bordered" action="#" id="wizard">
     <!-- Wizard Container 1 -->
    <div class="wizard-title"> Identity </div>
    <div class="wizard-container">
            <div class="form-group">
                <label class="col-lg-3 control-label">Full name</label>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" name="firstName" placeholder="First name" />
                    </div>
                    <div class="col-xs-4">
                        <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Gender</label>
                <div class="col-lg-7">
                    <label class="form-radio form-icon">
                    <input type="radio" name="gender" value="male" > Male</label>
                    <label class="form-radio form-icon">
                    <input type="radio" name="gender" value="female" > Female</label>
                    <label class="form-radio form-icon">
                    <input type="radio" name="gender" value="other" > Other</label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Date of Birth</label>
                <div class="col-lg-7">
                    <div id="demo-dp-component">
                        <div class="input-group date">
                            <input type="text" class="form-control">
                            <span class="input-group-addon"><i class="fa fa-calendar fa-lg"></i></span> 
                        </div>
                        <small class="text-muted">Auto close on select</small> 
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="col-lg-3 control-label">Passport Number</label>
                <div class="col-lg-7">
                    <input type="number" class="form-control" name="passport" placeholder="passport">
                </div>
            </div>
    
    <!--/ Wizard Container 1 -->

    <!-- Wizard Container 2 -->
    <div class="wizard-title"> Contact information </div>
    <div class="wizard-container">
        <div class="form-group">
            <div class="col-md-12">
                <h4 class="semibold text-primary"> <i class="fa fa-user"></i> General information </h4>
                <p class="text-muted"> General information about applicant </p>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label>First name: <span class="text-danger">*</span> </label>
                    <input type="text" name="First-name" class="form-control" placeholder="First Name" />
                </div>
                <div class="col-md-6">
                    <label>Last Name: <span class="text-danger">*</span></label>
                    <input type="text" name="Last-name" class="form-control" placeholder="Last Name" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label>Phone #:</label>
                    <input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control" />
                </div>
                <div class="col-md-6">
                    <label>Date of birth:</label>
                    <input type="text" placeholder="99/99/9999" data-mask="99/99/9999" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <label>Select State: </label>
                    <select class="form-control" id="source2">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!--/ Wizard Container 2 -->
    
    <!-- Wizard Container 2 -->
    <div class="wizard-title"> General information </div>
    <div class="wizard-container">
        <div class="form-group">
            <div class="col-md-12">
                <h4 class="semibold text-primary"> <i class="fa fa-user"></i> General information </h4>
                <p class="text-muted"> General information about applicant </p>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label>First name: <span class="text-danger">*</span> </label>
                    <input type="text" name="First-name" class="form-control" placeholder="First Name" />
                </div>
                <div class="col-md-6">
                    <label>Last Name: <span class="text-danger">*</span></label>
                    <input type="text" name="Last-name" class="form-control" placeholder="Last Name" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-6">
                    <label>Phone #:</label>
                    <input type="text" placeholder="+99-99-9999-9999" data-mask="+99-99-9999-9999" class="form-control" />
                </div>
                <div class="col-md-6">
                    <label>Date of birth:</label>
                    <input type="text" placeholder="99/99/9999" data-mask="99/99/9999" class="form-control" />
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="row">
                <div class="col-md-12">
                    <label>Select State: </label>
                    <select class="form-control" id="source2">
                        <option value="AK">Alaska</option>
                        <option value="HI">Hawaii</option>
                        <option value="CA">California</option>
                        <option value="NV">Nevada</option>
                        <option value="OR">Oregon</option>
                        <option value="WA">Washington</option>
                        <option value="AZ">Arizona</option>
                        <option value="CO">Colorado</option>
                        <option value="ID">Idaho</option>
                        <option value="MT">Montana</option>
                        <option value="NE">Nebraska</option>
                        <option value="NM">New Mexico</option>
                        <option value="ND">North Dakota</option>
                        <option value="UT">Utah</option>
                        <option value="WY">Wyoming</option>
                        <option value="AL">Alabama</option>
                        <option value="AR">Arkansas</option>
                        <option value="IL">Illinois</option>
                        <option value="IA">Iowa</option>
                        <option value="KS">Kansas</option>
                        <option value="KY">Kentucky</option>
                        <option value="LA">Louisiana</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
    <!--/ Wizard Container 2 -->
       

</form>
<!--/ END Form Wizard -->





            </div>
            <div class="modal-footer">
               
            </div>
        </div>
    </div>
</div>

<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
$koneksi = new mysqli("localhost", "root", "", "telagamedika");

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

?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Telaga Medika Clinic</title>
        <link rel="shortcut icon" href="img/favicon.ico">
        <!--STYLESHEET-->
        <!--=================================================-->
        <!--Roboto Slab Font [ OPTIONAL ] -->
        <link href="http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100,700" rel="stylesheet">
        <link href="http://fonts.googleapis.com/css?family=Roboto:500,400italic,100,700italic,300,700,500italic,400" rel="stylesheet">
        <!--Bootstrap Stylesheet [ REQUIRED ]-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <!--Jasmine Stylesheet [ REQUIRED ]-->
        <link href="css/style.css" rel="stylesheet">
        <!--Font Awesome [ OPTIONAL ]-->
        <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <!--Switchery [ OPTIONAL ]-->
        <link href="plugins/switchery/switchery.min.css" rel="stylesheet">
        <!--Bootstrap Select [ OPTIONAL ]-->
        <link href="plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <link href="plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <link href="plugins/bootstrap-tagsinput/bootstrap-tagsinput.css" rel="stylesheet">
        <!--Bootstrap Table [ OPTIONAL ]-->
        <link href="plugins/datatables/media/css/dataTables.bootstrap.css" rel="stylesheet">
        <link href="plugins/datatables/extensions/Responsive/css/dataTables.responsive.css" rel="stylesheet">
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <link href="plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <link href="plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <!--Jquery Tag It [ OPTIONAL ]-->
        <link href="plugins/tag-it/jquery.tagit.css" rel="stylesheet">
        <!--Ion.RangeSlider [ OPTIONAL ]-->
        <link href="plugins/ion-rangeslider/ion.rangeSlider.css" rel="stylesheet">
        <link href="plugins/ion-rangeslider/ion.rangeSlider.skinNice.css" rel="stylesheet">
         <!--Chosen [ OPTIONAL ]-->
         <link href="plugins/chosen/chosen.min.css" rel="stylesheet">
        <!--noUiSlider [ OPTIONAL ]-->
        <link href="plugins/noUiSlider/jquery.nouislider.min.css" rel="stylesheet">
        <link href="plugins/noUiSlider/jquery.nouislider.pips.min.css" rel="stylesheet">
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <link href="plugins/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet">
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <link href="plugins/bootstrap-datepicker/bootstrap-datepicker.css" rel="stylesheet">
        <!--Dropzone [ OPTIONAL ]-->
        <link href="plugins/dropzone/dropzone.css" rel="stylesheet">
        <!--Summernote [ OPTIONAL ]-->
        <link href="plugins/summernote/summernote.min.css" rel="stylesheet">
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <link href="plugins/bootstrap-validator/bootstrapValidator.min.css" rel="stylesheet">
        <!--Demo [ DEMONSTRATION ]-->
        <link href="css/demo/jquery-steps.min.css" rel="stylesheet">
        <!--SCRIPT-->
        <!--=================================================-->
        <!--Page Load Progress Bar [ OPTIONAL ]-->
        <link href="plugins/pace/pace.min.css" rel="stylesheet">
        <script src="plugins/pace/pace.min.js"></script>

    </head>
    <!--TIPS-->
    <!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

    <body>
    <!--JAVASCRIPT-->
        <!--=================================================-->
        <!--jQuery [ REQUIRED ]-->
        <script src="js/jquery-2.1.1.min.js"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="plugins/nanoscrollerjs/jquery.nanoscroller.min.js"></script>
        <!--jQuery UI [ REQUIRED ]-->
        <script src="js/jquery-ui.min.js"></script>
        <!--BootstrapJS [ RECOMMENDED ]-->
        <script src="js/bootstrap.min.js"></script>
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src="plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js"></script>
        <!--Bootstrap Tags Input [ OPTIONAL ]-->
        <script src="plugins/tag-it/tag-it.min.js"></script>
        <!--Bootstrap Select [ OPTIONAL ]-->
        <script src="plugins/bootstrap-select/bootstrap-select.min.js"></script>
        <!--Bootstrap Wizard [ OPTIONAL ]-->
        <script src="plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js"></script>
        <!--Bootstrap Timepicker [ OPTIONAL ]-->
        <script src="plugins/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
        <!--Bootstrap Datepicker [ OPTIONAL ]-->
        <script src="plugins/bootstrap-datepicker/bootstrap-datepicker.js"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="plugins/masked-input/bootstrap-inputmask.min.js"></script>
        <!--Bootstrap Validator [ OPTIONAL ]-->
        <script src="plugins/bootstrap-validator/bootstrapValidator.min.js"></script>
        <!--Fast Click [ OPTIONAL ]-->
        <script src="plugins/fast-click/fastclick.min.js"></script>
        <!--Jasmine Admin [ RECOMMENDED ]-->
        <script src="js/scripts.js"></script>
        <!--Switchery [ OPTIONAL ]-->
        <script src="plugins/switchery/switchery.min.js"></script>
        <!--Jquery Nano Scroller js [ REQUIRED ]-->
        <script src="plugins/nanoscrollerjs/jquery.nanoscroller.min.js"></script>
        <!--Metismenu js [ REQUIRED ]-->
        <script src="plugins/metismenu/metismenu.min.js"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="plugins/parsley/parsley.min.js"></script>
        <!--Chosen [ OPTIONAL ]-->
        <script src="plugins/chosen/chosen.jquery.min.js"></script>
        <!--noUiSlider [ OPTIONAL ]-->
        <script src="plugins/noUiSlider/jquery.nouislider.all.min.js"></script>
        <!--Dropzone [ OPTIONAL ]-->
        <script src="plugins/dropzone/dropzone.min.js"></script>
        <!--Jquery Steps [ OPTIONAL ]-->
        <script src="plugins/jquery-steps/jquery-steps.min.js"></script>
        <!--Fullscreen jQuery [ OPTIONAL ]-->
        <script src="plugins/screenfull/screenfull.js"></script>
        <!--Form Wizard [ SAMPLE ]-->
        <script src="js/demo/wizard.js"></script>
        <!--Form Component [ SAMPLE ]-->
        <script src="js/demo/form-component.js"></script>
        <!--Form validation [ SAMPLE ]-->
        <script src="js/demo/form-validation.js"></script>
        <!--DataTables [ OPTIONAL ]-->
        <script src="plugins/datatables/media/js/jquery.dataTables.js"></script>
        <script src="plugins/datatables/media/js/dataTables.bootstrap.js"></script>
        <script src="plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script>
        <!--DataTables Sample [ SAMPLE ]-->
        <script src="js/demo/tables-datatables.js"></script>
        <!--Masked Input [ OPTIONAL ]-->
        <script src="plugins/masked-input/jquery.maskedinput.min.js"></script>
        

        <div id="container" class="effect mainnav-sm navbar-fixed mainnav-fixed">

            <!--NAVBAR-->
            <!--===================================================-->
            <header id="navbar">
                <div id="navbar-container" class="boxed">
                    <!--Navbar Dropdown-->
                    <!--================================-->
                    <div class="navbar-content clearfix">
                        <ul class="nav navbar-top-links pull-left">
                            <!--Navigation toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="tgl-menu-btn">
                                <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End Navigation toogle button-->
                            

                            
                        </ul>
                        <ul class="nav navbar-top-links pull-right">
                            <!--Profile toogle button-->
                            
                            <!--End Profile toogle button-->

                            <!--User dropdown-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li id="dropdown-user" class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right"> <img class="img-circle img-user media-object" src="img/av1.png" alt="Profile Picture"> </span>
                                    <div class="username hidden-xs">John Doe</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right with-arrow">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="#"> <i class="fa fa-user fa-fw"></i> Profile </a>
                                        </li>
                                        <li>
                                            <a href="#">  <i class="fa fa-envelope fa-fw"></i> Messages </a>
                                        </li>
                                        <li>
                                            <a href="#">  <i class="fa fa-gear fa-fw"></i> Settings </a>
                                        </li>
                                        <li>
                                            <a href="#"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <!--End user dropdown-->
                        </ul>
                    </div>
                    <!--================================-->
                    <!--End Navbar Dropdown-->
                </div>
            </header>
            <!--===================================================-->
            <!--END NAVBAR-->
            
            <div class="boxed">
                <!--CONTENT CONTAINER-->
                <!--===================================================-->

                <?php
                $pages = $_GET[pages];
                $aksi = $_GET[aksi];

                if ($pages == "") {
                    if ($aksi == "") {
                    include "home.php";
                    }
                    if ($aksi == "hapus") {
                    include "hapus.php";
                    }
                }
                if ($pages == "import") {
                    if ($aksi == "") {
                    include "pages/import.php";
                    }
                }
                if ($pages == "kasus") {
                    if ($aksi == "") {
                    include "pages/kasus/kasus.php";
                    }
                    if ($aksi == "tambah") {
                    include "pages/kasus/tambah.php";
                    }
                    if ($aksi == "ubah") {
                    include "pages/kasus/ubah.php";
                    }
                    if ($aksi == "hapus") {
                    include "pages/kasus/hapus.php";
                    }
                }
                if ($pages == "mr_unf") {
                    if ($aksi == "") {
                    include "pages/mr/mr_unf.php";
                    }
                    if ($aksi == "tambah") {
                    include "pages/mr/tambah.php";
                    }
                    if ($aksi == "ubah") {
                    include "pages/mr/ubah.php";
                    }
                    if ($aksi == "hapus") {
                    include "pages/mr/hapus.php";
                    }
                }
                if ($pages == "keuangan") {
                    if ($aksi == "") {
                    include "pages/keuangan/keuangan.php";
                    }
                    if ($aksi == "tambah") {
                    include "page/keuangan/tambah.php";
                    }
                    if ($aksi == "ubah") {
                    include "pages/keuangan/ubah.php";
                    }
                    if ($aksi == "hapus") {
                    include "pages/keuangan/hapus.php";
                    }
                }
                if ($pages == "marketing") {
                    if ($aksi == "") {
                    include "pages/marketing/marketing.php";
                    }
                    if ($aksi == "tambah") {
                    include "pages/marketing/tambah.php";
                    }
                    if ($aksi == "ubah") {
                    include "pages/marketing/ubah.php";
                    }
                    if ($aksi == "hapus") {
                    include "page/marketing/hapus.php";
                    }
                }
                if ($pages == "obat") {
                    if ($aksi == "") {
                    include "pages/obat/obat.php";
                    }
                    if ($aksi == "tambah") {
                    include "pages/obat/tambah.php";
                    }
                    if ($aksi == "update") {
                    include "pages/obat/update.php";
                    }
                    if ($aksi == "hapus") {
                    include "pages/obat/hapus.php";
                    }
                    if ($aksi == "import") {
                    include "pages/obat/import.php";
                    }
                }
                if ($pages == "disp") {
                    if ($aksi == "") {
                    include "pages/disp/disp.php";
                    }
                    if ($aksi == "tambah") {
                    include "pages/disp/tambah.php";
                    }
                    if ($aksi == "update") {
                    include "pages/disp/update.php";
                    }
                    if ($aksi == "hapus") {
                    include "pages/disp/hapus.php";
                    }
                    if ($aksi == "import") {
                    include "pages/disp/import.php";
                    }
                }
                if ($pages == "p_asing") {
                    if ($aksi == "") {
                    include "pages/p_asing/p_asing.php";
                    }
                    if ($aksi == "mrasing") {
                    include "pages/p_asing/mrasing.php";
                    }
                    if ($aksi == "tambah") {
                    include "pages/p_asing/tambah.php";
                    }
                    if ($aksi == "hapus") {
                    include "pages/p_asing/hapus.php";
                    }
                }
                if ($pages == "p_lokal") {
                    if ($aksi == "") {
                    include "pages/p_lokal/p_lokal.php";
                    }
                    if ($aksi == "mrasing") {
                    include "pages/p_lokal/mrlokal.php";
                    }
                    if ($aksi == "rm") {
                    include "pages/p_lokal/rm.php";
                    }
                    if ($aksi == "rm2") {
                    include "pages/p_lokal/rm2.php";
                    }
                    if ($aksi == "tambah") {
                    include "pages/p_lokal/tambah.php";
                    }
                    if ($aksi == "edit") {
                    include "pages/p_lokal/edit.php";
                    }
                    if ($aksi == "hapus") {
                    include "pages/p_lokal/hapus.php";
                    }
                }
                if ($pages == "prosedur") {
                    if ($aksi == "") {
                    include "pages/prosedur/prosedur.php";
                    }
                    if ($aksi == "tambah") {
                    include "pages/prosedur/tambah.php";
                    }
                    if ($aksi == "update") {
                    include "pages/prosedur/update.php";
                    }
                    if ($aksi == "hapus") {
                    include "pages/prosedur/hapus.php";
                    }
                    if ($aksi == "import") {
                    include "pages/prosedur/import.php";
                    }
                }
                if ($pages == "lab") {
                    if ($aksi == "") {
                    include "pages/lab/lab.php";
                    }
                    if ($aksi == "tambah") {
                    include "pages/lab/tambah.php";
                    }
                    if ($aksi == "update") {
                    include "pages/lab/update.php";
                    }
                    if ($aksi == "hapus") {
                    include "pages/lab/hapus.php";
                    }
                    if ($aksi == "import") {
                    include "pages/lab/import.php";
                    }
                }
                if ($pages == "fo") {
                    if ($aksi == "") {
                    include "pages/fo/antrean.php";
                    }
                    if ($aksi == "tambah") {
                    include "pages/fo/tambah.php";
                    }
                    if ($aksi == "update") {
                    include "pages/fo/update.php";
                    }
                    if ($aksi == "hapus") {
                    include "pages/fo/hapus.php";
                    }
                    if ($aksi == "import") {
                    include "pages/fo/import.php";
                    }
                    if ($aksi == "list") {
                    include "pages/fo/list.php";
                    }
                }
                if ($pages == "staf") {
                    if ($aksi == "") {
                    include "pages/staf/staf.php";
                    }
                    if ($aksi == "tambah") {
                    include "pages/staf/tambah.php";
                    }
                    if ($aksi == "kurang") {
                    include "pages/staf/kurang.php";
                    }
                    if ($aksi == "hapus") {
                    include "pages/staf/hapus.php";
                    }
                    if ($aksi == "import") {
                    include "pages/staf/import.php";
                    }
                }
                if ($pages == "print") {
                    if ($aksi == "print_mr") {
                    include "pages/print/print_mr.php";
                    }
                }
                if ($pages == "print_inv") {
                    if ($aksi == "print_inv") {
                    include "pages/print/print_inv.php";
                    }
                } ?>   
                    
                </div>
                <!--===================================================-->
                <!--END CONTENT CONTAINER-->

                <!--MAIN NAVIGATION-->
                <!--===================================================-->
                <nav id="mainnav-container">

                    <!--Brand logo & name-->
                    <!--================================-->
                    <div class="navbar-header">
                        <a href="index.html" class="navbar-brand">
                            <i class="fa fa-heartbeat brand-icon"></i>
                            <div class="brand-title">
                                <span class="brand-text">Telaga</span>
                            </div>
                        </a>
                    </div>
                    <!--================================-->
                    <!--End brand logo & name-->


                    <div id="mainnav">
                        <!--Menu-->
                        <!--================================-->
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                    <ul id="mainnav-menu" class="list-group">
                                        <!--Category name-->
                                        <li class="list-header">Navigation</li>
                                        <!--Menu list item-->
                                        <li> 
                                            <a href="?home"> <i class="fa fa-home"></i> <span class="menu-title"> Dashboard </span> 
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="?pages=fo"> <i class="fa fa-newspaper-o"></i> <span class="menu-title"> Administrasi (Front Office) </span> 
                                            </a> 
                                        </li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="">
                                            <i class="fa fa-pencil-square-o"></i>
                                            <span class="menu-title"> Medical Report</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href=""><i class="fa fa-caret-right"></i> Finish </a></li>
                                                <li><a href="?pages=mr_unf"><i class="fa fa-caret-right"></i> Unfinish </a></li>
                                            </ul>
                                        </li>
                                        <li> 
                                            <a href="?pages=marketing"> <i class="fa fa-user-secret"></i> <span class="menu-title"> Marketing </span> 
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="?pages=prosedur"> <i class="fa fa-briefcase"></i> <span class="menu-title"> Prosedur </span> 
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="?pages=obat"> <i class="fa fa-glass"></i> <span class="menu-title"> Obat </span> 
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="?pages=disp"> <i class="fa fa-glass"></i> <span class="menu-title"> Disposabel </span> 
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="?pages=lab"> <i class="fa fa-eye"></i> <span class="menu-title"> Pemeriksaan Penunjang </span> 
                                            </a> 
                                        </li>
                                        <li> 
                                            <a href="?pages=staf"> <i class="fa fa-users"></i> <span class="menu-title"> Staf </span> 
                                            </a> 
                                        </li>
                                        <!--Category name-->
                                        <li class="list-header">Components</li>
                                       
                                        
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-briefcase"></i>
                                            <span class="menu-title">UI Elements</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="ui-animation.html"><i class="fa fa-caret-right"></i> CSS3 Animation </a></li>
                                                <li><a href="ui-panel.html"><i class="fa fa-caret-right"></i> Panel </a></li>
                                            </ul>
                                        </li>
                                        
                                        
                                        
                                        
                                        <li class="list-divider"></li>
                                        <!--Category name-->
                                        <li class="list-header">Extra</li>
                                        <!--Menu list item-->
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-envelope-o"></i>
                                            <span class="menu-title">Mail</span>
                                            <i class="arrow"></i>
                                            </a>
                                            <!--Submenu-->
                                            <ul class="collapse">
                                                <li><a href="mail-inbox.html"><i class="fa fa-caret-right"></i> Inbox </a></li>
                                                <li><a href="mail-compose.html"><i class="fa fa-caret-right"></i> Compose </a></li>
                                                <li><a href="mail-mailview.html"><i class="fa fa-caret-right"></i> Mail View </a></li>
                                            </ul>
                                        </li>
                                        
                                        
                                    </ul>
                                    <!--Widget-->
                                    <!--================================-->
                                    <div class="mainnav-widget">
                                        <!-- Show the button on collapsed navigation -->
                                        <div class="show-small">
                                            <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                            <i class="fa fa-desktop"></i>
                                            </a>
                                        </div>
                                        <!-- Hide the content on collapsed navigation -->
                                        <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                                            <ul class="list-group">
                                                <li class="list-header pad-no pad-ver">Server Status</li>
                                                <li class="mar-btm">
                                                    <span class="label label-primary pull-right">15%</span>
                                                    <p>CPU Usage</p>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar progress-bar-primary" style="width: 15%;">
                                                            <span class="sr-only">15%</span>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="mar-btm">
                                                    <span class="label label-purple pull-right">75%</span>
                                                    <p>Bandwidth</p>
                                                    <div class="progress progress-sm">
                                                        <div class="progress-bar progress-bar-purple" style="width: 75%;">
                                                            <span class="sr-only">75%</span>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--================================-->
                                    <!--End widget-->
                                </div>
                            </div>
                        </div>
                        <!--================================-->
                        <!--End menu-->
                    </div>
                </nav>
                <!--===================================================-->
                <!--END MAIN NAVIGATION-->
            </div>

<!-- content -->
                

            
            <!-- FOOTER -->
            <!--===================================================-->
            <footer id="footer">
                <!-- Visible when footer positions are fixed -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>
                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div>
                <!-- Visible when footer positions are static -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <div class="hide-fixed pull-right pad-rgt">Currently v1</div>
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <!-- Remove the class name "show-fixed" and "hide-fixed" to make the content always appears. -->
                <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
                <p class="pad-lft">&#0169; 2018 PT. Surya Telaga Medika</p>
            </footer>
            <!--===================================================-->
            <!-- END FOOTER -->
            <!-- SCROLL TOP BUTTON -->
            <!--===================================================-->
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            <!--===================================================-->
        </div>
            
    
        <!--===================================================-->
        <!-- END OF CONTAINER -->
    </body>
</html>
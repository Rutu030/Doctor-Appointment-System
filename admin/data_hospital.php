<!doctype html>
<html class="no-js" lang="en">
<?php
$con=mysqli_connect("localhost","root","","appointment_portal_db")or die("Database Error....!");
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Doctorpro</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="../Images/logo-6 - Copy.jpg">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
        ============================================ -->
    <link rel="stylesheet" href="css/editor/select2.css">
    <link rel="stylesheet" href="css/editor/datetimepicker.css">
    <link rel="stylesheet" href="css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="css/editor/x-editor-style.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="css/data-table/bootstrap-editable.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
  <?php
  include('aside.php');
  ?>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <?php
    include('top_menu.php');
    ?>
</div>
</div>
</div>
</div>
<!-- Mobile Menu start -->
<div class="mobile-menu-area">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="mobile-menu">
<nav id="dropdown">
    <ul class="mobile-menu-nav">
        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul class="collapse dropdown-header-top">
                <li><a href="index.html">Dashboard v.1</a></li>
                <li><a href="index-1.html">Dashboard v.2</a></li>
                <li><a href="index-3.html">Dashboard v.3</a></li>
                <li><a href="analytics.html">Analytics</a></li>
                <li><a href="widgets.html">Widgets</a></li>
            </ul>
        </li>
        <li><a href="events.html">Event</a></li>
        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="demoevent" class="collapse dropdown-header-top">
                <li><a href="all-professors.html">All Professors</a>
                </li>
                <li><a href="add-professor.html">Add Professor</a>
                </li>
                <li><a href="edit-professor.html">Edit Professor</a>
                </li>
                <li><a href="professor-profile.html">Professor Profile</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="demopro" class="collapse dropdown-header-top">
                <li><a href="all-students.html">All Students</a>
                </li>
                <li><a href="add-student.html">Add Student</a>
                </li>
                <li><a href="edit-student.html">Edit Student</a>
                </li>
                <li><a href="student-profile.html">Student Profile</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="democrou" class="collapse dropdown-header-top">
                <li><a href="all-courses.html">All Courses</a>
                </li>
                <li><a href="add-course.html">Add Course</a>
                </li>
                <li><a href="edit-course.html">Edit Course</a>
                </li>
                <li><a href="course-profile.html">Courses Info</a>
                </li>
                <li><a href="course-payment.html">Courses Payment</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="demolibra" class="collapse dropdown-header-top">
                <li><a href="library-assets.html">Library Assets</a>
                </li>
                <li><a href="add-library-assets.html">Add Library Asset</a>
                </li>
                <li><a href="edit-library-assets.html">Edit Library Asset</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="demodepart" class="collapse dropdown-header-top">
                <li><a href="departments.html">Departments List</a>
                </li>
                <li><a href="add-department.html">Add Departments</a>
                </li>
                <li><a href="edit-department.html">Edit Departments</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="demo" class="collapse dropdown-header-top">
                <li><a href="mailbox.html">Inbox</a>
                </li>
                <li><a href="mailbox-view.html">View Mail</a>
                </li>
                <li><a href="mailbox-compose.html">Compose Mail</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                <li><a href="google-map.html">Google Map</a>
                </li>
                <li><a href="data-maps.html">Data Maps</a>
                </li>
                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                </li>
                <li><a href="x-editable.html">X-Editable</a>
                </li>
                <li><a href="code-editor.html">Code Editor</a>
                </li>
                <li><a href="tree-view.html">Tree View</a>
                </li>
                <li><a href="preloader.html">Preloader</a>
                </li>
                <li><a href="images-cropper.html">Images Cropper</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="Chartsmob" class="collapse dropdown-header-top">
                <li><a href="bar-charts.html">Bar Charts</a>
                </li>
                <li><a href="line-charts.html">Line Charts</a>
                </li>
                <li><a href="area-charts.html">Area Charts</a>
                </li>
                <li><a href="rounded-chart.html">Rounded Charts</a>
                </li>
                <li><a href="c3.html">C3 Charts</a>
                </li>
                <li><a href="sparkline.html">Sparkline Charts</a>
                </li>
                <li><a href="peity.html">Peity Charts</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="Tablesmob" class="collapse dropdown-header-top">
                <li><a href="static-table.html">Static Table</a>
                </li>
                <li><a href="data-table.html">Data Table</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="formsmob" class="collapse dropdown-header-top">
                <li><a href="basic-form-element.html">Basic Form Elements</a>
                </li>
                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                </li>
                <li><a href="password-meter.html">Password Meter</a>
                </li>
                <li><a href="multi-upload.html">Multi Upload</a>
                </li>
                <li><a href="tinymc.html">Text Editor</a>
                </li>
                <li><a href="dual-list-box.html">Dual List Box</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                <li><a href="basic-form-element.html">Basic Form Elements</a>
                </li>
                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                </li>
                <li><a href="password-meter.html">Password Meter</a>
                </li>
                <li><a href="multi-upload.html">Multi Upload</a>
                </li>
                <li><a href="tinymc.html">Text Editor</a>
                </li>
                <li><a href="dual-list-box.html">Dual List Box</a>
                </li>
            </ul>
        </li>
        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
            <ul id="Pagemob" class="collapse dropdown-header-top">
                <li><a href="login.html">Login</a>
                </li>
                <li><a href="register.html">Register</a>
                </li>
                <li><a href="lock.html">Lock</a>
                </li>
                <li><a href="password-recovery.html">Password Recovery</a>
                </li>
                <li><a href="404.html">404 Page</a></li>
                <li><a href="500.html">500 Page</a></li>
            </ul>
        </li>
    </ul>
</nav>
</div>
</div>
</div>
</div>
</div>
<!-- Mobile Menu end -->

</div>
<br>

       
            <div class="container-fluid">
                <div class="row">

                    <!-- <div class="col-lg-2 "></div> -->

                    <div class="col-lg-12">
                        
                                        <?php
                                            $res=mysqli_query($con,"SELECT * FROM hospital WHERE owner_id='".$_GET['did']."'");
                                            while($row=mysqli_fetch_row($res))
                                            {
                                                $dep=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM department WHERE DID='".$row[12]."'"));
                                                            echo '
                                        <div class="col-lg-2 col-md-2"></div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                            <div class="profile-info-inner">
                                                <div class="profile-img">
                                                    <img src="'.$row[10].'" alt="" />
                                                </div>
                                                <div class="profile-details-hr">

                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                        <center>
                                                            <div class="address-hr">
                                                                <p><b style="color:blue">Hospital </b><br />'.$dep[1].'</p>
                                                            </div>
                                                        </center>

                                                        </div>
                                                        
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                            <div class="address-hr">
                                                                <p><b>Name</b><br />'.$row[1].'</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                            <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                                <p><b>Education</b><br /> '.$row[5].'</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                            <div class="address-hr">
                                                                <p><b>Email ID</b><br /> '.$row[3].'</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                            <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                                <p><b>Phone</b><br /> '.$row[2].'</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                            <div class="address-hr">
                                                                <p><b>Address</b><br /> '.$row[4].'</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                            <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                                <p><b>Experience</b><br /> '.$row[6].'</p>
                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="row">
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                            <div class="address-hr">
                                                                <p><b>Username</b><br /> '.$row[8].'</p>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-12 col-sm-12 col-xs-6">
                                                            <div class="address-hr tb-sm-res-d-n dps-tb-ntn">
                                                                <p><b>Password</b><br /> '.$row[9].'</p>
                                                            </div>
                                                        </div>
                                                    </div>



                                                 
                                                </div>
                                            </div>
                                        </div>';
                                        }
                                        ?>


                        

                  
            </div>
        </div>
       <br>
       <br>
       <br>
       <br>
       <br>
       <br>
       <?php
       include('footer.php');
       ?>
    </div>

    <!-- jquery
		============================================ -->
    <!-- jquery
        ============================================ -->
    <script src="js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="js/metisMenu/metisMenu.min.js"></script>
    <script src="js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="js/data-table/bootstrap-table.js"></script>
    <script src="js/data-table/tableExport.js"></script>
    <script src="js/data-table/data-table-active.js"></script>
    <script src="js/data-table/bootstrap-table-editable.js"></script>
    <script src="js/data-table/bootstrap-editable.js"></script>
    <script src="js/data-table/bootstrap-table-resizable.js"></script>
    <script src="js/data-table/colResizable-1.5.source.js"></script>
    <script src="js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="js/editable/jquery.mockjax.js"></script>
    <script src="js/editable/mock-active.js"></script>
    <script src="js/editable/select2.js"></script>
    <script src="js/editable/moment.min.js"></script>
    <script src="js/editable/bootstrap-datetimepicker.js"></script>
    <script src="js/editable/bootstrap-editable.js"></script>
    <script src="js/editable/xediable-active.js"></script>
    <!-- Chart JS
        ============================================ -->
    <script src="js/chart/jquery.peity.min.js"></script>
    <script src="js/peity/peity-active.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="js/tab.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="js/tawk-chat.js"></script>
</body>

</html>
<!doctype html>
<html class="no-js" lang="en">
<?php

$con=mysqli_connect("localhost","root","","appointment_portal_db")or die("Database Error....!");
session_start();

    if(isset($_SESSION['hospital']))
    {

    }
    else
    {
        echo '
     <script>
       window.location.href="../login.php";
        </script>
        ';
    }
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
    <link rel="stylesheet" href="../admin/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/owl.carousel.css">
    <link rel="stylesheet" href="../admin/css/owl.theme.css">
    <link rel="stylesheet" href="../admin/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/main.css">
    <!-- educate icon CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/educate-custon-icon.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../admin/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../admin/css/calendar/fullcalendar.print.min.css">
    <!-- x-editor CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/editor/select2.css">
    <link rel="stylesheet" href="../admin/css/editor/datetimepicker.css">
    <link rel="stylesheet" href="../admin/css/editor/bootstrap-editable.css">
    <link rel="stylesheet" href="../admin/css/editor/x-editor-style.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="../admin/css/data-table/bootstrap-editable.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="../admin/js/vendor/modernizr-2.8.3.min.js"></script>
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
<div class="breadcome-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

</div>
</div>
</div>
</div>
</div>
<br>
<br>
<br>
<br>

        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                 <div class="row">
                    <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12"></div>
                        <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <h1> <span class="table-project-n">Department</span> Data</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
                                                                    <option value="">Export Basic</option>
                                                                    <option value="all">Export All</option>
                                                                    <option value="selected">Export Selected</option>
                                                                </select>
                                    </div>
                                    <table style="font-weight: bold;" id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead style="background-color: #000;color: #fff;">
                                            <tr>
                                                
                                                <th >Sr. No</th>
                                                <th >Department</th>
                                                <th>
                                                    <center> Update</center>
                                                </th>
                                                <th >
                                                    <center> Delete</center>
                                                </th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $sr=1;
                                            $res=mysqli_query($con,"SELECT * FROM department WHERE HID='".$_SESSION['hospital']."'");
                                            while($row=mysqli_fetch_row($res))
                                            {

                                            echo '
                                            <tr>
                                               
                                                <td>'.$sr.'</td>
                                                <td>'.$row[1].'</td>
                                               
                                                <td>
                                                    <a href="update_dep.php?id='.$row[0].'">

                                                    <center> 
                                                        
                                                            <i class="fa fa-pencil" aria-hidden="true" style="font-size: 20px;color: blue;"></i>
                                                    </center>
                                                    </a>
                                                </td>
                                                 <td>
                                                    <a href="delete_dep.php?id='.$row[0].'">

                                                    <center> 
                                                        <i class="fa fa-times" aria-hidden="true" style="font-size: 20px;color: red;"></i>
                                                    </center>
                                                    </a>
                                                </td>
                                                
                                            </tr>';
                                            $sr++;
                                                }
                                            ?>
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
       <br>
       <br>
       <br>
       <br>
       <br><br>
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
    <script src="../admin/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="../admin/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="../admin/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="../admin/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="../admin/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="../admin/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="../admin/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="../admin/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="../admin/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="../admin/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="../admin/js/metisMenu/metisMenu.min.js"></script>
    <script src="../admin/js/metisMenu/metisMenu-active.js"></script>
    <!-- data table JS
        ============================================ -->
    <script src="../admin/js/data-table/bootstrap-table.js"></script>
    <script src="../admin/js/data-table/tableExport.js"></script>
    <script src="../admin/js/data-table/data-table-active.js"></script>
    <script src="../admin/js/data-table/bootstrap-table-editable.js"></script>
    <script src="../admin/js/data-table/bootstrap-editable.js"></script>
    <script src="../admin/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="../admin/js/data-table/colResizable-1.5.source.js"></script>
    <script src="../admin/js/data-table/bootstrap-table-export.js"></script>
    <!--  editable JS
        ============================================ -->
    <script src="../admin/js/editable/jquery.mockjax.js"></script>
    <script src="../admin/js/editable/mock-active.js"></script>
    <script src="../admin/js/editable/select2.js"></script>
    <script src="../admin/js/editable/moment.min.js"></script>
    <script src="../admin/js/editable/bootstrap-datetimepicker.js"></script>
    <script src="../admin/js/editable/bootstrap-editable.js"></script>
    <script src="../admin/js/editable/xediable-active.js"></script>
    <!-- Chart JS
        ============================================ -->
    <script src="../admin/js/chart/jquery.peity.min.js"></script>
    <script src="../admin/js/peity/peity-active.js"></script>
    <!-- tab JS
        ============================================ -->
    <script src="../admin/js/tab.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="../admin/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="../admin/js/main.js"></script>
    <!-- tawk chat JS
        ============================================ -->
    <script src="../admin/js/tawk-chat.js"></script>
</body>

</html>
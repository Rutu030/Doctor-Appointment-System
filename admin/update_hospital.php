<!doctype html>
<html class="no-js" lang="en">
<?php
$con=mysqli_connect("localhost","root","","appointment_portal_db")or die("Database Error....!");

$id=$_GET['did'];
$hdata=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM hospital WHERE owner_id='".$id."'"));
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
    <!-- modals CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/modals.css">
    <!-- forms CSS
        ============================================ -->
    <link rel="stylesheet" href="../admin/css/form/all-type-forms.css">
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

</div>
</div>
</div>
</div>
</div>
<!-- Mobile Menu end -->

</div>
<br>
        <div class="analytics-sparkle-area">
            <div class="container-fluid">
                 <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 col-xs-2"></div>
                    <div class="col-lg-10 col-md-10 col-sm-10 col-xs-10" >
                        <div class="sparkline12-list" style="border-top: 3px solid orange;border-radius: 20px;">
                            <div class="sparkline12-hd" >
                                <div class="main-sparkline12-hd" style="text-align: center;">
                                    <h1>Hospital Registration</h1>
                                </div>
                            </div>
                            <br>
                            <div class="sparkline12-graph">
                                <div class="basic-login-form-ad">
                                    <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="all-form-element-inner">
                                                <form action="update_hospital.php?did=<?php echo $hdata[0]?>" method="POST" >

                                                   <div class="form-group-inner">
                                                        <div class="row">

                                                          

                                                          <div class="col-lg-6">
                                                                <h5 style="text-align: center;color: royalblue;">Update Owner Details</h5>
                                                          </div>

                                                          <div class="col-lg-6">
                                                                <h5 style="text-align: center;color: royalblue;">Update Hospital Details</h5>
                                                          </div>


                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">

                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Owner Name</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <input type="hidden" value="<?php echo $hdata[0]?>" name="id">

                                                                <input name="o_name" value="<?php echo $hdata[1]?>"type="text" class="form-control" />

                                                            </div>

                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Hospital Name</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                               
                                                                <input name="h_name" value="<?php echo $hdata[7]?>" type="text" class="form-control" />
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">

                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Address</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                 <textarea name="o_address" class="form-control"><?php echo $hdata[2]?></textarea>
                                                            </div>

                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Address</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                 <textarea name="h_address" class="form-control"><?php echo $hdata[8]?></textarea>
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">

                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Contact</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <input value="<?php echo $hdata[3]?>" name="o_contact"type="number" class="form-control" />
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">

                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">E-mail</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <input  value="<?php echo $hdata[4]?>" name="email"type="text" class="form-control" />
                                                            </div>

                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">City</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <input name="city"  value="<?php echo $hdata[10]?>" type="text" class="form-control" />
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="form-group-inner">
                                                        <div class="row">

                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Username</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <input value="<?php echo $hdata[5]?>" name="username"type="text" class="form-control" />
                                                            </div>

                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Contact</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <input value="<?php echo $hdata[11]?>" name="h_contact"type="number" class="form-control" />
                                                            </div>

                                                        </div>
                                                    </div>

                                                    <div class="form-group-inner">
                                                        <div class="row">

                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Password</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <input value="<?php echo $hdata[6]?>" name="password"type="text" class="form-control" />
                                                            </div>

                                                            <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                                                <label class="login2 pull-right pull-right-pro">Date</label>
                                                            </div>
                                                            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                                                <input value="<?php echo $hdata[12]?>" name="date"type="date" class="form-control" />
                                                            </div>

                                                        </div>
                                                    </div>

                                                     <div class="form-group-inner">
                                                        <div class="login-btn-inner">
                                                            <div class="row">
                                                                <div class="col-lg-3"></div>
                                                                <div class="col-lg-9">
                                                                    <div class="login-horizental cancel-wp pull-left form-bc-ele">
                                                                        
                                                                        <button class="btn btn-sm btn-primary" type="submit" name="save">Save</button> <button class="btn btn-sm btn-warning" type="submit">Cancel</button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>



                                                  
                                                </form>
                                            </div>
                                        </div>
                                    </div>
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
       <br>
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
    <!-- tab JS
        ============================================ -->
    <script src="../admin/js/tab.js"></script>
    <!-- icheck JS
        ============================================ -->
    <script src="../admin/js/icheck/icheck.min.js"></script>
    <script src="../admin/js/icheck/icheck-active.js"></script>
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
<?php
if(isset($_POST['save']))
{
    $owner_name=$_POST['o_name'];
    $hospital_name=$_POST['h_name'];
    $owner_address=$_POST['o_address'];
    $hospital_address=$_POST['h_address'];
    $owner_contact=$_POST['o_contact'];
    $email=$_POST['email'];
    $city=$_POST['city'];
    $username=$_POST['username'];
    $hospital_contact=$_POST['h_contact'];
    $password=$_POST['password'];
    $date=$_POST['date'];
    $id=$_POST['id'];
   // if(mysqli_query($con,"n"))


    if(mysqli_query($con,"UPDATE hospital SET owner_name='".$owner_name."', owner_address='".$owner_address."', owner_contact='".$owner_contact."', e_mail='".$email."',username='".$username."',password='".$password."',hospital_name='".$hospital_name."', hospital_address='".$hospital_address."',city='".$city."',hospital_contact='".$hospital_contact."', date='".$date."' WHERE owner_id='".$id."' "))
    {
        echo "
        <script>
        alert('Record Updated Successfully');
        window.location.href='view_hospital.php';
        </script>
        ";
    }
    else
    {
        echo "
        <script>
        alert('Try Again');
        window.location.href='view_hospital.php';
        </script>
        ";
    }
}

?>
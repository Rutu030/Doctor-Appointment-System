<!DOCTYPE html>
<html lang="en">
<?php
$con=mysqli_connect("localhost","root","","appointment_portal_db")or die("Database Error....!");
?>
<head>
    <meta charset="utf-8">
    <title>Doctorpro</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="Images/logo-6 - Copy.jpg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700;900&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <script>
        function get_doctor(did)
        {
            var hid= document.getElementById('hid').value;
               $.ajax(
                {
                  type:"POST",
                  url:"show_doctor_ajax.php",
                  data:{hid: hid,did: did},
                  success:function(data)
                  {
                    // document.getElementById('Fees').value=data;
                     $("#doc").html(data);

                  }
                });
        }

        function get_dep(hid)
        {
             $.ajax(
                {
                  type:"POST",
                  url:"dep_ajax.php",
                  data:'hid='+hid,
                  success:function(data)
                  {
                    // document.getElementById('Fees').value=data;
                     $("#depp").html(data);

                  }
                });
        }

        function get_slot()
        {
           var date1=document.getElementById('date1').value;
           var hid=document.getElementById('hid').value;
           var depp=document.getElementById('depp').value;
           var doc=document.getElementById('doc').value;


               $.ajax(
                {
                  type:"POST",
                  url:"slot_ajax.php",
                  data:{date1: date1,hid: hid,depp: depp,doc: doc},
                  success:function(data)
                  {
                    // document.getElementById('Fees').value=data;
                     $("#slot").html(data);

                  }
                });
        }

        function get_slot_id(slid)
        {
           var a=confirm("Do you want to fix this time for appointment");

           var name=document.getElementById('name').value;
           var mail=document.getElementById('mail').value;
           var contact=document.getElementById('contact').value;
           var address=document.getElementById('address').value;
           var hid=document.getElementById('hid').value;
           var did=document.getElementById('doc').value;
           var date1=document.getElementById('date1').value;
           var prob=document.getElementById('prob').value;
           var depp=document.getElementById('depp').value;

           if(a==true)
           {
                $.ajax(
                {
                  type:"POST",
                  url:"slot_ajax_time_fix.php",
                  data:{slid: slid,name: name, mail: mail, contact: contact, address: address, hid: hid, did: did, date1: date1, prob: prob, depp: depp},
                  success:function(data)
                  {
                    // document.getElementById('Fees').value=data;
                     $("#slot").html(data);

                  }
                });
           }
        }

        function get_slot_book()
        {
            alert("This Slot Already Booked");
        }
    </script>
</head>

<body>
    <?php
    include('top_menu2.php');
    ?>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
  
     <div class="container-xxl py-5">
        <div class="container">

            <div class="row">

                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" id="slot">
                    
                   <p class="d-inline-block border rounded-pill py-1 px-4">Appointment</p>
                    <h1 class="mb-4">Make An Appointment To Visit Our Doctor</h1>
                   
                    <div class="bg-light rounded d-flex align-items-center p-5 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h5 class="mb-0">+012 345 6789</h5>
                        </div>
                    </div>
                    <div class="bg-light rounded d-flex align-items-center p-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center rounded-circle bg-white" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h5 class="mb-0">info@example.com</h5>
                        </div>
                    </div>
                    

                </div>



                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded h-100 d-flex align-items-center p-5">
                        <form action="appointment.php" method="POST">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <label></label>
                                    <input type="text" class="form-control border-0" id="name" name="name" placeholder="Your Name" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-6">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <label>Select Appointment Date</label>
                                        <input type="date" autocomplete="off" name="date1" id="date1" onchange="get_slot()" 
                                            class="form-control border-0 datetimepicker-input"
                                            placeholder="Choose Date" style="height: 55px;">
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <textarea name="prob" id="prob" class="form-control border-0" rows="5" placeholder="Describe your problem"></textarea>
                                </div>

                                <div class="col-12 col-sm-6">
                                    <input type="email" name="mail" id="mail" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="contact" id="contact" class="form-control border-0" placeholder="Your Mobile" style="height: 55px;">
                                </div>

                                <div class="col-12 col-sm-12">
                                    <textarea name="address" id="address" type="text" class="form-control border-0" placeholder="Your Address" style="height: 55px;"></textarea>
                                </div>

                                <div class="col-12 col-sm-4" >
                                    <select name="hid" id="hid" class="form-select border-0" onchange="get_dep(this.value),get_slot()" style="height: 55px;">
                                        <option selected> Hospital</option>

                                        <?php
                                            $res=mysqli_query($con,"SELECT * FROM hospital");
                                            while($row=mysqli_fetch_row($res))      
                                            {

                                            echo '
                                        <option value='.$row[0].'>'.$row[7].'</option>';
                                    }
                                    ?>
                                        
                                    </select>
                                </div>

                                 <div class="col-12 col-sm-4" >
                                    <select name="depp"  id="depp" class="form-select border-0"  style="height: 55px;" onchange="get_doctor(this.value),get_slot()">
                                        <option selected> Department</option>

                                        
                                   
                                        
                                    </select>
                                </div>



                                <div class="col-12 col-sm-4" >
                                    <select name="did" class="form-select border-0" style="height: 55px;" id="doc" onchange="get_slot()">
                                        <option selected> Doctor</option>
                                         
                                    </select>
                                </div>


                                
                                <!-- <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" name="save" type="submit">Book Appointment</button>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('footer.php');
    ?>
    


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>


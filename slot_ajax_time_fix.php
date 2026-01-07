<?php
$con=mysqli_connect("localhost","root","","appointment_portal_db")or die("Database Error....!");

 $slt=$_POST['slid'];

 	 $name=$_POST['name'];
     $mail=$_POST['mail'];
     $contact=$_POST['contact'];
     $address=$_POST['address'];
     $hid=$_POST['hid'];
     $did=$_POST['did'];
     $date1=$_POST['date1'];
     $prob=$_POST['prob'];
     $depp=$_POST['depp'];

     if(mysqli_query($con,"INSERT INTO appointment VALUES('','".$name."','".$mail."','".$contact."','".$address."','".$hid."','".$did."','".$date1."','".$prob."','".$slt."','".$depp."')"))
	    {
	        echo "
	        <script>
	        alert('Appointment Successful Added');
	            window.location.href='appointment.php';
	        </script>
	        ";
	    }
	    else
	    {
	        echo "
	        <script>
	        alert('Try Again');
	            window.location.href='appointment.php';
	        </script>
	        ";
	    }


?>
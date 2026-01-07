<?php
echo '<option>Select Doctor</option>';


$con=mysqli_connect("localhost","root","","appointment_portal_db")or die("Database Error....!");
$hid=$_POST['hid'];
$did=$_POST['did'];
            $res1=mysqli_query($con,"SELECT * FROM doctor WHERE HID='".$hid."' && DEP_ID='".$did."'");
            while($row1=mysqli_fetch_row($res1))
            {

            echo '
        <option value='.$row1[0].'>'.$row1[1].'</option>';
    }
    ?>
<?php
echo '<option>Select Department</option>';
$con=mysqli_connect("localhost","root","","appointment_portal_db")or die("Database Error....!");

    $dep1=mysqli_query($con,"SELECT * FROM department WHERE HID='".$_POST['hid']."'");
    while($dep=mysqli_fetch_row($dep1))      
    {

    echo '
<option value='.$dep[0].'>'.$dep[1].'</option>';
 }
?>
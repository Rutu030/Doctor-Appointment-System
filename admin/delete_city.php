<?php
    
$con=mysqli_connect("localhost","root","","appointment_portal_db")or die("Database Error....!");
    $id=$_GET['id'];
    if(mysqli_query($con,"DELETE FROM city WHERE cid='".$id."'"))
    {
        echo "<script>
        alert('Record Deleted');
        window.location.href='view_city.php';
        </script>";
    }
    else
    {
        echo "<script>
        alert('Try Again');
        window.location.href='view_city.php';
        </script>";
    }
    ?>
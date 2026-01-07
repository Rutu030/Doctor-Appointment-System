 <div class="row">
            <?php
$date1=$_POST['date1'];
$hid=$_POST['hid'];
$depp=$_POST['depp'];
$doc=$_POST['doc'];


$con=mysqli_connect("localhost","root","","appointment_portal_db")or die("Database Error....!");
            
            $res1=mysqli_query($con,"SELECT * FROM slot");
            while($row1=mysqli_fetch_row($res1))
            {
                $booked=mysqli_num_rows(mysqli_query($con,"SELECT * FROM appointment WHERE slot_id='".$row1[0]."' && DATE='".$date1."' && HID='".$hid."' && DEP_ID='".$depp."' && DID='".$doc."'"));
                if($booked>0)
                {
                     echo '
                    <div class="col-lg-4 wow fadeInUp"  id="slot" style="margin-top: 20px; background-color:#ccffff;border-radius:20px" onclick="get_slot_book()">
                         <div class="service-item" style="padding: 10px;">
                                
                            <center>
                            
                            <div class="d-inline-flex align-items-center justify-content-center  rounded-circle mb-4" style="width: 65px; height: 65px;background-color:blue;color:#000">
                                <i style="color:#fff" class="fa fa-heartbeat fs-4"></i>
                            </div>
                                <h6>'.$row1[1].'</h6>
                            </center>
                        </div>
                    </div>';
                }
                else
                {
                     echo '
                        <div class="col-lg-4 wow fadeInUp"  id="slot" style="margin-top: 20px; background-color:#ccffff;border-radius:20px" onclick="get_slot_id('.$row1[0].')">
                             <div class="service-item" style="padding: 10px;">
                                    
                                <center>
                                
                                <div class="d-inline-flex align-items-center justify-content-center  rounded-circle mb-4" style="width: 65px; height: 65px;background-color:orange;color:#000">
                                    <i style="color:#fff" class="fa fa-heartbeat fs-4"></i>
                                </div>
                                    <h6>'.$row1[1].'</h6>
                                </center>
                            </div>
                        </div>';
                }

           
            }
            ?>



        </div>
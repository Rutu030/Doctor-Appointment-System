 <div class="row">

                        <?php
$con=mysqli_connect("localhost","root","","appointment_portal_db")or die("Database Error....!");
                        
                        $res1=mysqli_query($con,"SELECT * FROM slot");
                        while($row1=mysqli_fetch_row($res1))
                        {

                        echo '
                        <div class="col-lg-4 wow fadeInUp"  id="slot" style="margin-top: 20px;">
                             <div class="service-item bg-light" style="padding: 10px;">
                                    
                                <center>
                                
                                <div class="d-inline-flex align-items-center justify-content-center bg-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                                    <i class="fa fa-heartbeat text-primary fs-4"></i>
                                </div>
                                    <h6>'.$row1[1].'</h6>
                                </center>
                            </div>
                        </div>';
                        }
                        ?>



                    </div>
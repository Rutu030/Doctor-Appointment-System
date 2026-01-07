<div class="all-content-wrapper">
<?php
$hname=mysqli_fetch_row(mysqli_query($con,"SELECT * FROM hospital WHERE owner_id='".$_SESSION['hospital']."'"));

  
?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.php"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
          <div class="header-top-area">
              <div class="container-fluid">
              <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              <div class="header-top-wraper">
         <div class="row">
            <div class="col-lg-1 col-md-0 col-sm-1 col-xs-12">
                <div class="menu-switcher-pro">
                    <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn">
                  <i class="educate-icon educate-nav"></i>
                  </button>
                          </div>
                      </div>
                              <div class="col-lg-6 col-md-7 col-sm-6 col-xs-12">
                                  <div class="header-top-menu tabl-d-n">
                                      <ul class="nav navbar-nav mai-top-nav">
                                          <li class="nav-item"><a href="#" class="nav-link">Home</a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                  <div class="header-right-info">
                                      <ul class="nav navbar-nav mai-top-nav header-right-menu">
                                          <li class="nav-item dropdown">
                                              
                                              <div role="menu" class="author-message-top dropdown-menu animated zoomIn">
                                                  
                                                  <div class="message-view">
                                                      <a href="#">View All Messages</a>
                                                  </div>
                                              </div>
                                          <li class="nav-item">
                                              <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                    <img src="../admin/<?php echo $hname[9]?>" style='height: 40px;width: 40px;' alt="" />
                                    <span class="admin-name"><?php echo $hname[1]?></span>
                                    <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                    </a>
                                                        <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                  
                                                  <li><a href="../logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a>
                                                  </li>
                                              </ul>
                                          </li>
                                         
                                              <div role="menu" class="admintab-wrap menu-setting-wrap menu-setting-wrap-bg dropdown-menu animated zoomIn">
                                                  

                                          <div class="tab-content custom-bdr-nt">
                                              <div id="Notes" class="tab-pane fade in active">
                                                  
                                                      <div class="notes-list-area notes-menu-scrollbar">
                                                          <ul class="notes-menu-list">
                                                             
                                                              
                                                              
                                                             
                                                              
                                                              
                                                              
                                                              
                                                              
                                                             
                                                          </ul>
                                                      </div>
                                                  </div>
                                              </div>
                                              
                                              </div>
                                              
                                          </div>
                                      </div>
                                  </li>
                              </ul>
                          </div> 
                      </div>
        </div>
</div>
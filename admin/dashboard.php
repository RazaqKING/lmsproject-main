<?php include("includes/header.php"); ?>
   <body class="dashboard dashboard_1">
      <div class="full_container">
         <div class="inner_container">
            <!-- Sidebar  -->
           <?php include("includes/sidebar.php"); ?>
               <!-- end topbar -->
               <!-- dashboard inner -->
               <div class="midde_cont">
                  <div class="container-fluid">
                     <div class="row column_title">
                        <div class="col-md-12">
                           <div class="page_title">
                              <h2>Dashboard</h2>
                           </div>
                        </div>
                     </div>
                     <div class="row column1">
                     <?php
                        if($_SESSION['status'] == "student"){
                           echo "";
                        } else {
                     
                     ?>
                        <div class="col-md-3 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user yellow_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                              <?php
                                            $addquery = "SELECT * FROM `students`";
                                            $result = mysqli_query($conn, $addquery);
                                            $count = mysqli_num_rows($result); 
                                            ?>
                                 <div>
                                    <p class="total_no"><?php echo $count; ?></p>
                                    <p class="head_couter">Student</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php } ?> 
                        <div class="col-md-3 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-book blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                              <?php
                                            $addquery = "SELECT * FROM `courses`";
                                            $result = mysqli_query($conn, $addquery);
                                            $count = mysqli_num_rows($result); 
                                            ?>
                                 <div>
                                    <p class="total_no"><?php echo $count; ?></p>
                                    <p class="head_couter">Courses</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-video-camera blue1_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                              <?php
                                            $addquery = "SELECT * FROM `youtube`";
                                            $result = mysqli_query($conn, $addquery);
                                            $count = mysqli_num_rows($result); 
                                            ?>
                                 <div>
                                    <p class="total_no"><?php echo $count; ?></p>
                                    <p class="head_couter">Youtube</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <?php
                        if($_SESSION['status'] == "student" || $_SESSION['status'] == "lecturer"){
                           echo "";
                        } else {
                     
                     ?>
                        <div class="col-md-3 col-lg-3">
                           <div class="full counter_section margin_bottom_30">
                              <div class="couter_icon">
                                 <div> 
                                    <i class="fa fa-user red_color"></i>
                                 </div>
                              </div>
                              <div class="counter_no">
                              <?php
                                            $addquery = "SELECT * FROM `lecturer`";
                                            $result = mysqli_query($conn, $addquery);
                                            $count = mysqli_num_rows($result); 
                                            ?>
                                 <div>
                                    <p class="total_no"><?php echo $count; ?></p>
                                    <p class="head_couter">Lecturers</p>
                                 </div>
                              </div>
                           </div>
                        </div> 
                        <?php } ?>  
                     </div>
                     
                     <!-- graph -->
                     
                     <!-- end graph -->
                     <div class="row column3">
                        <!-- testimonial -->
                        
                        <!-- end testimonial -->
                        <!-- progress bar -->
                        <div class="col-md-6">
                           
                        </div>
                        <!-- end progress bar -->
                     </div>
                     
                  </div>
                  <!-- footer -->
<?php include("includes/footer.php"); ?>
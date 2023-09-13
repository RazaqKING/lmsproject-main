            <nav id="sidebar">
               <div class="sidebar_blog_1">
                  <div class="sidebar-header">
                     <div class="logo_section">
                        <a href="index">
                           <!-- <img class="logo_icon img-responsive" src="images/logo/logo_icon.png" alt="#" /> -->
                        </a>
                     </div>
                  </div>
                  <div class="sidebar_user_info">
                     <div class="icon_setting"></div>
                     <div class="user_profle_side">
                        <!-- <div class="user_img">
                           <img class="img-responsive" src="images/layout_img/user_img.jpg" alt="#" />
                        </div> -->
                        <div class="user_info">
                           <h3><a style="color: white;" href="../">LMS</a></h3>
                           <!-- <p><span class="online_animation"></span> Online</p> -->
                        </div>
                     </div>
                  </div>
               </div>
               <div class="sidebar_blog_2">
               <?php
                        if($_SESSION['status'] == "student"){
                           echo "<h4>Student Dashboard</h4>";
                        } else if($_SESSION['status'] == "admin") {
                           echo "<h4>Admin Dashboard</h4>";
                        } else {
                           echo "<h4>Lecturer Dashboard</h4>";
                        }
                     
                     ?>
                  <ul class="list-unstyled components">
                     <li><a href="dashboard"><i class="fa fa-dashboard yellow_color"></i> <span>Dashboard</span></a></li>
                     <?php
                        if($_SESSION['status'] != "admin"){
                           echo "";
                        } else {
                     
                     ?>
                     <li>
                        <a href="#element" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-users purple_color"></i> <span>Lecturer</span></a>
                        <ul class="collapse list-unstyled" id="element">
                           <li><a href="add_lecturer">> <span>Add Lecturer</span></a></li>
                           <li><a href="lecturers">> <span>View Lecturers</span></a></li>
                        </ul>
                     </li>
                     <?php }?>
                     <li>
                        <a href="#apps" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-book blue1_color"></i> <span>Courses</span></a>
                        <ul class="collapse list-unstyled" id="apps">
                           <li><a href="courses">> <span>View Courses</span></a></li>
                           <?php
                        if($_SESSION['status'] == "student"){
                           echo "";
                        } else {
                     
                     ?>
                           <li><a href="add_course">> <span>Add Course</span></a></li>
                           <?php }?>
                           <li><a href="youtubecourse">> <span>View Youtube Courses</span></a></li>
                           <?php
                        if($_SESSION['status'] == "student"){
                           echo "";
                        } else {
                     
                     ?>
                           <li><a href="youtube">> <span>Add Youtube Course</span></a></li>
                           <?php } ?>
                        </ul>
                     </li>
                     <?php
                        if($_SESSION['status'] != "admin"){
                           echo "";
                        } else {
                     
                     ?>
                     <li><a href="students"><i class="fa fa-user purple_color2"></i><span>Students</span></a></li>
                     <?php } ?>
                     <li><a href="profile"><i class="fa fa-user orange_color"></i> <span>Profile</span></a></li>
                     <?php
                        if($_SESSION['status'] != "student"){
                           echo "";
                        } else {
                     
                     ?>
                     <li><a href="quiz.php?q=0"><i class="fa fa-book yellow_color"></i><span>Assessment</span></a></li>
                     <?php } ?>
                     <?php
                        if($_SESSION['status'] != "admin"){
                           echo "";
                        } else {
                     
                     ?>
                     <li><a href="quiz.php?q=1"><i class="fa fa-user red_color"></i><span>User</span></a></li>
                     <li><a href="quiz.php?q=2"><i class="fa fa-star purple_color"></i>Ranking</a></li>
                     <!-- <li><a href="quiz.php?q=3"><i class="fa fa-dashboard green_color"></i>Feedback</a></li> -->
                     <?php } ?>
                     <?php
                        if($_SESSION['status'] == "student"){
                           echo "";
                        } else {
                     
                     ?>
                     <li>
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-book yellow_color"></i>Quiz<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                           <li><a href="quiz.php?q=4">> Add Quiz</a></li>
                           <li><a href="quiz.php?q=5">> Remove Quiz</a></li>
                        </ul> 
                        <?php } ?>
                        <li><a href="logout.inc"><i class="fa fa-bolt red_color"></i> <span>Logout</span></a></li> 
                  </ul>
               </div>
            </nav>
            <!-- end sidebar -->
            <!-- right content -->
            <div id="content">
               <!-- topbar -->
               <div class="topbar">
                  <nav class="navbar navbar-expand-lg navbar-light">
                     <div class="full">
                        <button type="button" id="sidebarCollapse" class="sidebar_toggle"><i class="fa fa-bars"></i></button>
                        <!-- <div class="logo_section">
                           <a href="index.html"><img class="img-responsive" src="images/logo/logo.png" alt="#" /></a>
                        </div> -->
                        <div class="right_topbar">
                           <div class="icon_info">
                              <!-- <ul>
                                 <li><a href="#"><i class="fa fa-bell-o"></i><span class="badge">2</span></a></li>
                                 <li><a href="#"><i class="fa fa-question-circle"></i></a></li>
                                 <li><a href="#"><i class="fa fa-envelope-o"></i><span class="badge">3</span></a></li>
                              </ul> -->
                              <ul class="user_profile_dd">
                                 <li>
                                    <a class="dropdown-toggle" data-toggle="dropdown">
                                       <i class="fa fa-user"></i>
                                       <!-- <img class="img-responsive rounded-circle" src="images/layout_img/user_img.jpg" alt="#" /> -->
                                       <span class="name_user"><?php echo $_SESSION['username'] ?></span></a>
                                    <div class="dropdown-menu">
                                       <a class="dropdown-item" href="profile">My Profile</a>
                                       <a class="dropdown-item" href="logout.inc"><span>Log Out</span> <i class="fa fa-sign-out"></i></a>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </nav>
        </div>
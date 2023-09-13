<?php include("includes/header.php"); ?>
<?php 
      if(isset($_POST['submit'])){
           $coursename = $_POST['course_name'];
           $coursedesc = $_POST['course_desc'];
           $course_image = $_FILES['course_image']['name'];
           $course_image_temp = $_FILES['course_image']['tmp_name'];

           if(!(empty($coursename)) && !(empty($coursedesc)) && !(empty($course_image))){
            move_uploaded_file($course_image_temp, "./images/$course_image");
            //extract the ID
               // preg_match(
               //    '/[\?\&]v=([^\?\&]+)/',
               //    $courselink,
               //    $matches
               // );
               //the ID of the YouTube URL: eLl7Y29eC7o
                  // $videoid = $matches[1];
            $query = "INSERT INTO `courses` (`course_name`, `course_desc`, `course_image`) ";
            $query .= "VALUES('{$coursename}', '{$coursedesc}', '{$course_image}')";
            $addquery = mysqli_query($conn, $query);

            header("Location: ?errorp=success"); 
           } else {
            header("Location: ?errorp=emptyfields");
           }

       }
?>
   <body class="inner_page map">
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
                              <h2>Course</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Add <small>Courses</small></h2>
                                 </div>
                              </div>
                              <div class="map_section padding_infor_info">
                              <?php
                                 if (isset($_GET['errorp'])){
                                    if ($_GET['errorp']=="emptyfields"){
                                    echo '<div style="color:red;">Please fill in all fields!</div>';
                                    }
                                     else if ($_GET['errorp']=="success"){
                                        echo '<div style="color:red;">Course Added Successfully</div>';
                                     }
                                     //else if ($_GET['errorp']=="File too large. File must be less than 100kb."){
                                    //    echo '<div style="color:red;">File too large. File must be less than 100kb.</div>';
                                    // }else if ($_GET['errorp']=="Invalid file type. Only JPG, and PNG types are accepted."){
                                    //    echo '<div style="color:red;">Invalid file type. Only JPG, and PNG types are accepted.</div>';
                                    // }
                                 }
                       ?>
                                 <form method="POST" action="" enctype="multipart/form-data">
                                    <fieldset>
                                       <div class="field">
                                          <label>Course Name</label>
                                          <input type="text" name="course_name" class="form-control">
                                       </div><br>
                                       <div class="field">
                                          <label>Course Description</label>
                                          <input type="text" name="course_desc" class="form-control">
                                       </div><br>
                                       <!-- <div class="field">
                                          <label>Youtube Link</label>
                                          <input type="text" name="course_link" class="form-control">
                                       </div><br> -->
                                       <div class="field">
                                          <label>Upload File</label>
                                          <input type="file" name="course_image" class="form-control">
                                       </div><br>
                                       <div class="field">
                                          <input type="submit" value="Submit" class="btn btn-primary" name="submit">
                                       </div>
                                    </fieldset>
                                 </form>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- footer -->
                  <?php include("includes/footer.php"); ?>
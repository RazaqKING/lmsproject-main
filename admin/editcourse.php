<?php include("includes/header.php"); ?>
<?php 
      if(isset($_GET['id'])){
            $the_id = $_GET['id'];
      }
         $query = "SELECT * FROM `courses` WHERE `id` = '{$the_id}'";
            $select_id = mysqli_query($conn, $query);
            while($row = mysqli_fetch_assoc($select_id)){
               $id = $row['id'];
               $coursename = $row['course_name'];
               $coursedesc = $row['course_desc'];
               $courselink = $row['course_link'];
               $course_image = $row['course_image'];
            }
         if(isset($_POST['submit'])){
            $coursename = $_POST['course_name'];
            $coursedesc = $_POST['course_desc'];
            $course_image = $_FILES['course_image']['name'];
            $course_image_temp = $_FILES['course_image']['tmp_name'];

            move_uploaded_file($course_image_temp, "./images/$course_image");
               if(empty($course_image)){
                  $query = "SELECT * FROM `courses` WHERE `id` = '{$the_id}'";
                  $select_image = mysqli_query($conn, $query);
                  while($row = mysqli_fetch_array($select_image)){
                      $course_image = $row['course_image'];
                  }
              }
             
             $query = "UPDATE `courses` SET ";
             $query .= "`course_name` = '{$coursename}', ";
             $query .= "`course_desc` = '{$coursedesc}', ";
             $query .= "`course_image` = '{$course_image}' ";
             $query .= "WHERE id = '{$the_id}'";
             $updatequery = mysqli_query($conn, $query);
 
             header("Location: ?errorp=success&id=$the_id");
            
 
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
                                    <h2>Edit <small>Courses</small></h2>
                                 </div>
                              </div>
                              <div class="map_section padding_infor_info">
                              <?php
                                 if (isset($_GET['errorp']) && isset($_GET['id'])){
                                    $the_id = $_GET['id'];
                                    $query = "SELECT * FROM `courses` WHERE `id` = '{$the_id}'";
                                    $select_id = mysqli_query($conn, $query);
                                    while($row = mysqli_fetch_assoc($select_id)){
                                       $id = $row['id'];
                                       $coursename = $row['course_name'];
                                       $coursedesc = $row['course_desc'];
                                       $course_image = $row['course_image'];
                                    }
                                    if ($_GET['errorp']=="emptyfields"){
                                    echo '<div style="color:red;">Please fill in all fields!</div>';
                                    }
                                     else if ($_GET['errorp']=="success" && $_GET['id']=="$the_id"){
                                        echo '<div style="color:red;">Course Updated Successfully</div>';
                                     }
                                     //else if ($_GET['errorp']=="File too large. File must be less than 100kb."){
                                    //    echo '<div style="color:red;">File too large. File must be less than 100kb.</div>';
                                    // }else if ($_GET['errorp']=="Invalid file type. Only JPG, and PNG types are accepted."){
                                    //    echo '<div style="color:red;">Invalid file type. Only JPG, and PNG types are accepted.</div>';
                                    // }
                                 }
                       ?>
                                 <form action="" method="post" enctype="multipart/form-data">
                                    <fieldset>
                                       <div class="field">
                                          <label>Course Name</label>
                                          <input type="text" name="course_name" value="<?php echo $coursename; ?>" class="form-control">
                                       </div><br>
                                       <div class="field">
                                          <label>Course Description</label>
                                          <input type="text" name="course_desc" value="<?php echo $coursedesc; ?>" class="form-control">
                                       </div><br>
                                       <div class="field">
                                          <label>Course Image</label>
                                          <input type="file" name="course_image" class="form-control">
                                       </div><br>
                                       <div class="field">
                                          <input type="submit" value="Update" class="btn btn-primary" name="submit">
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
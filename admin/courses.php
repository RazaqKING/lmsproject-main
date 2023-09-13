<?php include("includes/header.php"); ?>
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
                                    <h2>View <small>Courses</small></h2>
                                 </div>
                              </div>
                              <div class="map_section padding_infor_info">
                                <div class="table_section">
                                    <div class="table-responsive-sm">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Description</th>
                                                    <th>File</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead> 
                                            <?php
                                            $addquery = "SELECT * FROM `courses`";
                                            $result = mysqli_query($conn, $addquery);
                                            while($row = mysqli_fetch_array($result)){
                                               $id = $row['id'];
                                               $name = $row['course_name'];
                                               $desc = substr($row['course_desc'], 0, 20);
                                               $image = $row['course_image'];
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $id ?></td>
                                                    <td><?php echo $name ?></td>
                                                    <td><?php echo $desc.'..' ?></td>
                                                    <td><a href="./images/<?php echo $image ?>" target="_blank"><?php echo $image ?></a></td>
                                                    <td>
                                                    <?php
                                                      if($_SESSION['status'] == "student"){
                                                         echo "";
                                                      } else {
                                                   
                                                   ?>
                                                    <a class="btn btn-success text-white" href="editcourse?id=<?php echo $id ?>">Edit</a>
                                                    <a class="btn btn-danger text-white" onClick="javascript: return confirm('Are you sure you want to delete?')" href="courses?delete=<?php echo $id ?>">Delete</a>
                                                    <?php } ?>
                                                    <a class="btn btn-primary text-white" href="./images/<?php echo $image ?>" target="_blank">View/Download</a></td>
                                                </tr>
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                        <?php
                                          if(isset($_GET['delete'])){
                                             $the_id = $_GET['delete'];
                                             $query = "DELETE FROM courses WHERE id = {$the_id}";
                                             $delete_query = mysqli_query($conn, $query);
                                             header("Location: courses");
                                             //echo "<script>window.location.href(courses)</script>";
                                          }
                                       ?>
                                    </div>
                                </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <!-- end row -->
                  </div>
                  <!-- footer -->
                  <?php include("includes/footer.php"); ?>
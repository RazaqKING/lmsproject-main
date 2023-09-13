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
                              <h2>Youtube Course</h2>
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
                                                    <th>Link</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead> 
                                            <?php
                                            $addquery = "SELECT * FROM `youtube`";
                                            $result = mysqli_query($conn, $addquery);
                                            while($row = mysqli_fetch_array($result)){
                                               $id = $row['id'];
                                               $name = $row['course_name'];
                                               $desc = substr($row['course_desc'], 0, 20);
                                               $link = $row['course_link'];
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $id ?></td>
                                                    <td><?php echo $name ?></td>
                                                    <td><?php echo $desc.'..' ?></td>
                                                    <td><?php echo $link ?></a></td>
                                                    <td><a class="btn btn-success text-white" href="viewcourse.php?id=<?php echo $id ?>">View</a>
                                                    <?php
                                                      if($_SESSION['status'] == "student"){
                                                         echo "";
                                                      } else {
                                                   
                                                   ?>
                                                    <a class="btn btn-danger text-white" onClick="javascript: return confirm('Are you sure you want to delete?')" href="youtubecourse?delete=<?php echo $id ?>">Delete</a>
                                                    <?php }?></td>
                                                </tr>
                                            </tbody>
                                            <?php } ?>
                                        </table>
                                        <?php
                                          if(isset($_GET['delete'])){
                                             $the_id = $_GET['delete'];
                                             $query = "DELETE FROM youtube WHERE id = {$the_id}";
                                             $delete_query = mysqli_query($conn, $query);
                                             header("Location: youtubecourse");
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
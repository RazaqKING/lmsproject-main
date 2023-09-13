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
                              <h2>Student</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>View <small>Students</small></h2>
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
                                                    <th>Username</th>
                                                    <th>Email</th>
                                                    <th>Image</th>
                                                </tr>
                                            </thead>
                                            <?php
                                            $addquery = "SELECT * FROM `students`";
                                            $result = mysqli_query($conn, $addquery);
                                            while($row = mysqli_fetch_array($result)){
                                               $id = $row['id'];
                                               $fullname = $row['fullname'];
                                               $username = $row['username'];
                                               $email = $row['email'];
                                               $image = $row['image'];
                                            ?>
                                            <tbody>
                                                <tr>
                                                    <td><?php echo $id; ?></td>
                                                    <td><?php echo $fullname; ?></td>
                                                    <td><?php echo $username; ?></td>
                                                    <td><?php echo $email; ?></td>
                                                    <td><img class="rounded-circle" width="30px" src="images/layout_img/<?php echo $image ?>"></td>
                                                </tr>
                                            </tbody>
                                            <?php } ?>
                                        </table>
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
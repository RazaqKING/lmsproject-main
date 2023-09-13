<?php include("includes/header.php"); ?>
<?php 
      if(isset($_GET['id'])){
            $the_id = $_GET['id'];
      }
      $addquery = "SELECT * FROM `lecturer`";
      $result = mysqli_query($conn, $addquery);
      while($row = mysqli_fetch_array($result)){
         $id = $row['id'];
         $fullname = $row['fullname'];
         $email = $row['email'];
      }
         if(isset($_POST['submit'])){
            $fullname = $_POST['fullname'];
            $email = $_POST['email'];
             $query = "UPDATE `lecturer` SET ";
             $query .= "`fullname` = '{$fullname}', ";
             $query .= "`email` = '{$email}' ";
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
                              <h2>Lecturer</h2>
                           </div>
                        </div>
                     </div>
                     <!-- row -->
                     <div class="row column1">
                        <div class="col-md-12">
                           <div class="white_shd full margin_bottom_30">
                              <div class="full graph_head">
                                 <div class="heading1 margin_0">
                                    <h2>Edit <small>Lecturer</small></h2>
                                 </div>
                              </div>
                              <div class="map_section padding_infor_info">
                              <?php
                                 if (isset($_GET['errorp']) && isset($_GET['id'])){
                                    $the_id = $_GET['id'];
                                    $addquery = "SELECT * FROM `lecturer`";
                                    $result = mysqli_query($conn, $addquery);
                                    while($row = mysqli_fetch_array($result)){
                                       $id = $row['id'];
                                       $fullname = $row['fullname'];
                                       $email = $row['email'];
                                    }
                                    if ($_GET['errorp']=="emptyfields"){
                                    echo '<div style="color:red;">Please fill in all fields!</div>';
                                    }
                                     else if ($_GET['errorp']=="success" && $_GET['id']=="$the_id"){
                                        echo '<div style="color:red;">Lecturer Info Updated Successfully</div>';
                                     }
                                     //else if ($_GET['errorp']=="File too large. File must be less than 100kb."){
                                    //    echo '<div style="color:red;">File too large. File must be less than 100kb.</div>';
                                    // }else if ($_GET['errorp']=="Invalid file type. Only JPG, and PNG types are accepted."){
                                    //    echo '<div style="color:red;">Invalid file type. Only JPG, and PNG types are accepted.</div>';
                                    // }
                                 }
                       ?>
                                 <form method="post" action="">
                                    <fieldset>
                                       <div class="field">
                                          <label>Full Name</label>
                                          <input type="text" name="fullname" value="<?php echo $fullname; ?>" class="form-control">
                                       </div><br>
                                       <div class="field">
                                          <label>Email Address</label>
                                          <input type="text" name="email" value="<?php echo $email; ?>" class="form-control">
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
<?php include("includes/header.php"); ?>
<?php 
      if(isset($_POST['submit'])){
           $fullname = $_POST['fullname'];
           $username = $_POST['username'];
           $email = $_POST['email'];
           $password = $_POST['username'];

           if(!(empty($fullname)) && !(empty($username)) && !(empty($email))){
            
            $query = "SELECT username FROM lecturer WHERE username = '{$username}'";
            $lect_query = mysqli_query($conn, $query);
            $count = mysqli_num_rows($lect_query);
         
               if($count != 0){
                     header("Location: ?errorp=usertaken");
               } else {
               $fullname = mysqli_real_escape_string($conn, $fullname);
               $username = mysqli_real_escape_string($conn, $username);
               $email = mysqli_real_escape_string($conn, $email);
               $password = mysqli_real_escape_string($conn, $password);
               $password_hash = password_hash($password, PASSWORD_BCRYPT, ['cost'=>12]);

               $query = "INSERT INTO `lecturer` (`fullname`, `username`, `email`, `password`) ";
               $query .= "VALUES('{$fullname}', '{$username}', '{$email}', '{$password_hash}')";
               $addquery = mysqli_query($conn, $query);
               $query = "INSERT INTO `users` (`status`, `uidUsers`, `emailUsers`, `pwdUsers`) ";
               $query .= "VALUES('lecturer', '{$username}', '{$email}', '{$password_hash}')";
               $addquery = mysqli_query($conn, $query);

               header("Location: ?errorp=success"); 
           } 
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
                                    <h2>Add <small>Lecturer</small></h2>
                                 </div>
                              </div>
                              <div class="map_section padding_infor_info">
                              <?php
                                 if (isset($_GET['errorp'])){
                                    if ($_GET['errorp']=="emptyfields"){
                                    echo '<div style="color:red;">Please fill in all fields!</div>';
                                    }
                                     else if ($_GET['errorp']=="success"){
                                        echo '<div style="color:red;">Lecturer Added Successfully</div>';
                                     } else if ($_GET['errorp']=="usertaken"){
                                        echo '<div style="color:red;">Username already exist</div>';
                                     }
                                    // else if ($_GET['errorp']=="Invalid file type. Only JPG, and PNG types are accepted."){
                                    //    echo '<div style="color:red;">Invalid file type. Only JPG, and PNG types are accepted.</div>';
                                    // }
                                 }
                       ?>
                                 <form action="" method="post">
                                    <fieldset>
                                       <div class="field">
                                          <label>Full Name</label>
                                          <input type="text" name="fullname" class="form-control">
                                       </div><br>
                                       <div class="field">
                                          <label>Username</label>
                                          <input type="text" name="username" class="form-control">
                                       </div><br>
                                       <div class="field">
                                          <label>Email Address</label>
                                          <input type="text" name="email" class="form-control">
                                       </div>
                                       <input type="password" class="form-control hidden">
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
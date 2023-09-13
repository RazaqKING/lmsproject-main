<?php include("../dbh.inc.php"); ?>
<?php session_start(); ?>
<?php
    if(isset($_POST['submit'])){
      $fullname = $_POST['fullname'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $college = $_POST['college'];
      $gender = $_POST['gender'];
      $phone = $_POST['number'];
      $password = $_POST['password'];

      if(!(empty($fullname)) && !(empty($username)) && !(empty($email)) && !(empty($password))){
       
       $query = "SELECT username FROM students WHERE username = '{$username}'";
       $lect_query = mysqli_query($conn, $query);
       $count = mysqli_num_rows($lect_query);
      // profiledefault.jpg
          if($count != 0){
                header("Location: ?errorp=usertaken");
          } else {
          $fullname = mysqli_real_escape_string($conn, $fullname);
          $username = mysqli_real_escape_string($conn, $username);
          $email = mysqli_real_escape_string($conn, $email);
          $college = mysqli_real_escape_string($conn, $college);
          $gender = mysqli_real_escape_string($conn, $gender);
          $phone = mysqli_real_escape_string($conn, $phone);
          $password = mysqli_real_escape_string($conn, $password);
          $password_hash = password_hash($password, PASSWORD_BCRYPT, ['cost'=>12]);
          $image = "profiledefault.jpg";

          $query = "INSERT INTO `students` (`fullname`, `username`, `email`, `gender`, `college`, `mob`, `image`, `password`) ";
          $query .= "VALUES('{$fullname}', '{$username}', '{$email}', '{$gender}', '{$college}', '{$phone}', '{$image}', '{$password_hash}')";
          $addquery = mysqli_query($conn, $query);
          $query = "INSERT INTO `users` (`status`, `uidUsers`, `emailUsers`, `pwdUsers`) ";
          $query .= "VALUES('student', '{$username}', '{$email}', '{$password_hash}')";
          $addquery = mysqli_query($conn, $query);

          header("Location: ?errorp=success"); 
      } 
    } else {
       header("Location: ?errorp=emptyfields");
      }
  }

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>LMS Portal</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/base/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <h2 style="color: black; font-weight: 600; font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;">LMS</h2>
                <!-- <img src="../images/logo.svg" alt="logo"> -->
              </div>
              <h4>New here?</h4>
              <h6 class="font-weight-light">Portal</h6>
                      <?php
                                        if (isset($_GET['errorp'])){
                                            if ($_GET['errorp']=="emptyfields"){
                                            echo '<div style="color:red;">Please fill in all fields!</div>';
                                            }
                                            else if ($_GET['errorp']=="success"){
                                                echo '<div style="color:red;">Registration Successful. You can Login</div>';
                                            } else if ($_GET['errorp']=="usertaken"){
                                                echo '<div style="color:red;">Username already exist</div>';
                                            }
                                            // else if ($_GET['errorp']=="Invalid file type. Only JPG, and PNG types are accepted."){
                                            //    echo '<div style="color:red;">Invalid file type. Only JPG, and PNG types are accepted.</div>';
                                            // }
                                        }
                              ?>
              <form action="" method="post" class="pt-3">
              <div class="form-group">
                  <label>Full Name</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="fullname" class="form-control form-control-lg border-left-0" placeholder="Full Name">
                  </div>
                </div>
                <div class="form-group">
                  <label>Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="username" class="form-control form-control-lg border-left-0" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label>Email</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-email-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="email" name="email" class="form-control form-control-lg border-left-0" placeholder="Email">
                  </div>
                </div>
                <div class="form-group">
                  <label>College</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-school text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="college" class="form-control form-control-lg border-left-0" placeholder="College">
                  </div>
                </div>
                <div class="form-group">
                  <label>Phone Number</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-phone text-primary"></i>
                      </span>
                    </div>
                    <input type="number" name="number" class="form-control form-control-lg border-left-0" placeholder="Phone Number">
                  </div>
                </div>
                <div class="form-group">
                  <label>Gender</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account text-primary"></i>
                      </span>
                    </div>
                    <select class="form-control form-control-lg border-left-0" name="gender">
                      <option>--Choose--</option>
                      <option value="M">Male</option>
                      <option value="F">Female</option>
                    </select>
                  </div>
                </div>
                <div class="form-group">
                  <label>Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg border-left-0" placeholder="Password">
                  </div>
                </div>
                <div class="mt-3">
                  <input type ="submit" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" name="submit" value="SIGN UP">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Already have an account? <a href="login" class="text-primary">Login</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 register-half-bg d-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright &copy; 2023  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="vendors/base/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
</body>

</html>

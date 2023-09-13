<?php include("../dbh.inc.php"); ?>
<?php session_start(); ?>
<?php
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $username = mysqli_real_escape_string($conn, $username);
        $password = mysqli_real_escape_string($conn, $password);
        
        $query = "SELECT * FROM users WHERE uidUsers = '{$username}'";
        $login_query = mysqli_query($conn, $query);
        
        while($row = mysqli_fetch_array($login_query)){
            $db_user_id = $row['idUsers'];
            $db_username = $row['uidUsers'];
            $db_user_password = $row['pwdUsers'];
            //$db_user_fullname = $row['fullname'];
            $db_user_email = $row['emailUsers'];
            $db_status = $row['status'];
        }
        
        if(password_verify($password, $db_user_password)){
            $_SESSION['username'] = $db_username;
            //$_SESSION['fullname'] = $db_user_fullname;
            $_SESSION['email'] = $db_user_email;
            $_SESSION['user_id'] = $db_user_id;
            $_SESSION['status'] = $db_status;
            $_SESSION['key'] = 'lms1001';
            
            header("Location: ../");
            
          }
          else {
          header("Location: ?errorp=invalid");
        }
    } else {
        $message = "";
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
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Login Portal</h6>
              <?php
                                        if (isset($_GET['errorp'])){
                                            if ($_GET['errorp']=="invalid"){
                                            echo '<div style="color:red;">Invalid Login Details</div>';
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
              <form method="post" action="" class="pt-3">
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" name="username" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username">
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" name="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword" placeholder="Password">                        
                  </div>
                </div>
                <div class="my-2 d-flex justify-content-between align-items-center">
                  <!-- <div class="form-check">
                    <label>
                      <small style="color:red;"><em>NOTE: Your username is your password</em></small>
                    </label>
                  </div> -->
                  <!-- <a href="#" class="auth-link text-black">Forgot password?</a> -->
                </div>
                <div class="my-3">
                  <input type="submit" name="login" class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" value="LOGIN">
                </div>
                <div class="text-center mt-4 font-weight-light">
                  Don't have an account? <a href="register" class="text-primary">Create</a>
                </div>
              </form>
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-flex flex-row">
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

<?php

include 'db_connect.php';

session_start();

if(isset($_SESSION['companyId'])) {
    header("Location: index.php");
}
        
if (isset($_POST['login'])) {

    $companyName = mysqli_real_escape_string($conn, $_POST['companyName']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $result = mysqli_query($conn, "SELECT * FROM admin WHERE admin_username = '" . $companyName. "' and admin_password = '" . $password. "'");

    if ($row = mysqli_fetch_array($result)) {
        $_SESSION['companyId'] = $row['admin_id'];
        $_SESSION['companyName'] = $row['admin_username'];
        header("Location: index.php");
    } else {
        $errormsg = "Incorrect Company Name or Password!!!";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


    <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/jquery-3.3.1.slim.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>

</head>
<body>             

     <!-- MENU SECTION END-->
<div class="content-wrapper">
     <div class="container">
    <div class="row pad-botm">
        <div class="col-md-12">
            <h4 class="header-line">Admin Login Form</h4>
        </div>

</div>

     <div class="row">
         <div class="col-md-3 col-sm-3 col-xs-3">
         </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="panel panel-info">
                        <div class="panel-heading">
                           ADMIN LOGIN FORM
                        </div>
            <div class="panel-body">

            <form action = "" method = "post" role="form" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Admin User Name</label>
                    <input class="form-control" type="text" name="companyName" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

                <div class="form-group">
                    <label>Admin password</label>
                    <input class="form-control" type="password" name="password" id="myInput" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

                <div class="form-group">
                     <input type="checkbox" onclick="myFunction()">Show Password
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

<!-- show password -->
<script type="text/javascript">
function myFunction() {
var x = document.getElementById("myInput");
if (x.type === "password") {
x.type = "text";
} else {
x.type = "password";
}
}
</script>
                           
                  
                    <input type="submit" value="Login" class="btn btn-info" name="login">

                    </form>
                    <span class="text-danger"><?php if (isset($errormsg)) { echo $errormsg; } ?></span>

                </div>
                        </div>
            </div>
        </div>
    </div>
</div>


     
</body>
</html>

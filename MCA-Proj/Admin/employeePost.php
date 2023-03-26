<?php
include 'db_connect.php';
session_start();

if(isset($_POST['submit'])){

$name=$_POST['name'];
$mail_id=$_POST['mail'];
$phone_no=$_POST['phone'];
$job_type=$_POST['jobType'];
$address=$_POST['address'];
$land_mark=$_POST['landmark'];
$district=$_POST['district'];
$state=$_POST['State'];
$postcode=$_POST['postcode'];
$password=$_POST['password'];

$status = "unblock";


$sql="INSERT INTO employee( `name`, `mail_id`, `phone_no`, `job_type`, `address`, `land_mark`, `district`, `state`, `postcode`, `password`, `status`) 
values ('$name', '$mail_id', '$phone_no', '$job_type', '$address', '$land_mark', '$district', '$state', '$postcode', '$password', '$status')";

$insert=mysqli_query($conn, $sql);
   
if($insert){
?>
<script>alert('Registered Successfully..');</script>
<script>window.open('index.php','_self')</script>;
<?php
}
else
{
echo "Error: " . $sql . "" . mysqli_error($conn);
}
}
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/jquery-3.3.1.slim.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
</head>
<body>
    <?php 

include 'header.php';

    ?>

     <!-- MENU SECTION END-->
<div class="content-wrapper">
     <div class="container">
    <div class="row pad-botm">
        <div class="col-md-12">
            <h4 class="header-line">Employee's Registration Form</h4>
        </div>

</div>

     <div class="row">
         <div class="col-md-3 col-sm-3 col-xs-3">
         </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="panel panel-info">
                        <div class="panel-heading">
                           EMPLOYEE'S REGISTRATION FORM
                        </div>
            <div class="panel-body">

            <form  action = "" method = "post" role="form" enctype="multipart/form-data" >

                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

                <div class="form-group">
                    <label>User Name (Mail Id)</label>
                 <input class="form-control" type="email" name="mail" required />
                </div>

                <div class="form-group">
                    <label>Phone No</label>
                 <input class="form-control" type="number" name="phone" required />
                </div>


                <div class="form-group">
                <label>Department Type </label>
                <select name="jobType" class="form-control"  required>
                <option value="">None</option>
                <option value="Water Department">Water Department</option>
                <option value="Transport Department">Transport Department</option>
                <option value="Ration Department">Ration Department</option>
                <option value="TNEB Department">TNEB Department</option>
                <option value="Garbage Department">Garbage Department</option>
                
                </select>
                </div>


                <div class="form-group">
                    <label>Address</label>
                    <textarea class="form-control" rows="3" name="address" required ></textarea>
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

                <div class="form-group">
                    <label>Landmark</label>
                    <input class="form-control" type="text" name="landmark" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

                <div class="form-group">
                    <label>District</label>
                    <input class="form-control" type="text" name="district" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

                <div class="form-group">
                    <label>State</label>
                    <input class="form-control" type="text" name="State" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

                <div class="form-group">
                    <label>Postcode</label>
                    <input class="form-control" type="text" name="postcode" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input class="form-control" type="text" name="password" required />
                </div>
                  
                <input type="submit" class="btn btn-info" value="Submit" name="submit">
                    
                    </form>
                </div>
                        </div>
            </div>
        </div>
    </div>
</div>



  
</body>
</html>

<?php
session_start();
include "db_connect.php";



if(isset($_POST['submit'])){

$type=$_POST['type'];
$name=$_POST['name'];
$message=$_POST['message'];
$user_id = $_SESSION['usr_id'];

$sql="INSERT INTO feedback ( `user_id`, `name`, `message`, `type` ) 
values ('$user_id','$name','$message', '$type')";

$insert=mysqli_query($conn, $sql);

if($insert){
?>
<script>alert('Feedback Successfully..');</script>
<script>window.open('index.php','_self')</script>;
<?php
}
else
{

echo "Error: " . $sql . "" . mysqli_error($conn);

}

}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Seeking | Location </title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Seeking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href='//fonts.googleapis.com/css?family=Roboto:100,200,300,400,500,600,700,800,900' rel='stylesheet' type='text/css'>
<!----font-Awesome----->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!----font-Awesome----->
</head>
<body>
 
<?php
 include 'header.php'; 
 ?>

<div class="banner_1">
	<div class="container">
		<div id="search_wrapper1">
		   <!-- <div id="search_form" class="clearfix">
		    <h1>Start your job search</h1>
		    <p>
			 <input type="text" class="text" placeholder=" " value="Enter Keyword(s)" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Enter Keyword(s)';}">
			 <input type="text" class="text" placeholder=" " value="Location" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Location';}">
			 <label class="btn2 btn-2 btn2-1b"><input type="submit" value="Find Jobs"></label>
			</p>
           </div> -->
		</div>
   </div> 
</div>	



     <!-- MENU SECTION END-->
     <div class="content-wrapper">
     <div class="container">
    <div class="row pad-botm">
        <div class="col-md-12">
            <h4 class="header-line">Request Registration Form</h4>
        </div>

</div>

     <div class="row">
         <div class="col-md-3 col-sm-3 col-xs-3">
         </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="panel panel-info">
                        <div class="panel-heading">
                        Feedback REGISTRATION FORM
                        </div>
            <div class="panel-body">

            <form  action = "" method = "post" role="form" enctype="multipart/form-data" >

                <div class="form-group">
                    <label>Name</label>
                    <input class="form-control" type="text" name="name" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

                <div class="form-group">
                <label>Department Type </label>
                <select name="type" class="form-control"  required>
                <option value="">None</option>
                <option value="Water Department">Water Department</option>
                <option value="Transport Department">Transport Department</option>
                <option value="Ration Department">Ration Department</option>
                <option value="TNEB Department">TNEB Department</option>
                <option value="Garbage Department">Garbage Department</option>
                
                </select>
                </div>

                <div class="form-group">
                    <label>Feedback</label>
                    <textarea class="form-control" rows="3" name="message" required ></textarea>
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
<?php
session_start();
include "db_connect.php";



if(isset($_POST['submit'])){

$type=$_POST['type'];
$name=$_POST['name'];
$description=$_POST['description'];
$map=$_POST['map'];

$req_time = date("Y-m-d h:i:sa");
$user_id = $_SESSION['usr_id'];

$Image1=addslashes(file_get_contents($_FILES['Image1']['tmp_name']));
list($width3, $height3) = getimagesize($_FILES['Image1']['tmp_name']);

$Image2=addslashes(file_get_contents($_FILES['Image2']['tmp_name']));
list($width3, $height3) = getimagesize($_FILES['Image2']['tmp_name']);


$status = "pending";

$sql="INSERT INTO request (  `user_id`, `type`, `name`, `description`, `map`, `Image1`, `Image2`, `status` , `req_time` ) 
values ('$user_id','$type','$name', '$description', '$map', '{$Image1}', '{$Image2}', '$status' , '$req_time')";

$insert=mysqli_query($conn, $sql);

if($insert){
?>
<script>alert('Registered Successfully..');</script>
<script>window.open('request.php','_self')</script>;
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

<br><br>

<section class="w3l-about1">
    <div class="new-block top-bottom">
      <div class="container">
        <div class="middle-section">
          <!-- <h5>Tagline</h5> -->
          <div class="section-width">
            <h2>We are true to ourselves, and commit to always perform at our best.</h2>
          </div>
          <div class="link-list-menu">
            <p>We believe that we are outstanding. Not because we say it, but because we work hard at it. We are
              dedicated, committed and focused. We believe that every person will reach their personal best and overcome
              any challenge through a shared culture and ethos.</p>
          </div>
        </div>
      </div>
    </div>
  </section>



</body>
</html>	






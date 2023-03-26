<?php
session_start();
include "db_connect.php";


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




<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Request</h3>
                   
                    </div>
                   
                    <div class="table-responsive">
                    <table class="table table-hover" id="dev-table">
                        <thead>
                            <tr>
                                
                                <th>Request Id</th>
                                <th>Request Type</th>
                                <th>Request Imag</th>
                                <th>Request Name</th>
                                <th>Request Description</th>
                                <th>Request Map</th>
                                <th>Request Time</th>
                                <th>status</th>
                                               
                            </tr>
                        </thead>
                        <tbody>
                            <?php   
                            $user_id = $_SESSION['usr_id'];                           
                            $sql = "SELECT * FROM `request` where user_id = '$user_id'";
                            $result = $conn->query($sql);
                            $i=1;
                            if ($result->num_rows > 0) {
                            // output data of each row
                                while($row = $result->fetch_assoc()) {

                                    ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>

                                        <td><?php
                                        echo $row['type'];
                                         ?></td>

                                         <td><?php echo '<img width="100px" height="100px" alt="no img is found" src="data:image/jpeg;base64,'.base64_encode($row['Image1']).'"/>'?></td>

                                        <td><?php echo $row["name"]; ?></td>
                                       
                                        <td><?php echo $row["description"]; ?></td>
                                        <td>
      <a href="<?php echo $row["map"]; ?>" target="_blank">Location</a></p>
    </td>
                                        
                                        <td><?php echo $row["req_time"]; ?></td>
                                        <td><?php echo $row["status"]; ?></td>
                                    </tr>
                                    <?php

                                }
                            }
                            ?>
                            
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>


 



</body>
</html>	
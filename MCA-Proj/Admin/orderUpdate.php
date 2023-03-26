<?php
include_once 'db_connect.php';
session_start();

if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM request WHERE id=".$_GET['edit_id'];
	$result_set=mysqli_query($conn,$sql_query);
	$fetched_row=mysqli_fetch_array($result_set);
}


if(isset($_POST['btn-update']))
{
  
$status = $_POST['status'];
$sql_query = "UPDATE ordertable SET delivery = '$status' WHERE id=".$_GET['edit_id'];

	// sql query for update data into database
	
	// sql query execution function
	  if (mysqli_query($conn, $sql_query)) {           
    ?>
		<script type="text/javascript">
		alert('Successfully');
    window.location.href='index.php';
		</script>

    <?php
    } 
    else {
    echo "Error: " . $sql_query . "" . mysqli_error($conn);
    }
    $conn->close();
    }


if(isset($_POST['btn-cancel']))
{
	header("Location: index.php");
}
?>


<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">

body {
    font-family: 'Open Sans', sans-serif;
    line-height:28px;
   
}

        .menu-section {
    background-color: #f7f7f7;
    border-bottom: 5px solid #9170E4;
    width: 100%;
}
.disabled {
    opacity: 0.6;
    cursor: not-allowed;
}


</style>
<script type="text/javascript">
    $(document).ready(function(){
    // Initialize Tooltip
    $('[data-toggle="tooltip"]').tooltip(); 
})
</script>

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
            <h4 class="header-line">Request View</h4>
        </div>

<table class="table">
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
      <tr>
      <td><?php echo $fetched_row['id']; ?></td>
      <td><?php
      echo $fetched_row['type'];
      ?></td>
      <td><?php echo '<img width="100px" height="100px" alt="no img is found" src="data:image/jpeg;base64,'.base64_encode($fetched_row['Image1']).'"/>'?></td>
      <td><?php echo $fetched_row["name"]; ?></td>
      <td><?php echo $fetched_row["description"]; ?></td>
      <td>
      <a href="<?php echo $fetched_row["map"]; ?>" target="_blank">Location</a></p>
    </td>
      <td><?php echo $fetched_row["req_time"]; ?></td>
      <td><?php echo $fetched_row["status"]; ?></td>
      </tr>
    </tbody>
  </table>

<!-- customer -->

  <h1>customer Info</h1>

  <table class="table">
    <thead>
      <tr>
        <th>Customer Id</th>
        <th>Customer Name</th>
        <th>Customer Phone no</th>
        <th>State</th>
        <th>City</th>
        <th>Location</th>
        <th>Postal Code</th>
      </tr>
    </thead>
    <tbody>
      <tr>
      <td><?php echo $fetched_row["id"]; ?></td>
      <td><?php
      $id = $fetched_row["user_id"];
      $show1=mysqli_query($conn,"select * from userregistration where UserId = '$id' ");
      $res23=mysqli_fetch_array($show1);
      echo $res23['UserName'];
      ?></td>
      <td><?php echo $res23["PhoneNumber"]; ?></td>
      <td><?php echo $res23["State"]; ?></td>
      <td><?php echo $res23["City"]; ?></td>
      <td><?php echo $res23["Location"]; ?></td>
      <td><?php echo $res23["PostalCode"]; ?></td>      
      </tr>

    </tbody>
  </table>


<!-- form -->


</div>

</div>


</body>
</html>
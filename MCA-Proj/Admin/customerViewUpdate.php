<?php
include_once 'db_connect.php';
session_start();

if(isset($_GET['edit_id']))
{
	$sql_query="SELECT * FROM userregistration WHERE UserId=".$_GET['edit_id'];
	$result_set=mysqli_query($conn,$sql_query);
	$fetched_row=mysqli_fetch_array($result_set);
}




if(isset($_POST['btn-update']))
{
	// variables for input data
     
      $UserName=$_POST['UserName'];
       $MailId=$_POST['MailId'];
       $PhoneNumber=$_POST['PhoneNumber'];
       $State=$_POST['State'];
       $City=$_POST['City'];
       $Location=$_POST['Location'];
       $PostalCode=$_POST['PostalCode'];

      $status = $_POST['status'];;
           
	// variables for input data
	
	// sql query for update data into database
	$sql_query = "UPDATE userregistration SET UserName='$UserName',MailId='$MailId',PhoneNumber='$PhoneNumber',State= '$State' ,City='$City', Location='$Location',PostalCode='$PostalCode',Status='$status' WHERE UserId=".$_GET['edit_id'];

	// sql query for update data into database
	
	// sql query execution function
	  if (mysqli_query($conn, $sql_query)) {           
    ?>
		<script type="text/javascript">
		alert('Data Are Updated Successfully');
		window.location.href='customerView.php';
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
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="assets/jquery-3.3.1.slim.js"></script>
  <script src="js/jquery.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>


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
            <h4 class="header-line">Update Form</h4>
        </div>

</div>

     <div class="row">
         <div class="col-md-3 col-sm-3 col-xs-3">
         </div>
        <div class="col-md-6 col-sm-6 col-xs-12">
           <div class="panel panel-info">
                        <div class="panel-heading">
                           Update FORM
                        </div>
            <div class="panel-body">

            <form  action = "" method = "post" role="form">

                <div class="form-group">
                    <label>UserName</label>
                    <input class="form-control" type="text" name="UserName" value="<?php echo $fetched_row['UserName']; ?>" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>


                <div class="form-group">
                    <label>MailId</label>
                    <input class="form-control" value="<?php echo $fetched_row['MailId']; ?>" type="text" name="MailId" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

               <div class="form-group">
                    <label>PhoneNumber</label>
                    <input class="form-control" value="<?php echo $fetched_row['PhoneNumber']; ?>" type="number" name="PhoneNumber" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

                 <div class="form-group">
                    <label>State</label>
                    <input class="form-control" type="text" name="State" value="<?php echo $fetched_row['State']; ?>" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>


                <div class="form-group">
                    <label>City</label>
                    <input class="form-control" value="<?php echo $fetched_row['City']; ?>" type="text" name="City" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

               <div class="form-group">
                    <label>Location</label>
                    <input class="form-control" value="<?php echo $fetched_row['Location']; ?>" type="text" name="Location" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>

                 <div class="form-group">
                    <label>PostalCode</label>
                    <input class="form-control" type="text" name="PostalCode" value="<?php echo $fetched_row['PostalCode']; ?>" required />
                    <!-- <p class="help-block">Help text here.</p> -->
                </div>


                <div class="form-group">
                <label>Select status</label>
                <select name="status" class="form-control" id="box1"  required>
                <option value="">None</option>
                <option value="unblock">unblock</option>
                <option value="block">block</option>
                
                </select>
                </div>

                  
                <input type="submit" class="btn btn-info" value="Update" name="btn-update">
                    
                    </form>
                </div>
                        </div>
            </div>
        </div>
    </div>
</div>


</body>
</html>
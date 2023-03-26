<?php
include 'db_connect.php';
session_start();
if (isset($_SESSION['companyId'])) { 
}else {
  header('Location: adminLogin.php'); 
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

.banner{
  background: url(banner.png)no-repeat center top;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    min-height: 630px;
}


</style>



</head>
<body>
<?php 
include "header.php";
?>

<div class="banner" ></div>




</body>
</html>

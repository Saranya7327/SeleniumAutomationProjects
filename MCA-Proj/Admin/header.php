<?php
/*session_start();*/
include_once 'db_connect.php';
?>


<nav class="navbar navbar-default menu-section">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.php">ADMIN CONTROL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>


        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Employee's<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="employeePost.php">Employee's Registration</a></li>
            <li><a href="employeeView.php">Employee's View</a></li>
          </ul>
        </li>



        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Complaint<span class="caret"></span></a>
          <ul class="dropdown-menu"> 
            <li><a href="delay.php">Daily Complaint View</a></li>
            <li><a href="order.php">Complaint View</a></li>
          </ul>
        </li>

        

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Customer<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="customerView.php">Customer View</a></li>
          </ul>
        </li>

        
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Feedback<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="feedbacView.php">Feedback View</a></li>
          </ul>
        </li>


<!-- 
        <li><a href="#">About</a></li> -->
      </ul>

<?php if (isset($_SESSION['companyId'])) { ?>

<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span><?php echo $_SESSION['companyName']; ?></a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>LOG OUT</a></li>
</ul>

<?php
 } 
 else
 {
/*unset($_SESSION['companyId']);*/
/*try{*/
  header('Location: adminLogin.php'); 
/*} catch(Exception $e){
  
}*/

/* Make sure that code below does not get executed when we redirect. */
exit;
 } 

 ?>


    </div>
  </div>
</nav>
</section>
  
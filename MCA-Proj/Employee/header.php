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
      <a class="navbar-brand" href="index.php">Employee CONTROL</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home</a></li>


      

        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="">Request<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="order.php">Request View</a></li>
          </ul>
        </li>

      </ul>

<?php if (isset($_SESSION['empID'])) { ?>
<ul class="nav navbar-nav navbar-right">
<li><a href="#"><span class="glyphicon glyphicon-log-in"></span><?php echo $_SESSION['empName']; ?></a></li>
<li><a href="logout.php"><span class="glyphicon glyphicon-user"></span>LOG OUT</a></li>
</ul>

<?php
 } 
 else
 {
  header('Location: adminLogin.php'); 
exit;
 } 

 ?>


    </div>
  </div>
</nav>
</section>
  
<?php
session_start();

if(isset($_SESSION['empID'])) {
	session_destroy();
	unset($_SESSION['empID']);
	unset($_SESSION['empName']);
	header("Location: index.php");
} else {
	header("Location: index.php");
}
?>
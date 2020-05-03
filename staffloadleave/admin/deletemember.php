<?php 
session_start();
// Create database connection
  $db = mysqli_connect("localhost", "root", "", "sllm");

  $id = $_GET['id'];
  $username = $_GET['username'];
  
  $sql = "DELETE FROM members WHERE id = '$id' AND username = '$username'";
      // execute query
  $sql_res = mysqli_query($db, $sql);

  if($sql_res){
 	$_SESSION['success'] = "Deleted Successfully..!!";
 		header('location: adminhome.php');
	}else{
	$_SESSION['failed'] = "Unable to Deleted..!!";
		header('location: adminhome.php');
	}
?>
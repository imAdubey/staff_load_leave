<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		echo "<script>
          alert('You Should Login First..!!');
          </script>";
		header('location: ../login.php');
	}

  $role = $_SESSION['role'];
  if($role == 'Staff'){
    header('location: ../staff/staffhome.php');
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Assigned Leaves..!!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="max-width=device-width, initial-scale=1"/>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<style>
body {
  margin: 0;
  font-family: "Lato", sans-serif;
}

.sidebar {
  margin: 0;
  padding: 0;
  width: 22%;
  background-color: dodgerblue;
  position: fixed;
  height: 100%;
  overflow: auto;
  border-radius: 5px;
}
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
  border-radius: 5px;
}
 
.sidebar a.active {
  background-color: #012998;
  color: white;
  border-radius: 5px;
}

.sidebar a:hover:not(.active) {
  background-color: #678FFE;
  color: white;
  border-radius: 5px;
}
.sub-menu {
  font-size: .9em;
  border-left: 2em solid dodgerblue;
  padding: .75em;
}
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
}

@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    .icons{
        margin-top: 25px;
        padding: 10px;
    }
    
</style>
</head>
<body>
  <div class="container-fluid">
      <div class="row">
      <div class="col-lg-3 col-sm-3" >
      <div class="sidebar">
         <div>
        	<!--  logged in user information -->
           	<?php  if (isset($_SESSION['username'])) : ?>
           	 <p style="text-align: center">You are Logged In as :</p>
             <p style="text-align: center">Admin : <strong><?php echo $_SESSION['username']; ?></strong></p>
             <a href="../logout.php" class="text-center text-danger">Logout</a>
            <?php endif ?>
         </div>
	        <a href="adminhome.php">Home</a>
          <a href="assignload.php">Load Management</a>
          <a href="timetable.php">Time Table</a>
          <a class="active" href="assignleave.php">Leaves</a>
      </div>
          </div>

        <div class="col-lg-9 col-sm-9">
        <br><h1 style="background-color: dodgerblue; color: white" class="card-header">All Assigned leaves</h1><br>
        <?php
          if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          } 
        ?>
        <div class="card-body">
        <table class="table table-bordered text-center">
         <tr class="card-header">
          <th> ID </th>
          <!-- <th> Admin ID </th> -->
          <th> Name </th>
          <th> Valid From </th>
          <th> Valid To </th>
          <th> Casual Leave </th>
          <th> Special Leave </th>
          <th> Medical Leave </th>
          <th> Vacation Leave </th>
          <th> Assigned Date </th>
         </tr>
                    
         <?php                          
          // Create database connection
           $db = mysqli_connect("localhost", "root", "", "sllm");
         
           $sql = "SELECT * FROM assign_leave ";
               // execute query
           $result = mysqli_query($db, $sql); 
           $number = 1;     
           while($res = mysqli_fetch_array($result)){
          ?>  
            
        <tr class="a">
          <!-- <td><?php echo $res['id']; ?></td> -->
          <td><?php echo $number; ?></td>
          <td><?php echo $res['assign_to']; ?></td>
          <td><?php echo $res['v_from']; ?></td>
          <td><?php echo $res['v_to']; ?></td>
          <td><?php echo $res['casual']; ?></td>
          <td><?php echo $res['special']; ?></td>
          <td><?php echo $res['medical']; ?></td>
          <td><?php echo $res['vacation']; ?></td>
          <td><?php echo $res['assign_date']; ?></td>
         </tr> 
         <?php
          $number++;    
           }
         ?>
        </table> 
        </div>               
    </div>
          
    </div>
    </div>
</body>
</html>

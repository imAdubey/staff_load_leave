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

  $db_con = mysqli_connect("localhost", "root", "", "sllm");

  if(isset($_POST['approved'])){
    $id = $_POST['id'];
    $admin_response = $_POST['admin_response'];
    $status = "Approved";
    $status_query = "UPDATE applied_leave SET status = '$status', admins_response = '$admin_response' WHERE id = '$id' ";
    mysqli_query($db_con, $status_query);
  }

  if(isset($_POST['rejected'])){
    $id = $_POST['id'];
    $admin_response = $_POST['admin_response'];
    $status = "Rejected";
    $status_query = "UPDATE applied_leave SET status = '$status', admins_response = '$admin_response' WHERE id = '$id' ";
    mysqli_query($db_con, $status_query);
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
.img_div img{
  width: 90px;
  height: 120px;
  text-align: center;
}
.content{
  width: 300px;
  float: left;
  padding-left: 10px;
  margin-left: 5px;
}
.clear{
  clear: both;
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
             <p style="text-align: center">Staff : <strong><?php echo $_SESSION['username']; ?></strong></p>
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
        <br><h1 style="background-color: dodgerblue; color: white" class="card-header">List Of Applied Leaves</h1>
        <?php
          if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          } 
        ?>
        <div class="card-body">
         <?php                          
          // Create database connection
           $db = mysqli_connect("localhost", "root", "", "sllm");
         
           $sql = " SELECT * FROM applied_leave INNER JOIN members ON applied_leave.applied_by = members.username ";
               // execute query
           $result = mysqli_query($db, $sql); 
           $number = 1;     
           while($res = mysqli_fetch_array($result)){
          ?>  
            
            <div class="content">
            <table class="table table-bordered text-center">
              <tr>
                <!-- <td><?php echo $res['id']; ?></td> -->
                <td><?php echo "<div class='img_div'>"; 
                    echo "<img src='../uploads/".$res['image']."' >"; 
                    echo "</div>"; ?></td>
              </tr>
              <tr>
                <td><b>Name :</b> <?php echo $res['applied_by']; ?></td>
              </tr>
              <tr>
                <td><b>Status :</b> <?php echo $res['status']; ?></td>
              </tr>
              <tr>
                <td><p><a style="text-decoration:none" class="btn btn-danger" href="view_leave_deatils.php?id=<?php echo $res['id']; ?>&username=<?php echo $res['username']; ?>&al_id=<?php echo $res['al_id']; ?>&applied_by=<?php echo $res['applied_by']; ?>"> View </a></p> </td>
              </tr>
            </table>
          </div>
            
            <?php
              // $number++;    
              }
            ?> 
            <div class="clear"></div>
        </div>               
    </div>
          
    </div>
    </div>
</body>
</html>

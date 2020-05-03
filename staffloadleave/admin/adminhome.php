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
	<title>Welcome Admin..!!</title>
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
             <p style="text-align: center">Admin : <strong><?php echo $_SESSION['username']; ?></strong></p>
             <a href="../logout.php" class="text-center text-danger">Logout</a>
            <?php endif ?>
         </div>
	        <a class="active" href="adminhome.php">Home</a>
          <a href="assignload.php">Load Management</a>
          <a href="timetable.php">Time Table</a>
          <a href="assignleave.php">Leave Management</a>
      </div>
          </div>

        <div class="col-lg-9 col-sm-9">
        <br><h1 style="background-color: dodgerblue; color: white" class="card-header">Available Records</h1><br>
        <?php
          if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          } 
          if(isset($_SESSION['failed'])){
            echo $_SESSION['failed'];
            unset($_SESSION['failed']);
          } 
        ?>
        <div>          
         <?php                          
          // Create database connection
           $db = mysqli_connect("localhost", "root", "", "sllm");
         
           $sql = "SELECT * FROM members WHERE role = 'Staff'";
               // execute query
           $result = mysqli_query($db, $sql); 
           // $number = 1;     
           while($res = mysqli_fetch_array($result)){
          ?>  
          <div class="content">
            <table class="table table-bordered text-center">
              <tr>
                <!-- <td><?php echo $res['id']; ?></td> -->
                <td colspan="2"><?php echo "<div class='img_div'>"; 
                    echo "<img src='../uploads/".$res['image']."' >"; 
                    echo "</div>"; ?></td>
              </tr>
              <tr>
                <td colspan="2"><b>Name :</b> <?php echo $res['username']; ?></td>
              </tr>
              <tr>
                <td><b>Branch :</b> <?php echo $res['branch']; ?></td>
                <td><b>Role:</b> <?php echo $res['role']; ?></td>
              </tr>
              <tr>
                <td colspan="2"><p><a style="text-decoration:none" class="btn btn-danger" href="deletemember.php?id=<?php echo $res['id']; ?>&username=<?php echo $res['username']; ?>"> Delete </a> | <a style="text-decoration:none" class="btn btn-info" href="memberprofile.php?id=<?php echo $res['id']; ?>&username=<?php echo $res['username']; ?>"> Profile </a></p> </td>
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

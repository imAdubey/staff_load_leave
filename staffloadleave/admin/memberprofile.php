<?php 
  session_start();
  if(!isset($_SESSION['username'])){
    echo "<script>
          alert('You Should Login First..!!');
          </script>";
    header('location: ../login.php');
  }
?>

<!doctype html>
<html>
<head>
<title>Profile</title> 
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
img{
  padding: 1px;
  width: 180px;
  height: 200px;
}
.imgtr{
  text-align: center;
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
      <h1 class="text-center">Profile</h1>
        <table class="table table-bordered table-striped" style="max-width:500px; margin:auto">
                    
         <?php                          
          // Create database connection
           $db = mysqli_connect("localhost", "root", "", "sllm");
            
            $id = $_GET['id'];
            
           $sql = "SELECT * FROM members WHERE id = $id";
               // execute query
           $result = mysqli_query($db, $sql);      
           while($res = mysqli_fetch_array($result)){
          ?>   
            
           <tr class="imgtr">
           <td colspan="2"><?php echo "<div id='img_div'>"; 
                    echo "<img src='../uploads/".$res['image']."' >"; 
                    echo "</div>"; ?></td>
            </tr>
            <tr>
            <td><b>Name :</b> <?php echo $res['username']; ?></td>
            <td><b>Email :</b> <?php echo $res['email']; ?></td>
            </tr>
            <tr>
            <td><b>Gender :</b> <?php echo $res['gender']; ?></td>
            <td><b>D.O.B :</b> <?php echo $res['dob']; ?></td>
            </tr>
            <tr>
            <td><b>Branch :</b> <?php echo $res['branch']; ?></td>
            <td><b>Role:</b> <?php echo $res['role']; ?></td>
            </tr>
            <tr>
            <td colspan="2"><b>Qualification :</b> <?php echo $res['qualification']; ?></td>
            </tr>
            <tr>
              <td colspan="2"><b>Address :</b> <?php echo $res['address']; ?></td>
            </tr>
         <?php    
           }
         ?>
        </table> 
        <div style="margin-top:8px" class="text-center">
            <a href="adminhome.php"><button type="submit" name="insert" class="btn btn-success">Back</button></a>
        </div>
    </div>
  </div>
  </div>
</body>
</html>
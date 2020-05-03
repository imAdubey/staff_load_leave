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

  $con = mysqli_connect('localhost', 'root', '', 'sllm');

  if(isset($_POST['assign'])){

    $validfrom = $_POST['validfrom'];
    $validto = $_POST['validto'];
    $casual = $_POST['casual'];
    $special = $_POST['special'];
    $staff_list = $_POST['staff'];
    $assign_by = $_POST['assign_by'];
    $medical = $_POST['medical'];
    $vacation = $_POST['vacation'];

    foreach ($staff_list as $staff) {

      $q = "INSERT INTO assign_leave(v_from, v_to, casual, special, medical, vacation, assign_to, assign_by) VALUES ('$validfrom', '$validto', '$casual', '$special', '$medical', '$vacation', '$staff', '$assign_by')";
      $q_res = mysqli_query($con, $q);      
      }
      if($q_res){
        $_SESSION['success'] = "Leave assigned successfully..!!";
    }
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
        <br><h1 style="background-color: dodgerblue; color: white" class="card-header">Assign Leaves to Staff</h1>
        <div class="card-body">
          <div style="display: block; margin: auto; text-align: center">
            <a href="allleave.php" class="btn btn-outline-info">All Assigned Leaves</a>  <a href="allappliedleave.php" class="btn btn-outline-danger">All Applied Leaves</a>
          </div> 
        <?php
          if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          } 
        ?><br>
        <form method="POST">
          <div class="row">
            <div class="col-lg-3">
              <h4 class="card-header"> Staff Names </h4>
              <input type="hidden" name="assign_by" value="<?php echo $_SESSION['username']; ?>">
              <?php 
                $query = "SELECT * FROM members WHERE role = 'Staff' ";
                $execute_query = mysqli_query($con, $query);
                while($res = mysqli_fetch_array($execute_query)){
              ?>
                <div class="card-body">
                  <input style="margin-right: 5px;" type="checkbox" name="staff[]" value="<?php echo $res['username']; ?>"><b><?php echo $res['username']; ?></b>
                </div>
              
                 
              <?php 
                }
              ?>
            </div>
            <div class="col-lg-9">
              <h4 class="card-header"> Assign Leaves </h4>
              <div class="card-body">
                
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Valid From :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="date" name="validfrom" class="form-control" required>
                  </div>
                </div>
              
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Valid To :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="date" name="validto" class="form-control" required>
                  </div>
                </div>

                <h5 class="card-header"> Types of Leaves </h5><br>
                
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Casual Leave :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="text" name="casual" class="form-control" placeholder="Enter no." required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Special Leave :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="text" name="special" class="form-control" placeholder="Enter no." required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Medical Leave :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="text" name="medical" class="form-control" placeholder="Enter no." required>
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Vacations :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="text" name="vacation" class="form-control" placeholder="Enter no." required>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-outline-primary" name="assign">Assign</button>
                </div>
              </div>
            </div>
            
          </div> 
        </form>            
    </div>
    </div> 
    </div>
    </div>
</body>
</html>

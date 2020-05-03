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

  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sllm");

?>
<!DOCTYPE html>
<html>
<head>
	<title>Assigned Loads..!!</title>
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
          <a class="active" href="assignload.php">Load Management</a>
          <a href="timetable.php">Time Table</a>
          <a href="assignleave.php">Leaves</a>
      </div>
          </div>

        <div class="col-lg-9 col-sm-9">
        <br><h1 class="text-center">All Assigned Loads</h1><br>
        <?php
          if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          } 
        ?>
        <form method="POST">
          <div style="max-width: 350px">
            <div class="collapse multi-collapse" id="search_area">
              <select class="form-control" id="year" name="year" onchange="myfun(this.value)">
              <option>Select Year</option>
              <?php
                $q = "select * from year";
                $result = mysqli_query($db, $q);
                while ($rows = mysqli_fetch_array($result)) {
              ?>
              <option value="<?php echo $rows['y_id']; ?>"><?php echo $rows['year-sem']; ?></option>
              <?php
                }  
              ?>
            </select><br>
              <input class="form-control" type="text" id="search_sname" name="search_sname" placeholder="Staff Name"><br>
              <input class="btn btn-success" type="submit" name="search" value="Search">
            </div><br>
            <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#search_area">Advance Search</button>
          </div><br>


        <table id="loadetails" class="table table-striped table-hover table-bordered text-center">
         <tr class="a">
          <th> ID </th>
          <th> Name </th>
          <th> Year </th>
          <th> Subject </th>
          <th> Type </th>
         </tr>
                    
        <?php                          
          // Create database connection
          $db = mysqli_connect("localhost", "root", "", "sllm");
            if(isset($_POST['search'])){
              $year = $_POST['year'];
              $search_sname = $_POST['search_sname'];
              // $search_lecday = $_POST['search_lecday'];

              if($year != '' && $search_sname != ''){

                $sql = "SELECT * FROM assign_load INNER JOIN year ON assign_load.year = year.y_id AND assign_load.year = '$year' AND assign_load.assigned_to = '$search_sname'";
               // execute query
              $result = mysqli_query($db, $sql);
              $number = 1;     
              while($res = mysqli_fetch_array($result)){
        ?> 
            
          <tr class="a">
           <!--  <td><?php echo $res['id']; ?></td> -->
            <td><?php echo $number; ?></td>
            <td><?php echo $res['assigned_to']; ?></td>
            <td><?php echo $res['year-sem']; ?></td>
            <td><?php echo $res['subject']; ?></td>
            <td><?php echo $res['type']; ?></td>
            <!-- <td><?php echo $res['assigned_date']; ?></td> -->
          </tr>
        <?php
          $number++;    
           }
          }if($year != '' && $search_sname == ''){

                $sql = "SELECT * FROM assign_load INNER JOIN year ON assign_load.year = year.y_id AND assign_load.year = '$year'";
               // execute query
              $result = mysqli_query($db, $sql);
              $number = 1;     
              while($res = mysqli_fetch_array($result)){
        ?> 
            
          <tr class="a">
           <!--  <td><?php echo $res['id']; ?></td> -->
            <td><?php echo $number; ?></td>
            <td><?php echo $res['assigned_to']; ?></td>
            <td><?php echo $res['year-sem']; ?></td>
            <td><?php echo $res['subject']; ?></td>
            <td><?php echo $res['type']; ?></td>
            <!-- <td><?php echo $res['assigned_date']; ?></td> -->
          </tr>
        <?php
          $number++;    
           }
          }if($year == '' && $search_sname != ''){

              $sql = "SELECT * FROM assign_load INNER JOIN year ON assign_load.year = year.y_id AND assign_load.assigned_to = '$search_sname'";
               // execute query
              $result = mysqli_query($db, $sql);
              $number = 1;     
              while($res = mysqli_fetch_array($result)){
        ?> 
            
          <tr class="a">
           <!--  <td><?php echo $res['id']; ?></td> -->
            <td><?php echo $number; ?></td>
            <td><?php echo $res['assigned_to']; ?></td>
            <td><?php echo $res['year-sem']; ?></td>
            <td><?php echo $res['subject']; ?></td>
            <td><?php echo $res['type']; ?></td>
            <!-- <td><?php echo $res['assigned_date']; ?></td> -->
          </tr>
        <?php
          $number++;    
           }
         }
         }else{
               $sql = "SELECT * FROM assign_load INNER JOIN year ON assign_load.year = year.y_id";
               // execute query
              $result = mysqli_query($db, $sql);
              $number = 1;     
              while($res = mysqli_fetch_array($result)){
        ?>  
          <tr class="a">
           <!--  <td><?php echo $res['id']; ?></td> -->
            <td><?php echo $number; ?></td>
            <td><?php echo $res['assigned_to']; ?></td>
            <td><?php echo $res['year-sem']; ?></td>
            <td><?php echo $res['subject']; ?></td>
            <td><?php echo $res['type']; ?></td>
            <!-- <td><?php echo $res['assigned_date']; ?></td> -->
          </tr>
        <?php
          $number++;    
           }
         }
        ?>
        </table>
        </form> 
        <a href="assignload.php" style="display: block; margin: auto; text-align: center; margin-top: 10px; max-width: 150px" class="btn btn-outline-success" name="assign">Go Back</a>               
    </div>
          
    </div>
    </div>

<script type="text/javascript">
      function myfun(datavalue){
        $.ajax({
          url: 'allloaddetails.php',
          type: 'POST',
          data: { datapost : datavalue },

          success: function(result){
            $('#loadetails').html(result);
          }
        });
      }
  </script>

</body>
</html>

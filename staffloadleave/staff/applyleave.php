<?php 
	session_start();
	if(!isset($_SESSION['username'])){
		echo "<script>
          alert('You Should Login First..!!');
          </script>";
		header('location: ../login.php');
	}

  $role = $_SESSION['role'];
  if($role == 'Admin'){
    header('location: ../admin/adminhome.php');
  }

  $con = mysqli_connect('localhost', 'root', '', 'sllm');

  $sql = "SELECT * FROM assign_leave WHERE assign_to = '".$_SESSION['username']."' ";
               // execute query
           $result = mysqli_query($con, $sql); 
           $number = 1;     
           while($res = mysqli_fetch_array($result)){
            $db_casual = $res['casual'];
            $db_special = $res['special'];
            $db_medical = $res['medical'];
            $db_vacation = $res['vacation'];
           }

  if(isset($_POST['apply'])){

    $applied_by = $_POST['applied_by'];
    $leavefrom = $_POST['leavefrom'];
    $leaveto = $_POST['leaveto'];
    $casual = $_POST['casual'];
    $special = $_POST['special'];
    $medical = $_POST['medical'];
    $vacation = $_POST['vacation'];
    $comment = $_POST['comment'];
    $status = "Pending";
    $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $folder="../uploads/";
    move_uploaded_file($file_loc,$folder.$file);

      $q_check = "SELECT managed_by FROM managed_leave WHERE managed_by = '$applied_by' ";
      $exe_q_check = mysqli_query($con, $q_check);
      $count = mysqli_num_rows($exe_q_check);
      if($count >= 1){
        if($casual != '' || $special != '' || $medical != '' || $vacation != ''){
          if($casual > $db_casual || $special > $db_special || $medical > $db_medical || $vacation > $db_vacation){
            $_SESSION['failed'] = "Enter appropriate leave value..";
          }else{
            $q = "INSERT INTO applied_leave(applied_by, l_from, l_to, casual, special, medical, vacation, managed_load_doc, staff_reason, status) VALUES ('$applied_by', '$leavefrom', '$leavefrom', '$casual', '$special', '$medical', '$vacation', '$file', '$comment', '$status')";
            $q_res = mysqli_query($con, $q);

            if($q_res){
              $_SESSION['success'] = "Leave applied successfully..!!";
            }
          }
        }else{
          $_SESSION['failed'] = "Select your leaves types.. ";
        }
      }else{
        $_SESSION['failed'] = "It seems you haven't managed your load..It's a request that you first go and manage you load and then apply..!!";
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
input[type=file], input[type=text], input[type=date], textarea {
    width: 100%;
    padding: 15px;
    margin: 5px 0 15px 0;
    border: none;
    background: #f1f1f1;
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
	        <a href="staffhome.php">Home</a>
          <a href="yourload.php">Your Load</a>
          <a class="active" href="applyleave.php">Leaves</a>
        </div>
     </div>

        <div class="col-lg-9 col-sm-9">
        <br><h1 class="text-center">Available Leaves assigned by Admin</h1>
        <div style="display: block; margin: auto; text-align: center">
        <a href="allappliedleave.php" class="btn btn-outline-info">Leave History</a> <a href="manage_leave.php" class="btn btn-outline-danger" name="apply">Manage Leave</a></div><br>
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
          <th> Assigned By </th>
          <th> Assigned Date </th>
         </tr>
                    
         <?php                          
          // Create database connection
           $db = mysqli_connect("localhost", "root", "", "sllm");
         
           $sql = "SELECT * FROM assign_leave WHERE assign_to = '".$_SESSION['username']."' ";
               // execute query
           $result = mysqli_query($db, $sql); 
           $number = 1;     
           while($res = mysqli_fetch_array($result)){
          ?>  
            
        <tr class="a">
          <!-- <td><?php echo $res['id']; ?></td> -->
          <td><?php echo $number; ?></td>
          <td><?php echo $_SESSION['username']; ?></td>
          <td id="v_from"><?php echo $res['v_from']; ?></td>
          <td id="v_to"><?php echo $res['v_to']; ?></td>
          <td id="casual"><?php echo $res['casual']; ?></td>
          <td id="special"><?php echo $res['special']; ?></td>
          <td id="medical"><?php echo $res['medical']; ?></td>
          <td id="vacation"><?php echo $res['vacation']; ?></td>
          <td><?php echo $res['assign_by']; ?></td>
          <td><?php echo $res['assign_date']; ?></td>          
         </tr> 
         <?php
          $number++;    
           }
         ?>
        </table>  
        <form method="POST" enctype="multipart/form-data">
         <div class="col-lg-12">
              <h4 class="card-header"> Apply for Leaves </h4>
              <input type="hidden" name="applied_by" value="<?php echo $_SESSION['username']; ?>">
              <div class="card-body">
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Leave From :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="date" id="leavefrom" name="leavefrom" onblur="checklfrom(this.value)">
                  </div>
                </div>
              
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Leave To :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="date" id="leaveto" name="leaveto" onblur="checklto(this.value)">
                  </div>
                </div>

                <h5 class="card-header"> Types of Leaves </h5><br>
                
                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Casual Leave :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="text" id="c_leave" name="casual" placeholder="Enter no." onblur="checkcasual(this.value)">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Special Leave :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="text" id="s_leave" name="special" placeholder="Enter no." onblur="checkspecial(this.value)">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Medical Leave :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="text" id="m_leave" name="medical" placeholder="Enter no." onblur="checkmedical(this.value)">
                  </div>
                </div>

                <div class="row form-group">
                  <div class="col-lg-3">
                    <label><b>Vacations :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="text" id="v_leave" name="vacation" placeholder="Enter no." onblur="checkvacation(this.value)">
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <label><b>Upload Managed load Document :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <input type="file" name="file" required>
                  </div>
                </div>
                <div class="row">
                  <div class="col-lg-3">
                    <label><b>Comment Reasons :</b></label>
                  </div> 
                  <div class="col-lg-9"> 
                    <textarea name="comment" rows="4" cols="6" required></textarea>
                  </div>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary" name="apply">Apply</button>
                </div>
              </div>
            </div>
          </form>

    </div>          
    </div>
    </div>

    <script type="text/javascript">
      function checklfrom(lfromval){
        var vfrom = $('#v_from').text();
        var vto = $('#v_to').text();
        var lfrom = lfromval;

        var date1 = new Date(vfrom);
        var date2 = new Date(lfrom);
        var diffDays = parseInt((date2 - date1) / (1000 * 60 * 60 * 24)); 
        
        var date3 = new Date(lfrom);
        var date4 = new Date(vto);
        var diffDays1 = parseInt((date4 - date3) / (1000 * 60 * 60 * 24));

        if(diffDays >= 0 && diffDays1 >= 0){

        }else{
          //alert('Enter valid Date..!!');
          document.getElementById("leavefrom").value="";
        }      
      }

      function checklto(ltoval){
        var vfrom = $('#v_from').text();
        var vto = $('#v_to').text();
        var lto = ltoval;

        var date1 = new Date(vfrom);
        var date2 = new Date(lto);
        var diffDays = parseInt((date2 - date1) / (1000 * 60 * 60 * 24)); 
        
        var date3 = new Date(lto);
        var date4 = new Date(vto);
        var diffDays1 = parseInt((date4 - date3) / (1000 * 60 * 60 * 24));

        if(diffDays>=0 && diffDays1>=0){

        }else{
          //alert('Enter valid Date..!!');
          document.getElementById("leaveto").value="";
        }      
      }
      
      
    </script>

</body>
</html>

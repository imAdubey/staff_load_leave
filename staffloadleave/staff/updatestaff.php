<?php 
  session_start();
 // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sllm");

  //if insert btn is clicked
  if (isset($_POST['update'])){
      //get the values 
      $id = $_GET['id'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $gender = $_POST['gender'];
      $dob = $_POST['dob'];
      $branch = $_POST['branch'];
      $qualification = $_POST['qualification'];
      $address = $_POST['address'];
      $image = $_FILES['studimg']['name'];
      $file = rand(1000,100000)."-".$_FILES['file']['name'];
      $file_loc = $_FILES['file']['tmp_name'];
      // image file directory
  	  $target = "../uploads/".basename($image);
      $folder="../uploads/";
      move_uploaded_file($file_loc,$folder.$file);
      if($image == ''){
        $sql = " UPDATE members SET id = $id, username = '$username', email = '$email', gender = '$gender', dob = '$dob', branch = '$branch', qualification = '$qualification', address = '$address', docs = '$file' where id = $id ";
        // execute query
        $rslt_sql = mysqli_query($db, $sql);
        if($rslt_sql){
          echo "<script>
                       alert('Insertion Successful');
                       window.location.href='staffhome.php';
                      </script>";
        }
      }elseif($image == '' && $file == ''){
        $sql = " UPDATE members SET id = $id, username = '$username', email = '$email', gender = '$gender', dob = '$dob', branch = '$branch', qualification = '$qualification', address = '$address' where id = $id ";
        // execute query
        $rslt_sql = mysqli_query($db, $sql);
        if($rslt_sql){
          echo "<script>
                       alert('Insertion Successful');
                       window.location.href='staffhome.php';
                      </script>";
        }
      }else{
        $sql = " UPDATE members SET id = $id, username = '$username', email = '$email', gender = '$gender', dob = '$dob', branch = '$branch', qualification = '$qualification', address = '$address', image = '$image', docs = '$file' where id = $id ";
        // execute query
        mysqli_query($db, $sql);

        if (move_uploaded_file($_FILES['studimg']['tmp_name'], $target)) {
            echo "<script>
                       alert('Insertion Successful');
                       window.location.href='staffhome.php';
                      </script>";
          }else{
            echo "<script>
                       alert('Failed to Insert');
                      </script>";
          }
      }   
  }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Update Profile</title>
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
     /* The popup form - hidden by default */
  .form-popup {
    bottom: 0;
    max-width: 750px;
    display: flex;
    margin: auto;
    height: auto;
    /* right: 15px; */
    border: 3px solid #f1f1f1;
    z-index: 9;
  }
  /* Add styles to the form container */
  .form-container {
    max-width: 500px;
    margin: auto;
    height: auto;
    padding: 10px;
    background-color: white;
  }
  /* Full-width input fields */
  .form-container input[type=text], .form-container select, .form-container textarea, .form-container input[type=date], .form-container input[type=file] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
  }
  /* When the inputs get focus, do something */
  .form-container input[type=text]:focus, .form-container select:focus, .form-container textarea:focus, .form-container input[type=date]:focus, .form-container input[type=file]:focus {
    background-color: #ddd;
    outline: none;
  }
  /* Add some hover effects to buttons */
  .form-container .btn:hover{
    opacity: 1;
  }
  img{
          padding: 1px;
          width: 180px;
          height: 200px;
        }
    </style>
</head>
<body>
    <div class="form-popup" id="myForm">
         <form method="post" class="form-container" enctype="multipart/form-data">

          <h1 style="text-align:center">Update Your Profile</h1><br>

            <?php
            // Create database connection
            $db = mysqli_connect("localhost", "root", "", "sllm");
            $id = $_GET['id'];
            $sql = "SELECT * FROM members WHERE id = '$id' ";
               // execute query
            $result = mysqli_query($db, $sql);      
            while($res = mysqli_fetch_array($result)){
          ?>

            <div class="row">
              <div class="col-lg-12 text-center">
              <p><b>Profile Image :</b><?php echo "<div id='img_div'>"; 
                    echo "<img src='../uploads/".$res['image']."' >"; 
                    echo "</div>"; ?></p>
              </div>
              <label for="profile"><b>Update Profile Picture :</b></label>
              <input type="file" name="studimg">
            </div>

        <div class="row">
           <div class="col-lg-6">
            <label for="name"><b>Name</b></label>
            <input type="text" name="username" value="<?php echo $res['username']; ?>">
           </div>
           <div class="col-lg-6">
            <label for="email"><b>Email</b></label>
            <input type="text" name="email" value="<?php echo $res['email']; ?>">
           </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
           <label for="gender"><b>Gender</b></label>
           <div class="custom-control custom-radio">
            <input type="radio" value="Male" id="genderRadio1" name="gender" class="custom-control-input" <?php if($res['gender']=='Male') echo "checked"; ?>>
            <label class="custom-control-label" for="genderRadio1">Male</label>
           </div>
           <div class="custom-control custom-radio">
            <input type="radio" value="Female" id="genderRadio2" name="gender" class="custom-control-input" <?php if($res['gender']=='Female') echo "checked"; ?>>
            <label class="custom-control-label" for="genderRadio2">Female</label>
           </div>
           </div>
           <div class="col-lg-6"> 
           <label for="dob"><b>D.O.B</b></label>
           <input type="date" placeholder="Enter Email" name="dob" value="<?php echo $res['dob']; ?>">
         </div>
        </div>

        <div class="row">
          <div class="col-lg-6">
           <label><b>Branch</b></label>
            <div class="custom-control custom-radio">
            <input type="radio" value="Civil" id="branchRadio1" name="branch" class="custom-control-input" <?php if($res['branch']=='Civil') echo "checked"; ?>>
            <label class="custom-control-label" for="branchRadio1">Civil</label>
           </div>
           <div class="custom-control custom-radio">
            <input type="radio" value="Computer" id="branchRadio2" name="branch" class="custom-control-input" <?php if($res['branch']=='Computer') echo "checked"; ?>>
            <label class="custom-control-label" for="branchRadio2">Computer</label>
           </div>
           <div class="custom-control custom-radio">
            <input type="radio" value="Electronics" id="branchRadio3" name="branch" class="custom-control-input" <?php if($res['branch']=='Electronics') echo "checked"; ?>>
            <label class="custom-control-label" for="branchRadio3">Electronics</label>
           </div>
           <div class="custom-control custom-radio">
            <input type="radio" value="EXTC" id="branchRadio4" name="branch" class="custom-control-input" <?php if($res['branch']=='EXTC') echo "checked"; ?>>
            <label class="custom-control-label" for="branchRadio4">EXTC</label>
           </div>
           <div class="custom-control custom-radio">
            <input type="radio" value="Mechanical" id="branchRadio5" name="branch" class="custom-control-input" <?php if($res['branch']=='Mechanical') echo "checked"; ?>>
            <label class="custom-control-label" for="branchRadio5">Mechanical</label>
           </div>
          </div>
          <div class="col-lg-6">
           <label for="qualification"><b>Qualification :</b></label>
           <div class="custom-control custom-radio">
            <input type="radio" value="B Tech" id="qualificationRadio1" name="qualification" class="custom-control-input" <?php if($res['qualification']=='B Tech') echo "checked"; ?>>
            <label class="custom-control-label" for="qualificationRadio1">B Tech</label>
           </div>
           <div class="custom-control custom-radio">
            <input type="radio" value="M Tech" id="qualificationRadio2" name="qualification" class="custom-control-input" <?php if($res['qualification']=='M Tech') echo "checked"; ?>>
            <label class="custom-control-label" for="qualificationRadio2">M Tech</label>
           </div>
           <div class="custom-control custom-radio">
            <input type="radio" value="Phd" id="qualificationRadio3" name="qualification" class="custom-control-input" <?php if($res['qualification']=='Phd') echo "checked"; ?>>
            <label class="custom-control-label" for="qualificationRadio3">Phd</label>
           </div>
         </div>
         </div>
           <label for="address"><b>Address :</b></label>
           <textarea name="address" class="form-control" rows="5" id="comment"></textarea>

           <a href="../uploads/<?php echo $res['docs'] ?>" target="_blank">View previously uploaded file</a><br>
           <label for="file"><b>Update Your Documents :</b></label>
           <input type="file" name="file" />
           <button type="submit" class="btn btn-outline-success" name="update">Update</button>
          <a href="staffhome.php" class="btn btn-outline-info">Cancle</a>
           <?php    
            }
          ?>
          <!-- <button type="submit" class="btn btn-outline-success" name="update">Update</button>
          <a href="staffhome.php" class="btn btn-outline-info">Cancle</a> -->
         </form>
       </div>    
</body>
</html>
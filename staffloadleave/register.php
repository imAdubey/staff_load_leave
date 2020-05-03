<?php 

  session_start();
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sllm");

  //if insert btn is clicked
  if (isset($_POST['reg_user'])){
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $gender = $_POST['gender'];
    $role = $_POST['role']; 

    $check_query = "SELECT * FROM members WHERE username='$username' AND email='$email' LIMIT 1 ";
    $check_res = mysqli_query($db, $check_query);
    $fetch_res = mysqli_fetch_assoc($check_res);
    if($fetch_res){
      if($fetch_res['username'] === $username && $fetch_res['email'] === $email){
        $_SESSION['failed'] = "Username and Email already exists..!!";
      }
    }else{
      if($gender == "Male"){
        $sql = "INSERT INTO members(username, email, password, role, gender) VALUES ('$username', '$email', '$password', '$role', 'Male')";
        // execute query
        $res = mysqli_query($db, $sql);
        $_SESSION['username'] = $username;
        $_SESSION['role'] = $role;
        }else{
          $sql = "INSERT INTO members(username, email, password, role, gender) VALUES ('$username', '$email', '$password', '$role', 'Female')";
          // execute query
          $res = mysqli_query($db, $sql);
          $_SESSION['username'] = $username;
          $_SESSION['role'] = $role;
        }
        if($res){
          echo "<script>
                 alert('You have Successfully Registered..!!');
                </script>";
          // $_SESSION['success'] = "Data saved successfully..!!";
          header('location: login.php');
          }
      }
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Create Account</title>
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

    <script>
      function formvalidation(){
        var role = $('#role').val();
        var username = $('#username').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password1 = $('#password1').val();
        var passwordlen = $('#password').val().length;

        if(role ==''){
          alert("Role is required");
          return false;
        }

        if(username ==''){
          alert('Please Enter Username');
          return false;
        }

        if(email ==''){
          alert('Please Enter Email');
          return false;
        }
        if(password ==''){
          alert('Please Enter Password');
          return false;
        }
        if(password1 ==''){
          alert('Please Confirm Password');
          return false;
        }
        if(passwordlen <= 4){
          alert('Your Password should contain atleast 5 charachers');
          return false;
        }
        if(password != password1){
          alert("The two password didn't matched");
          return false;
        }

      }
    </script>
</head>
<body>
  <div class="container-fluid col-lg-12">
  <form method="post" style="max-width:400px; margin:auto" onsubmit="return formvalidation();">
    <br><h2 style="text-align:center">Create Account</h2><br> 
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
    <div class="form-group">
    <select class="custom-select" name="role" id="role">
      <option selected="">Select Role</option>
      <option value="Admin">Admin</option>
      <option value="Staff">Staff</option>
    </select>
  </div>   
    <div class="form-group">
      <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <input class="form-control" type="email" name="email" id="email" placeholder="Enter Email">
    </div>
    <div class="row">
    <div class="form-group col-lg-6">
      <input class="form-control" type="password" placeholder="Create Password" id="password" name="password">
    </div>
    <div class="form-group col-lg-6">
      <input class="form-control" type="password" placeholder="Confirm Password" id="password1" name="password1">
    </div>
    </div>
    <div class="form-group">
    <div class="custom-control custom-radio">
      <input type="radio" value="Male" id="customRadio1" name="gender" class="custom-control-input">
      <label class="custom-control-label" for="customRadio1">Male</label>
    </div>
    <div class="custom-control custom-radio">
      <input type="radio" value="Female" id="customRadio2" name="gender" class="custom-control-input">
      <label class="custom-control-label" for="customRadio2">Female</label>
    </div></div>
      <button type="reset" class="btn btn-danger" name="cancle">Cancel</button>
      <button type="submit" class="btn btn-info" name="reg_user">Register</button>
    <p style="color:black">
      Already Registered ?? <a href="login.php" style="color:red">Sign in</a>
    </p>
  </form>
</div>
</body>
</html>
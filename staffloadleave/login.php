<?php 

  session_start();
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sllm");

  //if login btn is clicked
  if (isset($_POST['login_user'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']); 
    $role = $_POST['role'];

    $login_query = "SELECT * FROM members WHERE username='$username' AND password='$password' AND role='$role' ";
    $login_res = mysqli_query($db, $login_query);
    $fetch_res = mysqli_num_rows($login_res);
    // $fetch_row = mysqli_fetch_array($login_res);
    if($fetch_res == 1){
      $_SESSION['username'] = $username;
      $_SESSION['role'] = $role;
      // $role = $fetch_row['role'];
      if($role == 'Admin'){
        $_SESSION['success'] = "Login Successful..!!";
        header('location: admin/adminhome.php');
      }elseif($role == 'Staff'){
        $_SESSION['success'] = "Login Successful..!!";
        header('location: staff/staffhome.php');
      }else{
      $_SESSION['failed'] = "Login type is required..!!";
      }
    }else{
      $_SESSION['failed'] = "Wrong username/password..!!";
    }
  }
?>


<!DOCTYPE html>
<html>
<head>
  <title>Login Please..!!</title>
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
        var password = $('#password').val();
        var passwordlen = $('#password').val().length;

        if(username ==''){
          alert('Please Enter Username');
          return false;
        }
        if(password ==''){
          alert('Please Enter Password');
          return false;
        }
        if(passwordlen <= 4){
          alert('Your Password should contain atleast 5 charachers');
          return false;
        }
      }
    </script>
</head>
<body>
  <div class="container-fluid col-lg-12">
  <form method="post" style="max-width:400px; margin:auto" onsubmit="return formvalidation();">
    <br><h2 style="text-align:center">LogIn</h2><br> 
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
        <option selected="">Select Login Type</option>
        <option value="Admin">Admin</option>
        <option value="Staff">Staff</option>
      </select>
    </div> 
    <div class="form-group">
      <input class="form-control" type="text" name="username" id="username" placeholder="Enter Username">
    </div>
    <div class="form-group">
      <input class="form-control" type="password" placeholder="Create Password" id="password" name="password">
    </div>
      <button type="reset" class="btn btn-danger" name="cancle">Cancel</button>
      <button type="submit" class="btn btn-info" name="login_user">Login</button>
    <p style="color:black">
      Not yet registered ?? <a href="register.php" style="color:red">Sign up</a>
    </p>
  </form>
</div>
</body>
</html>
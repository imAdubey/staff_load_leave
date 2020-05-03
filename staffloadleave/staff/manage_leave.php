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

  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "sllm");

  if(isset($_POST['submit'])){

    $leavefrom = $_POST['leavefrom'];
    $leaveto = $_POST['leaveto'];
    $your_name = $_POST['your_name'];
    $year = $_POST['year'];
    $your_subject = $_POST['your_subject'];
    $staff = $_POST['staff'];
    $subject = $_POST['subject'];

    $query1 = " SELECT * FROM managed_leave WHERE managed_by = '$your_name' ";
    $exe_query1 = mysqli_query($db, $query1);
    $count_r1 = mysqli_num_rows($exe_query1);

    if($count_r1 == 0){

      $leave_frm = strtotime($leavefrom);
      $leave_to = strtotime($leaveto);

      if($leave_frm == '' && $leave_to == ''){
        // echo('Valid From should not be empty');
         $_SESSION['failed1'] = "Valid From & Valid Till should not be empty";
      }
      if($leave_frm == '' && $leave_to != ''){
        // echo('Valid To should not be empty');
         $_SESSION['failed1'] = "Valid From should not be empty";
      }
      if($leave_frm != '' && $leave_to == ''){
        // echo('Valid To should not be empty');
         $_SESSION['failed1'] = "Valid Till should not be empty";
      }
      if($leave_frm != '' && $leave_to != ''){
        
        if($year == 1){
          $q = "INSERT INTO managed_leave (valid_from, valid_to, year, managed_by, fe_sub_from, fe_managed_to, fe_sub_to) VALUES ('$leavefrom', '$leaveto', '$year', '$your_name', '$your_subject', '$staff', '$subject')";
          $exe_q = mysqli_query($db, $q);
          if($exe_q){
           $_SESSION['success1'] = "Your 1st year load managed successfully.."; 
          } 
        }
        if($year == 2){
          $q = "INSERT INTO managed_leave (valid_from, valid_to, year, managed_by, fe_sub_from, fe_managed_to, fe_sub_to) VALUES ('$leavefrom', '$leaveto', '$year', '$your_name', '$your_subject', '$staff', '$subject')";
          $exe_q = mysqli_query($db, $q);
          if($exe_q){
           $_SESSION['success1'] = "Your 1st year load managed successfully.."; 
          } 
        }
        if($year == 3){
          $q = "INSERT INTO managed_leave (valid_from, valid_to, year, managed_by, se_sub_from, se_managed_to, se_sub_to) VALUES ('$leavefrom', '$leaveto', '$year', '$your_name', '$your_subject', '$staff', '$subject')";
          $exe_q = mysqli_query($db, $q);
          if($exe_q){
           $_SESSION['success1'] = "Your 2nd year load managed successfully.."; 
          } 
        }
        if($year == 4){
          $q = "INSERT INTO managed_leave (valid_from, valid_to, year, managed_by, se_sub_from, se_managed_to, se_sub_to) VALUES ('$leavefrom', '$leaveto', '$year', '$your_name', '$your_subject', '$staff', '$subject')";
          $exe_q = mysqli_query($db, $q);
          if($exe_q){
           $_SESSION['success1'] = "Your 2nd year load managed successfully.."; 
          } 
        }
        if($year == 5){
          $q = "INSERT INTO managed_leave (valid_from, valid_to, year, managed_by, te_sub_from, te_managed_to, te_sub_to) VALUES ('$leavefrom', '$leaveto', '$year', '$your_name', '$your_subject', '$staff', '$subject')";
          $exe_q = mysqli_query($db, $q);
          if($exe_q){
           $_SESSION['success1'] = "Your 3rd year load managed successfully.."; 
          } 
        }
        if($year == 6){
          $q = "INSERT INTO managed_leave (valid_from, valid_to, year, managed_by, te_sub_from, te_managed_to, te_sub_to) VALUES ('$leavefrom', '$leaveto', '$year', '$your_name', '$your_subject', '$staff', '$subject')";
          $exe_q = mysqli_query($db, $q);
          if($exe_q){
           $_SESSION['success1'] = "Your 3rd year load managed successfully.."; 
          } 
        }
        if($year == 7){
          $q = "INSERT INTO managed_leave (valid_from, valid_to, year, managed_by, be_sub_from, be_managed_to, be_sub_to) VALUES ('$leavefrom', '$leaveto', '$year', '$your_name', '$your_subject', '$staff', '$subject')";
          $exe_q = mysqli_query($db, $q);
          if($exe_q){
           $_SESSION['success1'] = "Your 4th year load managed successfully.."; 
          } 
        }
        if($year == 8){
          $q = "INSERT INTO managed_leave (valid_from, valid_to, year, managed_by, be_sub_from, be_managed_to, be_sub_to) VALUES ('$leavefrom', '$leaveto', '$year', '$your_name', '$your_subject', '$staff', '$subject')";
          $exe_q = mysqli_query($db, $q);
          if($exe_q){
           $_SESSION['success1'] = "Your 4th year load managed successfully.."; 
          } 
        }

      }
    }
    if($count_r1 == 1){

      if($year == 1){
          // $query = " SELECT * FROM managed_leave WHERE year = 1 ";
          // $exe_query = mysqli_query($db, $query);
          // $count_r = mysqli_num_rows($exe_query);
          // if($count_r == 0){
          $q1 = "UPDATE managed_leave SET  year = '$year', fe_sub_from = '$your_subject', fe_managed_to = '$staff', fe_sub_to = '$subject' WHERE managed_by = '$your_name' ";
          $exe_q1 = mysqli_query($db, $q1);
          if($exe_q1){
           $_SESSION['success1'] = "your 1st year load managed successfully.."; 
          }
        // }
        // if($count_r == 1){
        //   $q1 = "UPDATE managed_leave SET year = '$year', fe_sub_from = '$your_subject', fe_managed_to = '$staff', fe_sub_to = '$subject' WHERE year = 1 ";
        //   $exe_q1 = mysqli_query($db, $q1);
        //   if($exe_q1){
        //    $_SESSION['success1'] = "your 1st year load managed successfully.."; 
        //   }
        // }
      }

      if($year == 2){
          // $query = " SELECT * FROM managed_leave WHERE year = 2 ";
          // $exe_query = mysqli_query($db, $query);
          // $count_r = mysqli_num_rows($exe_query);
          // if($count_r == 0){
          $q1 = "UPDATE managed_leave SET year = '$year', fe_sub_from = '$your_subject', fe_managed_to = '$staff', fe_sub_to = '$subject' WHERE managed_by = '$your_name' ";
          $exe_q1 = mysqli_query($db, $q1);
          if($exe_q1){
           $_SESSION['success1'] = "your 1st year load managed successfully.."; 
          }
        // }
        // if($count_r == 1){
        //   $q1 = "UPDATE managed_leave SET year = '$year', fe_sub_from = '$your_subject', fe_managed_to = '$staff', fe_sub_to = '$subject' WHERE year = 2 ";
        //   $exe_q1 = mysqli_query($db, $q1);
        //   if($exe_q1){
        //    $_SESSION['success1'] = "your 1st year load managed successfully.."; 
        //   }
        // }
      }

      if($year == 3){
          // $query = " SELECT * FROM managed_leave WHERE year = 3 ";
          // $exe_query = mysqli_query($db, $query);
          // $count_r = mysqli_num_rows($exe_query);
          // if($count_r == 0){
          $q1 = "UPDATE managed_leave SET year = '$year', se_sub_from = '$your_subject', se_managed_to = '$staff', se_sub_to = '$subject' WHERE managed_by = '$your_name' ";
          $exe_q1 = mysqli_query($db, $q1);
          if($exe_q1){
           $_SESSION['success1'] = "your 2nd year load managed successfully.."; 
          }
        // }
        // if($count_r == 1){
        //   $q1 = "UPDATE managed_leave SET year = '$year', se_sub_from = '$your_subject', se_managed_to = '$staff', se_sub_to = '$subject' WHERE year = 3 ";
        //   $exe_q1 = mysqli_query($db, $q1);
        //   if($exe_q1){
        //    $_SESSION['success1'] = "your 2nd year load managed successfully.."; 
        //   }
        // }
      }

      if($year == 4){
          // $query = " SELECT * FROM managed_leave WHERE year = 4 ";
          // $exe_query = mysqli_query($db, $query);
          // $count_r = mysqli_num_rows($exe_query);
          // if($count_r == 0){
          $q1 = "UPDATE managed_leave SET year = '$year', se_sub_from = '$your_subject', se_managed_to = '$staff', se_sub_to = '$subject' WHERE managed_by = '$your_name' ";
          $exe_q1 = mysqli_query($db, $q1);
          if($exe_q1){
           $_SESSION['success1'] = "your 2nd year load managed successfully.."; 
          }
        // }
        // if($count_r == 1){
        //   $q1 = "UPDATE managed_leave SET year = '$year', se_sub_from = '$your_subject', se_managed_to = '$staff', se_sub_to = '$subject' WHERE year = 4 ";
        //   $exe_q1 = mysqli_query($db, $q1);
        //   if($exe_q1){
        //    $_SESSION['success1'] = "your 2nd year load managed successfully.."; 
        //   }
        // }
      }

      if($year == 5){
          // $query = " SELECT * FROM managed_leave WHERE year = 5 ";
          // $exe_query = mysqli_query($db, $query);
          // $count_r = mysqli_num_rows($exe_query);
          // if($count_r == 0){
          $q1 = "UPDATE managed_leave SET year = '$year', te_sub_from = '$your_subject', te_managed_to = '$staff', te_sub_to = '$subject' WHERE managed_by = '$your_name' ";
          $exe_q1 = mysqli_query($db, $q1);
          if($exe_q1){
           $_SESSION['success1'] = "your 3rd year load managed successfully.."; 
          }
        // }
        // if($count_r == 1){
        //   $q1 = "UPDATE managed_leave SET year = '$year', te_sub_from = '$your_subject', te_managed_to = '$staff', te_sub_to = '$subject' WHERE year = 5 ";
        //   $exe_q1 = mysqli_query($db, $q1);
        //   if($exe_q1){
        //    $_SESSION['success1'] = "your 3rd year load managed successfully.."; 
        //   }
        // }
      }

      if($year == 6){
          // $query = " SELECT * FROM managed_leave WHERE year = 6 ";
          // $exe_query = mysqli_query($db, $query);
          // $count_r = mysqli_num_rows($exe_query);
          // if($count_r == 0){
          $q1 = "UPDATE managed_leave SET year = '$year', te_sub_from = '$your_subject', te_managed_to = '$staff', te_sub_to = '$subject' WHERE managed_by = '$your_name' ";
          $exe_q1 = mysqli_query($db, $q1);
          if($exe_q1){
           $_SESSION['success1'] = "your 3rd year load managed successfully.."; 
          }
        // }
        // if($count_r == 1){
        //   $q1 = "UPDATE managed_leave SET year = '$year', te_sub_from = '$your_subject', te_managed_to = '$staff', te_sub_to = '$subject' WHERE year = 6 ";
        //   $exe_q1 = mysqli_query($db, $q1);
        //   if($exe_q1){
        //    $_SESSION['success1'] = "your 3rd year load managed successfully.."; 
        //   }
        // }
      }

      if($year == 7){
          // $query = " SELECT * FROM managed_leave WHERE year = 7 ";
          // $exe_query = mysqli_query($db, $query);
          // $count_r = mysqli_num_rows($exe_query);
          // if($count_r == 0){
          $q1 = "UPDATE managed_leave SET year = '$year', be_sub_from = '$your_subject', be_managed_to = '$staff', be_sub_to = '$subject' WHERE managed_by = '$your_name' ";
          $exe_q1 = mysqli_query($db, $q1);
          if($exe_q1){
           $_SESSION['success1'] = "your 4th year load managed successfully.."; 
          }
        // }
        // if($count_r == 1){
        //   $q1 = "UPDATE managed_leave SET year = '$year', be_sub_from = '$your_subject', be_managed_to = '$staff', be_sub_to = '$subject' WHERE year = 7 ";
        //   $exe_q1 = mysqli_query($db, $q1);
        //   if($exe_q1){
        //    $_SESSION['success1'] = "your 4th year load managed successfully.."; 
        //   }
        // }
      }

      if($year == 8){
          // $query = " SELECT * FROM managed_leave WHERE year = 8 ";
          // $exe_query = mysqli_query($db, $query);
          // $count_r = mysqli_num_rows($exe_query);
          // if($count_r == 0){
          $q1 = "UPDATE managed_leave SET year = '$year', be_sub_from = '$your_subject', be_managed_to = '$staff', be_sub_to = '$subject' WHERE managed_by = '$your_name' ";
          $exe_q1 = mysqli_query($db, $q1);
          if($exe_q1){
           $_SESSION['success1'] = "your 4th year load managed successfully.."; 
          }
        // }
        // if($count_r == 1){
        //   $q1 = "UPDATE managed_leave SET year = '$year', be_sub_from = '$your_subject', be_managed_to = '$staff', be_sub_to = '$subject' WHERE year = 8 ";
        //   $exe_q1 = mysqli_query($db, $q1);
        //   if($exe_q1){
        //    $_SESSION['success1'] = "your 4th year load managed successfully.."; 
        //   }
        // }
      }
    }


  }

?>
<!DOCTYPE html>
<html>
<head>
  <title>Manage Leaves..!!</title>
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
        <br><h1 style="color: white; background-color: dodgerblue" class="card-header"> Hey <span><?php echo $_SESSION['username']; ?></span> Manage your Leave</h1>
        <div class="card-body">
        <?php
          if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          } 
        ?>
        <a style="margin: auto; display: block; max-width: 150px" class="btn btn-outline-info" href="applyleave.php">Apply for Leaves</a><br>
        <table class="table table-bordered text-center">
          <tr class="card-header">
            <th colspan="8">Your alloted subjects year wise <span style="margin-left: 50px">NA(Not Alloted)</span></th>
          </tr>
          <tr class="card-header">
            <th>FE(SEM-1)</th>
            <th>FE(SEM-2)</th>
            <th>SE(SEM-3)</th>
            <th>SE(SEM-4)</th>
            <th>TE(SEM-5)</th>
            <th>TE(SEM-6)</th>
            <th>BE(SEM-7)</th>
            <th>BE(SEM-8)</th>
          </tr>
          <tr>
            <?php 
              $q1 = " SELECT DISTINCT subject FROM assign_load WHERE year = 1 AND assigned_to = '".$_SESSION['username']."' ";
              $exe_q1 = mysqli_query($db, $q1);
              $count1 = mysqli_num_rows($exe_q1);
              if($count1 > 0){
                while($res1 = mysqli_fetch_array($exe_q1)){
            ?>
              <td style="color: blue"><?php echo $res1['subject']; ?></td>
            <?php
                }
              }
              else{
            ?>
              <td><?php echo('NA') ?></td>
            <?php
              }
            ?>

            <?php 
              $q2 = " SELECT DISTINCT subject FROM assign_load WHERE year = 2 AND assigned_to = '".$_SESSION['username']."' ";
              $exe_q2 = mysqli_query($db, $q2);
              $count2 = mysqli_num_rows($exe_q2);
              if($count2 > 0){
                while($res2 = mysqli_fetch_array($exe_q2)){
            ?>
              <td style="color: blue"><?php echo $res2['subject']; ?></td>
            <?php
                }
              }
              else{
            ?>
              <td><?php echo('NA') ?></td>
            <?php
              }
            ?>

            <?php 
              $q3 = " SELECT DISTINCT subject FROM assign_load WHERE year = 3 AND assigned_to = '".$_SESSION['username']."' ";
              $exe_q3 = mysqli_query($db, $q3);
              $count3 = mysqli_num_rows($exe_q3);
              if($count3 > 0){
                while($res3 = mysqli_fetch_array($exe_q3)){
            ?>
              <td style="color: blue"><?php echo $res3['subject']; ?></td>
            <?php
                }
              }
              else{
            ?>
              <td><?php echo('NA') ?></td>
            <?php
              }
            ?>

            <?php 
              $q4 = " SELECT DISTINCT subject FROM assign_load WHERE year = 4 AND assigned_to = '".$_SESSION['username']."' ";
              $exe_q4 = mysqli_query($db, $q4);
              $count4 = mysqli_num_rows($exe_q4);
              if($count4 > 0){
                while($res4 = mysqli_fetch_array($exe_q4)){
            ?>
              <td style="color: blue"><?php echo $res4['subject']; ?></td>
            <?php
                }
              }
              else{
            ?>
              <td><?php echo('NA') ?></td>
            <?php
              }
            ?>

            <?php 
              $q5 = " SELECT DISTINCT subject FROM assign_load WHERE year = 5 AND assigned_to = '".$_SESSION['username']."' ";
              $exe_q5 = mysqli_query($db, $q5);
              $count5 = mysqli_num_rows($exe_q5);
              if($count5 > 0){
                while($res5 = mysqli_fetch_array($exe_q5)){
            ?>
              <td style="color: blue"><?php echo $res5['subject']; ?></td>
            <?php
                }
              }
              else{
            ?>
              <td><?php echo('NA') ?></td>
            <?php
              }
            ?>

            <?php 
              $q6 = " SELECT DISTINCT subject FROM assign_load WHERE year = 6 AND assigned_to = '".$_SESSION['username']."' ";
              $exe_q6 = mysqli_query($db, $q6);
              $count6 = mysqli_num_rows($exe_q6);
              if($count6 > 0){
                while($res6 = mysqli_fetch_array($exe_q6)){
            ?>
              <td style="color: blue"><?php echo $res6['subject']; ?></td>
            <?php
                }
              }
              else{
            ?>
              <td><?php echo('NA') ?></td>
            <?php
              }
            ?>

            <?php 
              $q7 = " SELECT DISTINCT subject FROM assign_load WHERE year = 7 AND assigned_to = '".$_SESSION['username']."' ";
              $exe_q7 = mysqli_query($db, $q7);
              $count7 = mysqli_num_rows($exe_q7);
              if($count7 > 0){
                while($res7 = mysqli_fetch_array($exe_q7)){
            ?>
              <td style="color: blue"><?php echo $res7['subject']; ?></td>
            <?php
                }
              }
              else{
            ?>
              <td><?php echo('NA') ?></td>
            <?php
              }
            ?>

            <?php 
              $q8 = " SELECT DISTINCT subject FROM assign_load WHERE year = 8 AND assigned_to = '".$_SESSION['username']."' ";
              $exe_q8 = mysqli_query($db, $q8);
              $count8 = mysqli_num_rows($exe_q8);
              if($count8 > 0){
                while($res8 = mysqli_fetch_array($exe_q8)){
            ?>
              <td style="color: blue"><?php echo $res8['subject']; ?></td>
            <?php
                }
              }
              else{
            ?>
              <td><?php echo('NA') ?></td>
            <?php
              }
            ?>

          </tr>
        </table>
        <table class="table table-bordered text-center">
          <tr class="card-header">
            <th colspan="5">Leaves alloted by the Admin </th>
          </tr>
         <tr class="card-header">
          <th> ID </th>
          <!-- <th> Admin ID </th> -->
         <!--  <th> Name </th> -->
          <th> Valid From </th>
          <th> Valid To </th>
          <!-- <th> Casual Leave </th>
          <th> Special Leave </th>
          <th> Medical Leave </th>
          <th> Vacation Leave </th> -->
          <th> Assigned By </th>
          <th> Assigned Date </th>
         </tr>
                    
         <?php                          
          // // Create database connection
          //  $db = mysqli_connect("localhost", "root", "", "sllm");
         
           $sql = "SELECT * FROM assign_leave WHERE assign_to = '".$_SESSION['username']."' ";
               // execute query
           $result = mysqli_query($db, $sql); 
           $number = 1;     
           while($res = mysqli_fetch_array($result)){
          ?>  
            
        <tr class="a">
          <!-- <td><?php echo $res['id']; ?></td> -->
          <td><?php echo $number; ?></td>
          <!-- <td><?php echo $_SESSION['username']; ?></td> -->
          <td id="v_from"><?php echo $res['v_from']; ?></td>
          <td id="v_to"><?php echo $res['v_to']; ?></td>
          <!-- <td id="casual"><?php echo $res['casual']; ?></td>
          <td id="special"><?php echo $res['special']; ?></td>
          <td id="medical"><?php echo $res['medical']; ?></td>
          <td id="vacation"><?php echo $res['vacation']; ?></td> -->
          <td><?php echo $res['assign_by']; ?></td>
          <td><?php echo $res['assign_date']; ?></td>          
         </tr> 
         <?php
          $number++;    
           }
         ?>
        </table>  

        <form method="POST" style="max-width: 500px; margin: auto">
          <?php 
            if(isset($_SESSION['success1'])){
              echo $_SESSION['success1'];
              unset($_SESSION['success1']);
            }
            if(isset($_SESSION['failed1'])){
              echo $_SESSION['failed1'];
              unset($_SESSION['failed1']);
            }
          ?>
          <div class="row">
            <div class="col-lg-6">
              <label style="margin: 5px"><b>Valid From :</b></label>
              <input type="date" id="leavefrom" name="leavefrom" class="form-control" onblur="checklfrom(this.value)">
            </div>
            <div class="col-lg-6">
              <label style="margin: 5px"><b>Valid Till :</b></label>
              <input type="date" id="leaveto" name="leaveto" class="form-control" onblur="checklto(this.value)">
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
            <label style="margin: 5px" for="year"><b>Choose Year :</b></label>
            <select class="form-control" id="year" name="year" onchange="myfun(this.value)">
              <option value="#">Select Year</option>
              <?php 
                $q = " SELECT * FROM year ";
                $q_res = mysqli_query($db, $q);
                while($res = mysqli_fetch_array($q_res)){
              ?>
              <option value="<?php echo $res['y_id']; ?>"><?php echo $res['year-sem']; ?></option>
              <?php
                }
              ?>
            </select>
            </div>
          <!-- </div>
          <button style="margin-top: 10px" class="btn btn-primary" name="submit_year">Submit Year</button>
        <div class="row"> -->
        </div>

        <div class="row">
            <div class="col-lg-6">
              <label style="margin: 5px" for="your_name"><b>Your name :</b></label>
              <select class="form-control" id="your_name" name="your_name" onchange="myfun2(this.value)">
                <option value="#">Select your name</option>
                <option value="<?php echo $_SESSION['username']; ?>"><?php echo $_SESSION['username']; ?></option>
              </select>
            </div>
            <div class="col-lg-6">
            <label style="margin: 5px" for="your_subject"><b>Choose Your Subject :</b></label>
            <select class="form-control" id="your_subject" name="your_subject">
              <option value="#">Your Subject</option>
            </select>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-6">
              <label style="margin: 5px" for="staff"><b>Assign to :</b></label>
              <select class="form-control" id="staff" name="staff" onchange="myfun1(this.value)">
                <option value="#">Select Staff Name</option>
              </select>
            </div>
            <div class="col-lg-6">
            <label style="margin: 5px" for="subject"><b>Choose Subject :</b></label>
            <select class="form-control" id="subject" name="subject">
              <option value="#">Select Subject</option>
            </select>
            </div>
          </div>
          <button style="display: block; margin: auto; margin-top: 5px" class="btn btn-primary" type="submit" name="submit">Submit</button>
        </form>
        <br>
        <h4 class="card-header">Your managed load Details :</h4>
        <div id="load_table" class="card-body">
        <table id="load_managed_table" class="table table-bordered text-center">
          <tr class="card-header">
            <!-- <th rowspan="3">Sr no.</th> -->
            <th rowspan="3">Managed By Prof.</th>
            <th colspan="4">Your Subject's Year wise</th>
            <th colspan="8">Managed To</th>
          </tr>
          <tr class="card-header">
            <th rowspan="2">FE</th>
            <th rowspan="2">SE</th>
            <th rowspan="2">TE</th>
            <th rowspan="2">BE</th>
            <th colspan="2">FE</th>
            <th colspan="2">SE</th>
            <th colspan="2">TE</th>
            <th colspan="2">BE</th>
          </tr>
          <tr class="card-header">
            <th>Prof.</th>
            <th>Subject</th>
            <th>Prof.</th>
            <th>Subject</th>
            <th>Prof.</th>
            <th>Subject</th>
            <th>Prof.</th>
            <th>Subject</th>
          </tr>
          <tr>
            <?php 
              $q = " SELECT managed_by FROM managed_leave WHERE managed_by = '".$_SESSION['username']."' ";
              $q_exe = mysqli_query($db, $q);
              // $num = 1;
              while($q_res = mysqli_fetch_array($q_exe)){
            ?>
            <!-- <td><?php echo $num; ?></td> -->
            <td><?php echo $q_res['managed_by']; ?></td>
            <?php 
                // $num++;
              }
              $q = " SELECT fe_sub_from FROM managed_leave WHERE managed_by = '".$_SESSION['username']."' ";
              $q_exe = mysqli_query($db, $q);
              // $num = 1;
              while($q_res = mysqli_fetch_array($q_exe)){
            ?>
              <td><?php echo $q_res['fe_sub_from']; ?></td>
            <?php
              }
              $q = " SELECT se_sub_from FROM managed_leave WHERE managed_by = '".$_SESSION['username']."' ";
              $q_exe = mysqli_query($db, $q);
              // $num = 1;
              while($q_res = mysqli_fetch_array($q_exe)){
            ?>
            <td><?php echo $q_res['se_sub_from']; ?></td>
            <?php
              }
              $q = " SELECT te_sub_from FROM managed_leave WHERE managed_by = '".$_SESSION['username']."' ";
              $q_exe = mysqli_query($db, $q);
              // $num = 1;
              while($q_res = mysqli_fetch_array($q_exe)){
            ?>
            <td><?php echo $q_res['te_sub_from']; ?></td>
            <?php
              }
              $q = " SELECT be_sub_from FROM managed_leave WHERE managed_by = '".$_SESSION['username']."' ";
              $q_exe = mysqli_query($db, $q);
              // $num = 1;
              while($q_res = mysqli_fetch_array($q_exe)){
            ?>
            <td><?php echo $q_res['be_sub_from']; ?></td>
            <?php
              }
              $q = " SELECT fe_managed_to, fe_sub_to FROM managed_leave WHERE managed_by = '".$_SESSION['username']."' ";
              $q_exe = mysqli_query($db, $q);
              // $num = 1;
              while($q_res = mysqli_fetch_array($q_exe)){
            ?>
            <td><?php echo $q_res['fe_managed_to']; ?></td>
            <td><?php echo $q_res['fe_sub_to'];?></td>
            <?php
              }
              $q = " SELECT se_managed_to, se_sub_to FROM managed_leave WHERE managed_by = '".$_SESSION['username']."' ";
              $q_exe = mysqli_query($db, $q);
              // $num = 1;
              while($q_res = mysqli_fetch_array($q_exe)){
            ?>
            <td><?php echo $q_res['se_managed_to']; ?></td>
            <td><?php echo $q_res['se_sub_to'];?></td>
            <?php
              }
              $q = " SELECT te_managed_to, te_sub_to FROM managed_leave WHERE managed_by = '".$_SESSION['username']."' ";
              $q_exe = mysqli_query($db, $q);
              // $num = 1;
              while($q_res = mysqli_fetch_array($q_exe)){
            ?>
            <td><?php echo $q_res['te_managed_to']; ?></td>
            <td><?php echo $q_res['te_sub_to'];?></td>
            <?php
              }
              $q = " SELECT be_managed_to, be_sub_to FROM managed_leave WHERE managed_by = '".$_SESSION['username']."' ";
              $q_exe = mysqli_query($db, $q);
              // $num = 1;
              while($q_res = mysqli_fetch_array($q_exe)){
            ?>
            <td><?php echo $q_res['be_managed_to']; ?></td>
            <td><?php echo $q_res['be_sub_to'];?></td>
            <?php
              }
            ?>
          </tr>
          <tr class="card-header">
            <td colspan="7"><b>Valid From :</b>
              <?php
              $q = " SELECT valid_from FROM managed_leave WHERE managed_by = '".$_SESSION['username']."' ";
              $q_exe = mysqli_query($db, $q);
              // $num = 1;
              while($q_res = mysqli_fetch_array($q_exe)){
            ?>
              <?php echo $q_res['valid_from']; ?>
            <?php 
              }
            ?>
            </td>
            <td colspan="7"><b>Valid From :</b>
              <?php
              $q = " SELECT valid_to FROM managed_leave WHERE managed_by = '".$_SESSION['username']."' ";
              $q_exe = mysqli_query($db, $q);
              // $num = 1;
              while($q_res = mysqli_fetch_array($q_exe)){
            ?>
              <?php echo $q_res['valid_to']; ?>
            <?php 
              }
            ?>
            </td>
          </tr>
        </table>
        </div>
        <button style="display: block; margin: auto" class="btn btn-info" onclick="print_table('load_table')">Print</button>
    </div>
    </div>      
    </div>
    </div>

<script type="text/javascript">
      function myfun(datavalue){
        $.ajax({
          url: 'manageleave_staffnam.php',
          type: 'POST',
          data: { datapost : datavalue },

          success: function(result){
            $('#staff').html(result);
          }
        });
      }

      function myfun1(datavalue1){
        var year = document.getElementById('year').value;
        // alert(year);
        // alert(datavalue1);
        $.ajax({
          url: 'manageleave_staffnam.php',
          type: 'POST',
          data: { 
            staffname : datavalue1, 
            year : year
          },

          success: function(result1){
            $('#subject').html(result1);
          }
        });
      }

      function myfun2(datavalue2){
        var year = document.getElementById('year').value;
        // alert(year);
        // alert(datavalue2);
        $.ajax({
          url: 'manageleave_staffnam.php',
          type: 'POST',
          data: { 
            your_name : datavalue2, 
            year : year
          },

          success: function(result2){
            $('#your_subject').html(result2);
          }
        });
      }

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
          // alert('Enter valid Date..!!');
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
          // alert('Enter valid Date..!!');
          document.getElementById("leaveto").value="";
        }      
      }

      function print_table(load_table){
        var backup = document.body.innerHTML;
          var get = document.getElementById("load_table").innerHTML
          document.body.innerHTML = get;
          window.print();
          document.body.innerHTML = backup;
      }
  </script>

</body>
</html>

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

    if(isset($_POST['save1'])){

      $id = $_POST['id'];
      $day = $_POST['day'];
      $time = $_POST['time'];
      $subject = $_POST['subject'];
      $lecturer = $_POST['lecturer'];

      $q = "SELECT * FROM lectures_se WHERE id = '$id' ";
      $q_exe = mysqli_query($db, $q);
      $count = mysqli_num_rows($q_exe);

      if($count == 0){
        $q1 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id', '$subject', '$lecturer', '$day', '$time')";
        $q1_res = mysqli_query($db, $q1);      
      
          if($q1_res){
            $_SESSION['success'] = "Lecture Assigned successfully..!!";
          }
      }else{
        $q2 = " UPDATE lectures_se SET subjects ='$subject', prof_name = '$lecturer' WHERE id = '$id' ";
        $q2_res = mysqli_query($db, $q2);      
      
          if($q2_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save2'])){

      $id1 = $_POST['id1'];
      $day1 = $_POST['day1'];
      $time1 = $_POST['time1'];
      $subject1 = $_POST['subject1'];
      $lecturer1 = $_POST['lecturer1'];

      $q3 = "SELECT * FROM lectures_se WHERE id = '$id1' ";
      $q3_exe = mysqli_query($db, $q3);
      $count1 = mysqli_num_rows($q3_exe);

      if($count1 == 0){
        $q4 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id1', '$subject1', '$lecturer1', '$day1', '$time1')";
        $q4_res = mysqli_query($db, $q4);      
      
        if($q4_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q5 = " UPDATE lectures_se SET subjects ='$subject1', prof_name = '$lecturer1' WHERE id = '$id1' ";
        $q5_res = mysqli_query($db, $q5);      
      
          if($q5_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save3'])){

      $id2 = $_POST['id2'];
      $day2 = $_POST['day2'];
      $time2 = $_POST['time2'];
      $subject2 = $_POST['subject2'];
      $lecturer2 = $_POST['lecturer2'];

      $q6 = "SELECT * FROM lectures_se WHERE id = '$id2' ";
      $q6_exe = mysqli_query($db, $q6);
      $count2 = mysqli_num_rows($q6_exe);

      if($count2 == 0){
        $q7 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id2', '$subject2', '$lecturer2', '$day2', '$time2')";
        $q7_res = mysqli_query($db, $q7);      
      
        if($q7_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q8 = " UPDATE lectures_se SET subjects ='$subject2', prof_name = '$lecturer2' WHERE id = '$id2' ";
        $q8_res = mysqli_query($db, $q8);      
      
          if($q8_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save4'])){

      $id3 = $_POST['id3'];
      $day3 = $_POST['day3'];
      $time3 = $_POST['time3'];
      $subject3 = $_POST['subject3'];
      $lecturer3 = $_POST['lecturer3'];

      $q9 = "SELECT * FROM lectures_se WHERE id = '$id3' ";
      $q9_exe = mysqli_query($db, $q9);
      $count3 = mysqli_num_rows($q9_exe);

      if($count3 == 0){
        $q10 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id3', '$subject3', '$lecturer3', '$day3', '$time3')";
        $q10_res = mysqli_query($db, $q10);      
      
        if($q10_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q11 = " UPDATE lectures_se SET subjects ='$subject3', prof_name = '$lecturer3' WHERE id = '$id3' ";
        $q11_res = mysqli_query($db, $q11);      
      
          if($q11_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save5'])){

      $id4 = $_POST['id4'];
      $day4 = $_POST['day4'];
      $time4 = $_POST['time4'];
      $subject4 = $_POST['subject4'];
      $lecturer4 = $_POST['lecturer4'];

      $q12 = "SELECT * FROM lectures_se WHERE id = '$id4' ";
      $q12_exe = mysqli_query($db, $q12);
      $count4 = mysqli_num_rows($q12_exe);

      if($count4 == 0){
        $q13 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id4', '$subject4', '$lecturer4', '$day4', '$time4')";
        $q13_res = mysqli_query($db, $q13);      
      
        if($q13_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q14 = " UPDATE lectures_se SET subjects ='$subject4', prof_name = '$lecturer4' WHERE id = '$id4' ";
        $q14_res = mysqli_query($db, $q14);      
      
          if($q14_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save6'])){

      $id5 = $_POST['id5'];
      $day5 = $_POST['day5'];
      $time5 = $_POST['time5'];
      $subject5 = $_POST['subject5'];
      $lecturer5 = $_POST['lecturer5'];

      $q15 = "SELECT * FROM lectures_se WHERE id = '$id5' ";
      $q15_exe = mysqli_query($db, $q15);
      $count5 = mysqli_num_rows($q15_exe);

      if($count5 == 0){
        $q16 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id5', '$subject5', '$lecturer5', '$day5', '$time5')";
        $q16_res = mysqli_query($db, $q16);      
      
        if($q16_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q17 = " UPDATE lectures_se SET subjects ='$subject5', prof_name = '$lecturer5' WHERE id = '$id5' ";
        $q17_res = mysqli_query($db, $q17);      
      
          if($q17_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save7'])){

      $id6 = $_POST['id6'];
      $day6 = $_POST['day6'];
      $time6 = $_POST['time6'];
      $subject6 = $_POST['subject6'];
      $lecturer6 = $_POST['lecturer6'];

      $q18 = "SELECT * FROM lectures_se WHERE id = '$id6' ";
      $q18_exe = mysqli_query($db, $q18);
      $count6 = mysqli_num_rows($q18_exe);

      if($count6 == 0){
        $q19 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id6', '$subject6', '$lecturer6', '$day6', '$time6')";
        $q19_res = mysqli_query($db, $q19);      
      
        if($q19_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q20 = " UPDATE lectures_se SET subjects ='$subject6', prof_name = '$lecturer6' WHERE id = '$id6' ";
        $q20_res = mysqli_query($db, $q20);      
      
          if($q20_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save8'])){

      $id7 = $_POST['id7'];
      $day7 = $_POST['day7'];
      $time7 = $_POST['time7'];
      $subject7 = $_POST['subject7'];
      $lecturer7 = $_POST['lecturer7'];

      $q21 = "SELECT * FROM lectures_se WHERE id = '$id7' ";
      $q21_exe = mysqli_query($db, $q21);
      $count7 = mysqli_num_rows($q21_exe);

      if($count7 == 0){
        $q22 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id7', '$subject7', '$lecturer7', '$day7', '$time7')";
        $q22_res = mysqli_query($db, $q22);      
      
        if($q22_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q23 = " UPDATE lectures_se SET subjects ='$subject7', prof_name = '$lecturer7' WHERE id = '$id7' ";
        $q23_res = mysqli_query($db, $q23);      
      
          if($q23_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save9'])){

      $id8 = $_POST['id8'];
      $day8 = $_POST['day8'];
      $time8 = $_POST['time8'];
      $subject8 = $_POST['subject8'];
      $lecturer8 = $_POST['lecturer8'];

      $q24 = "SELECT * FROM lectures_se WHERE id = '$id8' ";
      $q24_exe = mysqli_query($db, $q24);
      $count8 = mysqli_num_rows($q24_exe);

      if($count8 == 0){
        $q25 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id8', '$subject8', '$lecturer8', '$day8', '$time8')";
        $q25_res = mysqli_query($db, $q25);      
      
        if($q25_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q26 = " UPDATE lectures_se SET subjects ='$subject8', prof_name = '$lecturer8' WHERE id = '$id8' ";
        $q26_res = mysqli_query($db, $q26);      
      
          if($q26_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save10'])){

      $id9 = $_POST['id9'];
      $day9 = $_POST['day9'];
      $time9 = $_POST['time9'];
      $subject9 = $_POST['subject9'];
      $lecturer9 = $_POST['lecturer9'];

      $q27 = "SELECT * FROM lectures_se WHERE id = '$id9' ";
      $q27_exe = mysqli_query($db, $q27);
      $count9 = mysqli_num_rows($q27_exe);

      if($count9 == 0){
        $q28 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id9', '$subject9', '$lecturer9', '$day9', '$time9')";
        $q28_res = mysqli_query($db, $q28);      
      
        if($q28_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q29 = " UPDATE lectures_se SET subjects ='$subject9', prof_name = '$lecturer9' WHERE id = '$id9' ";
        $q29_res = mysqli_query($db, $q29);      
      
          if($q29_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save11'])){

      $id10 = $_POST['id10'];
      $day10 = $_POST['day10'];
      $time10 = $_POST['time10'];
      $subject10 = $_POST['subject10'];
      $lecturer10 = $_POST['lecturer10'];

      $q30 = "SELECT * FROM lectures_se WHERE id = '$id10' ";
      $q30_exe = mysqli_query($db, $q30);
      $count10 = mysqli_num_rows($q30_exe);

      if($count10 == 0){
        $q31 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id10', '$subject10', '$lecturer10', '$day10', '$time10')";
        $q31_res = mysqli_query($db, $q31);      
      
        if($q31_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q32 = " UPDATE lectures_se SET subjects ='$subject10', prof_name = '$lecturer10' WHERE id = '$id10' ";
        $q32_res = mysqli_query($db, $q32);      
      
          if($q32_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save12'])){

      $id11 = $_POST['id11'];
      $day11 = $_POST['day11'];
      $time11 = $_POST['time11'];
      $subject11 = $_POST['subject11'];
      $lecturer11 = $_POST['lecturer11'];

      $q33 = "SELECT * FROM lectures_se WHERE id = '$id11' ";
      $q33_exe = mysqli_query($db, $q33);
      $count11 = mysqli_num_rows($q33_exe);

      if($count11 == 0){
        $q34 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id11', '$subject11', '$lecturer11', '$day11', '$time11')";
        $q34_res = mysqli_query($db, $q34);      
      
        if($q34_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q35 = " UPDATE lectures_se SET subjects ='$subject11', prof_name = '$lecturer11' WHERE id = '$id11' ";
        $q35_res = mysqli_query($db, $q35);      
      
          if($q35_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save13'])){

      $id12 = $_POST['id12'];
      $day12 = $_POST['day12'];
      $time12 = $_POST['time12'];
      $subject12 = $_POST['subject12'];
      $lecturer12 = $_POST['lecturer12'];

      $q36 = "SELECT * FROM lectures_se WHERE id = '$id12' ";
      $q36_exe = mysqli_query($db, $q36);
      $count12 = mysqli_num_rows($q36_exe);

      if($count12 == 0){
        $q37 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id12', '$subject12', '$lecturer12', '$day12', '$time12')";
        $q37_res = mysqli_query($db, $q37);      
      
        if($q37_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q38 = " UPDATE lectures_se SET subjects ='$subject12', prof_name = '$lecturer12' WHERE id = '$id12' ";
        $q38_res = mysqli_query($db, $q38);      
      
          if($q38_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save14'])){

      $id13 = $_POST['id13'];
      $day13 = $_POST['day13'];
      $time13 = $_POST['time13'];
      $subject13 = $_POST['subject13'];
      $lecturer13 = $_POST['lecturer13'];

      $q39 = "SELECT * FROM lectures_se WHERE id = '$id13' ";
      $q39_exe = mysqli_query($db, $q39);
      $count13 = mysqli_num_rows($q39_exe);

      if($count13 == 0){
        $q40 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id13', '$subject13', '$lecturer13', '$day13', '$time13')";
        $q40_res = mysqli_query($db, $q40);      
      
        if($q40_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q41 = " UPDATE lectures_se SET subjects ='$subject13', prof_name = '$lecturer13' WHERE id = '$id13' ";
        $q41_res = mysqli_query($db, $q41);      
      
          if($q41_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save15'])){

      $id14 = $_POST['id14'];
      $day14 = $_POST['day14'];
      $time14 = $_POST['time14'];
      $subject14 = $_POST['subject14'];
      $lecturer14 = $_POST['lecturer14'];

      $q42 = "SELECT * FROM lectures_se WHERE id = '$id14' ";
      $q42_exe = mysqli_query($db, $q42);
      $count14 = mysqli_num_rows($q42_exe);

      if($count14 == 0){
        $q43 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id14', '$subject14', '$lecturer14', '$day14', '$time14')";
        $q43_res = mysqli_query($db, $q43);      
      
        if($q43_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q44 = " UPDATE lectures_se SET subjects ='$subject14', prof_name = '$lecturer14' WHERE id = '$id14' ";
        $q44_res = mysqli_query($db, $q44);      
      
          if($q44_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save16'])){

      $id15 = $_POST['id15'];
      $day15 = $_POST['day15'];
      $time15 = $_POST['time15'];
      $subject15 = $_POST['subject15'];
      $lecturer15 = $_POST['lecturer15'];

      $q45 = "SELECT * FROM lectures_se WHERE id = '$id15' ";
      $q45_exe = mysqli_query($db, $q45);
      $count15 = mysqli_num_rows($q45_exe);

      if($count15 == 0){
        $q46 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id15', '$subject15', '$lecturer15', '$day15', '$time15')";
        $q46_res = mysqli_query($db, $q46);      
      
        if($q46_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q47 = " UPDATE lectures_se SET subjects ='$subject15', prof_name = '$lecturer15' WHERE id = '$id15' ";
        $q47_res = mysqli_query($db, $q47);      
      
          if($q47_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save17'])){

      $id16 = $_POST['id16'];
      $day16 = $_POST['day16'];
      $time16 = $_POST['time16'];
      $subject16 = $_POST['subject16'];
      $lecturer16 = $_POST['lecturer16'];

      $q48 = "SELECT * FROM lectures_se WHERE id = '$id16' ";
      $q48_exe = mysqli_query($db, $q48);
      $count16 = mysqli_num_rows($q48_exe);

      if($count16 == 0){
        $q49 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id16', '$subject16', '$lecturer16', '$day16', '$time16')";
        $q49_res = mysqli_query($db, $q49);      
      
        if($q49_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q50 = " UPDATE lectures_se SET subjects ='$subject16', prof_name = '$lecturer16' WHERE id = '$id16' ";
        $q50_res = mysqli_query($db, $q50);      
      
          if($q50_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save18'])){

      $id17 = $_POST['id17'];
      $day17 = $_POST['day17'];
      $time17 = $_POST['time17'];
      $subject17 = $_POST['subject17'];
      $lecturer17 = $_POST['lecturer17'];

      $q51 = "SELECT * FROM lectures_se WHERE id = '$id17' ";
      $q51_exe = mysqli_query($db, $q51);
      $count17 = mysqli_num_rows($q51_exe);

      if($count17 == 0){
        $q52 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id17', '$subject17', '$lecturer17', '$day17', '$time17')";
        $q52_res = mysqli_query($db, $q52);      
      
        if($q52_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q53 = " UPDATE lectures_se SET subjects ='$subject17', prof_name = '$lecturer17' WHERE id = '$id17' ";
        $q53_res = mysqli_query($db, $q53);      
      
          if($q53_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save19'])){

      $id18 = $_POST['id18'];
      $day18 = $_POST['day18'];
      $time18 = $_POST['time18'];
      $subject18 = $_POST['subject18'];
      $lecturer18 = $_POST['lecturer18'];

      $q54 = "SELECT * FROM lectures_se WHERE id = '$id18' ";
      $q54_exe = mysqli_query($db, $q54);
      $count18 = mysqli_num_rows($q54_exe);

      if($count18 == 0){
        $q55 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id18', '$subject18', '$lecturer18', '$day18', '$time18')";
        $q55_res = mysqli_query($db, $q55);      
      
        if($q55_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q56 = " UPDATE lectures_se SET subjects ='$subject18', prof_name = '$lecturer18' WHERE id = '$id18' ";
        $q56_res = mysqli_query($db, $q56);      
      
          if($q56_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save20'])){

      $id19 = $_POST['id19'];
      $day19 = $_POST['day19'];
      $time19 = $_POST['time19'];
      $subject19 = $_POST['subject19'];
      $lecturer19 = $_POST['lecturer19'];

      $q57 = "SELECT * FROM lectures_se WHERE id = '$id19' ";
      $q57_exe = mysqli_query($db, $q57);
      $count19 = mysqli_num_rows($q57_exe);

      if($count19 == 0){
        $q58 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id19', '$subject19', '$lecturer19', '$day19', '$time19')";
        $q58_res = mysqli_query($db, $q58);      
      
        if($q58_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q59 = " UPDATE lectures_se SET subjects ='$subject19', prof_name = '$lecturer19' WHERE id = '$id19' ";
        $q59_res = mysqli_query($db, $q59);      
      
          if($q59_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save21'])){

      $id20 = $_POST['id20'];
      $day20 = $_POST['day20'];
      $time20 = $_POST['time20'];
      $subject20 = $_POST['subject20'];
      $lecturer20 = $_POST['lecturer20'];

      $q60 = "SELECT * FROM lectures_se WHERE id = '$id20' ";
      $q60_exe = mysqli_query($db, $q60);
      $count20 = mysqli_num_rows($q60_exe);

      if($count20 == 0){
        $q61 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id20', '$subject20', '$lecturer20', '$day20', '$time20')";
        $q61_res = mysqli_query($db, $q61);      
      
        if($q61_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q62 = " UPDATE lectures_se SET subjects ='$subject20', prof_name = '$lecturer20' WHERE id = '$id20' ";
        $q62_res = mysqli_query($db, $q62);      
      
          if($q62_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save22'])){

      $id21 = $_POST['id21'];
      $day21 = $_POST['day21'];
      $time21 = $_POST['time21'];
      $subject21 = $_POST['subject21'];
      $lecturer21 = $_POST['lecturer21'];

      $q63 = "SELECT * FROM lectures_se WHERE id = '$id21' ";
      $q63_exe = mysqli_query($db, $q63);
      $count21 = mysqli_num_rows($q63_exe);

      if($count21 == 0){
        $q64 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id21', '$subject21', '$lecturer21', '$day21', '$time21')";
        $q64_res = mysqli_query($db, $q64);      
      
        if($q64_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q65 = " UPDATE lectures_se SET subjects ='$subject21', prof_name = '$lecturer21' WHERE id = '$id21' ";
        $q65_res = mysqli_query($db, $q65);      
      
          if($q65_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save23'])){

      $id22 = $_POST['id22'];
      $day22 = $_POST['day22'];
      $time22 = $_POST['time22'];
      $subject22 = $_POST['subject22'];
      $lecturer22 = $_POST['lecturer22'];

      $q66 = "SELECT * FROM lectures_se WHERE id = '$id22' ";
      $q66_exe = mysqli_query($db, $q66);
      $count22 = mysqli_num_rows($q66_exe);

      if($count22 == 0){
        $q67 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id22', '$subject22', '$lecturer22', '$day22', '$time22')";
        $q67_res = mysqli_query($db, $q67);      
      
        if($q67_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q68 = " UPDATE lectures_se SET subjects ='$subject22', prof_name = '$lecturer22' WHERE id = '$id22' ";
        $q68_res = mysqli_query($db, $q68);      
      
          if($q68_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save24'])){

      $id23 = $_POST['id23'];
      $day23 = $_POST['day23'];
      $time23 = $_POST['time23'];
      $subject23 = $_POST['subject23'];
      $lecturer23 = $_POST['lecturer23'];

      $q69 = "SELECT * FROM lectures_se WHERE id = '$id23' ";
      $q69_exe = mysqli_query($db, $q69);
      $count23 = mysqli_num_rows($q69_exe);

      if($count23 == 0){
        $q70 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id23', '$subject23', '$lecturer23', '$day23', '$time23')";
        $q70_res = mysqli_query($db, $q70);      
      
        if($q70_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q71 = " UPDATE lectures_se SET subjects ='$subject23', prof_name = '$lecturer23' WHERE id = '$id23' ";
        $q71_res = mysqli_query($db, $q71);      
      
          if($q71_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save25'])){

      $id24 = $_POST['id24'];
      $day24 = $_POST['day24'];
      $time24 = $_POST['time24'];
      $subject24 = $_POST['subject24'];
      $lecturer24 = $_POST['lecturer24'];

      $q72 = "SELECT * FROM lectures_se WHERE id = '$id24' ";
      $q72_exe = mysqli_query($db, $q72);
      $count24 = mysqli_num_rows($q72_exe);

      if($count24 == 0){
        $q73 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id24', '$subject24', '$lecturer24', '$day24', '$time24')";
        $q73_res = mysqli_query($db, $q73);      
      
        if($q73_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q74 = " UPDATE lectures_se SET subjects ='$subject24', prof_name = '$lecturer24' WHERE id = '$id24' ";
        $q74_res = mysqli_query($db, $q74);      
      
          if($q74_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save26'])){

      $id25 = $_POST['id25'];
      $day25 = $_POST['day25'];
      $time25 = $_POST['time25'];
      $subject25 = $_POST['subject25'];
      $lecturer25 = $_POST['lecturer25'];

      $q75 = "SELECT * FROM lectures_se WHERE id = '$id25' ";
      $q75_exe = mysqli_query($db, $q75);
      $count25 = mysqli_num_rows($q75_exe);

      if($count25 == 0){
        $q76 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id25', '$subject25', '$lecturer25', '$day25', '$time25')";
        $q76_res = mysqli_query($db, $q76);      
      
        if($q76_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q77 = " UPDATE lectures_se SET subjects ='$subject25', prof_name = '$lecturer25' WHERE id = '$id25' ";
        $q77_res = mysqli_query($db, $q77);      
      
          if($q77_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save27'])){

      $id26 = $_POST['id26'];
      $day26 = $_POST['day26'];
      $time26 = $_POST['time26'];
      $subject26 = $_POST['subject26'];
      $lecturer26 = $_POST['lecturer26'];

      $q78 = "SELECT * FROM lectures_se WHERE id = '$id26' ";
      $q78_exe = mysqli_query($db, $q78);
      $count26 = mysqli_num_rows($q78_exe);

      if($count26 == 0){
        $q79 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id26', '$subject26', '$lecturer26', '$day26', '$time26')";
        $q79_res = mysqli_query($db, $q79);      
      
        if($q79_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q80 = " UPDATE lectures_se SET subjects ='$subject26', prof_name = '$lecturer26' WHERE id = '$id26' ";
        $q80_res = mysqli_query($db, $q80);      
      
          if($q80_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save28'])){

      $id27 = $_POST['id27'];
      $day27 = $_POST['day27'];
      $time27 = $_POST['time27'];
      $subject27 = $_POST['subject27'];
      $lecturer27 = $_POST['lecturer27'];

      $q81 = "SELECT * FROM lectures_se WHERE id = '$id27' ";
      $q81_exe = mysqli_query($db, $q81);
      $count27 = mysqli_num_rows($q81_exe);

      if($count27 == 0){
        $q82 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id27', '$subject27', '$lecturer27', '$day27', '$time27')";
        $q82_res = mysqli_query($db, $q82);      
      
        if($q82_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q83 = " UPDATE lectures_se SET subjects ='$subject27', prof_name = '$lecturer27' WHERE id = '$id27' ";
        $q83_res = mysqli_query($db, $q83);      
      
          if($q83_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save29'])){

      $id28 = $_POST['id28'];
      $day28 = $_POST['day28'];
      $time28 = $_POST['time28'];
      $subject28 = $_POST['subject28'];
      $lecturer28 = $_POST['lecturer28'];

      $q84 = "SELECT * FROM lectures_se WHERE id = '$id28' ";
      $q84_exe = mysqli_query($db, $q84);
      $count28 = mysqli_num_rows($q84_exe);

      if($count28 == 0){
        $q85 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id28', '$subject28', '$lecturer28', '$day28', '$time28')";
        $q85_res = mysqli_query($db, $q85);      
      
        if($q85_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q86 = " UPDATE lectures_se SET subjects ='$subject28', prof_name = '$lecturer28' WHERE id = '$id28' ";
        $q86_res = mysqli_query($db, $q86);      
      
          if($q86_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save30'])){

      $id29 = $_POST['id29'];
      $day29 = $_POST['day29'];
      $time29 = $_POST['time29'];
      $subject29 = $_POST['subject29'];
      $lecturer29 = $_POST['lecturer29'];

      $q87 = "SELECT * FROM lectures_se WHERE id = '$id29' ";
      $q87_exe = mysqli_query($db, $q87);
      $count29 = mysqli_num_rows($q87_exe);

      if($count29 == 0){
        $q88 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id29', '$subject29', '$lecturer29', '$day29', '$time29')";
        $q88_res = mysqli_query($db, $q88);      
      
        if($q88_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q89 = " UPDATE lectures_se SET subjects ='$subject29', prof_name = '$lecturer29' WHERE id = '$id29' ";
        $q89_res = mysqli_query($db, $q89);      
      
          if($q89_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save31'])){

      $id30 = $_POST['id30'];
      $day30 = $_POST['day30'];
      $time30 = $_POST['time30'];
      $subject30 = $_POST['subject30'];
      $lecturer30 = $_POST['lecturer30'];

      $q90 = "SELECT * FROM lectures_se WHERE id = '$id30' ";
      $q90_exe = mysqli_query($db, $q90);
      $count30 = mysqli_num_rows($q90_exe);

      if($count30 == 0){
        $q91 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id30', '$subject30', '$lecturer30', '$day30', '$time30')";
        $q91_res = mysqli_query($db, $q91);      
      
        if($q91_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q92 = " UPDATE lectures_se SET subjects ='$subject30', prof_name = '$lecturer30' WHERE id = '$id30' ";
        $q92_res = mysqli_query($db, $q92);      
      
          if($q92_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save32'])){

      $id31 = $_POST['id31'];
      $day31 = $_POST['day31'];
      $time31 = $_POST['time31'];
      $subject31 = $_POST['subject31'];
      $lecturer31 = $_POST['lecturer31'];

      $q93 = "SELECT * FROM lectures_se WHERE id = '$id31' ";
      $q93_exe = mysqli_query($db, $q93);
      $count31 = mysqli_num_rows($q93_exe);

      if($count31 == 0){
        $q94 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id31', '$subject31', '$lecturer31', '$day31', '$time31')";
        $q94_res = mysqli_query($db, $q94);      
      
        if($q94_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q95 = " UPDATE lectures_se SET subjects ='$subject31', prof_name = '$lecturer31' WHERE id = '$id31' ";
        $q95_res = mysqli_query($db, $q95);      
      
          if($q95_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save33'])){

      $id32 = $_POST['id32'];
      $day32 = $_POST['day32'];
      $time32 = $_POST['time32'];
      $subject32 = $_POST['subject32'];
      $lecturer32 = $_POST['lecturer32'];

      $q96 = "SELECT * FROM lectures_se WHERE id = '$id32' ";
      $q96_exe = mysqli_query($db, $q96);
      $count32 = mysqli_num_rows($q96_exe);

      if($count32 == 0){
        $q97 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id32', '$subject32', '$lecturer32', '$day32', '$time32')";
        $q97_res = mysqli_query($db, $q97);      
      
        if($q97_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q98 = " UPDATE lectures_se SET subjects ='$subject32', prof_name = '$lecturer32' WHERE id = '$id32' ";
        $q98_res = mysqli_query($db, $q98);      
      
          if($q98_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save34'])){

      $id33 = $_POST['id33'];
      $day33 = $_POST['day33'];
      $time33 = $_POST['time33'];
      $subject33 = $_POST['subject33'];
      $lecturer33 = $_POST['lecturer33'];

      $q99 = "SELECT * FROM lectures_se WHERE id = '$id33' ";
      $q99_exe = mysqli_query($db, $q99);
      $count33 = mysqli_num_rows($q99_exe);

      if($count33 == 0){
        $q100 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id33', '$subject33', '$lecturer33', '$day33', '$time33')";
        $q100_res = mysqli_query($db, $q100);      
      
        if($q100_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q101 = " UPDATE lectures_se SET subjects ='$subject33', prof_name = '$lecturer33' WHERE id = '$id33' ";
        $q101_res = mysqli_query($db, $q101);      
      
          if($q101_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }

    if(isset($_POST['save35'])){

      $id34 = $_POST['id34'];
      $day34 = $_POST['day34'];
      $time34 = $_POST['time34'];
      $subject34 = $_POST['subject34'];
      $lecturer34 = $_POST['lecturer34'];

      $q102 = "SELECT * FROM lectures_se WHERE id = '$id34' ";
      $q102_exe = mysqli_query($db, $q102);
      $count34 = mysqli_num_rows($q102_exe);

      if($count34 == 0){
        $q103 = "INSERT INTO lectures_se(id, subjects, prof_name, day, ltime) VALUES ('$id34', '$subject34', '$lecturer34', '$day34', '$time34')";
        $q103_res = mysqli_query($db, $q103);      
      
        if($q103_res){
          $_SESSION['success'] = "Lecture Assigned successfully..!!";
        }
      }else{
        $q104 = " UPDATE lectures_se SET subjects ='$subject34', prof_name = '$lecturer34' WHERE id = '$id34' ";
        $q104_res = mysqli_query($db, $q104);      
      
          if($q104_res){
            $_SESSION['success'] = "Lecture Updated successfully..!!";
          }
      }
    }
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
          <a href="assignload.php">Load Management</a>
          <a class="active" href="timetable.php">Time Table</a>
          <a href="assignleave.php">Leaves</a>
      </div>
          </div>

        <div class="col-lg-9 col-sm-9">
        <br><h1 style="background-color: dodgerblue; color: white" class="card-header">Time Table</h1><br>
        <?php
          if(isset($_SESSION['success'])){
            echo $_SESSION['success'];
            unset($_SESSION['success']);
          } 
        ?>
        <form method="POST">
          
          <div class="col-lg-6 form-inline">
            <label style="margin-right: 15px" for="type"><b>Choose Year :</b></label>
            <div class="custom-control custom-radio">
              <input type="radio" value="FE" id="typeRadio1" name="type" class="custom-control-input" onclick="document.location.href='timetable_fe.php'">
              <label style="margin-right: 15px" class="custom-control-label" for="typeRadio1">FE</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" value="SE" id="typeRadio2" name="type" class="custom-control-input" checked onclick="document.location.href='timetable_se.php'">
              <label style="margin-right: 15px" class="custom-control-label" for="typeRadio2">SE</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" value="TE" id="typeRadio3" name="type" class="custom-control-input" onclick="document.location.href='timetable.php'">
              <label style="margin-right: 15px" class="custom-control-label" for="typeRadio3">TE</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" value="BE" id="typeRadio4" name="type" class="custom-control-input" onclick="document.location.href='timetable_be.php'">
              <label style="margin-right: 15px" class="custom-control-label" for="typeRadio4">BE</label>
            </div>
           </div><br>

           <!-- <script type="text/javascript">
             function goTo(URL){
              site = URL;
             }
           </script> -->
           <a href="#se_tt">View in Simplified form??</a>
        <table id="loadetails" class="table table-bordered text-center">
         <tr class="card-header">
           <th colspan="10">Second Year Time Table</th>
         </tr>
         <tr class="card-header">
          <th> Time <br> <br> Days </th>
          <th> 9:30am-10:30am </th>
          <th> 10:30am-11:30am </th>
          <th> 11:30am-12:00pm </th>
          <th> 12:00pm-1:00pm </th>
          <th> 1:00pm-2:00pm </th>
          <th> 2:00pm-2:15pm</th>
          <th> 2:15pm-3:15pm </th>
          <th> 3:15pm-4:15pm </th>
          <th> 4:15pm-5:15pm </th>
         </tr>
         
         <tr>
           <th class="card-header">Monday</th>
           <td>
            <?php 

              $disp_q = "SELECT * FROM lectures_se WHERE id = 1";
              $exe_disp_q = mysqli_query($db, $disp_q);
              while($res = mysqli_fetch_array($exe_disp_q)){
            ?>
              <p><b>Lect :</b> <?php echo $res['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res['prof_name'] ?> </p>
            <?php
              }
            ?>
              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal1">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal1">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id" value="1">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day" id="day" value="Monday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time" id="time" value="9:30am-10:30am" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject" id="subject" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer" id="lecturer" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save1" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q1 = "SELECT * FROM lectures_se WHERE id = 2";
              $exe_disp_q1 = mysqli_query($db, $disp_q1);
              while($res1 = mysqli_fetch_array($exe_disp_q1)){
            ?>
              <p><b>Lect :</b> <?php echo $res1['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res1['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal2">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal2">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id1" value="2">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day1" id="day1" value="Monday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time1" id="time1" value="10:30am-11:30am" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject1" id="subject1" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer1" id="lecturer1" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save2" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td rowspan="5">
             <p style="margin-top: 60px"><b>L</b></p><br><br>
             <p><b>U</b></p><br><br>
             <p><b>N</b></p><br><br>
             <p><b>C</b></p><br><br>
             <p><b>H</b></p><br><br><br><br>
             <p><b>B</b></p><br><br>
             <p><b>R</b></p><br><br>
             <p><b>E</b></p><br><br>
             <p><b>A</b></p><br><br>
             <p><b>K</b></p>
           </td>

           <td>
            <?php 

              $disp_q2 = "SELECT * FROM lectures_se WHERE id = 3";
              $exe_disp_q2 = mysqli_query($db, $disp_q2);
              while($res2 = mysqli_fetch_array($exe_disp_q2)){
            ?>
              <p><b>Lect :</b> <?php echo $res2['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res2['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal3">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal3">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id2" value="3">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day2" id="day2" value="Monday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time2" id="time2" value="12:00pm-1:00pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject2" id="subject2" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer2" id="lecturer2" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save3" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q3 = "SELECT * FROM lectures_se WHERE id = 4";
              $exe_disp_q3 = mysqli_query($db, $disp_q3);
              while($res3 = mysqli_fetch_array($exe_disp_q3)){
            ?>
              <p><b>Lect :</b> <?php echo $res3['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res3['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal4">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal4">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id3" value="4">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day3" id="day3" value="Monday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time3" id="time3" value="1:00pm-2:00pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject3" id="subject3" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer3" id="lecturer3" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save4" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td rowspan="5">
             <p style="margin-top: 60px"><b>T</b></p><br><br>
             <p><b>E</b></p><br><br>
             <p><b>A</b></p><br><br>
             <br><br>
             <p><b>B</b></p><br><br>
             <p><b>R</b></p><br><br>
             <p><b>E</b></p><br><br>
             <p><b>A</b></p><br><br>
             <p><b>K</b></p>
           </td>

           <td>
            <?php 

              $disp_q4 = "SELECT * FROM lectures_se WHERE id = 5";
              $exe_disp_q4 = mysqli_query($db, $disp_q4);
              while($res4 = mysqli_fetch_array($exe_disp_q4)){
            ?>
              <p><b>Lect :</b> <?php echo $res4['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res4['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal5">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal5">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id4" value="5">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day4" id="day4" value="Monday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time4" id="time4" value="2:15pm-3:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject4" id="subject4" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer4" id="lecturer4" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save5" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q5 = "SELECT * FROM lectures_se WHERE id = 6";
              $exe_disp_q5 = mysqli_query($db, $disp_q5);
              while($res5 = mysqli_fetch_array($exe_disp_q5)){
            ?>
              <p><b>Lect :</b> <?php echo $res5['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res5['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal6">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal6">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id5" value="6">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day5" id="day5" value="Monday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time5" id="time5" value="3:15pm-4:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject5" id="subject5" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer5" id="lecturer5" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save6" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q6 = "SELECT * FROM lectures_se WHERE id = 7";
              $exe_disp_q6 = mysqli_query($db, $disp_q6);
              while($res6 = mysqli_fetch_array($exe_disp_q6)){
            ?>
              <p><b>Lect :</b> <?php echo $res6['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res6['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal7">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal7">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id6" value="7">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day6" id="day6" value="Monday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time6" id="time6" value="4:15pm-5:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject6" id="subject6" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer6" id="lecturer6" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save7" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td> 
         </tr>

         <tr>
           <th class="card-header">Tuesday</th>
           <td>
            <?php 

              $disp_q7 = "SELECT * FROM lectures_se WHERE id = 8";
              $exe_disp_q7 = mysqli_query($db, $disp_q7);
              while($res7 = mysqli_fetch_array($exe_disp_q7)){
            ?>
              <p><b>Lect :</b> <?php echo $res7['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res7['prof_name'] ?> </p>
            <?php
              }
            ?>
              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal8">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal8">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id7" value="8">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day7" id="day7" value="Tuesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time7" id="time7" value="9:30am-10:30am" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject7" id="subject7" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer7" id="lecturer7" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save8" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q8 = "SELECT * FROM lectures_se WHERE id = 9";
              $exe_disp_q8 = mysqli_query($db, $disp_q8);
              while($res8 = mysqli_fetch_array($exe_disp_q8)){
            ?>
              <p><b>Lect :</b> <?php echo $res8['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res8['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal9">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal9">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id8" value="9">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day8" id="day8" value="Tuesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time8" id="time8" value="10:30am-11:30am" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject8" id="subject8" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer8" id="lecturer8" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save9" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q9 = "SELECT * FROM lectures_se WHERE id = 10";
              $exe_disp_q9 = mysqli_query($db, $disp_q9);
              while($res9 = mysqli_fetch_array($exe_disp_q9)){
            ?>
              <p><b>Lect :</b> <?php echo $res9['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res9['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal10">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal10">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id9" value="10">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day9" id="day9" value="Tuesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time9" id="time9" value="12:00pm-1:00pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject9" id="subject9" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer9" id="lecturer9" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save10" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q10 = "SELECT * FROM lectures_se WHERE id = 11";
              $exe_disp_q10 = mysqli_query($db, $disp_q10);
              while($res10 = mysqli_fetch_array($exe_disp_q10)){
            ?>
              <p><b>Lect :</b> <?php echo $res10['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res10['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal11">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal11">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id10" value="11">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day10" id="day10" value="Tuesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time10" id="time10" value="1:00pm-2:00pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject10" id="subject10" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer10" id="lecturer10" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save11" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q11 = "SELECT * FROM lectures_se WHERE id = 12";
              $exe_disp_q11 = mysqli_query($db, $disp_q11);
              while($res11 = mysqli_fetch_array($exe_disp_q11)){
            ?>
              <p><b>Lect :</b> <?php echo $res11['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res11['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal12">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal12">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id11" value="12">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day11" id="day11" value="Tuesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time11" id="time11" value="2:15pm-3:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject11" id="subject11" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer11" id="lecturer11" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save12" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q12 = "SELECT * FROM lectures_se WHERE id = 13";
              $exe_disp_q12 = mysqli_query($db, $disp_q12);
              while($res12 = mysqli_fetch_array($exe_disp_q12)){
            ?>
              <p><b>Lect :</b> <?php echo $res12['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res12['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal13">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal13">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id12" value="13">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day12" id="day12" value="Tuesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time12" id="time12" value="3:15pm-4:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject12" id="subject12" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer12" id="lecturer12" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save13" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q13 = "SELECT * FROM lectures_se WHERE id = 14";
              $exe_disp_q13 = mysqli_query($db, $disp_q13);
              while($res13 = mysqli_fetch_array($exe_disp_q13)){
            ?>
              <p><b>Lect :</b> <?php echo $res13['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res13['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal14">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal14">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id13" value="14">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day13" id="day13" value="Tuesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time13" id="time13" value="4:15pm-5:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject13" id="subject13" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer13" id="lecturer13" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save14" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td> 
         </tr>

          <tr>
           <th class="card-header">Wednesday</th>
           <td>
            <?php 

              $disp_q14 = "SELECT * FROM lectures_se WHERE id = 15";
              $exe_disp_q14 = mysqli_query($db, $disp_q14);
              while($res14 = mysqli_fetch_array($exe_disp_q14)){
            ?>
              <p><b>Lect :</b> <?php echo $res14['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res14['prof_name'] ?> </p>
            <?php
              }
            ?>
              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal15">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal15">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id14" value="15">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day14" id="day14" value="Wednesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time14" id="time14" value="9:30am-10:30am" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject14" id="subject14" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer14" id="lecturer14" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save15" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q15 = "SELECT * FROM lectures_se WHERE id = 16";
              $exe_disp_q15 = mysqli_query($db, $disp_q15);
              while($res15 = mysqli_fetch_array($exe_disp_q15)){
            ?>
              <p><b>Lect :</b> <?php echo $res15['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res15['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal16">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal16">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id15" value="16">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day15" id="day15" value="Wednesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time15" id="time15" value="10:30am-11:30am" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject15" id="subject15" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer15" id="lecturer15" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save16" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q16 = "SELECT * FROM lectures_se WHERE id = 17";
              $exe_disp_q16 = mysqli_query($db, $disp_q16);
              while($res16 = mysqli_fetch_array($exe_disp_q16)){
            ?>
              <p><b>Lect :</b> <?php echo $res16['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res16['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal17">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal17">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id16" value="17">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day16" id="day16" value="Wednesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time16" id="time16" value="12:00pm-1:00pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject16" id="subject16" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer16" id="lecturer16" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save17" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q17 = "SELECT * FROM lectures_se WHERE id = 18";
              $exe_disp_q17 = mysqli_query($db, $disp_q17);
              while($res17 = mysqli_fetch_array($exe_disp_q17)){
            ?>
              <p><b>Lect :</b> <?php echo $res17['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res17['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal18">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal18">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id17" value="18">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day17" id="day17" value="Wednesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time17" id="time17" value="1:00pm-2:00pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject17" id="subject17" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer17" id="lecturer17" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save18" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q18 = "SELECT * FROM lectures_se WHERE id = 19";
              $exe_disp_q18 = mysqli_query($db, $disp_q18);
              while($res18 = mysqli_fetch_array($exe_disp_q18)){
            ?>
              <p><b>Lect :</b> <?php echo $res18['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res18['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal19">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal19">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id18" value="19">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day18" id="day18" value="Wednesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time18" id="time18" value="2:15pm-3:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject18" id="subject18" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer18" id="lecturer18" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save19" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q19 = "SELECT * FROM lectures_se WHERE id = 20";
              $exe_disp_q19 = mysqli_query($db, $disp_q19);
              while($res19 = mysqli_fetch_array($exe_disp_q19)){
            ?>
              <p><b>Lect :</b> <?php echo $res19['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res19['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal20">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal20">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id19" value="20">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day19" id="day19" value="Wednesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time19" id="time19" value="3:15pm-4:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject19" id="subject19" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer19" id="lecturer19" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save20" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q20 = "SELECT * FROM lectures_se WHERE id = 21";
              $exe_disp_q20 = mysqli_query($db, $disp_q20);
              while($res20 = mysqli_fetch_array($exe_disp_q20)){
            ?>
              <p><b>Lect :</b> <?php echo $res20['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res20['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal21">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal21">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id20" value="21">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day20" id="day20" value="Wednesday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time20" id="time20" value="4:15pm-5:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject20" id="subject20" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer20" id="lecturer20" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save21" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td> 
         </tr>          

         <tr>
           <th class="card-header">Thursday</th>
           <td>
            <?php 

              $disp_q21 = "SELECT * FROM lectures_se WHERE id = 22";
              $exe_disp_q21 = mysqli_query($db, $disp_q21);
              while($res21 = mysqli_fetch_array($exe_disp_q21)){
            ?>
              <p><b>Lect :</b> <?php echo $res21['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res21['prof_name'] ?> </p>
            <?php
              }
            ?>
              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal22">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal22">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id21" value="22">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day21" id="day21" value="Thursday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time21" id="time21" value="9:30am-10:30am" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject21" id="subject21" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer21" id="lecturer21" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save22" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q22 = "SELECT * FROM lectures_se WHERE id = 23";
              $exe_disp_q22 = mysqli_query($db, $disp_q22);
              while($res22 = mysqli_fetch_array($exe_disp_q22)){
            ?>
              <p><b>Lect :</b> <?php echo $res22['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res22['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal23">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal23">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id22" value="23">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day22" id="day22" value="Thursday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time22" id="time22" value="10:30am-11:30am" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject22" id="subject22" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer22" id="lecturer22" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save23" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q23 = "SELECT * FROM lectures_se WHERE id = 24";
              $exe_disp_q23 = mysqli_query($db, $disp_q23);
              while($res23 = mysqli_fetch_array($exe_disp_q23)){
            ?>
              <p><b>Lect :</b> <?php echo $res23['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res23['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal24">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal24">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id23" value="24">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day23" id="day23" value="Thursday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time23" id="time23" value="12:00pm-1:00pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject23" id="subject23" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer23" id="lecturer23" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save24" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q24 = "SELECT * FROM lectures_se WHERE id = 25";
              $exe_disp_q24 = mysqli_query($db, $disp_q24);
              while($res24 = mysqli_fetch_array($exe_disp_q24)){
            ?>
              <p><b>Lect :</b> <?php echo $res24['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res24['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal25">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal25">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id24" value="25">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day24" id="day24" value="Thursday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time24" id="time24" value="1:00pm-2:00pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject24" id="subject24" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer24" id="lecturer24" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save25" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q25 = "SELECT * FROM lectures_se WHERE id = 26";
              $exe_disp_q25 = mysqli_query($db, $disp_q25);
              while($res25 = mysqli_fetch_array($exe_disp_q25)){
            ?>
              <p><b>Lect :</b> <?php echo $res25['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res25['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal26">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal26">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id25" value="26">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day25" id="day25" value="Thursday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time25" id="time25" value="2:15pm-3:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject25" id="subject25" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer25" id="lecturer25" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save26" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q26 = "SELECT * FROM lectures_se WHERE id = 27";
              $exe_disp_q26 = mysqli_query($db, $disp_q26);
              while($res26 = mysqli_fetch_array($exe_disp_q26)){
            ?>
              <p><b>Lect :</b> <?php echo $res26['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res26['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal27">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal27">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id26" value="27">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day26" id="day26" value="Thursday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time26" id="time26" value="3:15pm-4:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject26" id="subject26" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer26" id="lecturer26" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save27" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q27 = "SELECT * FROM lectures_se WHERE id = 28";
              $exe_disp_q27 = mysqli_query($db, $disp_q27);
              while($res27 = mysqli_fetch_array($exe_disp_q27)){
            ?>
              <p><b>Lect :</b> <?php echo $res27['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res27['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal28">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal28">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id27" value="28">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day27" id="day27" value="Thursday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time27" id="time27" value="4:15pm-5:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject27" id="subject27" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer27" id="lecturer27" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save28" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td> 
         </tr>

         <tr>
           <th class="card-header">Friday</th>
           <td>
            <?php 

              $disp_q28 = "SELECT * FROM lectures_se WHERE id = 29";
              $exe_disp_q28 = mysqli_query($db, $disp_q28);
              while($res28 = mysqli_fetch_array($exe_disp_q28)){
            ?>
              <p><b>Lect :</b> <?php echo $res28['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res28['prof_name'] ?> </p>
            <?php
              }
            ?>
              <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal29">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal29">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id28" value="29">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day28" id="day28" value="Friday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time28" id="time28" value="9:30am-10:30am" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject28" id="subject28" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer28" id="lecturer28" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save29" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q29 = "SELECT * FROM lectures_se WHERE id = 30";
              $exe_disp_q29 = mysqli_query($db, $disp_q29);
              while($res29 = mysqli_fetch_array($exe_disp_q29)){
            ?>
              <p><b>Lect :</b> <?php echo $res29['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res29['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal30">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal30">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id29" value="30">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day29" id="day29" value="Friday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time29" id="time29" value="10:30am-11:30am" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject29" id="subject29" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer29" id="lecturer29" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save30" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q30 = "SELECT * FROM lectures_se WHERE id = 31";
              $exe_disp_q30 = mysqli_query($db, $disp_q30);
              while($res30 = mysqli_fetch_array($exe_disp_q30)){
            ?>
              <p><b>Lect :</b> <?php echo $res30['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res30['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal31">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal31">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id30" value="31">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day30" id="day30" value="Friday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time30" id="time30" value="12:00pm-1:00pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject30" id="subject30" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer30" id="lecturer30" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save31" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q31 = "SELECT * FROM lectures_se WHERE id = 32";
              $exe_disp_q31 = mysqli_query($db, $disp_q31);
              while($res31 = mysqli_fetch_array($exe_disp_q31)){
            ?>
              <p><b>Lect :</b> <?php echo $res31['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res31['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal32">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal32">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id31" value="32">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day31" id="day31" value="Friday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time31" id="time31" value="1:00pm-2:00pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject31" id="subject31" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer31" id="lecturer31" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save32" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q32 = "SELECT * FROM lectures_se WHERE id = 33";
              $exe_disp_q32 = mysqli_query($db, $disp_q32);
              while($res32 = mysqli_fetch_array($exe_disp_q32)){
            ?>
              <p><b>Lect :</b> <?php echo $res32['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res32['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal33">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal33">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id32" value="33">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day32" id="day32" value="Friday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time32" id="time32" value="2:15pm-3:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject32" id="subject32" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer32" id="lecturer32" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save33" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q33 = "SELECT * FROM lectures_se WHERE id = 34";
              $exe_disp_q33 = mysqli_query($db, $disp_q33);
              while($res33 = mysqli_fetch_array($exe_disp_q33)){
            ?>
              <p><b>Lect :</b> <?php echo $res33['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res33['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal34">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal34">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id33" value="34">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day33" id="day33" value="Friday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time33" id="time33" value="3:15pm-4:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject33" id="subject33" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer33" id="lecturer33" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save34" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td>

           <td>
            <?php 

              $disp_q34 = "SELECT * FROM lectures_se WHERE id = 35";
              $exe_disp_q34 = mysqli_query($db, $disp_q34);
              while($res34 = mysqli_fetch_array($exe_disp_q34)){
            ?>
              <p><b>Lect :</b> <?php echo $res34['subjects'] ?> </p>
              <p><b>Prof :</b> <?php echo $res34['prof_name'] ?> </p>
            <?php
              }
            ?>
             <div class="d-flex justify-content-center">
                <button type="button" class="btn btn-link text-dark" data-toggle="modal" data-target="#myModal35">Add</button>
              </div>
              <!-- the Modal -->
              <div class="modal fade" id="myModal35">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header">
                    <h4 class="modal-title">Add Lecture</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                  </div>
                  <!-- Modal body -->
                  <div class="modal-body">
                    <input type="hidden" name="id34" value="35">
                    <div class="form-group">
                      <label>  Day : </label>
                      <input type="text" name="day34" id="day34" value="Friday" readonly class="form-control">
                    </div>
                    <div class="form-group">
                      <label>  Time : </label>
                      <input type="text" name="time34" id="time34" value="4:15pm-5:15pm" readonly class="form-control">
                    </div>       
                    <div class="form-group">
                      <label>  Subject : </label>
                      <input type="text" name="subject34" id="subject34" placeholder="Eg : SUB or SUB1/SUB2" class="form-control">
                    </div>
                    <div class="form-group">
                      <label> Lecturer </label>
                      <input type="text" name="lecturer34" id="lecturer34" placeholder="Prof:name (T/P) (B1/B2)" class="form-control">
                    </div>
                  </div>
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="submit" name="save35" class="btn btn-success">Save</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                  </div>
                  </div>
                </div>
              </div>
           </td> 
         </tr>

        </table>
        </form> 
        
        <br><div id="se_tt">
        <table class="table table-bordered text-center">
          <tr class="card-header">
            <th> Time <br> <br> Days </th>
            <th> 9:30am-10:30am </th>
            <th> 10:30am-11:30am </th>
            <th rowspan="6"> 
              11:30am-12:00pm <br><br>
              <p style="margin-top: 60px">L</p><br><br>
              <p>U</p><br><br>
              <p>N</p><br><br>
              <p>C</p><br><br>
              <p>H</p><br><br><br><br>
              <p>B</p><br><br>
              <p>R</p><br><br>
              <p>E</p><br><br>
              <p>A</p><br><br>
              <p>K</p> 
            </th>
            <th> 12:00pm-1:00pm </th>
            <th> 1:00pm-2:00pm </th>
            <th rowspan="6"> 
              2:00pm-2:15pm<br><br>
              <p style="margin-top: 60px">T</p><br><br>
              <p>E</p><br><br>
              <p>A</p><br><br><br><br>
              <p>B</p><br><br>
              <p>R</p><br><br>
              <p>E</p><br><br>
              <p>A</p><br><br>
              <p>K</p> 
            </th>
            <th> 2:15pm-3:15pm </th>
            <th> 3:15pm-4:15pm </th>
            <th> 4:15pm-5:15pm </th>
          </tr>
          <tr>
            <th>Monday</th>
          <?php 
            $query = "SELECT * FROM lectures_se WHERE day = 'Monday'";
            $exe_query = mysqli_query($db, $query);
            while($res_exe_query = mysqli_fetch_array($exe_query)){
          ?>
            <td><p style="color: blue"><?php echo $res_exe_query['subjects']; ?></p>
                <p style="color: red"><?php echo $res_exe_query['prof_name']; ?></p>
            </td>
          <?php
            }
          ?>          
          </tr>
          <tr>
            <th>Tuesday</th>
          <?php 
            $query = "SELECT * FROM lectures_se WHERE day = 'Tuesday'";
            $exe_query = mysqli_query($db, $query);
            while($res_exe_query = mysqli_fetch_array($exe_query)){
          ?>
            <td><p style="color: blue"><?php echo $res_exe_query['subjects']; ?></p>
                <p style="color: red"><?php echo $res_exe_query['prof_name']; ?></p>
            </td>
          <?php
            }
          ?>          
          </tr>
          <tr>
            <th>Wednesday</th>
          <?php 
            $query = "SELECT * FROM lectures_se WHERE day = 'Wednesday'";
            $exe_query = mysqli_query($db, $query);
            while($res_exe_query = mysqli_fetch_array($exe_query)){
          ?>
            <td><p style="color: blue"><?php echo $res_exe_query['subjects']; ?></p>
                <p style="color: red"><?php echo $res_exe_query['prof_name']; ?></p>
            </td>
          <?php
            }
          ?>          
          </tr>
          <tr>
            <th>Thursday</th>
          <?php 
            $query = "SELECT * FROM lectures_se WHERE day = 'Thursday'";
            $exe_query = mysqli_query($db, $query);
            while($res_exe_query = mysqli_fetch_array($exe_query)){
          ?>
            <td><p style="color: blue"><?php echo $res_exe_query['subjects']; ?></p>
                <p style="color: red"><?php echo $res_exe_query['prof_name']; ?></p>
            </td>
          <?php
            }
          ?>          
          </tr>
          <tr>
            <th>Friday</th>
          <?php 
            $query = "SELECT * FROM lectures_se WHERE day = 'Friday'";
            $exe_query = mysqli_query($db, $query);
            while($res_exe_query = mysqli_fetch_array($exe_query)){
          ?>
            <td><p style="color: blue"><?php echo $res_exe_query['subjects']; ?></p>
                <p style="color: red"><?php echo $res_exe_query['prof_name']; ?></p>
            </td>
          <?php
            }
          ?>          
          </tr>
        </table>
          <button style="display: block; margin: auto" class="btn btn-info" onclick="print_tt('se_tt')">Print Time Table</button>          
      </div>

    </div>
          
    </div>
    </div>

      <script type="text/javascript">
      function print_tt(se_tt){
        var backup = document.body.innerHTML;
          var get = document.getElementById("se_tt").innerHTML
          document.body.innerHTML = get;
          window.print();
          document.body.innerHTML = backup;
      }
    </script>
<!-- <script type="text/javascript">
      function myfun(datavalue){
        $.ajax({
          url: 'timetable_byyear.php',
          type: 'POST',
          data: { datapost : datavalue },

          success: function(result){
            $('#loadetails').html(result);
          }
        });
      }
  </script>
 -->
</body>
</html>

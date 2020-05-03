<?php 
	$con  = mysqli_connect('localhost', 'root', '', 'sllm');

	$yid = $_POST['datapost'];

	$q = " SELECT DISTINCT assigned_to FROM assign_load WHERE year = '$yid' ";

	$result = mysqli_query($con, $q);

	while ($rows = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $rows['assigned_to'] ?>"><?php echo $rows['assigned_to']; ?></option>
<?php
	}

	$yid1 = $_POST['year'];
	$staff = $_POST['staffname'];

	$q1 = " SELECT DISTINCT subject FROM assign_load WHERE year = '$yid1' AND assigned_to = '$staff'
 ";

	$result1 = mysqli_query($con, $q1);

	while ($rows1 = mysqli_fetch_array($result1)) {
?>
	<option value="<?php echo $rows1['subject'] ?>"><?php echo $rows1['subject']; ?></option>
<?php
	}

	$yid2 = $_POST['year'];
	$your_name = $_POST['your_name'];

	$q2 = " SELECT DISTINCT subject FROM assign_load WHERE year = '$yid2' AND assigned_to = '$your_name'
 ";

	$result2 = mysqli_query($con, $q2);

	while ($rows2 = mysqli_fetch_array($result2)) {
?>
	<option value="<?php echo $rows2['subject'] ?>"><?php echo $rows2['subject']; ?></option>
<?php
	}
?>
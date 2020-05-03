<?php 
	$con  = mysqli_connect('localhost', 'root', '', 'sllm');

	$yid = $_POST['datapost'];

	$q = " select * from subjects where y_id = '$yid' ";

	$result = mysqli_query($con, $q);

		while ($rows = mysqli_fetch_array($result)) {
?>
	<option value="<?php echo $rows['subjects'] ?>"><?php echo $rows['subjects']; ?></option>
	<?php
		}
	?>
<?php 

     session_start();

	$con  = mysqli_connect('localhost', 'root', '', 'sllm');

	$yid = $_POST['datapost'];

	$q = " SELECT * FROM assign_load INNER JOIN year ON assign_load.year = year.y_id AND assign_load.year = '$yid' AND assign_load.assigned_to = '".$_SESSION['username']."' ";

	$result = mysqli_query($con, $q);
?>
	<table class="table table-striped table-hover table-bordered text-center">
	<tr class="a">
     <th> ID </th>
     <!-- <th> Name </th> -->
     <th> Year </th>
     <th> Subject </th>
     <th> Type </th>
    </tr>

<?php
	$number = 1;
	while ($rows = mysqli_fetch_array($result)) {
?>
	<tr class="a">
          <!-- <td><?php echo $res['id']; ?></td> -->
          <td><?php echo $number; ?></td>
          <!-- <td><?php echo $rows['assigned_to']; ?></td> -->
          <td><?php echo $rows['year-sem']; ?></td>
          <td><?php echo $rows['subject']; ?></td>
          <td><?php echo $rows['type']; ?></td>
          <!-- <td><?php echo $res['assigned_date']; ?></td> -->
         </tr>
	<?php
		$number++;
		}
	?>
</table>
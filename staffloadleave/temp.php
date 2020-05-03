<?php

$con = mysqli_connect("localhost", "root", "", "image_upload");

if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
 $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $folder="uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO files(file,type,size) VALUES('$file','$file_type','$file_size')";
 $res = mysqli_query($con, $sql);
 if($res){
 	echo('File Uploaded..!!');
 }else{
 	echo('File was not uploaded..');
 } 
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="post" enctype="multipart/form-data">
		<input type="file" name="file" />
		<button type="submit" name="btn-upload">upload</button>
	</form>

	<table width="80%" border="1">
    	<tr>
    		<td>File Name</td>
    		<td>File Type</td>
    		<td>File Size(KB)</td>
    		<td>View</td>
    	</tr>
    	<?php
 			$sql="SELECT * FROM files";
 			$result_set=mysqli_query($con, $sql);
 			while($row=mysqli_fetch_array($result_set))
 				{
  		?>
        <tr>
        	<td><?php echo $row['file'] ?></td>
        	<td><?php echo $row['type'] ?></td>
        	<td><?php echo $row['size'] ?></td>
        	<td><a href="uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 			}
 		?>
	</table>

</body>
</html>
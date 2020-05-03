<?php
	if(isset($_POST['send'])){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$subject = $_POST['subject'];
		$comments = $_POST['comments'];
		$to = $_POST['to'];
		$hearder = "From : $name<$email>";
		$info = " Name : $name \n Email : $email \n Subject : $subject \n Message : $comments ";
		$mail = mail($to, $subject, $info, $hearder);
		if($mail){
			echo('Email Send to $to..!!');
		}else{
			echo('Mail not send..Try after sometime');
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Send Mail</title>
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
</head>
<body>
	<br><h1 style="max-width: 600px; margin: auto; display: block" class="card-header text-center">Send Mail</h1>
	<div class="card-body">
		<form method="POST" style="display: block; margin: auto; max-width: 500px">
			<input class="form-control" type="text" name="name" placeholder="Name"><br>
			<input class="form-control" type="email" name="email" placeholder="Email"><br>
			<input class="form-control" type="email" name="to" placeholder="To"><br>
			<input class="form-control" type="text" name="subject" placeholder="Subject"><br>
			<textarea class="form-control" cols="10" rows="8" name="comments" placeholder="Comments"></textarea><br>
			<button class="btn btn-warning" name="send" type="submit">Send Mail</button>
		</form>
	</div>
</body>
</html>
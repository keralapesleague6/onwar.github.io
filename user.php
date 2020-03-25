<?php 
include "config.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Create Registration form with MySQL and PHP</title>

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Bootstrap JS -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	

	<?php 
	$error_message = "";$success_message = "";

	// Register user
	if(isset($_POST['btnsignup'])){
		$name = trim($_POST['name']);
		$team = trim($_POST['team']);
		$pesId = trim($_POST['pesId']);
		$jersey = trim($_POST['jersey']);
		$mobile = trim($_POST['mobile']);
		$email = trim($_POST['email']);
		
		$isValid = true;

		// Check fields are empty or not
		if($name == '' || $team == '' || $pesId == '' || $jersey == '' || $mobile == ''|| $email == ''){
			$isValid = false;
			$error_message = "Please fill all fields.";
		}

				// Check if Email-ID is valid or not
		if ($isValid && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
		  	$isValid = false;
		  	$error_message = "Invalid Email-ID.";
		}

		if($isValid){

			// Check if Email-ID already exists
			$stmt = $con->prepare("SELECT * FROM users WHERE email = ?");
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$result = $stmt->get_result();
			$stmt->close();
			if($result->num_rows > 0){
				$isValid = false;
				$error_message = "Email-ID is already existed.";
			}
			
		}

		// Insert records
		if($isValid){
			$insertSQL = "INSERT INTO users(name,team,pesId,jersey,mobile,email ) values(?,?,?,?,?,?)";
			$stmt = $con->prepare($insertSQL);
			$stmt->bind_param("ssssss",$name,$team,$pesId,$jersey,$mobile,$email);
			$stmt->execute();
			$stmt->close();

			$success_message = "Account created successfully.";
		}
	}
	?>
	<style>
        body{
            background: url(backgroundLOGIN.jpg);
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            color: white;
        }
    </style>
</head>
<body>
	<div class='container'>
		<div class='row'>
			<div class='col-md-12'>
				<h2></h2>
			</div>

			<div class='col-md-6' >
					
				<form method='post' action=''>

					<h1>SignUp</h1>
					<?php 
					// Display Error message
					if(!empty($error_message)){
					?>
						<div class="alert alert-danger">
						  	<strong>Error!</strong> <?= $error_message ?>
						</div>

					<?php
					}
					?>

					<?php 
					// Display Success message
					if(!empty($success_message)){
					?>
						<div class="alert alert-success">
						  	<strong>Success!</strong> <?= $success_message ?>
						</div>

					<?php
					}
					?>
				
					<div class="form-group">
					    <label for="fname">Full Name:</label>
					    <input type="text" class="form-control" name="name" id="name" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="fname">Team Name:</label>
					    <input type="text" class="form-control" name="team" id="team" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="fname">PES ID:</label>
					    <input type="text" class="form-control" name="pesId" id="pesId" required="required" maxlength="80">
					</div><div class="form-group">
					    <label for="fname">Team Jersey:</label>
					    <input type="text" class="form-control" name="jersey" id="jersey" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="fname">Mobile Number:</label>
					    <input type="text" class="form-control" name="mobile" id="mobile" required="required" maxlength="80">
					</div>
					<div class="form-group">
					    <label for="email">Email :</label>
					    <input type="email" class="form-control" name="email" id="email" required="required" maxlength="80">
					</div>
									
					<button type="submit" name="btnsignup" class="btn btn-default">Submit</button>
				</form>
			</div>
			
			
		</div>
	</div>
</body>
</html>
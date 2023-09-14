<?php
require_once('config.php');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Registration</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
<div class = "php">
	<?php
	if(isset($_POST['form_submitted'])){
		$fname 		= $_POST['fname'];
		$mname 		= $_POST['mname'];
		$lname 		= $_POST['lname'];
		$address 	= $_POST['address'];
		$bday 		= $_POST['bday'];
		$gender 	= $_POST['gender'];
		$number 	= $_POST['number'];
		$email 		= $_POST['email'];
		$password 	= $_POST['password'];

	$sql = "INSERT INTO dbtest.tbuser (fname, mname, lname, address, bday, gender, number, email, password) VALUES (?,?,?,?,?,?,?,?,?)";
	$stminsert = $db->prepare($sql);
	$result = $stminsert->execute([$fname, $mname, $lname, $address, $bday, $gender, $number, $email, $password]);
	if($result){
		echo 'Successfully Saved!';
	}
	else{
		echo 'There were errors while saving the data.';
	}
}
	?>
</div>
	<div class="container">
		<div class="title"> Admin Registration Form</div>
		<form action="reg.php" method="POST">
			<div class="user-details">
				<div class="input-box">
					<span class="details">First Name</span>
					<input type="text" name ="fname" placeholder="Enter First Name" required>
				</div>
				<div class="input-box">
					<span class="details">Middle Name</span>
					<input type="text" name= "mname" placeholder="Enter Middle Name" required>
				</div>
				<div class="input-box">
					<span class="details">Last Name</span>
					<input type="text" name="lname" placeholder="Enter your Last Name" required>
				</div>
				<div class="input-box">
					<span class="details">Address</span>
					<input type="text" name= "address" placeholder="(House no., Barangay, Municipality and Province)" required>
				</div>
				<div class="input-box">
					<span class="details">Birthdate</span>
					<input type="date" name="bday" required>
				</div>
				 <div class="gender-details">
		          <input type="radio" name="gender" id="dot-1" value = "Male">
		          <input type="radio" name="gender" id="dot-2" value = "Female">
		          <input type="radio" name="gender" id="dot-3" value = "Prefer not to say">
          		  <span class="gender-title">Gender</span>
		          <div class="category">
		            <label for="dot-1">
		            <span class="dot one"></span>
		            <span class="gender">Male</span>
		          </label>
		          <label for="dot-2">
		            <span class="dot two"></span>
		            <span class="gender">Female</span>
		          </label>
		          <label for="dot-3">
		            <span class="dot three"></span>
		            <span class="gender">Prefer not to say</span>
				    </label>
				    </div>
				    </div>
					</div>
					<div class="user-details">
				<div class="input-box">
					<span class="details">Email</span>
					<input type="Email" name = "email" placeholder="Enter your Email" required>
				</div>
				<div class="input-box">
					<span class="details">Mobile Number</span>
					<input type="text" name = "number" placeholder="Enter your Mobile Number" required>
				</div>
				<div class="input-box">
					<span class="details">Password</span>
					<input type="Password" name= "password" placeholder="Enter your Password" required>
				</div>
				</div>
				<div class="button">
				<input type="hidden" name="form_submitted" value="1" />
					<input type="submit" value="Register">
				</div>
		</form>
	</div>
</body>
</html>
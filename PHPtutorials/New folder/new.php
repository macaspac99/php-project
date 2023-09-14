<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>HTML FORMS</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
</head>
<body>
	<div class = "php">
<?php if (isset($_POST['form_submitted'])): ?> 
	<h2>Thank You <?php echo $_POST['fname'] . ' ' . $_POST['lname'] ?> </h2>
        <p>You have been registered as
        <?php echo $_POST['email']; ?>
        </p>
        <p>First Name: <?php echo $_POST['fname']; ?></p>
        <p>Middle Name: <?php echo $_POST['mname']; ?></p>
        <p>Last Name: <?php echo $_POST['lname']; ?></p>
		<p>Address: <?php echo $_POST['address']; ?></p>
        <p>Email Address: <?php echo $_POST['email']; ?></p>
        <p>Mobile Number: <?php echo $_POST['number']; ?></p>
        <p>Gender: <?php echo $_POST['gender']; ?></p>
        <p>Date of Birth: <?php echo $_POST['bday']; ?></p>
 <p>Go <a href="new.php">back</a> to the form</p>
 <?php else: ?>
	</div>
	<div class="container">
		<div class="title"> Registration Form</div>
		<form action="new.php" method="POST">
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
					<input type="Password" placeholder="Enter your Password" required>
				</div>
				</div>
				<div class="button">
				<input type="hidden" name="form_submitted" value="1" />
					<input type="submit" value="Register">
				</div>
		</form>
		<?php endif; ?>
	</div>
</body>
</html>
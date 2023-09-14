
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
	
	?>
</div>
	<div class="container">
		<div class="title">Admin Registration Form</div>
		<form action="reg.php" method="POST">
			<div class="user-details">
				<div class="input-box">
					<span class="details">First Name</span>
					<input type="text" name ="fname" id = "fname" placeholder="Enter First Name" required>
				</div>
				<div class="input-box">
					<span class="details">Middle Name</span>
					<input type="text" name= "mname" id = "mname" placeholder="Enter Middle Name" required>
				</div>
				<div class="input-box">
					<span class="details">Last Name</span>
					<input type="text" name="lname" id = "lname" placeholder="Enter your Last Name" required>
				</div>
				<div class="input-box">
					<span class="details">Address</span>
					<input type="text" name= "address" id = "address" placeholder="(House no., Barangay, Municipality and Province)" required>
				</div>
				<div class="input-box">
					<span class="details">Birthdate</span>
					<input type="date" name="bday" id = "bday" required>
				</div>
					<div class="user-details">
				<div class="input-box">
					<span class="details">Email</span>
					<input type="Email" name = "email" id = "email" placeholder="Enter your Email" required>
				</div>
				<div class="input-box">
					<span class="details">Mobile Number</span>
					<input type="text" name = "number" id = "number" placeholder="Enter your Mobile Number" required>
				</div>
				<div class="input-box">
					<span class="details">Password</span>
					<input type="Password" name= "password" id = "password" placeholder="Enter your Password" required>
				</div>
				</div>
				<div class="button">
				<input type="hidden" name="form_submitted" value="1" />
					<input type="submit" id = "register" value="Register">
				</div>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
	<script type="text/javascript";>
		
		$(function(){
			$('#register').click(function(e){

				var valid = this.form.checkValidity();

				if(valid){

					var fname = $('#fname').val();
					var mname = $('#mname').val();
					var lname = $('#lname').val();
					var address = $('#address').val();
					var bday = $('#bday').val();
					var number = $('#number').val();
					var email = $('#email').val();
					var password = $('#password').val();

					e.preventDefault();
					
					$.ajax({
						type: 'POST',
						url: 'processadmin.php',
						data: {fname: fname, mname: mname, lname: lname, address: address, bday: bday, number: number, email: email, password: password},
						success: function(data){
							swal.fire({
							'title': 'Successful',
							'text' : data,
							'type' : 'success'
							})
							if($.trim(data) === "Successfully Saved!"){
								setTimeout(' window.location.href = "AdminLogin.php"', 2000);
							}
						},
						error: function(data){
							swal.fire({
							'title': 'Errors',
							'text' : 'There were errors while saving the data.',
							'type' : 'error'
							})
						}

					});
					
				}else{
					
				}
				
			});
			

		});
	</script>
</body>
</html>
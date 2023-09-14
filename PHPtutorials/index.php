<!DOCTYPE html>
<html>
<head>
<script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
	<meta charset="utf-8">
	<title>Legion</title>
	<link rel="stylesheet" type="text/css" href="CSS/indexstyle.css">
</head>
<body>
	<div class="main">
		<div class="navbar">
			<div class="icon">
				<h2 class="logo">LEGION</h2>
			</div>
			<div class="menu">
				<ul>
					<li><a href="#">HOME</a></li>
					<li><a href="#">ABOUT</a></li>
					<li><a href="#">SERVICE</a></li>
					<li><a href="#">DESIGN</a></li>
					<li><a href="#">CONTACT</a></li>
				</ul>
			</div>
			<div class="search"> 
				<input class="srch" type="search" name="search" placeholder="">
				<a href="#"><button class="btn">Search</button> </a>
			</div>
		</div>
			<div class="content">
				<h1>A different kind of company<br><span>A different kind of car</span></h1>
				<p class="par">Accelerating the Future.
					<br>For the few who know the difference.
					<br>For the love of the car.</p>
					
					<button class="cn"><a href="#">JOIN US</a></button>
					<form>
					<div class="form">
						<h2>Login Here</h2>
						<input type="email" name="email" id = "email" placeholder="Email/Username" >
						<input type="password" name="password" id= "password" placeholder="Password" >
						<button type= "button" name="button" id = "login" class="btnn">Login</a></button>

						<p class="link">Don't have any account<br>
						<a href="http://localhost/phptutorials/reg.php">Sign up here</a></p>
						<p class="liw">Log in with</p>

						<div class="icons">
							<a href="#"><ion-icon  name="logo-facebook"></ion-icon></a>
							<a href="#"><ion-icon  name="logo-instagram"></ion-icon></a>
							<a href="#"><ion-icon  name="logo-twitter"></ion-icon></a>
							<a href="#"><ion-icon  name="logo-google"></ion-icon></a>
							<a href="http://localhost/phptutorials/admin/AdminLogin.php"><ion-icon name="bug-outline"></ion-icon></a>
						</div>

					</div>
					</form>
			</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script type="text/javascript";></script>
		<script>
			$(function(){
				$('#login').click(function(e){

					var valid = this.form.checkValidity();
					if(valid){
						var email = $('#email').val();
						var password = $('#password').val();
					}
					e.preventDefault();

					$.ajax({
						type: 'POST',
						url: 'jslogin.php',
						data: {email: email, password: password},
						success: function(data){
							alert(data);
							if($.trim(data) === "Login Sucess, redirecting..."){
								setTimeout(' window.location.href = "hello.php"', 2000);
							}

						},
						error: function(data){
							alert('error');
						}



					})
				})
			})


	</script>
</body>
</html>
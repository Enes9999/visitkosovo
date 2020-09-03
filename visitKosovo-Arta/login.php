<!DOCTYPE html>
<html>
<head>
	<title>
		Log in and Register
	</title>
	<link rel="icon" type="image//png" href="\Web-Project\kosovo.png">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Mansalva&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="\Web-Project\login.css">
</head>
<body>
	<div class="container-1">
		
		<div class="nav-bar">
				<li> <a href="\Web-Project\home.php"> Home </a></li>	
				<li> <a href="\Web-Project\things.php"> Places to visit </a></li>	
				<li> <a href="\Web-Project\AboutUs.php"> About Us </a></li>
				<li> <a href="\Web-Project\ContactUs.php"> Contact </a></li>
				<li> <a href="\Web-Project\login.php"> Log In </a></li>
			</ul>
		</div>
	</div>
        <h2 style="font-size: 20px; font-family: 'DM Sans',sans-serif;">Sign up or log in to receive the latest news </h2>
		<div class="container" id="container">
			<div class="form-container sign-up-container">
				<form action="registration.php" method="POST">
					<h1>Create Account</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<span>or use your email for registration</span>
					<input type="email"  name="Email" placeholder="Email" />
					<input type="password" name="Password" placeholder="Password" />
					<button>Sign Up</button>
				</form>
			</div>
			<div class="form-container sign-in-container">
				<form action="validation.php" method="POST">
					<h1>Sign in</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<span>or use your account</span>
					<input type="email"  name="email" placeholder="Email" />
					<input type="password" name="password" placeholder="Password" />
					<a href="#">Forgot your password?</a>
					<button>Sign In</button>
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1 style="font-size: 40px; line-height: 40px;">Welcome Back!</h1>
						<p>To keep connected with us please login with your personal info</p>
						<button class="ghost" id="signIn">Sign In</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1 style="font-size: 40px; line-height: 40px;">Hello, Friend!</h1>
						<p>Enter your personal details and start journey with us</p>
						<button class="ghost" id="signUp">Sign Up</button>
						<script src="\Web-Project\style.js"></script>
					</div>
				</div>
			</div>
		</div>

		<footer>
			<p id="footer">
				© All rights reserved. May, 2020
			</p>
		</footer>
    </body>
</html>

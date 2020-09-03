<?php require_once "./header.php"; ?>


        <h2 style="font-size: 20px; font-family: 'DM Sans',sans-serif;">Sign up or log in to receive the latest news </h2>
		<div class="container" id="container">

		<div class="form-container sign-up-container">
				<form action="registration.php" method="post">
					<h1>Create Account</h1>
					<div class="social-container">
						<a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
						<a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
						<a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
					</div>
					<span>or use your email for registration</span>
					<input type="text" name="name" placeholder="Name" />
					<input type="email" name="email" placeholder="Email" />
					<input type="password" name="password" placeholder="Password" />
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
					<input type="text" name="email" placeholder="email" />
					<input type="password"  name="password" placeholder="password" />
					<a href="#">Forgot your password?</a>
					<input type="submit" id="btn" value="Login" />
				</form>
			</div>
			<div class="overlay-container">
				<div class="overlay">
					<div class="overlay-panel overlay-left">
						<h1 style="font-size: 40px;">Welcome Back!</h1>
						<p>To keep connected with us please login with your personal info</p>
						<button class="ghost" id="signIn">Sign In</button>
					</div>
					<div class="overlay-panel overlay-right">
						<h1 style="font-size: 40px;">Hello, Friend!</h1>
						<p>Enter your personal details and start journey with us</p>
						<button class="ghost" id="signUp">Sign Up</button>
						<script src="/js/login.js"></script>
					</div>
				</div>
			</div>
		</div>


		<?php require_once "./footer.php"; ?>

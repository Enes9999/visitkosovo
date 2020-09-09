<?php 

$error = false;
if(isset($_REQUEST['action'])) {
	switch($_REQUEST['action']) {
		case 'login':
			require_once "./lib/Auth.php"; 
			$valid = Auth::login($_POST);
			if($valid) {
				header('Location: index.php');
			} else {
				$error = 'Login failed.';
			}
		break;
		case 'signup':
			require_once "./lib/Registration.php"; 
			$valid = Registration::signup($_POST);
			if(!$valid) {
				$error = 'Registration failed.';
			}
		break;
	}		 
}

$page = 'login';
require_once "./header.php"; 

?>

<?php if($error): ?>
<div style="background: #eee; color: #990000; padding: 10px;">
    <?php echo $error; ?>
</div>
<?php endif; ?>

<h2>Sign up or log in to receive the latest news</h2>
<div class="container" id="container">
    <div class="form-container sign-up-container">
        <form action="login.php?action=signup" method="post" onsubmit="return validate(event)" name="forma">
            <h1>Create Account</h1>
            <div class="social-container">
                <a href="#" class="social"></a>
                <a href="#" class="social"></a>
                <a href="#" class="social"></a>
            </div>
            <span>or use your email for registration</span>
            <input type="text" name="name" placeholder="Name" />
            <div class="error" id="e1"></div>
            <input type="email" name="email" placeholder="Email" />
            <div class="error" id="e2"></div>
            <input type="password" name="password" placeholder="Password" />
            <div class="error" id="e3"></div>
            <input type="submit" id="login-btn" value="Sing up" name="submit" />
        </form>

       

    </div>
    <div class="form-container sign-in-container">
        <form action="login.php?action=login" method="POST" name="forma2" onsubmit="return validate1(event)">
            <h1>Sign in</h1>
            <div class="social-container">
                <a href="#" class="social"></a>
                <a href="#" class="social"></a>
                <a href="#" class="social"></a>
            </div>
            <span>or use your account</span>
            <input type="email" name="email" placeholder="email" />
            <div class="error" id="e4"></div>
            <input type="password" name="password" placeholder="password" />
            <div class="error" id="e5"></div>
            <a href="#">Forgot your password?</a>
            <input type="submit" id="signup-btn" value="Login" name="submit" />
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
            </div>
        </div>
    </div>
</div>


<?php require_once "./footer.php"; ?>
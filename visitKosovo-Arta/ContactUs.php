<!DOCTYPE html>
<html>
<head>
	<title>
		Contact us
	</title>
	<link rel="icon" type="image//png" href="\Web-Project\kosovo.png">
	<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&family=Mansalva&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="\Web-Project\ContactUs.css">
	

</head>
<body>
	<div class="container-1">
		<div class="nav-bar" style="font-family: 'DM Sans', sans-serif;">
				<li> <a href="\Web-Project\home.php"> Home </a></li>	
				<li> <a href="\Web-Project\things.php"> Places to visit </a></li>	
				<li> <a href="\Web-Project\AboutUs.php"> About Us </a></li>
				<li> <a href="\Web-Project\ContactUs.php"> Contact </a></li>
				<li> <a href="\Web-Project\login.php"> Log In </a></li>
			</ul>
		</div>
	</div>
	<div style="margin-top: -150px; margin-bottom: -50px; background:url( https://ceed-global.org/wp-content/uploads/2020/03/Kosovo.png); height: 500px; max-width: 100%;">
		<div>
			<div class="text-wrapper" style=" flex-wrap: wrap;  margin-top: 200px;  margin-bottom: -250px; width: 100%; height: 75vh; padding-top: 40px;">
				<h1 style="color: white; line-height: 50px; margin-bottom: 100px;">Have any questions for us? </h1>
				<p style="color: white; margin: 0 auto;">Write them down below.</p>
			</div>
		</div>
	</div>
	<div class="contact-section">
      	<div class="inner-width" style="margin-top: -200px;">
        	<h1>Get in touch with us</h1>
        	<form  action="contactforma.php" method="POST">
       		 <input type="text" class="name" placeholder="Your Name" name="userName">
       		 <input type="email" class="email" placeholder="Your Email" name="userEmail">
        	<textarea rows="1" placeholder="Message" class="message" name="content"></textarea>

        <button name="submit" value="send">SUBMIT</button>
   </form>
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
<?php 
$page = 'contact';
require_once "./header.php";

$error = false;
if(isset($_REQUEST['action'])) {
	switch($_REQUEST['action']) {
		case 'contact':
			require_once "./lib/Contact.php"; 
			$valid = Contact::send($_POST);
			if(!$valid) {
				$error = 'Contact failed.';
			}
		break;
	}		 
}
?>

<div
    style="margin-top: -150px; margin-bottom: -50px; background:url( https://ceed-global.org/wp-content/uploads/2020/03/Kosovo.png); height: 500px; max-width: 100%;">
    <div>
        <div class="text-wrapper"
            style=" flex-wrap: wrap;  margin-top: 200px;  margin-bottom: -250px; width: 100%; height: 75vh; padding-top: 40px;">
            <h1 style="color: white; line-height: 50px; margin-bottom: 100px;">Have any questions for us? </h1>
            <p style="color: white; margin: 0 auto;">Write them down below.</p>
        </div>
    </div>
</div>
<div class="contact-section">
    <div class="inner-width" style="margin-top: -200px;">
        <h1>Get in touch with us</h1>
        <form action="contact.php?action=contact" method="post">
            <input type="text" class="name" placeholder="Your Name" name="name">
            <input type="email" class="email" placeholder="Your Email" name="email">
            <textarea rows="1" placeholder="Message" class="message" name="message"></textarea>

            <button name="submit" value="send">SUBMIT</button>
        </form>
    </div>
</div>

<?php require_once "./footer.php"; ?>
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
    <div class="inner-width" >
        <h1 style="margin-top: 60px;">Get in touch with us</h1>
       <form name="forma" method="POST" action="lib\Contact.php" onsubmit="return validate(event)">
            <div class="fields">
                <input type="text" placeholder="Name" class="field" id="name" name="emri">
                <div class="error" id="e1"></div>
                <input type="text" placeholder="Email" class="field" id="email" name="email">
                <div class="error" id="e2"></div>
                <input type="tel" placeholder="Phone Number" class="field" id="number" name="numri">
                <input type="text" placeholder="Message" class="field" id="msg" name="msg">
            </div>
            <input type="submit" id="send" value="Send ►" name="submit">
        </form>

    </div>
</div>

<?php require_once "./footer.php"; ?>
<?php 
$page = 'contact';
require_once "./header.php"; ?>


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
    <div class="inner-width">
        <h1 style="margin-top: 60px;">Get in touch with us</h1>

        <form name="forma" method="POST" action="contact.php" onsubmit="return validate(event)">
            <div class="fields">

                <input type="text" placeholder="Name" class="name" id="name" name="emri">
                
                <input type="text" placeholder="Your Email" class="email" id="email" name="email">
                
                <input type="tel" placeholder="Phone Number" class="number" id="number" name="numri">
                

                <textarea type="text" rows="1" placeholder="Message" class="message" id="msg" name="msg"></textarea>
                
            </div>

            <button type="submit" id="send" value="Send" name="submit">SUBMIT</button>
            
        </form>

            
            
        
    </div>
</div>

<?php require_once "./footer.php"; ?>
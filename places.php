<?php 
$page = 'places';
require_once "./header.php";
require_once "./lib/Dashboard.php";

$error = false;
if(isset($_REQUEST['action'])) {
	switch($_REQUEST['action']) {
		case 'places':
			require_once "./lib/Places.php"; 
			$valid = Places::create($_POST);
			if(!$valid) {
				$error = 'Places failed.';
			}
		break;
	}		 
}

$places = Dashboard::getPlaces();

?>

<style type="text/css">
* {
    font-family: "DM Sans", sans-serif;
}

.contact-section {
    text-align: center;

}

.inner-width {
    max-width: 600px;
    margin: auto;
    padding: 0 20px;

}

.contact-section h1 {
    font-size: 20px;
    color: #000;
    margin-bottom: 40px;
    text-transform: uppercase;
    letter-spacing: 4px;
    font-weight: 700;
}

.name,
.description,
.photo,
.your_name {
    background: 0 0;
    border: none;
    outline: 0;
    border-bottom: 1px solid;
    color: #000;
    font-size: 16px;
    margin-bottom: 40px;
}

.name {
    float: left;
    width: 100%;

}

.description {
    float: left;
    width: 270px;
    color: #000;

}

.photo {
    min-width: 100%;
    max-width: 100%;
}

.your_name {
    float: left;
    width: 100%;
}

.contact-section button {
    background: 0 0;
    color: #70a1ff;
    border: 1px solid #70a1ff;
    padding: 12px 40px;
    border-radius: 8px;
    text-transform: uppercase;
    font-size: 16px;
    transition: 0.4s linear;
    cursor: pointer;
}

.contact-section button:hover {
    background: #70a1ff;
    color: #fff;
}

@media screen and (max-width: 600px) {

    .email,
    .name {
        width: 100%;
    }
}
</style>

<h1
    style="font-family: 'Mansalva', cursive; text-align: center; font-size: 40px; margin-top: 50px; margin-bottom: 50px; line-height: 40px;">
    There are many wonderful places waiting for you in Kosovo...
</h1>


<!-- posti 1 -->

<div>
    <?php foreach($places as $place): ?>
    <div class="container">
        <img src="<?php echo $place['photo']; ?>" alt="Avatar" class="image">
        <div class="overlay">
            <div class="text"><?php echo $place['name']; ?></div>
        </div>
    </div>
    <p id="paragrafi"><?php echo $place['description']; ?></p>

    <?php endforeach; ?>
</div>

<!-- posti 1 -->

<h1
    style="font-family: 'Mansalva', cursive; text-align: center; font-size: 40px; margin-top: 50px; margin-bottom: 50px; line-height: 40px;">
    Have a look at some of the best things this country has to offer
</h1>
<iframe width="560" height="315" src="https://www.youtube.com/embed/S3D3tGyvERY" frameborder="0"
    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
    style="width: 100%; margin-bottom: 30px; height:500px;text-align: right;" allowfullscreen></iframe>



<div class="contact-section" style="margin-bottom: 100px;">
    <div class="inner-width">
        <h1 style="margin-top: 60px;">Have any recommendations? Let us know.</h1>
        <form name="forma" method="POST" action="places.php?action=places" onsubmit="return validate(event)">
            <div class="fields">
                <input type="text" placeholder="Name of the place" class="name" id="name" name="name">

                <input type="photo" placeholder="Photo" class="photo" id="photo" name="photo">
                <input type="text" placeholder="Your Name" class="your_name" id="your_name" name="your_name">
                <textarea type="text" rows="3" placeholder="Description" class="description" id="description"
                    name="description"></textarea>
            </div>

            <button type="submit" id="send" value="Send" name="submit">SUBMIT</button>
        </form>
    </div>
</div>


<?php require_once "./footer.php"; ?>
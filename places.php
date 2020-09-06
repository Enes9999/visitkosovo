<?php 
$page = 'places';
require_once "./header.php";

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

?>

<style type="text/css">
    *{
        font-family: "DM Sans", sans-serif;
 }.contact-section {
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
}.your_name{
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
<div class="container">
    <img src="https://i.pinimg.com/originals/24/3d/c5/243dc5eae8f2228952cf47071981548c.jpg" alt="Avatar" class="image">
    <div class="overlay">
        <div class="text">Brezovica</div>
    </div>
</div>
<p id="paragrafi"> Brezovica is a popular ski resort in the south of Kosovo, close to the border with North Macedonia.
    The place is situated in the beautiful Sharr Mountains.
    <br> The Brezovica area is a 1,5 hour drive from the Pristina international airport, and close to the airport of
    neighboring country North Macedonia. The closest town is Shtërpcë.
</p>


<div class="container">
    <img src="https://learningtobreatheabroad.com/wp-content/uploads/2018/07/prizren-fullwidth.jpg" alt="Avatar"
        class="image">
    <div class="overlay">
        <div class="text">Prizren</div>
    </div>
</div>
<p id="paragrafi"> With its rich cultural heritage, café culture and mountain backdrop, Prizren is one of Kosovo’s best
    kept secret.
    <br>Prizren has been named the prettiest city in Kosovo and for good reason. <br> The oldest preserved old town in
    Kosovo, this quaint town with its cobbled streets and Ottoman-style architecture has been listed as a Unesco World
    Heritage site and is simply charming. Crisscrossed by medieval stone bridges, the Bistrica River wends it’s way down
    the Sharr mountains and through the centre of Prizren’s old town, where bustling restaurants and cafe’s line its
    banks.
</p>

<div class="container">
    <img src="http://www.panacomp.net/wp-content/uploads/2015/10/feataured-532484_2703094063501962084_n.jpg"
        alt="Avatar" class="image">
    <div class="overlay">
        <div class="text">Rugova Mountains</div>
    </div>
</div>
<p id="paragrafi"> The scenic Rugova Mountains near town of Peja is the steep canyon of over 300 meters high sides in
    Kosovo, that would leave every visitor speechless.
    <br>The Rugova Canyon was declared a Protected Nature Monument in 1988. The city of Peja is located at the entrance
    of the canyon. Rugova Canyon is one of the most popular tourist attractions in Kosovo, if not the first. Many say it
    is amazing canyon in the heart of Europe and a must see canyon.
</p>

<div class="container">
    <img src="https://www.gazetadita.al/wp-content/uploads/2020/01/shpella-e-gadimes-905x395.jpg" alt="Avatar"
        class="image">
    <div class="overlay">
        <div class="text">Gadime's Marble Cave</div>
    </div>
</div>
<p id="paragrafi"> Discovered in 1969, this impressive marble cave is full of quite extraordinary crystallised
    stalagmites and stalactites that have formed over millions of years. <br> The cave is just over 1.2km deep, and some
    440m of it can be visited on a guided tour. Bring sensible shoes and a sweater as it's decidedly cool once you get
    inside. The cave is 20km southeast of Pristina: take any bus to Ferizaj and ask the driver to let you off for
    Gadimë.
    <br> The compulsory guided tours of the cave last about 30 minutes.
</p>

<div class="container">
    <img src="https://img.theculturetrip.com/wp-content/uploads/2015/11/Kosovo-%C2%A9-OPIS-Zagreb-Shutterstock.com_.jpg"
        alt="Avatar" class="image">
    <div class="overlay">
        <div class="text">Prishtina</div>
    </div>
</div>
<p id="paragrafi"> Accessible entirely on foot, Prishtina is the capital city of Kosovo, a city for slow travel and
    taking it easy – sipping the cafes’ excellent "macchiato" or local wines and beers.
    <br> Prishtina is a fast-changing city that feels full of optimism and potential, even if its traffic-clogged
    streets and mismatched architectural styles don't make it an obviously attractive place. While the city does have a
    couple of worthwhile museums and galleries, and serves as a base for interesting nearby sights, for most visitors
    Prishtina is a place where the atmosphere is as much an attraction as any classic tourist sight.
</p>

<div class="container">
    <img src="https://live.staticflickr.com/3181/2951319235_c764e762a7_b.jpg" alt="Avatar" class="image">
    <div class="overlay">
        <div class="text">Mirusha Waterfalls</div>
    </div>
</div>
<p id="paragrafi"> Hidden away in the nature, you will find the beautiful Mirusha waterfalls. A highlight in Kosovo
    tourism, and hardly to be found elsewhere at the Balkans.

    <br>For those who want to get away for a couple of hours, the waterfalls (Albanian: Ujvara e Mirushes) are an
    absolute must see.
</p>

<div class="container">
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/72/Parku_Nacional_i_G%C3%ABrmis%C3%AB_Prishtin%C3%AB.jpg/800px-Parku_Nacional_i_G%C3%ABrmis%C3%AB_Prishtin%C3%AB.jpg"
        alt="Avatar" class="image">
    <div class="overlay">
        <div class="text">Germia National Park</div>
    </div>
</div>
<p id="paragrafi"> Germia Park is a large beautiful park located in the east part of the city of Prishtina.
    <br>Its endless forests, well maintained paths, fresh air, and the spitting distance from the city make it an
    attractive place to spend a nice quiet afternoon or weekend.
</p>

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
                 <textarea type="text" rows="3" placeholder="Description" class="description" id="description" name="description"></textarea>
            </div>

            <button type="submit" id="send" value="Send" name="submit">SUBMIT</button>
        </form>
    </div>
</div >


<?php require_once "./footer.php"; ?>
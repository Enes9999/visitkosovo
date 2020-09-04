<?php 
$page = 'home';
require_once "./header.php"; 
?>

<style type="text/css">
.harta {
    display: flex;
}

#hartagoogle {
    float: left;
    width: 700px;
}

#paragrafi {
    margin-left: 20px;
}
</style>

<!-- slideri -->
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="https://wallpapercave.com/wp/wp2020983.jpg">
      </div>
      <div class="swiper-slide">
        <img src="images\kosovolandscape.png">
      </div>
      <div class="swiper-slide">
        <img src="images\kosovo10.jpg">
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination" style="padding-top:2000px;"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
  </div>

<!-- sideri -->
<h1 style="text-align: center; font-family: 'Mansalva',cursive; font-weight: 300; font-size: 50px; margin-top: 60px; ">
    Welcome to Kosovo</h1>
<h2 style="text-align: center; font-family: 'DM Sans', sans-serif; font-size: 20px;"> Useful information to visit
    Kosovo </h2>
<div class="container-2">
    <div class="box">
        <div id="box-1" class="boxes">
            <img src="images/travel.png" class="icons" />
            <h3> First trip to Kosovo </h3>
            <p> Everything you need to know </p>
        </div>
        <div id="box-2" class="boxes">
            <img src="images/eating.png" class="icons">
            <h3> Kosovo and food </h3>
            <p> It's all about love </p>
        </div>
        <div id="box-3" class="boxes">
            <img src="images/interface.png" class="icons">
            <h3> Kosovo from South to North </h3>
            <p> A paradise waiting for you </p>
        </div>
    </div>
</div>



<!--<div style="position: relative; width: 100%; margin: 0 auto;">

		<img src="images/https://upload.wikimedia.org/wikipedia/commons/9/91/Panorama_of_Brezovica%2C_%C5%A0trpce%2C_Kosovo.jpg" style="width: 100%; height: 650px;">

			<div style="position: absolute; 
						bottom: 0; 
						background: rgb(0, 143, 24); 
						background: rgba(0, 0, 0, 0.7); 
						color: #FFFFFF; 
						width: 100%; 
						padding: 20px;
						background:url(https://blog.hslu.ch/majorobm/files/2019/03/Pamja-Bjelluhes-nga-kurrzi-i-liqenatit.jpg);
						">

				<p style="font-size: 50px; text-align: center; color: white; font-weight: bolder;">Europe's youngest country<p>
   				<p style="text-align: center; width: 1000px; margin: 0 auto; color: silver;">Europe's newest country, Kosovo is a fascinating land at the heart of the Balkans rewarding visitors with welcoming smiles, charming mountain towns, incredible hiking opportunities and 13th-century domed monasteries brushed in medieval art – and that's just for starters. </p>
			</div>
	</div>-->





<!--<div class="part-3">
		<div style="position: relative; width: auto;height: 50%; margin: 0 auto; margin-bottom: 20px;">

			<img src="images/kosovo10.jpg" style="width: 90%; height:50%">
	
				<div style="position: absolute; 
							bottom: 0; 
							background: rgb(0, 143, 24); 
							background: rgba(0, 0, 0, 0.7); 
							color: #FFFFFF; 
							width: 90%;">
	
					<p style="font-size: 50px; text-align: center; color: white; font-weight: bolder; line-height: normal; font-size: 50px; font-family: 'DM Sans', sans-serif; margin-bottom: 0; ">Where is Kosovo on the map?<p>
					   <p style="text-align: center; width: auto; margin: 0 auto; color: silver; line-height: normal; font-size: 30px; font-family: 'DM Sans', sans-serif;">Kosovo is located on the Southeastern part of Europe sharing borders with Albania, Macedonia, Montenegro and Serbia.</p>
				</div>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1504722.053089399!2d19.780976728476453!3d42.55719838546098!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13537af354bf7df1%3A0xbfffeedfabc31791!2sKosovo!5e0!3m2!1sen!2s!4v1589859895128!5m2!1sen!2s" id="map" style="width: 100%; height:515px; " frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	</div>-->

<div
    style="margin-top: -150px; font-family: 'DM Sans', sans-serif; background:url( https://i.pinimg.com/originals/bb/3a/38/bb3a38ba9dbc79f95f553094f1e63033.jpg); height: 855px; max-width: 100%;">
    <div>
        <div class="text-wrapper"
            style=" flex-wrap: wrap;  margin-top: 200px;  margin-bottom: -250px; width: 100%; height: 75vh; padding-top: 40px;">
            <h1
                style="color: white; line-height: 100px; margin-bottom: 100px; font-size: 100px; text-align: center; margin-top: 100px; ">
                Europe's youngest country </h1>
            <p
                style="color: white; margin: 0 auto; font-size: 30px; line-height: 40px; text-align: center; font-weight: normal;">
                Kosovo is a fascinating land at the heart of the Balkans rewarding visitors with welcoming smiles,
                charming mountain towns, incredible hiking opportunities and 13th-century domed monasteries brushed
                in medieval art – and that's just for starters.</p>
        </div>
    </div>
</div>
<h1
    style="text-align: center; font-family: 'Mansalva',cursive; font-weight: 300; font-size: 50px; margin-top: 60px; line-height: 50px; margin-bottom: 100px;">
    Where is Kosovo located on the map?</h1>
<div class="harta" style="max-height: 800px;">


    <div class="flexi" id="flexi2">
        <img src="images/kosovomap.jpg" height="500" width="450"
            style="float: left; margin-right: 30px; margin-left: 30px;">
        <p style="margin-right: 0px;">Kosovo is bordered by Serbia to the north and east, North Macedonia to the
            south, Albania to the west, and Montenegro to the northwest. Kosovo, about the same size as Jamaica or
            Lebanon, is the smallest country in the Balkans.</p>

    </div>

</div>

<?php require_once "./footer.php"; ?>
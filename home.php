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
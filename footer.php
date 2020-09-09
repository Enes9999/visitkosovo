<!-- slideri -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script>
var swiper = new Swiper('.swiper-container', {
    pagination: {
        el: '.swiper-pagination',
        type: 'fraction',
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
});
</script>
<!-- slideri -->


<script type="text/javascript" src="js/site.js"> </script>
<script type="text/javascript" src="js/login.js"> </script>

<!-- navbar -->
<script>
function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

<!-- navbar -->




<footer>
    <p id="footer" style="font-size: 14px;">
        © All rights reserved. May, 2020
    </p>

</footer>
</body>

</html>
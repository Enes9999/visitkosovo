<?php 
require_once "./lib/Auth.php";
?>
<style>
body {
    margin: 0;
    font-family: "DM Sans", sans-serif;
    font-weight:normal;
}

.topnav {
    overflow: hidden;
    background-color: transparent;
    
}

.topnav a {
    float: right;
    display: block;
    color: black;
    text-align: center;
    padding: 14px ;
    text-decoration: none;
    font-size: 17px;
}


.topnav a.active {
    background-color: #4CAF50;
    color: white;
}

.topnav .icon {
    display: none;
}

@media screen and (max-width: 1000px) {
    .topnav a:not(:first-child) {
        display: none;
    }

    .topnav a.icon {
        float: right;
        display: block;
    }
}

@media screen and (max-width: 1000px) {
    .topnav.responsive {
        position: relative;
    }

    .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
    }

    .topnav.responsive a {
        float: none;
        display: block;
        text-align: left;
    }
}
</style>


<div class="topnav" id="myTopnav">
    <a href="index.php" style="float: left;"><img src="images\kosovo.png" alt="" style="height: 40px; width: 40px; margin-bottom:0px; margin-top:0px;"></a>


    <?php if(Auth::isLoggedIn()): ?>
    <a href="logout.php" style="margin-bottom:0px; margin-top:10px;"> Log Out </a>
    <?php else: ?>
    <a href="login.php" style="margin-bottom:0px; margin-top:10px;"> Log In </a>
    <?php endif; ?>


    <?php if(Auth::isAdmin()): ?>
    <a href="dashboard.php" style="color: #990000; background: yellow; margin-bottom:0px; margin-top:10px;""> Dashboard </a>
    <?php endif; ?>

    <a href="contact.php" style="margin-bottom:0px; margin-top:10px;"> Contact </a>
    <a href="aboutus.php" style="margin-bottom:0px; margin-top:10px;"> About Us </a>
    <a href="places.php" style="margin-bottom:0px; margin-top:10px;"> Places to visit </a>
    <a href="index.php"style="height: 40px; width: 40px; margin-bottom:0px; margin-top:10px;"> Home </a>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
        <i class="fa fa-bars"></i>
    </a>
</div>


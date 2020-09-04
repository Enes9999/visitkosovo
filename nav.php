<?php 
require_once "./lib/Auth.php";
?>


<div class="container-1">
    <div class="nav-bar">
        <ul>
            <li> <a href="index.php"> Home </a></li>
            <li> <a href="places.php"> Places to visit </a></li>
            <li> <a href="aboutus.php"> About Us </a></li>
            <li> <a href="contact.php"> Contact </a></li>

            <?php if(Auth::isAdmin()): ?>
            <li> <a href="dashboard.php" style="color: #990000; background: yellow; padding: 5px;"> Dashboard </a></li>
            <?php endif; ?>

            <?php if(Auth::isLoggedIn()): ?>
            <li> <a href="logout.php"> Log Out </a></li>
            <?php else: ?>
            <li> <a href="login.php"> Log In </a></li>
            <?php endif; ?>
        </ul>
    </div>
</div>
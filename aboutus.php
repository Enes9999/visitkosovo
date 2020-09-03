<?php 
$page = 'aboutus';
require_once "./header.php"; 
?>

<style type="text/css">
.fa {
    padding: 15px 15px;
    font-size: 40px;
    width: 45px;
    text-align: center;
    text-decoration: none;
    margin: 8px 2px;
    border-radius: 100%;
    height: 45px;
    margin-left: 20px;
}

.fa-facebook {
    background: lightblue;
    color: white;
}

.fa-linkedin {
    background-color: #007bb5;
    color: white;
}

.fa-instagram {
    background-color: #125688;
    color: lightpink;
}

.fa-facebook:hover {
    transform: scale(1.1);
}

.fa-linkedin:hover {
    transform: scale(1.1);
}

.fa-instagram:hover {
    transform: scale(1.1);
}
</style>


<div id="about2" class="about">
    <h2 style="text-align: center; margin-bottom: 150px; ">Who are we? </h2>
    <p id="paragrafi">This website was developed by Arta Mjeku, Enes Pireva and Shuajb Qerimi.
        Mjeku, Pireva and Qerimi are currently second-year Computer Science and Engineering students at UBT in
        Prishtina, Kosovo.
        Through this website, they aspire to help and guide those who are interested in travelling to Kosovo by
        offering them assistance in every aspect of the trip.</p>
</div>

<h1 style="margin:40px; font-family: 'DM Sans',sans-serif;">TEAM</h1>
<div class="flexboxi" style="display: flex;  font-family: 'DM Sans',sans-serif; flex-direction: column; margin: 40px;">
    <div class="flexi" id="flexi3" style="margin-bottom: 100px;">
        <img src="images/enesi.jpg" height="350" width="230" style=" float: left; margin-right: 30px;">
        <h1 style="line-height: 50px;">Enes Pireva</h1>
        <p style=>Student Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
            the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <div class="ikonat">
            <a href="https://www.facebook.com/enes.pireva" class="fa fa-facebook"></a>

            <a href="https://www.instagram.com/enes_pireva/" class="fa fa-instagram"></a>
        </div>
    </div>

    <div class="flexi" id="flexi2" style="margin-bottom: 100px;">
        <img src="images/arta.jpg" height="350" width="230" style="float: left; margin-right: 30px;">
        <h1 style="line-height: 50px;">Arta Mjeku</h1>
        <p style=>Student Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
            the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        <div class="ikonat">
            <a href="https://www.facebook.com/arta.mjeku.5" class="fa fa-facebook"></a>
            <a href="https://www.linkedin.com/in/arta-mjeku-a930a2185/" class="fa fa-linkedin"></a>
            <a href="https://www.instagram.com/arta_mjeku/" class="fa fa-instagram"></a>
        </div>
    </div>


    <div class="flexi" id="flexi2" style="margin-bottom: 100px;">
        <img src="images/shuajbi.jpg" height="350" width="230" style="float: left; margin-right: 30px;">
        <h1 style="line-height: 50px;">Shuajb Qerimi</h1>
        <p style=>Student Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
            type and scrambled it to make a type specimen book. It has survived not only five centuries, but also
            the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
            with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
            publishing software like Aldus PageMaker including versions of Lorem Ipsum.
        </p>
        <div class="ikonat">
            <a href="https://www.facebook.com/shuaajb" class="fa fa-facebook"></a>
            <a href="https://www.linkedin.com/in/shuajb-qerimi-5a1477120/" class="fa fa-linkedin"></a>
            <a href="https://www.instagram.com/shuajbxq/" class="fa fa-instagram"></a>
        </div>
    </div>
</div>
</div>

<?php require_once "./footer.php"; ?>
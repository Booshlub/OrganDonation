<?php
require_once('includes/editText.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
<title>Kids Home CMS</title>
</head>
<body>
<section>
    <div id="topBar">
        <div id="switchSite">
            <a href="frenchSide.html" class="languageLink">Français</a>
            <img src="images/drapeauQuebec.png" alt="Quebec flag" class="languageFlag">
        </div>
        <nav id="kidsNav">
            <img src="images/home.png" alt="Home" id="homePic"/>
            <a id="homeLink" href="#">Home</a>
            <img src="images/logo.svg" alt="Be a Donor logo" id="logoKids"/>
            <img src="images/video.png" alt="Videos" id="videoPic" />
            <a id="videoLink" href="kidsVideo.html">Videos</a>
        </nav>
    </div>
</section>

<div id="kidHomeBear">
	<img src="images/bearMobile.png" alt="Kids Teddy Bear Picture" id="teddyPicture"/>
</div>

<div id="kidsHomeContent">
<ul id="kidsList">
<li><a id="heart">Heart</a></li>
<li><a id="lungs">Lungs</a></li>
<li><a id="liver">Liver</a></li>
<li><a id="kidneys">Kidneys</a></li>
<li><a id="intestine">Intestine</a></li>
</ul>

<ul id="kidsListCMS">
<li><a href="editTextPage.php?organ=heart" id="heart">Edit Heart</a></li>
<li><a href="editTextPage.php?organ=lungs" id="lungs">EditLungs</a></li>
<li><a href="editTextPage.php?organ=liver" id="liver">Edit Liver</a></li>
<li><a href="editTextPage.php?organ=kidney" id="kidneys">Edit Kidneys</a></li>
<li><a href="editTextPage.php?organ=intestine" id="intestine">Edit Intestine</a></li>
</ul>

<p id="infoArea">The life-center of the body, the heart is the hardest working muscle in our bodies, responsible for pumping blood throughout the body. Just like any other muscle, it can be subject to fatigue, especially if it has been weakened by a number of cardiovascular diseases</p>
<form action="editText.php" method="post" enctype="multipart/form-data">
<label>Edit Text here</label><br>
</form>

<p>Follow us: </p>
<img id="facebookIcon" src="images/socialFacebookIcon.png" />
<img id="twitterIcon" src="images/socialTwitterIcon.png" />
<img id="instagramIcon" src="images/socialInstagramIcon.png" />
</div>

<script src="js/kidsMain.js"></script></body>
</html
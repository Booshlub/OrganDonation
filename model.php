<!doctype html>
<!--PHP Lauren Test-->
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width"/>
<title>Be a Donor</title>
<link href="css/foundation.min.css" rel="stylesheet" type="text/css" media="screen">
<link href="css/main.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
<div id="pageCon">
<header>

  <div id="topBar">
    <div id="switchSite">
      <a href="frenchSide.html" class="languageLink">Français</a>
      <img src="images/drapeauQuebec.png" alt="Quebec flag" class="languageFlag">
    </div>
    <nav id="mobileNav">
      <ul>
        <li><a href="model.php">Home</a></li>
        <li>|</li>
        <li><a href="videos.html">Videos</a></li>
        <li>|</li>
        <li id="trilliumLink"><a href="http://www.otf.ca/">Ontario Trillium Foundation</a></li>
      </ul>
    </nav>

  </div>

  <img src="images/logo.svg" alt="Be a Donor logo" id="logo">
</header>

<div id="siteConInside">

  <ul id="organSelectorMobile">
    <li id="heart" class="organDescDesktop activeOrgan">Heart</li>
    <li id="lungs" class="organLink">Lungs</li>
    <li id="liver" class="organLink">Liver</li>
    <li id="kidney" class="organLink">Kidneys</li>
    <li id="intestine" class="organLink">Intestine</li>
  </ul>

<section id="modelContainer">
  <div id="organDescDesktop" onmouseover="document.body.style.overflow='hidden';" onmouseout="document.body.style.overflow='auto';">
    <article id="descText">
      <h2 class="heart" id="name">Organ Donation</h2>
      <p id="infoArea">
        Here you can go through a list of donatable organs. You'll see their locations in the human body and a little tidbit on their importance to organ donation.
      </p>
    </article>
  </div>

  <div id="organSelectorCon">
    <ul id="organSelectorDesktop" class="organLinks">
      <li id="heart" class="organLink">Heart</li>
      <li id="lungs" class="organLink">Lungs</li>
      <li id="liver" class="organLink">Liver</li>
      <li id="kidney" class="organLink">Kidneys</li>
      <li id="intestine" class="organLink">Intestine</li>
    </ul>
  </div>

  <img src="images/mirror.png" alt="Mirror container" id="mirror">
  <img src="images/mirrorDesktop.png" id="mirrorDesktop" alt="Mirror container">

  <div id="modelImgCon" >
    <img src="images/360/_modelNoGlow_4.png" alt="model" id="model">
  </div>

</section>

<input type="range" name="points" min="1" max="7" id="modelControl" oninput="organHighlight()" onchange="organHighlight()">


<article id="mobileDescText" class="mobile">
  The heart is a vital muscular organ which pumps blood through your circulatory system. Heart transplants are becoming more and more common but not enough hearts are available for the amount of people waiting. In 2015, 72 heart transplants were performed in Ontario but 79 people were still waiting to receive a heart.
</article>

</div> <!-- End of siteCon-->

<footer>
  <ul id="socialIcons">
    <li><a href="www.facebook.com"><img src="images/facebookIconAdult.png"></a></li>
    <li><a href="www.facebook.com"><img src="images/twitterIconAdult.png"></a></li>
    <li><a href="www.facebook.com"><img src="images/instaIconAdult.png"></a></li>
  </ul>
  <p class="socialText">Follow us:</p>
</footer>
</div>
<script src="js/TweenLite.min.js"></script>
<script src="js/ScrollToPlugin.min.js"></script>
<script src="js/main.js"></script>
<script src="js/main.js"></script>
</body>
</html>

<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Tendo soft glove">
  <meta name="keywords" content="Tendo, Tendoforpeople, exosceleton, soft glove">
  <meta name="author" content="Tendoforpeople">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Tendo</title>
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link href="maincss.css" rel="stylesheet" type="text/css">
<link rel="import" href="header.html">

<style>
</style>
	
	<!-- script> -->
	<script src="script.js"></script>

</head>
<body>
<div id="container"></div>
<script type="application/javascript">
    var link = document.querySelector('link[rel="import"]');

    // Clone the <template> in the import.
    var template = link.import.querySelector('template');
    var clone = document.importNode(template.content, true);

    document.querySelector('#container').appendChild(clone);
</script>

<!--
<object data="header.html" class="linked-object" id="linked-header"></object>
-->

<!--
<div class="wasteofspace">thingy </div>
-->
	
	
<!-- slider section eventuelt> -->
<section id="home-section" class="slider">
	<ul class="slider-carousel" id="slider-carousel">
		<div id="slider-container" class="container">
	        	<img id="1" class="visible-foto" src="img/slider1.jpg"  alt="tendoforpeople">
			<img id="2" class="hidden-foto"  src="img/slider2.jpg" alt="tendo robothandske">
			<img id="3" class="hidden-foto"  src="img/slider3.jpg"  alt="tendo">
		</div>
	</ul>
</section>
<!-- slider section eventuelt> -->
	
	
<!-- GAMMEL FOOTER
<div class="footer">
  <div class="text-container">


<div class="footer-logo">
  <img src="img/whiterob.png" alt="tendo robot white" id="footer-logo">
</div>

    <div id="left1" class="footer-text">
       <p>Contact:</p>
       <p>info@tendoforpeople.se </p>
        <p>(+46) 073-3310414</p>
    </div>

<<<<<<< HEAD
    
    <div class="footer-img">
=======
      <div id="right1">
    <p>Address:</p>
    <p>Stjerneskibet</p>
    <p>Havnegade 29</p>
    <p>5000 Odense C</p>
    <p>Denmark</p>
>>>>>>> 359fa79b34992cf8af6a24763dd01f7815ab0907

      <a href="https://www.instagram.com/tendoforpeople/"><img src="img/instagram.png" alt="Instagram logo" class="some" ></a>
      <a href="https://www.facebook.com/tendoforpeople/"><img src="img/facebook.png" alt="facebook logo" class="some" ></a>
    </div>


      <div id="right1" class="footer-text">
        <p>Adress:</p>
        <p>Stjerneskibet</p>
        <p>Havnegade 29</p>
        <p>5000 Odense C</p>
        <p>Denmark</p>
      </div>
  </div>
  </p>

SLUT PÅ GAMMEL FOOTER -->

<object data="footer.html" class="linked-object" id="linked-footer"></object>
  </div>
</body>

</html>
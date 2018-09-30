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

    <script defer>
        /* When the user hovers over the button,
        toggle between hiding and showing the dropdown content */
        function myFunction() {
            document.getElementById("myDropdown").classList.toggle("show");
        }

        // Close the dropdown menu if the user clicks outside of it
        window.onMouseOver = function(event) {
            if (!event.target.matches('.dropbtn')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

    </script>

</head>
  
<body>
  <header>
      <?php include("header.html"); ?>
  </header>

<main id="index-main">

    <!-- slider section eventuelt
    <section id="home-section" class="slider">
        <ul class="slider-carousel" id="slider-carousel">
            <div id="slider-container" class="container">
                    <img id="1" class="visible-foto" src="img/slider1.jpg"  alt="tendoforpeople">
                <img id="2" class="hidden-foto"  src="img/slider2.jpg" alt="tendo robothandske">
                <img id="3" class="hidden-foto"  src="img/slider3.jpg"  alt="tendo">
            </div>
        </ul>
    </section>-->
    <!-- slider section eventuelt -->

    <section class="index-maintext">
      <h1 class="index-big-header">Gør det du altid har gjort</h1>
        <p>Tendo er et blødt robot exoskelet – en handske, som styrker dit greb.
          Tendo dækker kun din tommelfinger og pegefinger, samt lidt af underarmen, hvor batteriet er placeret. Handsken er let, og kan være under ærmet.
        </p>

        <ul class="icon-list">
          <li class="icon-list-item">
          <img src="img/ok-ikon.png" alt="index icon" class="index-icon">
          <p> Styrker grebet for mennesker med nedsat gribeevne.</p>
        </li>
        <li class="icon-list-item">
        <img src="img/drop-ikon.png" alt="index icon" class="index-icon">
        <p> Den nederste del tåler vand og kan vaskes.</p>
      </li>
      <li class="icon-list-item">
      <img src="img/hjerte-ikon.png" alt="index icon" class="index-icon">
      <p> Handsken er specielt fremstillet til dig</p>
    </li>

        </ul>
    </section>

    <section class="index-maintext">

   <div class="overskrift">
     <h2>Udforsk Tendo handsken</h2>
   </div>

   <script type="application/javascript">
/*
      document.getElementById("hand-index-info").onmouseover = function() {mouseOverIndex()};
      document.getElementById("hand-index-info").onmouseleave = function() {mouseOutIndex()};
      document.getElementById("hand-electronics-info").onmouseover = function() {mouseOverElectronics()};
      document.getElementById("hand-electronics-info").onmouseleave = function() {mouseOutElectronics()};
      var handInfo = document.querySelectorAll('hand-info');
*/
      function mouseOverIndex(caller) {
        var text;
        if(caller.id == "interactive-1"){
          text = document.getElementById("text-1");
        }
        else if(caller.id == "interactive-2"){
          text = document.getElementById("text-2");
        }
        else if(caller.id == "interactive-3"){
          text = document.getElementById("text-3");
        }
        else if(caller.id == "interactive-4"){
          text = document.getElementById("text-4");
        }
        else if(caller.id == "interactive-5"){
          text = document.getElementById("text-5");
        }
        text.style.visibility = "visible";
          //document.getElementById("hand-index-info").style.display = "block";
      }
      function mouseOutIndex(caller) {
        var text;
        if(caller.id == "interactive-1"){
          text = document.getElementById("text-1");
        }
        else if(caller.id == "interactive-2"){
          text = document.getElementById("text-2");
        }
        else if(caller.id == "interactive-3"){
          text = document.getElementById("text-3");
        }
        else if(caller.id == "interactive-4"){
          text = document.getElementById("text-4");
        }
        else if(caller.id == "interactive-5"){
          text = document.getElementById("text-5");
        }
        text.style.visibility = "hidden";
          //handInfo.style.display = "none";
      }
/*
      function mouseOverElectronics() {
          document.getElementById("hand-electronics-info").style.display = "block";
      }
      function mouseOutElectronics() {
          handInfo.style.display = "none";
      }
      */
  </script>


    <div id="hand-background">

        <div class="hand-hover-wrapper">
            <!-- INDEX FINGER LINK -->
            <div id="hand-index">
                <a id="interactive-1" class="hand-link" onmouseover="mouseOverIndex(this);" onmouseleave="mouseOutIndex(this);"></a>
                <a id="interactive-2" class="hand-link" onmouseover="mouseOverIndex(this);" onmouseleave="mouseOutIndex(this);"></a>
                <a id="interactive-3" class="hand-link" onmouseover="mouseOverIndex(this);" onmouseleave="mouseOutIndex(this);"></a>
                <a id="interactive-4" class="hand-link" onmouseover="mouseOverIndex(this);" onmouseleave="mouseOutIndex(this);"></a>
                <a id="interactive-5" class="hand-link" onmouseover="mouseOverIndex(this);" onmouseleave="mouseOutIndex(this);"></a>

                <div id="text-1" class="info-text">Åbne fingerspidser</div>
                <div id="text-2" class="info-text">Kunstige sener</div>
                <div id="text-3" class="info-text">Blødt plastik</div>
                <div id="text-4" class="info-text">Intelligente Sensorer</div>
                <div id="text-5" class="info-text">Nem at oplade</div>
                <div id="text-6" class="info-text">Vejer kun 127g</div>



            </div>

        </div>

        <div id="hand-info-wrapper">
        </div>

    </div>
    </section>

    <section class="index-maintext">
        <h2>Mission</h2>
        <p>Her skal der stå noget om, hvad Tendos mission er</p>
    </section>

    <section class="index-maintext">
        <h2>Testimonials</h2>
        <p>Her skal der stå, hvad folk siger om Tendo</p>
    </section>


</main>

  <footer>
      <?php include("footer.html"); ?>
  </footer>

</body>

</html>

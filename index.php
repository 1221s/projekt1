<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="description" content="Tendo soft glove">
  <meta name="keywords" content="Tendo, Tendoforpeople, exosceleton, soft glove">
  <meta name="author" content="Tendoforpeople">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tendo | Home</title>
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="maincss.css" rel="stylesheet" type="text/css">
    <script src="js/dropdownmenu.js" defer></script>
    <script src="js/backtotop.js" defer></script>
</head>
  
<body>
  <header>
      <?php include("include/header.html"); ?>
  </header>

<main>

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

    <section>
      <h1 class="index-big-header">Gør det du altid har gjort</h1>
        <p>Tendo er et blødt robot exoskelet – en handske, som styrker dit greb.
          Tendo dækker kun din tommelfinger og pegefinger, samt lidt af underarmen, hvor batteriet er placeret. Handsken er let, og kan være under ærmet.
        </p>

        <div class="icon-list">
            <div class="icon-list-item">
                <img src="img/ok-ikon.png" alt="index icon" class="index-icon">
                <p> Styrker grebet for mennesker med nedsat gribeevne.</p>
            </div>
            <div class="icon-list-item">
                <img src="img/drop-ikon.png" alt="index icon" class="index-icon">
                <p> Den nederste del tåler vand og kan vaskes.</p>
            </div>
            <div class="icon-list-item">
                <img src="img/hjerte-ikon.png" alt="index icon" class="index-icon">
                <p> Handsken er specielt fremstillet til dig</p>
            </div>
        </div>
    </section>

    <section>

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

    <section>
        <h2>Mission</h2>
        <p>Vores mission er at lave et produkt, hvor folk ikke føler sig begrænset i hverdagen.
            Et produkt man som bruger, føler sig tilpas med, samtidigt med at få en forøget livskvalitet og mindre behov for hjælp udefra af samfundet og familie.
        </p>
    </section>

    <section>
        <h2>Testimonials</h2>
        <p><em>"Efter at have været skeptisk i starten, syntes jeg det har været det hele værd at få anskaffet mig en Tendo Handske.
                Den nedsatte bevægelsesevne i mine hænder har været en udfordring for mig og min familie. Det behøver vi ikke tænke på mere."</em><br/><br/>
            - Anne M. 64 år. København.
        </p>
    </section>


</main>

  <footer>
      <?php include("include/footer.html"); ?>
  </footer>

  <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

</body>

</html>

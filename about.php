<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="About Tendo">
    <meta name="keywords" content="about, Tendo team, Sofie Woge">
    <meta name="author" content="Tendoforpeople">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tendo | About</title>
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
    <section>
        <h2>Team Tendo</h2>
        <div id="employee-wrapper">
            <div class="employee">
                <div class="employee-photo" id="sofie-foto">
                    <div class="color-overlay"></div>
                </div>
                <h3><strong>Sofie Woge</strong><br/>CEO & Founder</h3>
                <p>Entrepreneur and designer from Chalmers & Lund's University with a great passion for usability, design for all, and robotics.</p>
            </div>

            <div class="employee">
                <div class="employee-photo" id="robin-foto">
                    <div class="color-overlay"></div>
                </div>
                <h3><strong>Robin Gustafsson</strong><br/>CTO - Mechanics</h3>
                <p>Mechanical Engineer, expertise within product development and fine mechanics from LTH.</p>
            </div>

            <div class="employee">
                <div class="employee-photo" id="pontus-foto">
                    <div class="color-overlay"></div>
                </div>
                <h3><strong>Pontus Renmarker</strong><br/>VPE - Mechatronics</h3>
                <p>Mechanical Engineer with an expertise within robotics and mechatronics from LTH.</p>
            </div>

            <div class="employee">
                <div class="employee-photo" id="joe-foto">
                    <div class="color-overlay"></div>
                </div>
                <h3><strong>Joe Sarawut Nielsen</strong><br/>Designer & Engineer</h3>
                <p>Product design engineer from SDU with experience in user oriented design from e.g. LEGO.</p>
            </div>
        </div>
        <div id="team-tendo-text">
            <p>The strong team behind Tendo works with great passion and has broad competence within the field. Even though Tendo is a newly established company, a wide network has already been established and the development is/has been supported by e.g. NASA (Houston), Ideon in Lund and Odense Robotics.<br/><br/></p>
            <p>Tendo is a part of Odense Robotics and is thereby part of a cluster rewarded with the prestigious EU certificate Golden Label. The team has access to professional support within everything from development and prototyping to business management and matchmaking within the industry.</p>
        </div>
    </section>
  
    <section>
        <h2>Videomateriale</h2>
        <div style="width:600px; height:400px; margin: 24px auto;">
        <iframe style="" width="600" height="400"
                src="https://www.youtube.com/embed/AkdQW0MN_mw">
        </iframe>
        </div>

    </section>

    <section class="news">
        <h2>Omtale</h2>
        <table>
            <tr>
                <td>
                    <a href="https://www.tv2fyn.dk/nyheder/15-12-2017/1930/robotudvikler-har-faet-millioner-til-robothandske?autoplay=1#player" target="_blank">
                        <img src="img/tv2fyn.png" alt="tv2 fyn logo" class="tv2"/>
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="https://ipaper.ipapercms.dk/DSB/udogse/2018/ud-se-september/?page=64/" target="_blank">
                        <img src="img/udogse.jpg" alt="Ud og se logo" class="udogse" />
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="https://vimeo.com/252302663" target="_blank">
                        <img src="img/moot.jpg" alt="moot logo" class="moot">
                    </a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="http://borsen.dk/nyheder/avisen/artikel/11/167376/artikel.html?hl=YToxOntpOjA7czoxMDoiU29maWUgV29nZSI7fQ" target="_blank">
                        <img src="img/borsen.png" alt="børsen logo" class="borsen">
                    </a>
                </td>
            </tr>
        </table>


        <br>


    </section>

    <section id="pressemateriale">
        <h2>Pressemateriale</h2>
        <p><strong>Herunder kan der hentes logo:</strong></p>
        <ul>
            <li><a href="img/logo_blue.png" target="_blank"><p>Hvid med blå baggrund</p></a></li>
            <li><a href="img/logo_white.png" target="_blank"><p>Blå med hvid baggrund</p></a></li>
            <li><a href="img/logo_white_trans.png" target="_blank"><p>Hvid uden baggrund</p></a></li>
            <li><a href="img/logo_black_trans.png" target="_blank"><p>Sort uden baggrund</p></a></li>
        </ul>

    </section>

    <section id="donations">
        <h2>Giv en hånd</h2>
        <div>
            <img src="img/swish-logo.png">
        </div>
        <p>Swish nr: 1233 991 478</p>
    </section>

</main>

<footer>
    <?php include("include/footer.html"); ?>
</footer>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button>

</body>

</html>

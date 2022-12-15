<!DOCTYPE html>
<html lang="en-US">
  <head>
    <!-- Meta setup -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="keywords" content="" />
    <meta name="decription" content="" />
    <meta name="author" content="" />
    <!-- Title -->
    <title>Salle Paradis</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- Fav Icon -->
    <link rel="icon" href="images/favicon.ico" />
    <!-- Main StyleSheet -->
    <link rel="stylesheet" href="css/calendar.css" />
    <link rel="stylesheet" href="style.css" />
  </head>
  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <header class="header_area">
      <div class="container_box">
        <div class="fixed_side_header">
          <div class="logo_box">
            <a href="home.php"><img src="img/logo.png" alt="images not found" /></a>
          </div>
          <div class="side_nav">
            <div class="box_bar">
              <span class="hr1"></span>
              <span class="hr2"></span>
              <span class="hr3"></span>
            </div>
            <div class="hidden_nav">
              <ul>
                <li>
                  <a href="home.php"><img src="img/home_active.svg" alt="images not found" /><span>Home</span></a>
                </li>
                <li>
                  <a href="calendar.html"><img src="img/calendar.svg" alt="images not found" /><span>Calendrier</span></a>
                </li>
                <li>
                  <a href="bloc.php"><img src="img/calendar.svg" alt="images not found" /><span>les places</span></a>
                </li>
                <li>
                  <a href="concert.html"><img src="img/calendar.svg" alt="images not found" /><span>Concert</span></a>
                </li>
                <li>
                  <a href="contact.html"><img src="img/calendar.svg" alt="images not found" /><span>Contact</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

<link rel="stylesheet" href="bloc.css">

<title>Bloc fauteuils</title>
<body>


<div class="container2" >
  <div class="container"></div>
</div>

<section class="section-salle">
  <div class="salle">
    <div class="sallepartie1">
      <div class="ligne">
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
      </div>

      <div class="ligne">
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
      </div>

      <div class="ligne">
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
      </div>

      <div class="ligne">
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
      </div>

    </div>
    <div class="inter-salle">
    </div>
    <div class="sallepartie2">
      <div class="ligne">
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
      </div>

      <div class="ligne">
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
      </div>

      <div class="ligne">
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
      </div>

      <div class="ligne">
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
        <button class="bloc">
        </button>
      </div>
    </div>
  </div>
</section>

<section class="section-cercle">
  <div class="bloc-dispo">
    <div class="ligne-information">
      <div class="info info-1"></div>
      <p>Disponible</p>
    </div>

    <div class="ligne-information">
      <div class="info info-2"></div>
      <p>Reservé</p>
    </div>

    <div class="ligne-information">
      <div class="info info-3"></div>
      <p>Sélectionné</p>
    </div>

  </div>
</section>

<section class="section-temps hidden">
  <div class="bloc-principal-heure">
    <div class="ligne-horaire" required>

      <button type="button" class="bloc-horaire">
        <p>20:30</p>
        <p5>21 avril</p5>

      </button>
      <button type="button" class="bloc-horaire">
        <p>21:30</p>
        <p5>21 avril</p5>
      </button>
      <button class="bloc-horaire">
        <p>22:30</p>
        <p5>21 avril</p5>

    </div>
    <div class="ligne-reservation">

      <button class="bloc-reservation" onclick="window.location.href='./validation.php';">
        <p>Reserve</p>
      </button>
    </div>
  </div>
</section>

<!-- Custom jQuery -->
<script src="bloc.js"></script>
<script src="js/jquery.js"></script>
  <script src="js/custom.js"></script>


</body>
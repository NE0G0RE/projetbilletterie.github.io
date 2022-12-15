<!DOCTYPE html>
<html lang="en">

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
  <script src="https://cdn.tailwindcss.com/"></script>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <!-- Fav Icon -->
  <link rel="icon" href="images/favicon.ico" />
  <!-- Main StyleSheet -->
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
<link rel="stylesheet" href="validation_fiche.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">

<title>Fiche validation</title>
<body>
<section class="bloc-fiche-activite">
  <div class="fiche">
        <div class="icon-fiche">
            <div class="icon-partage">
                            <div class="share-wrapper">
                  <div class="rounded share-action icon-share"></div>
                  <div class="share-container rounded">
                    <a class="share-btn tl icon-google-plus" href='#'></a>    
                    <a class="share-btn tr icon-twitter" href='#'></a>    
                    <a class="share-btn bl icon-pinterest" href='#'></a>    
                    <a class="share-btn br icon-facebook" href='#'></a>    
                  </div>
                </div>
            </div>
            <div class="Titre">
                <p>validation de votre place</p>
            </div>
            <div class="like">
            <i class="fa fa-heart" id="heart" width="30px" height="30px"></i>
            </div>
        </div>
        <div class="image-fiche">
            <div class="moule-image"> 
            </div> 
        </div>
      <div class="text-fiche">
      <h5>votre réservation</h5>
      <p> </p>
        <p></p>
      </div>
      <div class="image2-fiche">
        <div class="moule2-image"> 
                
        </div>
      </div>

      <div class="bloc-check">
      <button class="check" onclick="window.location.href='./validation.php';">
          <p>vérification des places</p>
          </button>
          <button class="check" onclick="window.location.href='./bloc.php';">
          <p>voir salle</p>
          </button>
      </div>
      

      <div class="text-fiche">
      </div>

  



  </div>
</section>
</body>

<script type="text/javascript">
    (function() {
    const heart = document.getElementById('heart');
    heart.addEventListener('click', function() {
      heart.classList.toggle('red');
    });
  })();


</script>   
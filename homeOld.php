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
            <a href="index.html"><img src="img/logo.png" alt="images not found" /></a>
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
                  <a href="index.html"><img src="img/home_active.svg" alt="images not found" /><span>Home</span></a>
                </li>
                <li>
                  <a href="calendar.html"><img src="img/calendar.svg" alt="images not found" /><span>Calendrier</span></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>
    <main class="content_section home_page pt_40">
      <div class="container_box">
        <div class="content_row">
        <div class='content_left'>
<?php


$servername = "localhost";
$username = "root";
$password = "";
$dbname = "billeterie";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM liste_concert";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "
            
            <div class='les_content_box mrtop'>
              <div class='les_profile_head'>
                <div class='les_content_img'>
                  <img src=".$row["img"]." alt='images not found' />
                </div>
                <div class='les_content_text'>
                  <span>".$row["titre"]."</span>
                </div>
              </div>
              <div class='les_post_content'>
                <p>
                ".$row["artiste"]."
                </p>
              </div>
              <div class='les_post_img'>
                <img class='animated' src=".$row["img"]." alt='images not found' />
              </div>
              <main class='content_section home_page pt_40'>
            <div class='container_box'>
                <div class='content_row'>
                    <div class='content_left'>
                    <a href='detaille_concert.php?id=".$row["id"]."'>
                    <button class='px-6 py-2 transition ease-in duration-200 uppercase rounded-full hover:bg-gray-800 hover:text-white border-2 border-gray-900 focus:outline-none'>
                        voir 
                    </button></a>
                    </div>
                    <div class='content_right'>
                    <button id='heart-button'></button>
                </div>
                </div>
              </div>
            </div>
          
    ";
}
} else {
  echo '0 results';
}
$conn->close(); 
?>
   </div> 
          



          <div class="content_right">
            <div class="les_acteurs">
              <h4>Les Acteurs</h4>
              <div class="les_acteurs_box mrtop">
                <div class="profile_img">
                  <img src="img/profile_1.png" alt="images not found" />
                </div>
                <div class="lest_acteurs_text">
                  <span>Alison Balsom</span>
                </div>
              </div>
              <div class="les_acteurs_box">
                <div class="profile_img">
                  <img src="img/profile_2.png" alt="images not found" />
                </div>
                <div class="lest_acteurs_text">
                  <span>Alison Balsom</span>
                </div>
              </div>
              <div class="les_acteurs_box">
                <div class="profile_img">
                  <img src="img/profile_3.png" alt="images not found" />
                </div>
                <div class="lest_acteurs_text">
                  <span>Alison Balsom</span>
                </div>
              </div>
              <div class="les_acteurs_box">
                <div class="profile_img">
                  <img src="img/profile_4.png" alt="images not found" />
                </div>
                <div class="lest_acteurs_text">
                  <span>Alison Balsom</span>
                </div>
              </div>
              <div class="les_acteurs_box">
                <div class="profile_img">
                  <img src="img/profile_5.png" alt="images not found" />
                </div>
                <div class="lest_acteurs_text">
                  <span>Alison Balsom</span>
                </div>
              </div>
              <div class="les_acteurs_box mrbuttom">
                <div class="profile_img">
                  <img src="img/profile_6.png" alt="images not found" />
                </div>
                <div class="lest_acteurs_text">
                  <span>Alison Balsom</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>


                  







    <!-- Custom jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/custom.js"></script>
    <script src="const heartButton = document.getElementById('heart-button');

heartButton.addEventListener('click', function() {
  const button = document.querySelector('button');
  button.style.backgroundColor = '#FF0000';"></script>
    
});

</body>
</html
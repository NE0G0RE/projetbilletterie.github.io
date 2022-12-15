<!DOCTYPE html>
<html>

<head>
  <title>Salle Paradis - Réservation de places de concert</title>
  <link href="reservation.css" rel="stylesheet">
</head>

<body>
  <h1>Salle Paradis</h1>
  <p>Bienvenue sur notre site de réservation en ligne pour la Salle Paradis !</p>
  <h2>Plan des places</h2>
  <p>Veuillez sélectionner vos places dans le plan ci-dessous :</p>
  <div id="plan-des-places"></div>
  <h2>Informations de réservation</h2>
  <p>Veuillez saisir vos informations pour finaliser votre réservation :</p>
  <form>
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom"><br>
    <label for="prenom">Prénom :</label>
    <input type="text" id="prenom" name="prenom"><br>
    <label for="email">Email :</label>
    <input type="email" id="email" name="email"><br>
    <label for="places">Places réservées :</label>
    <input type="text" id="places" name="places" readonly><br>
    <input type="submit" value="Réserver">
  </form>
</body>
<script type="text/javascript" src="reservation.js"></script>;

</html>


<!-- PHP: -->
<?php
// Récupération des informations de réservation
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$places = $_POST['places'];

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "billeterie";;

$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
  die("Erreur de connexion : " . mysqli_connect_error());
}

// Enregistrement de la réservation dans la base de données
$sql = "INSERT INTO reservations (nom, prenom, email, places) VALUES ('$nom', '$prenom', '$email', '$places')";

if (mysqli_query($conn, $sql)) {
echo "R";
}

//Javascript:

// Initialisation du plan des places
var plan = document.getElementById('plan-des-places');

// Récupération de la liste des places disponibles
var xhr = new XMLHttpRequest();
xhr.open('GET', 'places-disponibles.php', true);
xhr.onload = function() {
if (this.status == 200) {
var places = JSON.parse(this.responseText);
// Affichage du plan des places avec les places disponibles
for (var i = 0; i < places.length; i++) {
var place = document.createElement('div');
place.classList.add('place-libre');
place.setAttribute('data-place', places[i]);
plan.appendChild(place);
}
}
};
xhr.send();

// Sélection des places au clic sur les éléments du plan des places
plan.addEventListener('click', function(e) {
if (e.target.classList.contains('place-libre')) {
// Place sélectionnée
e.target.classList.remove('place-libre');
e.target.classList.add('place-reservee');
// Mise à jour de la liste des places sélectionnées
var places = document.getElementById('places').value;
if (places == '') {
places = e.target.getAttribute('data-place');
} else {
places += ',' + e.target.getAttribute('data-place');
}
document.getElementById('places').value = places;
} else if (e.target.classList.contains('place-reservee')) {
// Place désélectionnée
e.target.classList.remove('place-reservee');
e.target.classList.add('place-libre');
// Mise à jour de la liste des places sélectionnées
var places = document.getElementById('places').value;
places = places.split(',');
var index = places.indexOf(e.target.getAttribute('data-place'));
if (index > -1) {
places.splice(index, 1);
}

// Javascript:
// Initialisation du plan des places


// Récupération des informations de réservation
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$places = $_POST['places'];

// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "billeterie";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
  die("Erreur de connexion : " . mysqli_connect_error());
}

// Enregistrement de la réservation dans la base de données
$sql = "INSERT INTO reservations (nom, prenom, email, places) VALUES ('$nom', '$prenom', '$email', '$places')";

if (mysqli_query($conn, $sql)) {
  echo "Réservation enregistrée avec succès !";
} else {
  echo "Erreur lors de l'enregistrement de la réservation : " . mysqli_error($conn);
}

// Fermeture de la connexion à la base de données
mysqli_close($conn);

// Javascript (suite):


// PHP (suite):

// Récupération de la liste des places disponibles
$host = "localhost";
$username = "username";
$password = "password";
$dbname = "salle_paradis";

$conn = mysqli_connect($host, $username, $password, $dbname);

// Vérification de la connexion
if (!$conn) {
  die("Erreur de connexion : " . mysqli_connect_error());
}

// Récupération de la liste des places réservées
$sql = "SELECT places FROM reservations";
$result = mysqli_query($conn, $sql);
$places_reservees = array();
while ($row = mysqli_fetch_assoc($result)) {
  $places_reservees = array_merge($places_reservees, explode(',', $row['places']));
}

// Génération de la liste des places disponibles
$places_disponibles = array();
for ($i = 1; $i <= 2500; $i++) {
  if (!in_array($i, $places_reservees)) {
    $places_disponibles[] = $i;
  }
} // Envoi de la liste des places disponibles en format JSON header('Content-Type: application/json'); echo json_encode($places_disponibles); // Fermeture de la connexion à la base de données mysqli_close($conn);
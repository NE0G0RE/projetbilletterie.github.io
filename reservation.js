
// Initialisation du plan des places
var plan = document.getElementById('plan-des-places');

// Récupération de la liste des places disponibles
var xhr = new XMLHttpRequest();
xhr.open('GET', 'places-disponibles.php', true);
xhr.onload = function() {
if (this.status == 200) {
var places = JSON.parse(this.responseText);
// Affichage du plan des places avec les places disponibles
for (var i = 0; i < places.length; i++) 
{ var place=document.createElement('div'); 
place.classList.add('place-libre'); 
place.setAttribute('data-place', places[i]); 
plan.appendChild(place); xhr.send(); 
// Sélection des places au clic sur les éléments du plan des places plan.addEventListener('click', function(e) { if (e.target.classList.contains('place-libre')) { // Place sélectionnée e.target.classList.remove('place-libre'); e.target.classList.add('place-reservee'); // Mise à jour de la liste des places sélectionnées var places=document.getElementById('places').value; if (places=='' ) { places=e.target.getAttribute('data-place'); } else { places +=',' + e.target.getAttribute('data-place'); } document.getElementById('places').value=places; } else if (e.target.classList.contains('place-reservee')) { // Place désélectionnée e.target.classList.remove('place-reservee'); e.target.classList.add('place-libre'); // Mise à jour de la liste des places sélectionnées var places=document.getElementById('places').value; places=places.split(','); var index=places.indexOf(e.target.getAttribute('data-place')); if (index> -1) {
  places.splice(index, 1);
  }
  document.getElementById('places').value = places.join(',');
  }
  };
    // Soumission du formulaire de réservation
    document.querySelector('form').addEventListener('submit', function(e) {
      e.preventDefault();
      // Récupération des informations de réservation
      var nom = document.getElementById('nom').value;
      var prenom = document.getElementById('prenom').value;
      var email = document.getElementById('email').value;
      var places = document.getElementById('places').value;
      // Envoi des informations de réservation au serveur
      var xhr = new XMLHttpRequest();
      xhr.open('POST', 'reserver.php', true);
      xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
      xhr.onload = function() {
      if (this.status == 200) {
      alert(this.responseText);
      }
      };
      xhr.send('nom=' + nom + '&prenom=' + prenom + '&email=' + email + '&places=' + places);
      });
    
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="siege.css" rel="stylesheet">
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>

</head>

<body>
    <?php
    // Connexion à la base de données
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "billeterie";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Récupération des données des fauteuils
    $sql = "SELECT * FROM place_concert WHERE id = 1";
    $result = mysqli_query($conn, $sql);

    // Affichage des données dans un tableau HTML
    echo "<table>";
    echo "<tr>";
    echo "<th>Numéro de fauteuil</th>";
    echo "<th>Emplacement</th>";
    echo "<th>Prix</th>";
    echo "</tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["seat_number"] . "</td>";
        echo "<td>" . $row["location"] . "</td>";
        echo "<td>" . $row["price"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";

    // Fermeture de la connexion à la base de données
    mysqli_close($conn);
    ?>
</body>

</html>
<html>

<head>
    <title>Salle de concert</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>

<body>
    <h1>Salle de concert</h1>
    <p>Bienvenue dans notre salle de concert de 2500 places. Choisissez vos fauteuils en utilisant notre système de sélection.</p>
    <form action="reservation.php" method="post">
        <label for="row">Rangee :</label>
        <input type="number" name="row" id="row" min="1" max="50">
        <label for="seat">Fauteuil :</label>
        <input type="number" name="seat" id="seat" min="1" max="50">
        <input type="submit" value="Reserver">
    </form>
    <?php
    $row = $_POST['row'];
    $seat = $_POST['seat'];
    $con = mysqli_connect("localhost", "root", "", "billeterie");
    $query = "SELECT * FROM  WHERE row='$row' AND seat='$seat'";
    $result = mysqli_query($con, $query);
    if (mysqli_num_rows($result) > 0) {
        echo "<p>Fauteuil déjà réservé. Veuillez en sélectionner un autre.</p>";
    } else {
        $query = "INSERT INTO seats (row, seat) VALUES ('$row', '$seat')";
        if (mysqli_query($con, $query)) {
            echo "<p>Fauteuil réservé avec succès.</p>";
        } else {
            echo "<p>Erreur lors de la réservation.</p>";
        }
    }
    ?>
</body>

</html>
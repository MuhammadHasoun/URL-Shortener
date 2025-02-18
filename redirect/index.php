<?php

$servername = "localhost";
$username = "root"; // Pas dit aan naar jouw databasegebruikersnaam
$password = ""; // Pas dit aan als je een wachtwoord hebt ingesteld
$dbname = "url_shortener";
$port = 3307;
$conn = new mysqli($servername, $username, $password, $dbname,$port);
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Database verbinding mislukt"]));
}


if (isset($_GET['link'])) {
	$full_url = 'http://localhost'.$_SERVER['REQUEST_URI'];
	$short_url = $conn->real_escape_string($full_url);
	$sql = "SELECT * FROM urls WHERE short_url = '$short_url'";  // Zorg ervoor dat je tabelnaam en kolom correct zijn
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        // Als de URL bestaat, haal de oorspronkelijke URL op en redirect
        $row = $result->fetch_assoc();
        $original_url = $row['original_url']; // Dit is de kolom die je originele URL bevat
        // Redirect naar de originele URL
        header("Location: $original_url");
        exit();
    } else {
        // Als de URL niet gevonden is, geef een foutmelding of redirect naar een foutpagina
        echo "De opgegeven korte URL bestaat niet.";
    }
}



?>

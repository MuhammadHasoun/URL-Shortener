<?php
header('Content-Type: application/json');

$servername = "localhost";
$username = "root"; // Pas dit aan naar jouw databasegebruikersnaam
$password = ""; // Pas dit aan als je een wachtwoord hebt ingesteld
$dbname = "url_shortener";
$port = 3307;
$conn = new mysqli($servername, $username, $password, $dbname,$port);
if ($conn->connect_error) {
    die(json_encode(["success" => false, "message" => "Database verbinding mislukt"]));
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST["url"])) {
    $original_url = trim($_POST["url"]);
    // Genereer een nieuwe korte URL
    $short_code = substr(md5(uniqid($original_url, true)), 0, 6);
    $short_url = "http://localhost/url_shorten/new/?link=" . $short_code;
    
    $stmt = $conn->prepare("INSERT INTO urls (original_url, short_url, timestamp) VALUES (?, ?, NOW())");
    $stmt->bind_param("ss", $original_url, $short_url);
    if ($stmt->execute()) {
        echo json_encode(["success" => true, "short_url" => $short_url]);
    } else {
        echo json_encode(["success" => false, "message" => "Kon URL niet opslaan"]);
    }
}
$stmt->close();

$conn->close();
?>

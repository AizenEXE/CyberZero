<?php
$servername = "cyberzer0-server.mysql.database.azure.com";
$username = "ypyolxahwx";
$password = "Azerty123456@";
$dbname = "compteur_db";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

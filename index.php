<?php
include 'db.php';

// Enregistrer la connexion
$ip_address = $_SERVER['REMOTE_ADDR'];
$sql = "INSERT INTO connexions (ip_address) VALUES ('$ip_address')";
$conn->query($sql);

// Compter les connexions
$result = $conn->query("SELECT COUNT(*) as total FROM connexions");
$row = $result->fetch_assoc();
$total_connexions = $row['total'];

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compteur de connexions</title>
</head>
<body>
    <h1>Compteur de connexions</h1>
    <p>Nombre de connexions: <?php echo $total_connexions; ?></p>
    <form action="reset.php" method="post">
        <button type="submit">Réinitialiser le compteur</button>
    </form>
</body>
</html>

<?php
$conn->close();
?>

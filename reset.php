<?php
include 'db.php';

// Réinitialiser le compteur
$sql = "TRUNCATE TABLE connexions";
$conn->query($sql);

header("Location: index.php");
exit();

$conn->close();
?>

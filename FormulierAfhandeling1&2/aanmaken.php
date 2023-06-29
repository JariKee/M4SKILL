<?php
declare(strict_types=1);
session_start();
include_once "connectPDO.php";

echo 'Gegevens aanmaken' . '</br>';

$inputs = $_SESSION['user'];

$name = $inputs[0];
$email = $inputs[1];
$age = $inputs[2];
$conn = db_connect();

$insertQuery = "INSERT INTO voorbeeld (naam, email, age) VALUES ('$name', '$email', $age)";
$conn->exec($insertQuery);
header('location: registratieformulier.php?message=Success');
exit;

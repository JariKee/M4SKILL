<?php
declare(strict_types=1);
session_start();
require_once "includes/connectPDO.php";

echo 'Gegevens uitlezen' . '</br>';
$conn = db_connect();

$selectVoorbeeld = "SELECT naam FROM voorbeeld";
$results = $conn->query($selectVoorbeeld);
$results->setFetchMode(PDO::FETCH_ASSOC);

foreach ($results as $row) {
    echo "Paginanaam {$row['naam']}</br>";
}





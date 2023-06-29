<?php
declare(strict_types=1);
session_start();
require_once "includes/connectPDO.php";

echo 'Gegevens wijzigen' . '</br>';
$conn = db_connect();

$updateQuery = "UPDATE voorbeeld SET naam = 'Studenten' WHERE id=10";
$conn->exec($updateQuery);






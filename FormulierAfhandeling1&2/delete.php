<?php
declare(strict_types=1);
session_start();
require_once "includes/connectPDO.php";

echo 'Gegevens verwijderen' . '</br>';
$conn = db_connect();

$deleteQuery = "DELETE FROM voorbeeld WHERE id=9";
$conn->exec($deleteQuery);






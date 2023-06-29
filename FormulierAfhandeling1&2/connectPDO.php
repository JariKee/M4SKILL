<?php
declare(strict_types=1);
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "voorbeeld";

function db_connect(): object
{
    global $servername;
    global $username;
    global $password;
    global $dbname;

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//        echo 'Connected';
    } catch (PDOException $e) {
        echo "Fout bij het maken van de connection: " . $e->getMessage();
    }
    return $conn;
}
//db_connect();

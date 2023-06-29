<?php
declare(strict_types=1);
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registreer</title>
</head>
<body>

<form method="post" action="registreer.php">
    <label for="user"></label>
    <input
           type="text"
           name="user"
           placeholder="Naam"
           id="user"
           required>
    <label for="email"></label>
    <input
           type="text"
           name="email"
           placeholder="Email"
           id="email"
           required>
    <label for="age"></label>
    <input
           type="number"
           name="age"
           placeholder="Age"
           id="age"
           required>
    <input type="submit" value="Abonneer">

    <?php
        if(isset($_GET['message'])){
            echo "<br>" . $_GET['message'];
        }
         if (isset($_SESSION['error'])) {
             echo '</br>';
             foreach ($_SESSION['error'] as $value) {
                echo "{$value}</br>";
             }
             unset($_SESSION['error']);
         }
    ?>
</form>

</body>
</html>
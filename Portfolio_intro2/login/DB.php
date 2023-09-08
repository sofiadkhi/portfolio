<?php
// Verbinding maken met de database
$servername = "localhost";
$username = "87239";
$password = "soofje680";
$dbname = "Portfolio_";

$conn = new mysqli($servername, $username, $password, $dbname);

// Controleren op verbinding
if ($conn->connect_error) {
    die("Fout bij verbinden met de database: " . $conn->connect_error);
}

// Controleren of het formulier is ingediend
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST["email"];
//     $wachtwoord = $_POST["wachtwoord"];

//     // Hash het wachtwoord voor beveiliging (optioneel, maar sterk aanbevolen)
//     $hashedWachtwoord = password_hash($wachtwoord, PASSWORD_DEFAULT);

//     // SQL-query om de gebruikersgegevens op te slaan
//     $query = "INSERT INTO gebruiker (email, wachtwoord) VALUES ('$email', '$hashedWachtwoord')";

//     if ($conn->query($query) === TRUE) {
//         echo "Gebruiker succesvol opgeslagen in de database";
//     } else {
//         echo "Fout bij het opslaan van de gebruiker: " . $conn->error;
//     }
// }

// $conn->close();

//file_exists() is voor login.php anders 
?>

<?php
// Verbinding maken met de database en andere benodigde configuraties
include("DB.php");

// Controleren of het formulier is ingediend
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $wachtwoord = $_POST["wachtwoord"];


    // Query om gegevens op te halen
    $sql = "SELECT * FROM login WHERE email = '$email' AND wachtwoord = '$wachtwoord' ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();

    // Voer hier je eigen logica uit voor het controleren van de gebruikersgegevens
    if ($result->num_rows == 1) { 
        // Inloggen is gelukt, doorsturen naar de beveiligde pagina
        header("Location: ../bewerk.php");
        exit();
    } else {
        // Ongeldige gebruikersnaam of wachtwoord
        $foutmelding = "Ongeldige e-mail of wachtwoord. Probeer het opnieuw.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($foutmelding)) { ?>
        <p><?php echo $foutmelding; ?></p>
    <?php } ?>
    <form method="POST" action="login.php">
        <label for="email">E-mail:</label>
        <input type="text" id="email" name="email" required>
        <br>
        <label for="wachtwoord">Wachtwoord:</label>
        <input type="password" id="wachtwoord" name="wachtwoord" required>
        <br>
        <input type="submit" value="Inloggen">
    </form>
</body>
</html>


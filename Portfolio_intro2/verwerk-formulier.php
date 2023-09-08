<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

# Ontvang gebruikersinvoer
$email = $_POST['email'];
$feedback = $_POST['message'];

# Filter gebruikersinvoer
// function filter_email_header($form_field) {  
// return preg_replace('/[nr|!/<>^$%*&]+/','',$form_field);
// }

// $email = filter_email_header($email);  // Gebruik $email, niet $email_address

# Stel de e-mailheaders in
$headers = "From: $email\n";  // Gebruik $email, niet $email_address

# Verstuur de e-mail
$sent = mail('sofia.dookhtechi2468@gmail.com', 'Portfolio Form Email', $feedback, $headers);

# Controleer of de e-mail is verzonden
if ($sent) {
    echo "E-mail verzonden";
} else {
    echo "Er is een fout opgetreden bij het verzenden van de e-mail";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>complete responsive personal portfolio website design tutorial</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<a id="terug" href="https://87239.stu.sd-lab.nl/Portfolio_intro2/index.php">terug</a>
</body>
</html>






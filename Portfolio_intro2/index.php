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

<div id="menu-bars" class="fas fa-bars"></div>


<header>

    <a href="#" class="logo"> <span>Sofia</span> Dookhtechi </a>

    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#portfolio">Portfolio</a>
        <a href="#about">About me</a>
        <a href="#contact">Contact me</a>
    </nav>

    <div class="follow">
        <a href="https://www.youtube.com/channel/UCcjoR9SAB98rc1-wgxVo8_Q" class="fab fa-youtube"></a>
        <a href="https://www.linkedin.com/in/sofia-dookhtechi-497bb2268/" class="fab fa-linkedin"></a>
        <a href="cv.html" class="fas fa-file"></a>
    </div>

</header>

<section class="home" id="home">
    <div class="content">
        <h3> I am <span><br> Sofia Dookhtechi </span> </h3>
        <p class="info">Student Software developer</p>
        <p class="text">Nice to see you here. Take a look at my projects!</p>
        <a href="#portfolio" class="btn">Lets go</a>
    </div>

    <div class="image">
        <img src="sofia.png" alt="">
    </div>
</section>


<section class="portfolio" id="portfolio">

    <h1 class="heading"> <span> My </span> portfolio </h1>

    <div class="box-container">



<?php

// Verbinding maken met de database (voorbeeld, je moet de juiste gegevens invoeren)
$servername = "localhost";
$username = "87239";
$password = "soofje680";
$dbname = "Portfolio_";

// Verbinding maken
$conn = new mysqli($servername, $username, $password, $dbname);

// Controleren op verbinding
if ($conn->connect_error) {
    die("Fout bij verbinden met de database: " . $conn->connect_error);
}

// Query om gegevens op te halen
$sql = "SELECT * FROM projecten";
$result = $conn->query($sql);


    // Intereren over de rijen van de queryresultaten
    while ($row = $result->fetch_assoc()) {
        echo "<div class='box'>";
        
        // Begin de link om het hele blok te wikkelen
        echo "<a href='" . $row['Link'] . "'>";
        
        echo "<h3>" . $row['Titel'] . "</h3>";
        
        $imagePath = $row['Plaatje'];
        if (file_exists($imagePath)) {
            // Begin de link om het plaatje en de titel te wikkelen
            echo "<a href='" . $row['Link'] . "'>";
            echo "<img src='" . $imagePath . "' alt='Afbeelding'>";
            echo "</a>";
        } else {
            echo "<p>Plaatje niet beschikbaar</p>";
        }
        
        // Sluit de link om het hele blok af
        echo "</a>";
        
        echo "</div>";
    }
    

$conn->close();
?>
</div>
</section>

<br><br>
<section class="about" id="about">
    <h1 class="heading"> about <span> me </span></h1>
    <div class="row-1">
        <div class="content">
            <div class="box-container">
                <div class="box">
                <p><span> age : </span> 18 </p>
                <p><span> gender : </span> female </p>
                <p><span> language : </span> Dutch, English, Farsi </p>
                <p><span> study : </span> software developer </p>
                <p><span> One of my favorite artists: </span> 
                <audio controls><source class="audio" src="muziek.mp3" type="audio/mpeg"></audio></p>
                </div>
                <br>
                <div class="box">
                <p> <span> Strength : </span> Perseverance, open mind, loyal, helpful, enterprising, cooperative </p>
                <p> <span> Programming skills :  </span> HTML, CSS, JS, Unity </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="contact" id="contact">
    <h1 class="heading"> Contact <span> me </span> </h1>
    <div class="row-1">
        <div class="content">
            <div class="box-container">
                <div class="box">
                    <p><span> E-mail : </span> sofia.dookhtechi2468@gmail.com </p>
                    <p><span> Tel : </span> 0684816702 </p>
                    <div><img id="imga" src="sofia2.png"></div>
                </div>
                <br>
                <div class="contact-form">
                    <h2>Send me a message</h2>
                    <form id="contactForm" action="verwerk-formulier.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" required><br><br>

                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" required><br><br>

                    <label for="phone">Phone number:</label>
                    <input type="tel" name="phone" id="phone"><br><br>

                    <label for="company">Company name:</label>
                    <input type="text" name="company" id="company"><br><br>

                    <label for="message">Message:</label>
                    <textarea name="message" id="message" rows="4" cols="50"></textarea><br><br>

                    <button type="submit">Send</button>
                    </form>
                        <div class="confirmation-message" style="display: none;">
                        Thank you for your message! We have received your information.
                         </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="js/script.js"></script>

</body>
</html>
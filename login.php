<?php

include 'loginphp.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAM Corporate Account Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo RAM.png" alt="Royal Air Maroc">
            <img src="oneworld.png" alt="One World">
        </div>
        <nav>
            <ul>
                <li><a href="#booking.html">Booking</a></li>
                <li><a href="#destinations.html">Destinations</a></li>
                <li><a href="#experience.html">Experience</a></li>
                <li><a href="#info.html">Information</a></li>
                <li><a href="#FFP_main.html">Safar Flyer Loyalty</a></li>
            </ul>
        </nav>
        <div>
            <p><a href="language.html"><img src="globe.png" alt="Language"></a> | EN</p>
        </div>
    </header>
    <main>
        <div class="login-container">
            <form class="login-form" method="post" action="loginphp.php">
                <h2 align="center">Sign in to your RAM Corporate Account</h2>
                <label for="account">Your account number/email address</label> <br/>
                <input type="text" id="account" name="account" required> <br/>
                <label for="password">Your password</label> <br/>
                <input type="password" id="password" name="password" required> <br/>
                <a href="forgotpword.html">Forgot your password?</a> <br/><br/>
                <button type="submit" align="center">Sign in</button> <br/><br/>
                <a href="register.php">Don't have an account? Register now.</a>
            </form>
        </div>
        <div class="reward-section">
            <h2>Rewarding travelers for their work</h2>
            <p>The RAM Corporate program works on the same basis of our already existing Safar Flyer Loyalty program. Employees within an organization will earn Award and Status Miles for each business trip their company sends them on. You also get a wide range of perks like additional luggage, better seating options, and much more!</p>
        </div>
    </main>
</body>
</html>

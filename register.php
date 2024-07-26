<?php

include "registerphp.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RAM Corporate Account Login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="logo RAM.png" alt="Royal Air Maroc">
            <img src="oneworld.png" alt="One World">
        </div>
        <nav>
            <ul>
                <li><a href="booking.html">Booking</a></li>
                <li><a href="destinations.html">Destinations</a></li>
                <li><a href="experience.html">Experience</a></li>
                <li><a href="info.html">Information</a></li>
                <li><a href="FFP_main.html">Safar Flyer Loyalty</a></li>
            </ul>
        </nav>
        <div>
            <p><a href="language.html"><img src="globe.png" alt="Language"></a> | EN</p>
        </div>
    </header>
    <main>
        <div class="login-container">
            <form class="login-form" method="post" action="registerphp.php">
                <h2 align="center">Create your RAM Corporate Account</h2>
                <label for="fName">First name</label> <br/>
                <input type="text" id="fName" name="fName" required> <br/>
                <label for="lName">Last name</label> <br/>
                <input type="text" id="lName" name="lName" required> <br/>
                <label for="email">Email address</label> <br/>
                <input type="email" id="email" name="email" required> <br/>
                <label for="password">Your password</label> <br/>
                <input type="password" id="password" name="password" required> <br/>
                <label for="corpo">Corporation</label>
                <select id="corpo" name="corpo" required>
                    <option disabled selected value>-- Selectionner votre entreprise --</option>
                    <option value="E1">Entreprise 1</option>
                    <option value="E2">Entreprise 2</option>
                    <option value="E3">Entreprise 3</option>
                </select>
                <br/><br/>
                <button type="submit" align="center">Sign up</button>
                <br/><br/>
                <a href="login.php">Already have an account?</a> <br/>
            </form>
        </div>
    </main>
</body>
</html>

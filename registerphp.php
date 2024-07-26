<?php

include 'connect.php';

// Vérifiez si les données POST existent avant de les utiliser
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = isset($_POST['fName']) ? $_POST['fName'] : '';
    $lastName = isset($_POST['lName']) ? $_POST['lName'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';
    $corpo = isset($_POST['corpo']) ? $_POST['corpo'] : '';

    // Hashage du mot de passe
    $password = md5($password);

    // Vérification si l'email existe déjà dans la base de données
    $checkEmail = "SELECT * FROM users WHERE email='$email'";
    $result = $conn->query($checkEmail);

    if ($result->num_rows > 0) {
        echo "Email already in use";
    } else {
        // Insertion des nouvelles données utilisateur dans la base de données
        $insertQuery = "INSERT INTO users (fName, lName, email, password, corpo) VALUES ('$firstName', '$lastName', '$email', '$password', '$corpo')";
        if ($conn->query($insertQuery) === TRUE) {
            header("Location: login.php");
            exit();
        } else {
            echo "Error: " . $conn->error;
        }
    }
}

// Fermeture de la connexion
$conn->close();

?>

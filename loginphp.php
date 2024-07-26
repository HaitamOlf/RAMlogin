<?php

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $account = isset($_POST['account']) ? $_POST['account'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $password = md5($password);

    $stmt = $conn->prepare("SELECT * FROM users WHERE (email=? OR id=?) AND password=?");
    $stmt->bind_param("sss", $account, $account, $password);

    $stmt->execute();

    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        echo "Successful login attempt !";
        exit();
    } else {
        echo "Invalid account number/email or password.";
    }

    $stmt->close();
}

$conn->close();

?>

<?php

// handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $kra_pin = htmlspecialchars($_POST['kra_pin']);

    // Save data to a file
    $data = "Name: $name, Email: $email, KRA PIN: $kra_pin" . PHP_EOL;
    file_put_contents('kra_data.txt', $data, FILE_APPEND);

    echo "Registration successful!";
} else {
    echo "Invalid request.";
}
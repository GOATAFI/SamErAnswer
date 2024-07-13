<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $age = $_POST['age'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'test');
    if ($conn->connect_error) {
        die('Connection Failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO human (firstName, lastName, age) VALUES (?, ?, ?)");
        $stmt->bind_param("ssi", $firstName, $lastName, $age);
        $stmt->execute();
        echo "Success";
        $stmt->close();
        $conn->close();
    }
    
}

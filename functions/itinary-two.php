<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../inc/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $location = $_POST['location'];
    $nic = $_POST['nic'];
    $email = $_POST['email'];
    $phone = $_POST['cnumber'];
    $itinary = $_POST['itinary'];

    // Insert data into the database
    $sql = "INSERT INTO itinary_two (name, location, nic, email, phone, itinary) VALUES ('$name', '$location', '$nic', '$email', '$phone', '$itinary')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            alert('Form submitted successfully');
            window.location.href = '../index.php';
            </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

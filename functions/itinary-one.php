<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../inc/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $name = trim($_POST['name']);
    $location = trim($_POST['location']);
    $nic = trim($_POST['nic']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);
    $package = trim($_POST['dayone']);

    $errors = [];

    // Basic validation
    if (empty($name) || strlen($name) > 30) {
        $errors[] = "Name is required and should be less than 30 characters.";
    }
    if (empty($location) || strlen($location) > 30) {
        $errors[] = "Location is required and should be less than 30 characters.";
    }
    if (empty($nic) || strlen($nic) > 30) {
        $errors[] = "NIC/Passport number is required and should be less than 30 characters.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 50) {
        $errors[] = "Valid email is required and should be less than 50 characters.";
    }
    if (empty($phone) || strlen($phone) > 15) {
        $errors[] = "Contact number is required and should be less than 15 characters.";
    }
    if (empty($package) || strlen($package) > 50) {
        $errors[] = "Package is required and should be less than 50 characters.";
    }

    if (empty($errors)) {
        // Check if the email already exists
        $stmt = $conn->prepare("SELECT COUNT(*) FROM itinary_one WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->bind_result($email_count);
        $stmt->fetch();
        $stmt->close();

        if ($email_count > 0) {
            echo "<script>
                alert('This email has already booked.');
                window.location.href = '../index.php';
            </script>";
        } else {
            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO itinary_one (name, location, nic, email, phone, package) VALUES (?, ?, ?, ?, ?, ?)");
            $stmt->bind_param("ssssss", $name, $location, $nic, $email, $phone, $package);

            if ($stmt->execute()) {
                echo "<script>
                    alert('Booked successfully');
                    window.location.href = '../index.php';
                </script>";
            } else {
                echo "Error: " . $stmt->error;
            }

            $stmt->close();
        }
    } else {
        foreach ($errors as $error) {
            echo "<p style='color: red;'>$error</p>";
        }
    }

    $conn->close();
}
?>

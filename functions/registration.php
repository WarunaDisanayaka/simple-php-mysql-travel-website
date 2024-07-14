<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../inc/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate inputs
    $name = trim($_POST['name']);
    $username = trim($_POST['username']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $errors = [];

    // Basic validation
    if (empty($name) || strlen($name) > 50) {
        $errors[] = "Name is required and should be less than 50 characters.";
    }
    if (empty($username) || strlen($username) > 50) {
        $errors[] = "Username is required and should be less than 50 characters.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) || strlen($email) > 50) {
        $errors[] = "Valid email is required and should be less than 50 characters.";
    }
    if (empty($password)) {
        $errors[] = "Password is required.";
    } else {
        $password = password_hash($password, PASSWORD_BCRYPT);
    }
    if (!empty($phone) && strlen($phone) > 15) {
        $errors[] = "Phone number should be less than 15 characters.";
    }

    if (empty($errors)) {
        // Check if the username or email already exists
        $stmt = $conn->prepare("SELECT COUNT(*) FROM users WHERE username = ? OR email = ?");
        $stmt->bind_param("ss", $username, $email);
        $stmt->execute();
        $stmt->bind_result($user_count);
        $stmt->fetch();
        $stmt->close();

        if ($user_count > 0) {
            echo "<script>
                alert('Username or email already exists.');
                window.location.href = '../index.php';
            </script>";
        } else {
            // Prepare and bind
            $stmt = $conn->prepare("INSERT INTO users (name, username, phone, email, password, role) VALUES (?, ?, ?, ?, ?, ?)");
            $default_role = 'user';
            $stmt->bind_param("ssssss", $name, $username, $phone, $email, $password, $default_role);

            if ($stmt->execute()) {
                echo "<script>
                    alert('Registration successful');
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

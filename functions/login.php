<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../inc/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    $errors = [];

    if (empty($username) || empty($password)) {
        $errors[] = "Username and password are required.";
    }

    if (empty($errors)) {
        // Prepare and bind
        $stmt = $conn->prepare("SELECT id, username, password, role FROM users WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $stmt->bind_result($id, $db_username, $db_password, $role);
        $stmt->fetch();
        $stmt->close();

        if ($db_username) {
            if (password_verify($password, $db_password)) {
                // Store user data in session
                $_SESSION['user_id'] = $id;
                $_SESSION['username'] = $db_username;
                $_SESSION['role'] = $role;

                // Redirect based on role
                if ($role === 'admin') {
                    header("Location: ../admin");
                } else {
                    header("Location: ../index.php");
                }
                exit();
            } else {
                $errors[] = "Invalid password.";
            }
        } else {
            $errors[] = "User not found.";
        }
    }

    if (!empty($errors)) {
        $_SESSION['errors'] = $errors;
        header("Location: ../login.php");
        exit();
    }

    $conn->close();
}
?>

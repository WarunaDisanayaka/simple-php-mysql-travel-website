<?php
include '../inc/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id']) && isset($_POST['status'])) {
    $id = $_POST['id'];
    $status = $_POST['status'];

    // Update query
    $sql = "UPDATE itinary_one SET status = '$status' WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        // Redirect back to previous page
        header("Location: {$_SERVER['HTTP_REFERER']}");
        exit();
    } else {
        echo "Error updating status: " . $conn->error;
    }
} else {
    echo "Invalid request";
}

$conn->close();
?>

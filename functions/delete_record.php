<?php
include '../inc/db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];

    // Delete query
    $sql = "DELETE FROM itinary_one WHERE id = $id";

    if ($conn->query($sql) === TRUE) {
        header("Location: {$_SERVER['HTTP_REFERER']}");
    } else {
        echo "Error deleting record: " . $conn->error;
    }
} else {
    echo "Invalid request";
}

$conn->close();
?>

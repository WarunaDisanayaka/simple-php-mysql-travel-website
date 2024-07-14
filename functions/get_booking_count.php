<?php
include '../inc/db_connection.php';

$sql1 = "SELECT COUNT(*) as count FROM itinary_one";
$result1 = $conn->query($sql1);
$row1 = $result1->fetch_assoc();
$itinary_one_count = $row1['count'];

$sql2 = "SELECT COUNT(*) as count FROM itinary_two";
$result2 = $conn->query($sql2);
$row2 = $result2->fetch_assoc();
$itinary_two_count = $row2['count'];

$sql3 = "SELECT COUNT(*) as count FROM users";
$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();
$user_count = $row3['count'];

$conn->close();

$data = [
    'itinary_one_count' => $itinary_one_count,
    'itinary_two_count' => $itinary_two_count,
    'user_count' => $user_count,
];

echo json_encode($data);
?>
